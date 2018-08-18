<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        User::truncate();

        User::create( [
            'email' => 'huong@gmail.com' ,
            'password' => Hash::make( 'password' ) ,
            'name' => 'huong' ,
        ] );
    }
}

