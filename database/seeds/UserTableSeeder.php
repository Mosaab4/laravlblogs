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
        $user = App\User::create([
            'name'=>'mosaab',
            'email'=>'mosaab@gmail.com',
            'password'=>bcrypt('123456789'),
            'admin'=>1,
        ]);
        
        App\Profile::create([
            'user_id'=>$user->id,
            'avatar'=>'uploads/avatars/1.jpg',
            'about'=>'lorem ipsum dolor sit amet',
            'facebook'=>'facebook.com',
            'youtube'=>'youtube.com'
        ]);
    }
}
