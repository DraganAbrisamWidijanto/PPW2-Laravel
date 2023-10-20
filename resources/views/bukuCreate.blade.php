<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tambah Buku</title>
    <link rel="stylesheet" href="{{ asset('css/boostrap.min.css') }}">

    <link rel="stylesheet" href="{{ asset('css/bootstrap-datepicker.css') }}">
    <script src="{{asset('js/jquery.js')}}"></script>
    <script src="{{asset('js/bootstrap-datepicker.js')}}"></script>
    <style>
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
        a {
            text-decoration: none;
            display: inline-block;
            color: #007BFF;
            padding: 10px 20px;
            border: 1px solid #007BFF;
            border-radius: 5px;
            margin-left: 10px;
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
        <h4 class="mt-4">Tambah Buku</h4>
        <form method="post" action="{{ route('buku.store') }}">
            @csrf
            <div>
                <label for="judul">Judul</label>
                <input type="text" name="judul">
            </div>
            <div>
                <label for="penulis">Penulis</label>
                <input type="text" name="penulis">
            </div>
            <div>
                <label for="harga">Harga</label>
                <input type="text" name="harga">
            </div>
            <div>
                <label for="tgl_terbit">Tanggal Terbit</label>
                <input type="date" id="tgl_terbit" name="tgl_terbit" class="date" placeholder="yyyy/mm/dd" class="date form-control">
            </div>
            <div class="button-group">
                <button type="submit">Simpan</button>
                <button type="button" onclick="window.location.href='/buku'">Batal</button>
            </div>
        </form>
    </div>
    <script type="text/javascript">
        $('.date').datepicker({
            format: 'yyyy/mm/dd',
            autoclose: 'true',
        })</script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
</body>
</html>
