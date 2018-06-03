<?php

use Illuminate\Database\Seeder;

class MembersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('members')->insert([
            'surname' => "Dominique",
            'name' => "FONTANON",
            'phone1' => '0614028838',
            'email' => 'dominique.fontanon@free.fr',
            'cp' => '34130',
            'town' => 'SAINT-AUNES',
            'address' => "25 AVE MARCEL MAJUREL",
            'license' => '1975155B',
            'is_enabled' => true,
        ]);
        DB::table('structure_member')->insert([
            'structure_id' => 2,
            'member_id' => 1,
            'role_id' => 1,
            'start_at' => null,
            'is_enabled' => true,
        ]);


        DB::table('members')->insert([
            'surname' => "Eric",
            'name' => "CHAUDRON",
            'phone1' => '0622695099',
            'email' => 'echaudron@axiomeassocies.fr',
            'cp' => '34090',
            'town' => 'MONTPELLIER',
            'address' => "62 rue Vital Michalon",
            'license' => '1379893O',
            'is_enabled' => true,
        ]);
        DB::table('structure_member')->insert([
            'structure_id' => 2,
            'member_id' => 2,
            'role_id' => 2,
            'start_at' => null,
            'is_enabled' => true,
        ]);
        DB::table('structure_member')->insert([
            'structure_id' => 19,
            'member_id' => 2,
            'role_id' => 1,
            'start_at' => null,
            'is_enabled' => true,
        ]);

        DB::table('members')->insert([
            'surname' => "Christophe",
            'name' => "LACOSTE",
            'phone1' => '0603841571',
            'email' => 'christophe.lacoste@airbus.com',
            'cp' => '31470',
            'town' => 'FONSORBES',
            'address' => "5 IMP HERMES",
            'license' => '1028078B',
            'is_enabled' => true,
        ]);
        DB::table('structure_member')->insert([
            'structure_id' => 2,
            'member_id' => 3,
            'role_id' => 3,
            'start_at' => null,
            'is_enabled' => true,
        ]);
    }
}
