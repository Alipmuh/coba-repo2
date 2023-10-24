@extends('layouts/main')


@section('container')
    <h1>Halaman Abouttt</h1>
    <h2>{{ $nama }}</h2>
    <p>{{ $email }}</p>
    <img src="img/{{ $gambar }}" alt="{{ $nama }}" width="200" class="img-thumbnaill rounded-circle">
@endsection
