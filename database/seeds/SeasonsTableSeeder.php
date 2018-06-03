<?php

use Illuminate\Database\Seeder;

class SeasonsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('seasons')->insert([
            'name' => "2017-2018",
            'start_at' => "2017-09-01",
            'end_at' => "2018-08-31",
            'is_enabled' => true,
        ]);
    }
}
