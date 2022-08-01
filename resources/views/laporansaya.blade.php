@extends('layout.form')
@section('judul')
    Lihat Laporan Anda 
@endsection
@section('konten')
<div>
    <a href="/kerusakan"><button>Laporan Kerusakan Fasilitas</button></a><br>
    <a href="/kecelakaan"><button>Laporan Kecelakaan</button><br></a>
    <a href="/kehilangan"><button>Laporan Kehilangan</button></a>
</div>
@endsection