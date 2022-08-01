<?php

namespace App\Exports;

use App\Accident;
use Maatwebsite\Excel\Concerns\FromCollection;

class AccidentsExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Accident::all();
    }
}
