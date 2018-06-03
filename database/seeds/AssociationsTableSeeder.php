<?php

use Illuminate\Database\Seeder;

class AssociationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $id = 1;
        DB::table('associations')->insert([
            'id' => $id,
            'type_id' => 1,
            'club_id' => 0,
            'nickname' => 'Fédé',
        ]);
        $id++;
        DB::table('associations')->insert([
            'id' => $id,
            'type_id' => 2,
            'club_id' => 0,
            'nickname' => 'Occitanie',
        ]);
        DB::table('association_association')->insert([
            'parent_id' => 1,
            'association_id' => $id,
        ]);

        $id++;
        DB::table('associations')->insert([
            'id' => $id,
            'type_id' => 4,
            'club_id' => 0,
            'nickname' => 'LR',
        ]);
        DB::table('association_association')->insert([
            'parent_id' => 2,
            'association_id' => $id,
        ]);

        $id++;
        DB::table('associations')->insert([
            'id' => $id,
            'type_id' => 4,
            'club_id' => 0,
            'nickname' => 'MP',
        ]);
        DB::table('association_association')->insert([
            'parent_id' => 2,
            'association_id' => $id,
        ]);

        $departments = ['09', '11', '12', '30', '31', '32', '34', '46', '48', '65', '66', '81', '82'];
        foreach($departments as $department){
            $id++;
            DB::table('associations')->insert([
                'id' => $id,
                'type_id' => 3,
                'club_id' => 0,
                'nickname' => $department,
            ]);
            DB::table('association_association')->insert([
                'parent_id' => 2,
                'association_id' => $id,
            ]);
        }
        $id = 19;
        DB::table('associations')->insert([
            'id' => $id,
            'type_id' => 5,
            'club_id' => 18,
            'nickname' => "MSH",
        ]);
        DB::table('association_association')->insert([
            'parent_id' => 2,
            'association_id' => 19,
        ]);
    }
}
