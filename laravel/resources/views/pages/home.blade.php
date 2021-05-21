@extends('layouts.main-layout')

@section('content')

<h1>Movies</h1>

<ul>
    @foreach ($movies as $movie)
        <li>
            <a href="{{ route('movie', $movie -> id) }}">
                {{ $movie -> id }}
                {{ $movie -> title }}
            </a>
        </li>
    @endforeach
</ul>
@endsection