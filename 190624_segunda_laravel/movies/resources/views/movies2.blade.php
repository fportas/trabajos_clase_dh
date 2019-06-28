@extends('template')

@section('pageTitle', 'Películas')

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
