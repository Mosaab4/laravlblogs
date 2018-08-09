<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\User::create([
            'name'=>'mosaab4',
            'email'=>'mosaab4@gmail.com',
            'password'=>bcrypt('123456789')
        ]);
    }
}
