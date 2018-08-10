<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Setting::create([
            'site_name'=>'Laravel\'s Blog',
            'address'=>'Alexandia',
            'contact_number'=>'010000122',
            'contact_email'=>'info@laravel.com'
        ]);
    }
}
