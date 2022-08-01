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
    <a href="/test-excel3" class="btn btn-primary btn-sm ml-4 my-4">Download Data Excel</a>
<table class="table">
<thead>
  <tr>
    <th scope="col">#</th>
    <th scope="col">Nama</th>
    <th scope="col">Detail</th>
  </tr>
</thead>
<tbody>
    @forelse ($kecelakaan as $key => $item)
        <tr>
            <td>{{$key + 1}}</td>
            <td>{{$item ->tempat}}</td>
            <td>
                <a href="/kecelakaan/{{$item->id}}" class="btn btn-info btn-sm">Detail</a>
            </td>
        </tr>
    @empty
        <tr>
            <td>Tidak ada data di tabel laporan kecelakaan</td>
        </tr>
    @endforelse
</tbody>
</table>