<?php namespace Cinema;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model {

	//
    public function reviews()
    {
        return $this->hasMany('Cinema\Review');
    }

    public function ratings()
    {
        return $this->hasMany('Cinema\Rating');
    }
    protected $fillable = ['name', 'description', 'category'];

}
