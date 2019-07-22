<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class MoviesController extends Controller
{
  public function searchMovieById($id){

  $peliculas = [
   1 => "Toy Story",
   2 => "Buscando a Nemo",
   3 => "Avatar",
   4 => "Star Wars: Episodio V",
   5 => "Up",
   6 => "Mary and Max"
  ];

  foreach ($peliculas as $position => $movie) {
    if ($id == $position){
      $movieFound = $movie;
    }
  }
  return $movieFound;
  }

  public function index()
  {
    $movies = Movie::all();
    return view('movies', compact('movies'));
  }

  public function store(Request $request)
  {
    $request->validate([
      'title'=>'required',
      'rating'=>'required | numeric | between:1,10',
      'award'=>'required | numeric',
      'release_date'=>'required',
      'length'=>'required'
    ],[
      'required'=>'El campo es obligatorio',
      'numeric'=>'El campo debe ser un número',
      'between'=>'El rating debe ser un valor entre 0 y 10'
    ]);
    // return view('crearPelicula', compact('request'));
  }

}
