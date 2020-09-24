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
        User::create([
            'name'       => 'Camilo Serrano',
            'avatar'     => "https://via.placeholder.com/150",
            'email'      => "serranocamilo95@gmail.com",
            'password'   => Hash::make('123456'),
        ]);

        User::create([
            'name'       => 'Stiven Serrano',
            'avatar'     => "https://via.placeholder.com/150",
            'email'      => "stiven@gmail.com",
            'password'   => Hash::make('123456'),
        ]);
    }
}
