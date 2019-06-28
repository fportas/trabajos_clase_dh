<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
    if ($id == ){
      $movieFound = $movie;
    }
  }
  return $movieFound;
  }

  public function index()
  {
    $actors = Movies::all();
  }

}
}
