<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Lost;
use Facade\FlareClient\Stacktrace\File as StacktraceFile;
use Illuminate\Support\Facades\Auth;
use File;
use App\Exports\ReportsExport;
use Maatwebsite\Excel\Facades\Excel;

class KehilanganController extends Controller
{
    public function export()
    {
        return Excel::download(new ReportsExport, 'Reports.xlsx');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kehilangan.add');
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
                'barang' => 'required',
                'gambar' => 'required|mimes:jpg,png,jpeg|max:2048',
                'ciri' => 'required',
                'keterangan' => 'required'
            ],
            [
                'judul.required' => 'Judul tidak boleh kosong',
                'barang.required' => 'Barang tidak boleh kosong ',
                'gambar.required' => 'Plat Nomor tidak boleh kosong ',
                'ciri.required' => 'Ciri Korban tidak boleh kosong ',
                'keterangan.required' => 'Keterangan Korban tidak boleh kosong '
            ]
        );

        $id = Auth::id();
        $NamaGambar = time() . '.' . $request->gambar->extension();

        $request->gambar->move(public_path('image'), $NamaGambar);

        $kehilangan = new Lost;

        $kehilangan->judul = $request->judul;
        $kehilangan->barang = $request->barang;
        $kehilangan->gambar = $NamaGambar;
        $kehilangan->ciri = $request->ciri;
        $kehilangan->keterangan = $request->keterangan;
        $kehilangan->user_id = $id;

        $kehilangan->save();

        return redirect('/kehilangan');
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
        $kehilangan = Lost::where('user_id', $id)
            ->orderBy('id')
            ->take(10)
            ->get();
        return view('kehilangan.index', compact('kehilangan'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kehilangan = Lost::find($id);

        return view('kehilangan.detail', compact('kehilangan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kehilangan = Lost::find($id);

        return view('kehilangan.update', compact('kehilangan'));
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
                'barang' => 'required',
                'ciri' => 'required',
                'keterangan' => 'required'
            ],
            [
                'judul.required' => 'Judul tidak boleh kosong',
                'barang.required' => 'Barang tidak boleh kosong ',
                'ciri.required' => 'Ciri Korban tidak boleh kosong ',
                'keterangan.required' => 'Keterangan Korban tidak boleh kosong '
            ]
        );

        $kehilangan = Lost::find($id);

        if ($request->has('gambar')) {
            $path = "image/";
            File::delete($path . $kehilangan->gambar);

            $NamaGambar = time() . '.' . $request->gambar->extension();

            $request->gambar->move(public_path('image'), $NamaGambar);

            $kehilangan->gambar = $NamaGambar;
            $kehilangan->judul = $request->judul;
            $kehilangan->barang = $request->barang;
            $kehilangan->ciri = $request->ciri;
            $kehilangan->keterangan = $request->keterangan;
            $kehilangan->save();
        } else {
            $kehilangan->judul = $request->judul;
            $kehilangan->barang = $request->barang;
            $kehilangan->ciri = $request->ciri;
            $kehilangan->keterangan = $request->keterangan;
            $kehilangan->save();
        }


        return redirect('/kehilangan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Lost::destroy($id);

        return redirect('/kehilangan');
    }
}
