<?php

namespace App\Http\Controllers;

use App\Models\AjscCase;
use App\Models\Perpetrator;
use App\Models\PerpetratorCase;
use App\Models\Violence;
use Illuminate\Http\Request;
use DB;

class AjscController extends Controller
{
    //
    // app/Http/Controllers/LocaleController.php

    public function changeLocale($locale)
    {
        // Validate if the requested locale is supported
        if (in_array($locale, ['dr', 'ps', 'en'])) {
            session(['locale' => $locale]);
        }

        return redirect()->back();
    }

    public function ajsc(Request $request)
    {

        // for counts
        $currentYear = $request->year ?? "";
        $province = $request->province ?? "";

        $year = $currentYear;

        $searchTerm = $request->search;
        $locale = app()->getLocale();
        $query = AjscCase::with('zone')
            ->with('province')
            ->with('perpetrators')
            ->with('violences')
            ->with('occupations');
        if ($year !== "") {
            $query->whereYear('date', $year);
        }

        if ($province !== "") {
            $query->whereHas('province', function ($q) use ($province) {
                $q->where('name_en', $province);
            });
        }

        $results = $query->orderBy('id', 'desc')->get();


        $violences = Violence::withCount(['ajscCases AS caseCount' => function ($query) use ($currentYear, $province) {
            if ($currentYear !== "") {
                $query->whereYear('date', $currentYear);
            }
            if ($province !== "") {
                $query->whereHas('province', function ($q) use ($province) {
                    $q->where('name_en', $province);
                });
            }
        }])->get();

        // $perpetrators = Perpetrator::withCount(['ajscCases AS caseCount' => function ($query) use ($currentYear) {
        //     if ($currentYear !== "") {
        //         $query->whereYear('date', $currentYear);
        //     }
        // }])->get();

        $perpetrators = Perpetrator::withCount(['ajscCases AS caseCount'])->get();

        return view('datamap.main', compact('results', 'violences', 'perpetrators', 'year', 'province'));
    }

    public function case_report_page($id)
    {
        $data['data'] = AjscCase::find($id);
        return view('datamap.case_report', $data);
    }

    // getMethology
    public function getMethology()
    {
        return view('datamap.getMethology');
    }
    public function getProvince(Request $request)
    {
        $searchTerm = $request->search;
        $locale = app()->getLocale();
        $query = AjscCase::with('zone')
            ->with('province')
            ->with('perpetrators')
            ->with('violences')
            ->with('occupations')
            ->whereHas('province', function ($q) use ($request) {
                $q->where('name_en', $request->province);
            });
        $results = $query->orderBy('id', 'desc')->get();

        // for counts
        $currentYear = $request->year ?? "";

        $violences = Violence::withCount(['ajscCases AS caseCount' => function ($query) use ($currentYear) {
            if ($currentYear !== "") {
                $query->whereYear('date', $currentYear);
            }
        }])->get();

        $perpetrators = Perpetrator::withCount(['ajscCases AS caseCount' => function ($query) use ($currentYear) {
            if ($currentYear !== "") {
                $query->whereYear('date', $currentYear);
            }
        }])->get();

        return view('datamap.getProvince', compact('results', 'violences', 'perpetrators'));
    }

    // record for table
    public function getAjscRecords(Request $request)
    {
        return $request->all();
        $locale = app()->getLocale();
        $page = $request->input('page');
        $query = AjscCase::with('zone')
            ->with('province')
            ->with('perpetrators')
            ->with('violences')
            ->with('occupations');

        if ($request->has('type')) {
            $searchTerm = $request->search;

            switch ($request->input('type')) {
                case 1:
                    $query->whereHas('perpetrators', function ($q) use ($searchTerm, $locale) {
                        $q->where("name_$locale", $searchTerm);
                    });
                    break;
                case 2:
                    $query->whereHas('violences', function ($q) use ($searchTerm, $locale) {
                        $q->where("name_$locale", $searchTerm);
                    });
                    break;
                case 3:
                    $query->whereHas('occupations', function ($q) use ($searchTerm, $locale) {
                        $q->where("name_$locale", $searchTerm);
                    });
                    break;
                case 4:
                    $query->whereHas('province', function ($q) use ($searchTerm, $locale) {
                        // Use optional() to handle null values
                        $q->where("name_$locale", optional($q->getModel())->getTable() . '.' . $searchTerm);
                    });
                    break;
                case 5:
                    $query->whereHas('zone', function ($q) use ($searchTerm, $locale) {
                        // Use optional() to handle null values
                        $q->where("zone_$locale", optional($q->getModel())->getTable() . '.' . $searchTerm);
                    });
                    break;
            }
        }

        $data['result'] = $query->paginate(10, ['*'], 'page', $page);

        $currentYear = date('Y');
        $data['violences'] = Violence::withCount(['ajscCases AS caseCount' => function ($query) use ($currentYear) {
            $query->whereYear('date', $currentYear);
        }])->get();
        $data['perpetrators'] = Perpetrator::withCount(['ajscCases AS caseCount' => function ($query) use ($currentYear) {
            $query->whereYear('date', $currentYear);
        }])->get();

        $data['year'] = $currentYear;

        return view('datamap.main', $data);
    }
}
