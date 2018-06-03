<?php

use Illuminate\Database\Seeder;

class StructuresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('structures')->insert([
            'name' => "Fédération Française de Squash",
            'phone' => '0155123490',
            'fax' => '0155123491',
            'email' => 'contact@ffsquash.com',
            'cp' => '94100',
            'town' => "Saint-Maur-des-Fossés",
            'address' => "2, rue de Paris",
            'web' => 'http://www.ffsquash.com/',
            'is_enabled' => true,
        ]);
        DB::table('structures')->insert([
            'name' => "Ligue de Squash d'Occitanie",
            'phone' => '0614028838',
            'fax' => '',
            'email' => 'dominique.fontanon@free.fr',
            'cp' => '34000',
            'town' => 'MONTPELLIER',
            'address' => "MAISON REGIONALE DES SPORTS\n1039 AVENUE GEORGES MELIES",
            'web' => 'http://www.ffsquash.com/',
            'is_enabled' => true,
        ]);
        DB::table('structures')->insert([
            'name' => "Languedoc-Roussillon",
            'phone' => '',
            'fax' => '',
            'email' => 'nicolas.brianc@gmail.com',
            'cp' => '',
            'town' => '',
            'address' => "",
            'web' => '',
            'is_enabled' => true,
        ]);
        DB::table('structures')->insert([
            'name' => "Midi-Pyrénées",
            'phone' => '',
            'fax' => '',
            'email' => 'sabatier.f@wanadoo.fr',
            'cp' => '',
            'town' => '',
            'address' => "",
            'web' => '',
            'is_enabled' => true,
        ]);
        $departments = ["Ariège", "Aude", "Aveyron", "Gard", "Haute-Garonne", "Gers", "Hérault", "Lot", "Lozère", "Hautes-Pyrénées", "Pyrénées-Orientales", "Tarn", "Tarn-et-Garonne"];
        foreach($departments as $department){
            DB::table('structures')->insert([
                'name' => $department,
                'phone' => '',
                'fax' => '',
                'email' => 'inconnu@inconnu.net',
                'cp' => '',
                'town' => '',
                'address' => "",
                'web' => '',
            ]);
        }
        DB::table('structures')->insert([
            'name' => "Squash Club de Montpellier",
            'phone' => '0467544620',
            'fax' => '',
            'email' => 'contact@squashclubmontpellier.fr',
            'cp' => '34090',
            'town' => 'MONTPELLIER',
            'address' => "Parc Euromédecine\n15 rue du caducée",
            'web' => 'http://www.squashclubmontpellier.fr',
            'is_enabled' => true,
        ]);
        DB::table('structures')->insert([
            'name' => "Montpellier Squash Hérault",
            'phone' => '',
            'fax' => '',
            'email' => 'msh.squash@gmail.com',
            'cp' => '34090',
            'town' => 'MONTPELLIER',
            'address' => "Chez Squash Club de Montpellier\nParc Euromédecine\n15 rue du caducée",
            'web' => '',
            'is_enabled' => true,
        ]);
    }
}
