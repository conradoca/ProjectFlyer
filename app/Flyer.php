<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Flyer extends Model
{

  protected $fillable = [
      'street', 'city', 'zip', 'state', 'country', 'price', 'description',
  ];

  public function photos(){
    return $this->hasMany(Photo::class);
  }
}
