<?php

use Illuminate\Database\Seeder;

class ClubsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clubs')->insert([
            'id' => 18,
            'league_id' => 2,
            'department_id' => 11,
            'nickname' => 'Euromédecine',
            'legal_form' => 'SARL',
            'trade_name' => 'MEDISQUASH',
            'court' => 6,
        ]);
    }
}
