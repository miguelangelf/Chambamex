<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'miguel',
            'email' => str_random(10).'@gmail.com',
            'password' => bcrypt('secret'),
        ]);

        DB::table('users')->insert([
            'name' => 'juancho',
            'email' => str_random(10).'@gmail.com',
            'password' => bcrypt('secret')

        ]);


        DB::table('users')->insert([
            'name' => 'mario',
            'email' => str_random(10).'@gmail.com',
            'password' => bcrypt('secret')
        ]);

        DB::table('users')->insert([
            'name' => 'karla',
            'email' => str_random(10).'@gmail.com',
            'password' => bcrypt('secret')
        ]);

        DB::table('users')->insert([
            'name' => 'atoi',
            'email' => str_random(10).'@gmail.com',
            'password' => bcrypt('secret')
        ]);
    }
}
