<?php namespace Cinema;

use Illuminate\Database\Eloquent\Model;

class Review extends Model {

    public function likes()
    {
        return $this->hasMany('Cinema\Like');
    }
    protected $fillable = ['content', 'movie_id', 'user_id'];


}
