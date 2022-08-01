<?php

namespace App\Http\Controllers;
use App\Accident;
use App\Report;
use App\Lost;
use Illuminate\Http\Request;

class SeeallController extends Controller
{
    public function seekecelakaan()
    {
        $kecelakaan = Accident::all();

        return view('seekecelakaan', compact('kecelakaan'));
    }
    public function seekehilangan()
    {
        $lost = Lost::all();

        return view('seekehilangan', compact('lost'));
    }
    public function seekerusakan()
    {
        $kerusakan = Report::all();

        return view('seekerusakan', compact('kerusakan'));
    }
}
