@extends('layout.form')
@section('judul')
    Buat Laporan Kehilangan
@endsection

@section('konten')
<form action="/kehilangan" method="POST" enctype="multipart/form-data">
  @csrf
    <div>
      <input type="text" placeholder="Judul Laporan" name="judul"/>
    </div>
    <div>
      <input type="text" placeholder="Nama Barang" name="barang"/>
    </div>
    <div>
      <input type="file" id="gambar" name="gambar">
    </div>
    <div>
      <input type="text" placeholder="Ciri-ciri barang" name="ciri"/>
    </div>
    <div>
      <input type="text" placeholder="Keterangan" class="input_message" name="keterangan"/>
    </div>
    <div class="d-flex justify-content-center">
      <button type="submit" class="btn_on-hover">
        Buat Laporan
      </button>
    </div>
  </form>
@endsection