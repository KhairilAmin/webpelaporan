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

    <h1 class="text-primary">{{$kehilangan->judul}}</h1>
    <p>Barang : {{$kehilangan->barang}}</p>
    <img src="{{asset('image/'. $kehilangan->gambar)}}" alt="">
    <p>Ciri - ciri : {{$kehilangan->ciri}}</p>
    <p>Keterangan : {{$kehilangan->keterangan}}</p>
    <a href="/kehilangan" class="btn btn-secondary btn-sm">Kembali</a>    
