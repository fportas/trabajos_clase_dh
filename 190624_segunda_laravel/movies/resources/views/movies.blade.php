@extends('template')

@section('pageTitle', 'Inicio Actores')

@section('mainContent')
  <h2>Películas</h2>

  <ul>
    @foreach ($movies as $movie)
      <li>
        {{ $movie }}
      </li>
    @endforeach
  </ul>

@endsection
