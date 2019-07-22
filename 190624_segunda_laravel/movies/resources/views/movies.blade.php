@extends('template')

@section('pageTitle', 'Inicio Movies')

@section('mainContent')
  <h2>Películas</h2>

  <ul>
    @foreach ($movies as $movie)
      <li>
        {{ $movie->title }} <a href="#" class="btn">Ver detalle</a>
      </li>
    @endforeach
  </ul>

@endsection
