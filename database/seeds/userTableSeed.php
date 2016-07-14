<?php

use App\User;
use Illuminate\Database\Seeder;

class userTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data['name']     = 'Jhon Doe';
        $data['email']    = 'admin@voicetank.be';
        $data['password'] = bcrypt('admin');

        User::create($data);
    }
}
