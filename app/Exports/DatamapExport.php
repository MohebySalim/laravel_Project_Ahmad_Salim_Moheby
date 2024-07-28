<?php

namespace App\Exports;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

//class DatamapExport implements FromView, ShouldAutoSize, WithStyles
class DatamapExport implements FromView, ShouldAutoSize, WithStyles
{
    protected $condition;

    public function __construct($condition)
    {
        $this->condition = $condition;
    }
    public function styles(Worksheet $sheet)
    {
        return [
            // Style the first row as bold text.
            1    => ['font' => ['bold' => true]],

            // Styling a specific cell by coordinate.
            // 'B2' => ['font' => ['italic' => true]],

            // Styling an entire column.
            // 'C'  => ['font' => ['size' => 16]],
        ];
    }

    public function view(): View
    {

        if ($this->condition['type'] == 'zone'){
            return view('zone.zoneExport', ['zones'=> $this->condition['data']]);
        }

        if ($this->condition['type'] == 'province'){
            return view('province.provinceExport', ['results'=> $this->condition['data']]);
        }

        if ($this->condition['type'] == 'district'){
            return view('district.districtExport', ['results'=> $this->condition['data']]);
        }
        if ($this->condition['type'] == 'occupation'){
            return view('occupation.occupationExport', ['results'=> $this->condition['data']]);
        }
        if ($this->condition['type'] == 'violence'){
            return view('violence.violenceExport', ['zones'=> $this->condition['data']]);
        }
        if ($this->condition['type'] == 'violence'){
            return view('violence.violenceExport', ['zones'=> $this->condition['data']]);
        }
        if ($this->condition['type'] == 'perpetrator'){
            return view('perpetrator.perpetratorExport', ['zones'=> $this->condition['data']]);
        }
        if ($this->condition['type'] == 'media'){
            return view('media.meidaExport', ['zones'=> $this->condition['data']]);
        }
        if ($this->condition['type'] == 'complaint'){
            return view('complaint.complaintExport', ['results'=> $this->condition['data']]);
        }

        if ($this->condition['type'] == 'ajscCase'){
            return view('case.ajscCaseExport', ['results'=> $this->condition['data']]);
        }

        if ($this->condition['type'] == 'summary'){
            return view('summary.summaryExport', ['results'=> $this->condition['data']]);
        }

    }
}
