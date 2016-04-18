<?php

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     factory(App\Faq::class, 10)->create();

        Model::unguard();
        $this->call(userTableSeed::class);
        Model::reguard();
    }
}
