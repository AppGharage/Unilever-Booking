<?php

use Illuminate\Database\Seeder;

class TeamMembersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 7; $i++) {
            DB::table('team_members')->insert([
                'staff_id' => 'STFF1' . $i,
                'team_id' => 'T3VM1' . $i,
            ]);
        }
    }
}
