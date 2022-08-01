@extends('layout.form')
@section('judul')
    Edit Laporan Kerusakan Fasilitas
@endsection

@section('konten')
<form action="/kecelakaan/{{$kecelakaan->id}}" method="POST" enctype="multipart/form-data">
  @csrf
  @method('put')
  <div>
    <input type="text" placeholder="Tempat Kecelakaan" value="{{old('tempat', $kecelakaan->tempat)}}" name="tempat"/>
  </div>
    <div>
        <input type="text" placeholder=" Waktu" value="{{old('waktu', $kecelakaan->waktu)}}" name="waktu"/>
    </div>
    <div>
      <input type="text" placeholder=" Plat Nomor" value="{{old('platnomor', $kecelakaan->platnomor)}}" name="platnomor"/>
  </div>
  <div>
    <input type="text" placeholder=" Keadaan Korban" value="{{old('keadaankorban', $kecelakaan->keadaankorban)}}" name="keadaankorban"/>
  </div>
    <div class="d-flex justify-content-center">
      <button type="submit" class="btn_on-hover">
        Buat Laporan
      </button>
    </div>
  </form>
@endsection