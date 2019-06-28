@extends('template')

@section('pageTitle', 'Inicio Actores')

@section('mainContent')
  <h2>Actores</h2>

  <ul>
    @foreach ($actors as $actor)
      <li>
        {{ $actor }}
      </li>
    @endforeach
  </ul>

@endsection
