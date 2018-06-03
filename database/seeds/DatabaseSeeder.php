<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(SeasonsTableSeeder::class);
        $this->call(StructuresTableSeeder::class);
        $this->call(AssociationTypesTableSeeder::class);
        $this->call(ClubsTableSeeder::class);
        $this->call(AffiliatesTableSeeder::class);
        $this->call(AssociationsTableSeeder::class);
        $this->call(RoleTypesTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(MembersTableSeeder::class);
    }
}
