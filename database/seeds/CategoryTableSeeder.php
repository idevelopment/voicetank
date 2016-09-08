<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['name' => 'User Interface'],
            ['name' => 'Configuration Management'],
            ['name' => 'Database'],
            ['name' => 'Reports'],
            ['name' => 'Sales'],
        ];

        $table = DB::table('categories');
        $table->delete();
        $table->insert($data);
    }
}
