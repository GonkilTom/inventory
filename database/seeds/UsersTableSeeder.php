<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\User::create([
          'first_name' => 'toluwa' ,
          'last_name' => 'fushbau' ,
          'username' => 'boluwa' ,
          'phone_number' => '07018258703' ,
          'home_address' => 'ibadan' ,
          'admin' => 1,
          'email' => 'boluwa@tmail.com',
          'password' => bcrypt('password') ,

        ]);
    }
}
