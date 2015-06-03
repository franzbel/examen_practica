<?php namespace Cinema;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model {

    protected $fillable = ['value', 'movie_id','user_id'];

}
