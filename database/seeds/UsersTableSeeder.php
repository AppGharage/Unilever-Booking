<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $password = bcrypt('secret');
        DB::table('users')->insert([
            'first_name' => 'Admin',
            'last_name' => 'User',
            'staff_id' => 'STFF12',
            'level' => 'Manager',
            'email' => 'admin@test.com',
            'password' => $password,
        ]);
    }
}
