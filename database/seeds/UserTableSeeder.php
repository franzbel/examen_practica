<?php
use Illuminate\Database\Seeder;
/**
 * Created by PhpStorm.
 * User: Franz
 * Date: 31/05/2015
 * Time: 11:05 PM
 */

class UserTableSeeder extends Seeder{
    public function run()
    {
        \DB::table('users')->insert(array(
            'name' => 'Franz',
            'email' => 'fbm@gmail.com',
            'password'=>\Hash::make('123456')
        ));
    }
}