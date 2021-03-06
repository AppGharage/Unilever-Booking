<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(AttendanceListsTableSeeder::class);
        $this->call(BookingsTableSeeder::class);
        $this->call(MeetingRoomsTableSeeder::class);
        $this->call(TeamMembersTableSeeder::class);
        $this->call(TeamsTableSeeder::class);
    }
}
