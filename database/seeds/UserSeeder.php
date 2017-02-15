<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
        	'email'=>'admin@admin.bb',
        	'name'=>str_random(10),
        	'password'=>bcrypt('asdfghjk'),
        	'isAdmin'=>'1'
        ]);
        User::create([
        	'email'=>'user@admin.bb',
        	'name'=>str_random(9),
        	'password'=>bcrypt('asdfghjk'),
        	'isAdmin'=>'0'
            ]);
    }
}
