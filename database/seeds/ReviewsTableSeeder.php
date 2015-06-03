<?php
use Illuminate\Database\Seeder;

/**
 * Created by PhpStorm.
 * User: Franz
 * Date: 31/05/2015
 * Time: 12:15 AM
 */

class ReviewsTableSeeder extends  Seeder{
    public function run()
    {
        \DB::table('reviews')->insert(array(
            'user_id'=>1,
            'movie_id'=>1,
            'content' => 'Es una pelicula muy iinteresante y muy recomendada Es una pelicula muy iinteresante y muy recomendada Es una pelicula muy iinteresante y muy recomendada'
        ));
        \DB::table('reviews')->insert(array(
            'user_id'=>1,
            'movie_id'=>1,
            'content' => 'Un final totalmente inesperado, recomendada para todo publico Un final totalmente inesperado, recomendada para todo publico Un final totalmente inesperado, recomendada para todo publico'
        ));
    }
}