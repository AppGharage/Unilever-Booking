<?php

use Illuminate\Database\Seeder;

class MeetingRoomsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 7; $i++) {
            DB::table('meeting_rooms')->insert([
                'name' => 'Room ' .  $i,
                'description'  => 'Auditorium',
                'capacity'   => '40' . $i,
            ]);
        }
    }
}
