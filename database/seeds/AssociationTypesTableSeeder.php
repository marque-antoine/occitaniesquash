<?php

use Illuminate\Database\Seeder;

class AssociationTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('association_types')->insert([
            'name' => 'Fédération'

        ]);
        DB::table('association_types')->insert([
            'name' => 'Ligue'

        ]);
        DB::table('association_types')->insert([
            'name' => 'Département'

        ]);
        DB::table('association_types')->insert([
            'name' => 'Regroupement géographique'

        ]);
        DB::table('association_types')->insert([
            'name' => 'Association'

        ]);
    }
}
