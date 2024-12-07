@extends('layout.main')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container m-3">
    <h4>Form {{ $title }} Pengumuman</h4>
    <form action="{{ url($action) }}" class="border" style="padding:20px" method="post">
        @csrf
        <input type="hidden" name="_method" value="{{ $method }}">
        <label for="" class="form-label">Judul</label>
        <input type="text" name="judul" class="form-control" value="{{ isset($data)?$data->judul:'' }}">

        <label for="" class="form-label">Sub Judul</label>
        <input type="text"  name="subjudul" class="form-control" value="{{ isset($data)?$data->subjudul:'' }}">

        <label for="" class="form-label">Kategori</label>
        <input type="text"  name="kategori" class="form-control" value="{{ isset($data)?$data->kategori:'' }}">

        <label for="" class="form-label">Tanggal Post</label>
        <input type="date"  name="tglpost" class="form-control" value="{{ isset($data)?$data->tglpost:'' }}">

        <label for="" class="form-label">Deadline TP</label>
        <input type="date"  name="dltp" class="form-control" value="{{ isset($data)?$data->dltp:'' }}">

        <label for="" class="form-label">Deskripsi TP</label>
        <input type="text" name="desktp" class="form-control" value="{{ isset($data)?$data->desktp:'' }}">
        <div style="text-align: center" class="mt-3">
            <button class="btn btn-success">Simpan</button>
        </div>
    </form>
    </div>
</body>
</html>
@endsection