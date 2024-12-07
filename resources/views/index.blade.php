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
    <div class="container shadow-sm">
        <label for="">{{ $tp->judul }}</label>
        <div class="row mb-3">{{ $tp->desktp }}</div>
        <div class="row">Deadline TP: {{ $tp->dltp }}</div>
    </div>
</body>
</html>
@endsection