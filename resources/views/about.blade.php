@extends('layouts.main')

@section('container')

<h1>Halaman About</h1>
<img src="{{ $images }}" alt="{{ $name }}" width="200" class="img-thumbnail rounded-circle"/>
<h3>{{ $name }}</h3>
<p>a.k.a : {{ $aka }}</p>

@endsection
