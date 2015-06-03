<?php
use Illuminate\Database\Seeder;

/**
 * Created by PhpStorm.
 * User: Franz
 * Date: 31/05/2015
 * Time: 03:29 AM
 */

class RatingsTableSeeder extends Seeder{
    public function run()
    {
        \DB::table('ratings')->insert(array(
            'user_id'=>1,
            'movie_id'=>1,
            'value' => 5
        ));
        \DB::table('ratings')->insert(array(
            'user_id'=>1,
            'movie_id'=>1,
            'value' => 8
        ));
        \DB::table('ratings')->insert(array(
            'user_id'=>1,
            'movie_id'=>2,
            'value' => 4
        ));
        \DB::table('ratings')->insert(array(
            'user_id'=>1,
            'movie_id'=>2,
            'value' => 4
        ));
    }
}