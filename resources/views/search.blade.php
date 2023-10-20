<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<p align="right"><a href="{{ route('buku.create') }}">Tambah Buku</a></p>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.18.1/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-nU14brUcp6StFntEOOEBvcJm4huWjB0OcIeQ3fltAfSmuZFrkAif0T+UtNGlKKQv" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    @if(count($data_buku))
    <div class="alert alert-success">Ditemukan <strong>{{ count($data_buku) }}</strong>
    data dengan kata: <strong>{{ $cari }}</strong></div>
    
<form action="{{ route('buku.search') }}" method="get">@csrf
    <input type='text' name="kata" class="form-control" placeholder="Cari Buku .." style='width:30%; display:inline; margin-top:10px; margin-bottom:10px; float: right;' value="{{ old('kata') }}">
</form>
    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>Judul Buku</th>
                <th>Penulis</th>
                <th>Harga</th>
                <th>Tgl. Terbit</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data_buku as $buku)
            <tr>
                <td>{{ ++$no }}</td>
                <td>{{ $buku->judul }}</td>
                <td>{{ $buku->penulis }}</td>
                <td>{{ "Rp ".number_format($buku->harga, 2, ',', '.')}}</td>
                <td>{{\Carbon\Carbon::parse($buku->tgl_terbit)->format('d/m/Y')}}</td>
                <td>
                    <form action="{{ route('buku.destroy', $buku->id) }}" method="post">
                     @csrf
                    <button onClick="return confirm('Yakin akan menghapus data?')" type="submit">Hapus</button>
                    </form>
                </td>
                    <td>
                        <form action="{{ route('bukuEdit', $buku->id) }}">
                        <button>Edit</button></form>
                    <td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="pagination justify-content-left mt-3">
        {{ $data_buku->links() }}
    </div>   
    
    
  
    
    @else
    <div class="alert alert-warning">
        <h4>Data {{ $cari }} tidak ditemukan</h4>
        <a href="/buku" class="btn btn-warning">Kembali</a>
    </div>
    @endif
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>