<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

/**
 * Class UserTableSeeder
 */
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data['name']     = 'Test account';
        $data['email']    = 'admin@voicetank.be';
        $data['password'] = bcrypt('admin');

        $table = DB::table('users');
        $table->delete();
        $table->insert($data);
    }
}
