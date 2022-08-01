@extends('layout.form')
@section('judul')
    Buat Laporan Kerusakan Fasilitas
@endsection

@section('konten')
<form action="/kerusakan" method="POST" enctype="multipart/form-data">
  @csrf
  <div>
    <input type="text" placeholder="Judul Laporan" name="judul"/>
  </div>
    <div>
      <input type="text" placeholder="Tingkat Kerusakan" name="tingkatkerusakan"/>
    </div>
    <div>
        <select id="fasilitas_id" name="fasilitas_id">
            <option value="">--->Pilih Salah Satu<---</option>
            @forelse ($fasilitas as $item)
                <option value="{{$item->id}}">{{$item->nama}}</option>
            @empty
                <option value="">--->Belum ada fasilitas<---</option>
            @endforelse
        </select>
    </div>
    <div>
      <input type="file" id="gambar" name="gambar">
    </div>
    <div>
      <input type="text" placeholder="Deskripsi Kerusakan" class="input_message" name="deskripsi"/>
    </div>
    <div class="d-flex justify-content-center">
      <button type="submit" class="btn_on-hover">
        Buat Laporan
      </button>
    </div>
  </form>
@endsection