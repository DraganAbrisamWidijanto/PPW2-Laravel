<p align="right"><a href="{{ route('buku.create') }}">Tambah Buku</a></p>
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
            <td>{{\Carbon\Carbon::parse($buku->tgl_terbit)->format('Y/m/d')}}</td>
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
<div class="mt-3">
    <strong>Jumlah Data: </strong> {{ $jumlahData }}
</div>

<div class="mt-3">
    <strong>Total Harga: </strong> {{ "Rp " . number_format($totalHarga, 2, ',', '.') }}
</div>