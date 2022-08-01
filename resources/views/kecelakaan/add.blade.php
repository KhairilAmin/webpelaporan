@extends('layout.form')
@section('judul')
    Buat Laporan Kecelakaan
@endsection

@section('konten')
<form action="/kecelakaan" method="POST">
  @csrf
    <div>
      <input type="text" placeholder="Tempat Kejadian" name="tempat"/>
    </div>
    <div>
      <input type="datetime-local" id="waktu" name="waktu">
    </div>
    <div>
      <input type="text" placeholder="Plat Nomor" name="platnomor"/>
    </div>
    <div>
      <input type="text" placeholder="Keterangan dan Keadaan Korban" class="input_message" name="keadaankorban"/>
    </div>
    <div class="d-flex justify-content-center">
      <button type="submit" class="btn_on-hover">
        Buat Laporan
      </button>
    </div>
  </form>
@endsection