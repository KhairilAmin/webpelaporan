@extends('layout.form')
@section('judul')
    Edit Laporan Kehilangan
@endsection

@section('konten')
<form action="/kehilangan/{{$kehilangan->id}}" method="POST" enctype="multipart/form-data">
  @csrf
  @method('put')
  <div>
    <input type="text" placeholder="Judul Laporan" value="{{old('judul', $kehilangan->judul)}}" name="judul"/>
  </div>
    <div>
        <input type="text" placeholder=" Barang" value="{{old('barang', $kehilangan->barang)}}" name="barang"/>
    </div>
    <div>
      <input type="file" id="gambar" name="gambar">
    </div>
    <div>
      <input type="text" placeholder=" Ciri - ciri" value="{{old('ciri', $kehilangan->ciri)}}" class="input_message" name="ciri"/>
    </div>
    <div>
      <input type="text" placeholder="Keterangan" value="{{old('keterangan', $kehilangan->keterangan)}}" class="input_message" name="keterangan"/>
    </div>
    <div class="d-flex justify-content-center">
      <button type="submit" class="btn_on-hover">
        Buat Laporan
      </button>
    </div>
  </form>
@endsection