<?php namespace Cinema;

use Illuminate\Database\Eloquent\Model;

class Like extends Model {

    protected $fillable = ['user_id', 'estado_like', 'review_id'];

}
