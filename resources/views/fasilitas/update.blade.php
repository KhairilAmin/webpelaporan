@extends('layout.form')
@section('judul')
    Edit Laporan Kerusakan Fasilitas
@endsection

@section('konten')
<form action="/kerusakan/{{$kerusakan->id}}" method="POST" enctype="multipart/form-data">
  @csrf
  @method('put')
  <div>
    <input type="text" placeholder="Judul Laporan" value="{{old('judul', $kerusakan->judul)}}" name="judul"/>
  </div>
    <div>
        <input type="text" placeholder="Tingkat Kerusakan" value="{{old('tingkatkerusakan', $kerusakan->tingkatkerusakan)}}" name="tingkatkerusakan"/>
    </div>
    <div>
        <select id="fasilitas_id" name="fasilitas_id">
            <option value="">--->Pilih Salah Satu<---</option>
            @forelse ($fasilitas as $item)
                @if ($item->id === $kerusakan->fasilitas_id)
                <option value="{{$item->id}}" selected>{{$item->nama}}</option>
                @else
                <option value="{{$item->id}}">{{$item->nama}}</option>
                @endif
                
            @empty
                <option value="">--->Belum ada fasilitas<---</option>
            @endforelse
        </select>
    </div>
    <div>
      <input type="file" id="gambar" name="gambar">
    </div>
    <div>
      <input type="text" placeholder="Deskripsi Kerusakan" value="{{old('judul', $kerusakan->deskripsi)}}" class="input_message" name="deskripsi"/>
    </div>
    <div class="d-flex justify-content-center">
      <button type="submit" class="btn_on-hover">
        Buat Laporan
      </button>
    </div>
  </form>
@endsection