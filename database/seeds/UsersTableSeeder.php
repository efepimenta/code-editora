<?php

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
        factory(\App\User::class, 1)->create([
                'name' => 'Fabio Pimenta',
                'email' => 'admin@editora.com',
                'password' => bcrypt('secret'),
                'remember_token' => str_random(10)
            ]
        );
    }
}
