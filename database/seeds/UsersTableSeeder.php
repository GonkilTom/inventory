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
          'first_name' => 'tofunmi' ,
          'last_name' => 'yusuf' ,
          'username' => 'tyu' ,
          'phone_number' => '07018253903' ,
          'home_address' => 'No 1 Shola Lasaki Street,off Agoro road, Ogba-Iyo, Sango-Ota' ,
          'active' => 1,
          'email' => 'tyu@yahoo.com',
          'password' => bcrypt('tofu') ,

        ]);
    }
}
