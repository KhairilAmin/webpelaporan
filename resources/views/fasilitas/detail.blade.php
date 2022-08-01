<body class="sub_page">
    <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
        <div class="container-fluid">
        @include('layout.navbar')
        </div>
    </header>
    <!-- end header section -->
    </div>

    <h1 class="text-primary">{{$kerusakan->judul}}</h1>
    <img src="{{asset('image/'. $kerusakan->gambar)}}" alt="">
    <p>Fasilitas : {{$fasilitas->nama}}</p>
    <p>Tingkat kerusakan : {{$kerusakan->tingkatkerusakan}}</p>
    <p>Deskripsi : {{$kerusakan->deskripsi}}</p>
    <a href="/kerusakan" class="btn btn-secondary btn-sm">Kembali</a>    
