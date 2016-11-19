<?php

use Illuminate\Database\Seeder;

class HotelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('hotels')->insert([
            [
                'name' => 'Hotel One',
                'address' => 'Rajeev Chowk',
                'city' => 'Delhi',
                'ratings' => 5
            ],
            [
                'name' => 'Hotel Two',
                'address' => 'Kirti Nagar',
                'city' => 'Delhi',
                'ratings' => 4
            ],
            [
                'name' => 'Hotel Three',
                'address' => 'Karol Bagh',
                'city' => 'Delhi',
                'ratings' => 5
            ],
        ]);
    }
}
