<?php

use Illuminate\Database\Seeder;

class AttendanceListsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
               for ($i = 0; $i < 7; $i++) {
                    DB::table('attendance_lists')->insert([
                        'staff_id' => 'STFF1' . $i,
                        'booking_id' => $i,
                    ]);
                }
    }
}