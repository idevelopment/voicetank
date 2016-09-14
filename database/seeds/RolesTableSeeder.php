<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Silber\Bouncer\Database\Role;

/**
 * Class RolesTableSeeder
 */
class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->delete();

        Role::create(['name' => 'Admin']);
        Role::create(['name' => 'Developer']);
        Role::create(['name' => 'Manager']);
        Role::create(['name' => 'User']);
        Role::create(['name' => 'Active']);
        Role::create(['name' => 'Blocked']);
    }
}
