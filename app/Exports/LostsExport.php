<?php

namespace App\Exports;

use App\Lost;
use Maatwebsite\Excel\Concerns\FromCollection;

class LostsExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Lost::all();
    }
}
