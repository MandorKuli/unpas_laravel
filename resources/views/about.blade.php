@extends('layout.main')

@section('container')

    <h1>halaman About </h1>
    <h3>{{ $name }}</h3>
    <p>{{ $email }}</p>
    <img src="img/{{ $image }}" alt="{{ $name }}" width="300" class="img-thumbnail rounded-circle">
    
@endsection
