<?php

namespace App\Http\Controllers;

use App\Exports\DatamapExport;
use App\Models\Province;
use App\Models\Zone;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ZoneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $zone = Zone::query();
        if ($request->search){
            $zone->where('code', $request->search);
        }
        $zones = $zone->orderBy('id', 'desc')->paginate(10);

        return view('zone.index', compact('zones'));
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
            'code' => 'required|unique:zones,code',
            'zone_dr' => 'required|unique:zones,zone_dr',
            'zone_ps' => 'required',
            'zone_en' => 'required',
        ]);
        $data = new Zone();
        $data->code     = $request->code;
        $data->zone_dr  = $request->zone_dr;
        $data->zone_ps  = $request->zone_ps;
        $data->zone_en  = $request->zone_en;
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
            'code' => 'required|unique:zones,code,'. $id,
            'zone_dr' => 'required|unique:zones,zone_dr,'.$id,
            'zone_ps' => 'required',
            'zone_en' => 'required',
        ]);
        $data = Zone::find($id);
        $data->code     = $request->code;
        $data->zone_dr  = $request->zone_dr;
        $data->zone_ps  = $request->zone_ps;
        $data->zone_en  = $request->zone_en;
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
        $data = Zone::find($id);
        $data->delete();
        return redirect()->back()->with('message', 'Recored Deleted Successfully');
    }
    // related provinces
    public function RelatedProvinces(Request $request)
    {
        $provinces = Province::where('zone_id', $request->zoneid)->get();
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

    // exports
    public function zoneExport(Request $request)
    {
        $condition['type'] = 'zone';

        $condition['data'] = Zone::orderBy('id', 'desc')->get();

        $currentDate = now()->format('Y-m-d_His');
        $excelFileName = "Export Zone Report {$currentDate}.xlsx";

        return Excel::download(new DatamapExport($condition), $excelFileName);
    }
}
