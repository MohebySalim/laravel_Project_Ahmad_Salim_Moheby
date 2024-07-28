<?php

namespace App\Http\Controllers;

use App\Exports\DatamapExport;
use App\Models\District;
use App\Models\Violence;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ViolenceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $zone = Violence::query();
        if ($request->search){
            $zone->where('code', $request->search);
        }
        $zones = $zone->orderBy('id', 'desc')->paginate(10);

        return view('violence.index', compact('zones'));
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
            'code' => 'required|unique:violences,code',
            'name_dr' => 'required|unique:violences,name_dr',
            'name_ps' => 'required',
            'name_en' => 'required',
        ]);
        $data = new Violence();
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
            'code' => 'required|unique:violences,code,'.$id,
            'name_dr' => 'required|unique:violences,name_dr,'.$id,
            'name_ps' => 'required',
            'name_en' => 'required',
        ]);
        $data = Violence::find($id);
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
        $data = Violence::find($id);
        $data->delete();
        return redirect()->back()->with('message', 'Recored Deleted Successfully');
    }
    // export
    public function violenceExport(Request $request)
    {

        $condition['type'] = 'violence';

        $condition['data'] = Violence::orderBy('id', 'desc')->get();

        $currentDate = now()->format('Y-m-d_His');
        $excelFileName = "Export Violence Report {$currentDate}.xlsx";

        return Excel::download(new DatamapExport($condition), $excelFileName);
    }
}
