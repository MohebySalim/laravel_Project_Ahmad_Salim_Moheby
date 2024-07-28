<?php

use App\Models\AjscCase;

if (!function_exists('case_id_filter_by_year')) {
    function case_id_filter_by_year($year, $province)
    {
        $case_ids = [];
        if ($year !== "" && $province !== "") {
            $case_ids = AjscCase::whereYear('date', $year)->whereHas('province', function ($q) use ($province) {
                $q->where('name_en', $province);
            })->pluck('id')->toArray();
        } else if ($year !== "") {
            $case_ids = AjscCase::whereYear('date', $year)->pluck('id')->toArray();
        } else {
            $case_ids = AjscCase::whereHas('province', function ($q) use ($province) {
                $q->where('name_en', $province);
            })->pluck('id')->toArray();
        }
        return $case_ids;
    }
}
