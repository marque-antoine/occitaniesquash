<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'name' => 'Président',
            'type_id' => 'M',
            'structure_type' => 'association',
        ]);
        DB::table('roles')->insert([
            'name' => 'Secrétaire',
            'type_id' => 'M',
            'structure_type' => 'association',
        ]);
        DB::table('roles')->insert([
            'name' => 'Trésorier',
            'type_id' => 'M',
            'structure_type' => 'association',
        ]);
        DB::table('roles')->insert([
            'name' => 'Membre',
            'type_id' => 'R',
            'structure_type' => 'association',
        ]);
        DB::table('roles')->insert([
            'name' => 'Gérant',
            'type_id' => 'M',
            'structure_type' => 'club',
        ]);
        DB::table('roles')->insert([
            'name' => 'Directeur',
            'type_id' => 'M',
            'structure_type' => 'club',
        ]);
        DB::table('roles')->insert([
            'name' => 'Responsable',
            'type_id' => 'M',
            'structure_type' => 'club',
        ]);
        DB::table('roles')->insert([
            'name' => 'Prof',
            'type_id' => 'R',
            'structure_type' => 'club',
        ]);
        DB::table('roles')->insert([
            'name' => 'JA1',
            'type_id' => 'R',
            'structure_type' => 'association',
        ]);
        DB::table('roles')->insert([
            'name' => 'JA2',
            'type_id' => 'R',
            'structure_type' => 'association',
        ]);
        DB::table('roles')->insert([
            'name' => 'A1',
            'type_id' => 'R',
            'structure_type' => 'association',
        ]);
        DB::table('roles')->insert([
            'name' => 'A2',
            'type_id' => 'R',
            'structure_type' => 'association',
        ]);
        DB::table('roles')->insert([
            'name' => 'Formateur A',
            'type_id' => 'R',
            'structure_type' => 'association',
        ]);
        DB::table('roles')->insert([
            'name' => 'Formateur JA',
            'type_id' => 'R',
            'structure_type' => 'association',
        ]);
        DB::table('roles')->insert([
            'name' => 'Formateur Prof',
            'type_id' => 'R',
            'structure_type' => 'association',
        ]);
    }
}
