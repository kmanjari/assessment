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
        \DB::table('users')->insert([
            [
                'name' => 'Admin',
                'email' => 'admin@assessment.com',
                'password' => bcrypt('123456')
            ],
            [
                'name' => 'John',
                'email' => 'john@doe.com',
                'password' => bcrypt('doe')
            ]
        ]);
    }
}
