<?php

use Illuminate\Database\Seeder;

class TeamsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 7; $i++) {
            DB::table('teams')->insert([
                'name' => 'Team ' . $i,
                'description'  => 'This is Team ' . $i,
            ]);
        }
    }
}
