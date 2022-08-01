<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Accident;
use Illuminate\Support\Facades\Auth;
use App\Exports\AccidentsExport;
use Maatwebsite\Excel\Facades\Excel;



class KecelakaanController extends Controller
{

    public function export()
    {
        return Excel::download(new AccidentsExport, 'Accidents.xlsx');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kecelakaan.add');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'tempat' => 'required',
                'waktu' => 'required',
                'platnomor' => 'required',
                'keadaankorban' => 'required',

            ],
            [
                'tempat.required' => 'Tempat tidak boleh kosong',
                'waktu.required' => 'Waktu tidak boleh kosong ',
                'platnomor.required' => 'Plat Nomor tidak boleh kosong ',
                'keadaankorban.required' => 'Keadaan Korban tidak boleh kosong ',

            ]
        );

        $id = Auth::id();
        $kecelakaan = new Accident();

        $kecelakaan->tempat = $request->tempat;
        $kecelakaan->waktu = $request->waktu;
        $kecelakaan->platnomor = $request->platnomor;
        $kecelakaan->keadaankorban = $request->keadaankorban;
        $kecelakaan->user_id = $id;


        $kecelakaan->save();


        return redirect('/kecelakaan');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = Auth::id();
        $kecelakaan = Accident::where('user_id', $id)
            ->orderBy('id')
            ->take(10)
            ->get();
        return view('kecelakaan.index', compact('kecelakaan'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kecelakaan = Accident::find($id);

        return view('kecelakaan.detail', compact('kecelakaan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kecelakaan = Accident::find($id);

        return view('kecelakaan.update', compact('kecelakaan'));
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
        $request->validate(
            [
                'tempat' => 'required',
                'waktu' => 'required',
                'platnomor' => 'required',
                'keadaankorban' => 'required',

            ],
            [
                'tempat.required' => 'Tempat tidak boleh kosong',
                'waktu.required' => 'Waktu tidak boleh kosong ',
                'platnomor.required' => 'Plat Nomor tidak boleh kosong ',
                'keadaankorban.required' => 'Keadaan Korban tidak boleh kosong ',

            ]
        );

        $kecelakaan = Accident::find($id); {
            $kecelakaan->tempat = $request->tempat;
            $kecelakaan->waktu = $request->waktu;
            $kecelakaan->platnomor = $request->platnomor;
            $kecelakaan->save();
        }

        return redirect('/kecelakaan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Accident::destroy($id);

        return redirect('/kecelakaan');
    }
}
