<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Data Buku</title>

    <style>
        /* CSS untuk merapikan tabel */
        .container {
            margin-top: 20px;
        }
        form {
            width: 33%; 
            margin: 0 auto;
            padding: 20px;
            background-color: #f4f4f4;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        div {
            margin-bottom: 10px;
            text-align: left;
        }
        label {
            display: block;
            font-weight: bold;
        }
        input[type="text"],
        input[type="date"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .button-group {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        button[type="submit"],
        button[type="button"] {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button[type="submit"] {
            background-color: #007BFF;
            color: white;
        }
        button[type="button"] {
            background-color: #ccc;
            color: #333;
        }
    </style>
</head>
<body>
    <div class='container'>
        @if(count($errors) > 0)
                <ul class="alert alert-danger list-group">
                    @foreach ($errors->all() as $error)
                        <li class="list-group-item">{{ $error }}</li>
                    @endforeach
                </ul>
            @endif
        <h4 class="mt-4">Edit Data Buku</h4>
        <form method="post" action="{{ route('buku.update', $buku->id) }}">
            @csrf
            <div>
                <label for="judul">Judul</label>
                <input type="text" name="judul" value="{{$buku->judul}}">
            </div>
            <div>
                <label for="penulis">Penulis</label>
                <input type="text" name="penulis" value="{{$buku->penulis}}">
            </div>
            <div>
                <label for="harga">Harga</label>
                <input type="text" name="harga" value="{{$buku->harga}}">
            </div>
            <div>
                <label for="tgl_terbit">Tanggal Terbit</label>
                <input type="date" name="tgl_terbit" value="{{$buku->tgl_terbit}}">
            </div>
            <div class="button-group">
                <button type="submit">Simpan</button>
                <button type="button" onclick="window.location.href='/buku'">Batal</button>
            </div>
        </form>
    </div>
</body>
</html>
