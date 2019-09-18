<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    //
   protected $fillable = ['title','released_year','genre','rating','casts','director','language','type'];

    public function user(){

        return $this->belongsTo('App\user');

    }


}
