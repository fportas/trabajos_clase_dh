<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
  public function getTitleAndRating()
  {
    return $this->title . ' ' . $this->rating;
  }

  protected $fillable = ['title', 'rating', 'awards', 'release_date', 'length', 'genre_id', 'poster'];


}
