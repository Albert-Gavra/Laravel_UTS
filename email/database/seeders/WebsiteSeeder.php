<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use DB;

class WebsiteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('websites')->insert([
            'name_website'=>'Google',
            'email'=>'meguminexplode@gmail.com',
            'pass_website'=>'12345',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('websites')->insert([
            'name_website'=>'Yahoo',
            'email'=>'meguminexplode@gmail.com',
            'pass_website'=>'lololol',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('websites')->insert([
            'name_website'=>'Facebook',
            'email'=>'noobmaster@gmail.com',
            'pass_website'=>'ya itu',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
    }
}
