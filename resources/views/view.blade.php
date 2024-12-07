@extends('layout.main')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informatics Lab</title>
</head>
<body>
    @foreach($tp as $t)
    <div class="card m-3">
        <div class="card-header">
            {{ $t->judul }}
        </div>
        <div class="card-body">
            {{ $t->subjudul }}
        </div>
        <div class="card-footer">
            <button class="btn btn-primary">Read More</button>
            <a href="/tp/{{ $t->id }}/edit" class="btn btn-secondary">Edit</a>
            <form action="/tp/{{ $t->id }}" method="post" style="display: inline" onsubmit="return confirm('Yakin Hapus?'">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger">Delete</button>
            </form>
        </div>
    </div>
    @endforeach
</body>
</html>
@endsection