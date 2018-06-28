<?php

use Illuminate\Database\Seeder;

class BookingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 7; $i++) {
            DB::table('bookings')->insert([
                'meeting_room' => 'Room ' . $i,
                'agenda'  => 'Meeting',
                'booked_by'     => 'Admin',
                'booked_for'     => 'Alice',
                'date'     => '2018-06-30',
                'start_time'     => '3:0' . $i,
                'end_time'     => '6:0' . $i,
                'status'     => 'Booked',
            ]);
        }
    }
}
