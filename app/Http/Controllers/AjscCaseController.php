<?php

namespace App\Http\Controllers;

use App\Exports\DatamapExport;
use App\Models\AjscCase;
use App\Models\CaseHistory;
use App\Models\Complaint;
use App\Models\District;
use App\Models\Media;
use App\Models\Occupation;
use App\Models\Perpetrator;
use App\Models\Province;
use App\Models\Violence;
use App\Models\Zone;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class AjscCaseController extends Controller
{
    //
    public function getCaseList(Request $request)
    {
        $res = AjscCase::with('zone')
            ->with('province')
            ->with('province')
            ->with('violences')
            ->with('perpetrators')
            ->with('occupations')
            ->with('medias')
            ->with('complaints');
        if ($request->search){
            $res->where('name_dr', 'like', '%' . $request->search . '%');
        }
        $data['results'] = $res->orderBy('id', 'desc')->paginate(10);
        $data['zones'] = Zone::all();
        $data['provinces'] = Province::all();
        $data['districts'] = District::all();
        $data['medias'] = Media::all();
        $data['occupations'] = Occupation::all();
        $data['perpetrators'] = Perpetrator::all();
        $data['complaints'] = Complaint::all();
        $data['violences'] = Violence::all();
        $data['previous'] = AjscCase::all();
//        return view('case.getCaseList', compact('results', 'zones'));
        return view('case.getCaseList', $data);
    }
    // store
    public function storeAjscCase(Request $request)
    {
        $this->validate($request, [
            'zone_id' => 'required',
            'province_id' => 'required',
            'district_id' => 'required',

            'media_id' => 'required',
            'occupation_id' => 'required',
            'perpetrator_id' => 'required',
            'violence_id' => 'required',
            'complaint_id' => 'required',

            'name_dr' => 'required',
            'name_ps' => 'required',
            'name_en' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'date' => 'required',
            'case_file' => 'required',
        ]);
//        return $request->all();

        // for file upload
        if($request->hasfile('case_file')){
            $image = $request->file('case_file');
            $image_ext = $image->getClientOriginalExtension();
            $new_image_name = rand(123456789, 999999999).".".$image_ext;
            $destination_path = public_path('images/files/case_file');
            $image->move($destination_path, $new_image_name);
        }
//        else {
//            $new_image_name = $request->oldinvoice_file;
//        }

        $data = new AjscCase;
        $data->zone_id      = $request->zone_id;
        $data->province_id  = $request->province_id;
        $data->district_id  = $request->district_id;
        $data->name_dr      = $request->name_dr;
        $data->name_ps      = $request->name_ps;
        $data->name_en      = $request->name_en;
        $data->phone        = $request->phone;
        $data->email        = $request->email;
        $data->date         = $request->date;
        $data->description  = $request->description;

        if($request->hasfile('case_file')){
            $data->case_file    = $new_image_name;
        }
        $data->save();
        $dataId = $data->id;

        if ($request->has('previous_id')){
            $item = new CaseHistory();
            $item->case_id      = $dataId;
            $item->previous_id  = $request->previous_id;
            $item->date         = $request->date;
            $item->save();
        }

        $data->violences()->sync($request->violence_id);
        $data->perpetrators()->sync($request->perpetrator_id);
        $data->occupations()->sync($request->occupation_id);
        $data->medias()->sync($request->media_id);
        $data->complaints()->sync($request->complaint_id);

        return redirect()->route('getCaseList')->with('message', 'Record added successfully');
    }
    // update
    public function updateAjscCase(Request $request, $id)
    {
        $this->validate($request, [
            'zone_id' => 'required',
            'province_id' => 'required',
            'district_id' => 'required',

            'media_id' => 'required',
            'occupation_id' => 'required',
            'perpetrator_id' => 'required',
            'violence_id' => 'required',
            'complaint_id' => 'required',

            'name_dr' => 'required',
            'name_ps' => 'required',
            'name_en' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'date' => 'required',
//            'case_file' => 'required',
        ]);
//        return $request->all();

        // for file upload
        if ($request->hasfile('case_file')) {
            // Delete the old file if it exists
            if ($request->oldcase_file) {
                unlink(public_path('images/files/case_file/') . $request->oldcase_file);
            }

            $image = $request->file('case_file');
            $image_ext = $image->getClientOriginalExtension();

            // Generate a unique name with date and time
            $currentDateTime = date('YmdHis');
            $new_image_name = $currentDateTime . '_' . rand(123456789, 999999999) . '.' . $image_ext;

            $destination_path = public_path('images/files/case_file');
            $image->move($destination_path, $new_image_name);
        } else {
            $new_image_name = $request->oldcase_file;
        }


        $data = AjscCase::find($id);
        $data->zone_id      = $request->zone_id;
        $data->province_id  = $request->province_id;
        $data->district_id  = $request->district_id;
        $data->name_dr      = $request->name_dr;
        $data->name_ps      = $request->name_ps;
        $data->name_en      = $request->name_en;
        $data->phone        = $request->phone;
        $data->email        = $request->email;
        $data->date         = $request->date;
        $data->description  = $request->description;

        $data->case_file    = $new_image_name;

        $data->save();

        $data->violences()->sync($request->violence_id);
        $data->perpetrators()->sync($request->perpetrator_id);
        $data->occupations()->sync($request->occupation_id);
        $data->medias()->sync($request->media_id);
        $data->complaints()->sync($request->complaint_id);

        return redirect()->route('getCaseList')->with('message', 'Record updated successfully');
    }
    // show details
    public function getCaseDetails($id)
    {
        $data = AjscCase::with('zone')
                ->with('province')
                ->with('province')
                ->with('violences')
                ->with('perpetrators')
                ->with('occupations')
                ->with('medias')
                ->with('complaints')
                ->with('casesummary')
                ->with('relatedCase')
                ->find($id);
//        dd($data->relatedCase);

        return view('case.getCaseDetails', compact('data'));
    }
    // delete
    public function getDestroyCase($id)
    {
        $data = AjscCase::find($id);
        $data->delete();
        return redirect()->back()->with('message', 'Recored Deleted Successfully');
    }
    // reports
    public function getAjscCaseReports(Request $request)
    {
//        return $request->all();
        $res = AjscCase::with('zone')
            ->with('province')
            ->with('district')
            ->with('violences')
            ->with('perpetrators')
            ->with('occupations')
            ->with('medias')
            ->with('complaints');
        if ($request->input('zone_id')){
            $zoneIds = $request->input('zone_id');
            $res->whereHas('zone', function ($q) use ($zoneIds){
                $q->whereIn('id', $zoneIds);
            });
        }
        if ($request->input('province_id')){
            $provinceIds = $request->input('province_id');
            $res->whereHas('province', function ($q) use ($provinceIds){
                $q->whereIn('id', $provinceIds);
            });
        }
        if ($request->input('district_id')){
            $districtIds = $request->input('district_id');
            $res->whereHas('district', function ($q) use ($districtIds){
                $q->whereIn('id', $districtIds);
            });
        }
        if ($request->input('media_id')){
            $mediaIds = $request->input('media_id');
            $res->whereHas('medias', function ($q) use ($mediaIds){
                $q->whereIn('media_id', $mediaIds);
            });
        }
        if ($request->input('occupation_id')){
            $occupationIds = $request->input('occupation_id');
            $res->whereHas('occupations', function ($q) use ($occupationIds){
                $q->whereIn('occupation_id', $occupationIds);
            });
        }
        if ($request->input('perpetrator_id')){
            $perpetratorIds = $request->input('perpetrator_id');
            $res->whereHas('perpetrators', function ($q) use ($perpetratorIds){
                $q->whereIn('perpetrator_id', $perpetratorIds);
            });
        }
        if ($request->input('complaint_id')){
            $complaintIds = $request->input('complaint_id');
            $res->whereHas('complaints', function ($q) use ($complaintIds){
                $q->whereIn('complaint_id', $complaintIds);
            });
        }
        if ($request->input('violence_id')){
            $violenceIds = $request->input('violence_id');
            $res->whereHas('violences', function ($q) use ($violenceIds){
                $q->whereIn('violence_id', $violenceIds);
            });
        }
        if ($request->input('from_date') && $request->input('to_date')) {
            $fromDate = $request->input('from_date');
            $toDate = $request->input('to_date');
            $res->whereBetween('created_at', [$fromDate, $toDate]);
        }

        $data['results'] = $res->paginate(10)->withQueryString();
//        return $request->all();
        $data['zones'] = Zone::all();
        $data['provinces'] = Province::all();
        $data['districts'] = District::all();
        $data['medias'] = Media::all();
        $data['occupations'] = Occupation::all();
        $data['perpetrators'] = Perpetrator::all();
        $data['complaints'] = Complaint::all();
        $data['violences'] = Violence::all();

        if ($request->has('export')){
            $condition['type'] = 'ajscCase';

            $condition['data'] = $res->get();

            $currentDate = now()->format('Y-m-d_His');
            $excelFileName = "Export Cases Report {$currentDate}.xlsx";

            return Excel::download(new DatamapExport($condition), $excelFileName);
        }

//        dd($data['results']);

        return view('case.getAjscCaseReports', $data);
    }


}
