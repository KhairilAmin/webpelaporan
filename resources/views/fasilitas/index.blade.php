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

<a href="/kerusakan/create" class="btn btn-primary btn-sm ml-4 my-4">Tambah Cast</a>
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nama</th>
        <th scope="col">Detail</th>
      </tr>
    </thead>
    <tbody>
        @forelse ($kerusakan as $key => $item)
            <tr>
                <td>{{$key + 1}}</td>
                <td>{{$item ->judul}}</td>
                <td>
                    <form action="/kerusakan/{{$item->id}}" method="POST">
                        @method('delete')
                        @csrf
                        <a href="/kerusakan/{{$item->id}}" class="btn btn-info btn-sm">Detail</a>
                        <a href="/kerusakan/{{$item->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                        <input type="submit" value="Delete" class="btn btn-danger btn-sm">
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td>Tidak ada data di tabel laporan kerusakan</td>
            </tr>
        @endforelse
    </tbody>
  </table>