<?php

use Illuminate\Database\Seeder;

class RoleTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('role_types')->insert([
            'id' => 'A',
            'name' => 'administrator'

        ]);
        DB::table('role_types')->insert([
            'id' => 'M',
            'name' => 'manager'

        ]);
        DB::table('role_types')->insert([
            'id' => 'R',
            'name' => 'reader'

        ]);
        DB::table('role_types')->insert([
            'id' => 'W',
            'name' => 'writer'

        ]);
    }
}
