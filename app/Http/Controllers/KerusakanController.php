<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Report;
use App\Facility;
use Facade\FlareClient\Stacktrace\File as StacktraceFile;
use Illuminate\Support\Facades\Auth;
use File;
use App\Exports\LostsExport;
use Maatwebsite\Excel\Facades\Excel;


class KerusakanController extends Controller
{
    public function export()
    {
        return Excel::download(new LostsExport, 'Losts.xlsx');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $fasilitas = Facility::all();
        return view('fasilitas.add', compact('fasilitas'));
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
                'judul' => 'required',
                'fasilitas_id' => 'required',
                'tingkatkerusakan' => 'required',
                'gambar' => 'required',
                'deskripsi' => 'required'
            ],
            [
                'judul.required' => 'Judul tidak boleh kosong',
                'fasilitas_id.required' => 'fasilitas tidak boleh kosong',
                'tingkatkerusakan.required' => 'Tingkat Kerusakan tidak boleh kosong',
                'gambar.required' => 'Gambar tidak boleh kosong ',
                'deskripsi.required' => 'Deskripsi tidak boleh kosong '
            ]
        );

        $id = Auth::id();
        $NamaGambar = time() . '.' . $request->gambar->extension();

        $request->gambar->move(public_path('image'), $NamaGambar);

        $kerusakan = new Report;

        $kerusakan->judul = $request->judul;
        $kerusakan->fasilitas_id = $request->fasilitas_id;
        $kerusakan->tingkatkerusakan = $request->tingkatkerusakan;
        $kerusakan->gambar = $NamaGambar;
        $kerusakan->deskripsi = $request->deskripsi;
        $kerusakan->user_id = $id;

        $kerusakan->save();

        return redirect('/kerusakan');
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
        $kerusakan = Report::where('user_id', $id)
            ->orderBy('id')
            ->take(10)
            ->get();
        // $kerusakan = Report::find($id);
        $fasilitas = Facility::all();

        return view('fasilitas.index', compact('kerusakan', 'fasilitas'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kerusakan = Report::find($id);
        $fasilitas = Facility::where('id', $kerusakan->id)->first();

        return view('fasilitas.detail', compact('kerusakan', 'fasilitas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kerusakan = Report::find($id);
        $fasilitas = Facility::all();

        return view('fasilitas.update', compact('kerusakan', 'fasilitas'));
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
                'judul' => 'required',
                'fasilitas_id' => 'required',
                'tingkatkerusakan' => 'required',
                'deskripsi' => 'required'
            ],
            [
                'judul.required' => 'Judul tidak boleh kosong',
                'fasilitas_id.required' => 'fasilitas tidak boleh kosong',
                'tingkatkerusakan.required' => 'Tingkat Kerusakan tidak boleh kosong',
                'deskripsi.required' => 'Deskripsi tidak boleh kosong '
            ]
        );

        $kerusakan = Report::find($id);

        if ($request->has('gambar')) {
            $path = "image/";
            File::delete($path . $kerusakan->gambar);

            $NamaGambar = time() . '.' . $request->gambar->extension();

            $request->gambar->move(public_path('image'), $NamaGambar);

            $kerusakan->gambar = $NamaGambar;
            $kerusakan->judul = $request->judul;
            $kerusakan->fasilitas_id = $request->fasilitas_id;
            $kerusakan->tingkatkerusakan = $request->tingkatkerusakan;
            $kerusakan->deskripsi = $request->deskripsi;
            $kerusakan->save();
        } else {
            $kerusakan->judul = $request->judul;
            $kerusakan->fasilitas_id = $request->fasilitas_id;
            $kerusakan->tingkatkerusakan = $request->tingkatkerusakan;
            $kerusakan->deskripsi = $request->deskripsi;
            $kerusakan->save();
        }



        return redirect('/kerusakan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Report::destroy($id);

        return redirect('/kerusakan');
    }
}
