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

    <h1 class="text-primary">{{$kecelakaan->tempat}}</h1>
    <p>Waktu : {{$kecelakaan->waktu}}</p>
    <p>Plat Nomor : {{$kecelakaan->platnomor}}</p>
    <p>Keadaan Korban : {{$kecelakaan->keadaankorban}}</p>
    <a href="/kecelakaan" class="btn btn-secondary btn-sm">Kembali</a>    
