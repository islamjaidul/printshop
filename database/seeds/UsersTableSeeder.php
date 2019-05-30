<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('users')->insert([
    		'name' => 'Saro Dev','email' => 'saro@gmail.com','password' => bcrypt('12345678'),'department' => 'HR dev','designation' => 'HR','phone' => '4545454545','address' => 'asdf asdf asd fa','isActive' => '1','role' => '1',
    	]);
    }
}


