@extends('template')

@section('pageTitle', 'Inicio Actores')

@section('mainContent')
  <h2>Actores</h2>

  <ul>
    @foreach ($actors as $actor)
      <li>
        {{ $actor->first_name }} {{ $actor->last_name }}
      </li>
    @endforeach
  </ul>

@endsection

@section('secondContent')
  <h2>Actores full name</h2>

  <ul>
    @foreach ($actors as $actor)
      <li>
        {{ $actor->getFullName }}
      </li>
    @endforeach
  </ul>

@endsection
