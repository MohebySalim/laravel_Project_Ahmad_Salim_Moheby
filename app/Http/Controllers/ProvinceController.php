<?php

namespace App\Http\Controllers;

use App\Exports\DatamapExport;
use App\Models\District;
use App\Models\Province;
use App\Models\Zone;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ProvinceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $item = Province::with('zone');
        if ($request->search){
            $item->where('code', $request->search);
        }
        $results = $item->orderBy('id', 'desc')->paginate(10);
        $zones = Zone::all();

        return view('province.index', compact('results', 'zones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'zone_id' => 'required',
            'code' => 'required|unique:provinces,code',
            'name_dr' => 'required|unique:provinces,name_dr',
            'name_ps' => 'required',
            'name_en' => 'required',
        ]);
        $data = new Province();
        $data->zone_id  = $request->zone_id;
        $data->code     = $request->code;
        $data->name_dr  = $request->name_dr;
        $data->name_ps  = $request->name_ps;
        $data->name_en  = $request->name_en;
        $data->save();

        return redirect()->back()->with('message', 'Recored Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'zone_id' => 'required',
            'code' => 'required|unique:provinces,code,'.$id,
            'name_dr' => 'required|unique:provinces,name_dr,'.$id,
            'name_ps' => 'required',
            'name_en' => 'required',
        ]);
        $data = Province::find($id);
        $data->zone_id  = $request->zone_id;
        $data->code     = $request->code;
        $data->name_dr  = $request->name_dr;
        $data->name_ps  = $request->name_ps;
        $data->name_en  = $request->name_en;
        $data->save();

        return redirect()->back()->with('message', 'Recored Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Province::find($id);
        $data->delete();
        return redirect()->back()->with('message', 'Recored Deleted Successfully');
    }

    // related districts
    public function RelatedDistrict(Request $request)
    {
        $provinces = District::where('province_id', $request->proid)->get();
//                return $provinces;
        $options[] = '';
        $options = '<option selected disabled value=""> ... </option>';
        foreach ($provinces as $province) {
//            $options .= "<option value='" . $province->id . "'>" . $province->code . " / " . $province->name_dr . "</option>";
            $options .= "<option value='" . $province->id . "'>" . $province->code . " / " .
                ((app()->getLocale() === 'dr') ? $province->name_dr :
                    ((app()->getLocale() === 'ps') ? $province->name_ps :
                        ((app()->getLocale() === 'en') ? $province->name_en : ''))) . "</option>";

        }
        return $options;
    }
    // export
    public function provinceExport(Request $request)
    {
        $condition['type'] = 'province';

        $condition['data'] = Province::orderBy('id', 'desc')->get();

        $currentDate = now()->format('Y-m-d_His');
        $excelFileName = "Export Province Report {$currentDate}.xlsx";

        return Excel::download(new DatamapExport($condition), $excelFileName);
    }
}
