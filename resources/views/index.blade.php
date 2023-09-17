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