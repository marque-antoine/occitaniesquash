<?php

use Illuminate\Database\Seeder;

class AffiliatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('affiliates')->insert([
            'code' => "034002",
            'start_at' => "2017-09-01",
            'end_at' => "2018-08-31",
            'is_enabled' => true,
            'season_id' => 1,
            'structure_id' => 18
        ]);
        DB::table('affiliates')->insert([
            'code' => "A034003",
            'start_at' => "2017-09-01",
            'end_at' => "2018-08-31",
            'is_enabled' => true,
            'season_id' => 1,
            'structure_id' => 19
        ]);
    }
}
