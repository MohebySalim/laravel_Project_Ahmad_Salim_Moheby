<?php

namespace App\Http\Controllers;

use App\Exports\DatamapExport;
use App\Models\AjscCase;
use App\Models\CaseSummary;
use App\Models\District;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;

class CaseSummaryController extends Controller
{
    //
    public function getCaseSummary(Request $request)
    {
        $item = CaseSummary::with('ajscCase');
        if ($request->search){
            $item->whereHas('ajscCase', function ($q) use ($request){
                $q->where('name_dr', $request->search);
            });
        }
        $results = $item->orderBy('id', 'desc')->paginate(10);
//        $results = $item->get();
//        dd($results);

        $ajscCases = AjscCase::orderBy('id', 'desc')->get();


        return view('summary.index', compact('results', 'ajscCases'));
    }
    public function addCaseSummary(Request $request)
    {
        $this->validate($request, [
            'case_id' => 'required',
            'pursuit' => 'required',
            'shortsummary' => 'required',
            'summary_file' => 'nullable',
        ]);
//        return $request->all();
        // for file upload
        if($request->hasfile('summary_file')){
            $image = $request->file('summary_file');
            $image_ext = $image->getClientOriginalExtension();
            $new_image_name = rand(123456789, 999999999).".".$image_ext;
            $destination_path = public_path('images/files/summary_file');
            $image->move($destination_path, $new_image_name);
        }

        DB::beginTransaction();
        try {
            $data = new CaseSummary();
            $data->case_id  = $request->case_id;
            $data->pursuit  = $request->pursuit;
            $data->summery  = $request->shortsummary;
            if($request->hasfile('summary_file')){
                $data->summary_file  = $new_image_name;
            }
            $data->save();
            if ($request->status == 1){
                $cas = AjscCase::find($request->case_id);
                $cas->status = 1;
                $cas->save();
            }
            DB::commit();
            return redirect()->back()->with('message', 'Summary added successfully');
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->with('message', 'Summary added successfully');
        }
    }

    public function summaryExport(Request $request)
    {

        $condition['type'] = 'summary';

        $condition['data'] = CaseSummary::with('ajscCase')->orderBy('id', 'desc')->get();

        $currentDate = now()->format('Y-m-d_His');
        $excelFileName = "Export Shor Summary Report {$currentDate}.xlsx";

        return Excel::download(new DatamapExport($condition), $excelFileName);
    }


    public function UpdateCaseSummary(Request $request, $id)
    {
        $this->validate($request, [
            'case_id' => 'required',
            'pursuit' => 'required',
            'shortsummary' => 'required',
            'summary_file' => 'nullable',
        ]);
//        return $request->all();
        // for file upload
        if($request->hasfile('summary_file')){
            $image = $request->file('summary_file');
            $image_ext = $image->getClientOriginalExtension();
            $new_image_name = rand(123456789, 999999999).".".$image_ext;
            $destination_path = public_path('images/files/summary_file');
            $image->move($destination_path, $new_image_name);
        }

        DB::beginTransaction();
        try {
            $data = CaseSummary::find($id);
            $data->case_id  = $request->case_id;
            $data->pursuit  = $request->pursuit;
            $data->summery  = $request->shortsummary;
            if($request->hasfile('summary_file')){
                $data->summary_file  = $new_image_name;
            }
            $data->save();
            if ($request->status == 1){
                $cas = AjscCase::find($request->case_id);
                $cas->status = 1;
                $cas->save();
            }
            DB::commit();
            return 'fuck';
            return redirect()->back()->with('message', 'Summary added successfully');
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->with('message', 'Summary added successfully');
        }
    }

}
