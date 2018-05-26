<?php

use Illuminate\Database\Seeder;

class GameScheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('game_schedules')->truncate();
        DB::table('game_schedules')->insert([
            ['start_time' => '2018-06-01 09:00:00', 'place' => '甲子園球場', 'team_a_id' => '1', 'team_b_id' => '2', ],
            ['start_time' => '2018-06-01 12:00:00', 'place' => '甲子園球場', 'team_a_id' => '3', 'team_b_id' => '4', ],
            ['start_time' => '2018-06-01 15:00:00', 'place' => '甲子園球場', 'team_a_id' => '5', 'team_b_id' => '6', ],
            ['start_time' => '2018-06-02 09:00:00', 'place' => '甲子園球場', 'team_a_id' => '7', 'team_b_id' => '8', ],
            ['start_time' => '2018-06-02 12:00:00', 'place' => '甲子園球場', 'team_a_id' => '9', 'team_b_id' => '10', ],
            ['start_time' => '2018-06-02 15:00:00', 'place' => '甲子園球場', 'team_a_id' => '11', 'team_b_id' => '12', ],
            ['start_time' => '2018-06-03 09:00:00', 'place' => '甲子園球場', 'team_a_id' => '13', 'team_b_id' => '14', ],
            ['start_time' => '2018-06-03 12:00:00', 'place' => '甲子園球場', 'team_a_id' => '15', 'team_b_id' => '16', ],
            ['start_time' => '2018-06-03 15:00:00', 'place' => '甲子園球場', 'team_a_id' => '17', 'team_b_id' => '18', ],
            ['start_time' => '2018-06-04 09:00:00', 'place' => '甲子園球場', 'team_a_id' => '19', 'team_b_id' => '20', ],
            ['start_time' => '2018-06-04 12:00:00', 'place' => '甲子園球場', 'team_a_id' => '21', 'team_b_id' => '22', ],
            ['start_time' => '2018-06-04 15:00:00', 'place' => '甲子園球場', 'team_a_id' => '23', 'team_b_id' => '24', ],
            ['start_time' => '2018-06-05 09:00:00', 'place' => '甲子園球場', 'team_a_id' => '25', 'team_b_id' => '26', ],
            ['start_time' => '2018-06-05 12:00:00', 'place' => '甲子園球場', 'team_a_id' => '27', 'team_b_id' => '28', ],
            ['start_time' => '2018-06-05 15:00:00', 'place' => '甲子園球場', 'team_a_id' => '28', 'team_b_id' => '30', ],
            ['start_time' => '2018-06-06 09:00:00', 'place' => '甲子園球場', 'team_a_id' => '31', 'team_b_id' => '32', ],
            ['start_time' => '2018-06-06 12:00:00', 'place' => '甲子園球場', 'team_a_id' => '33', 'team_b_id' => '34', ],
            ['start_time' => '2018-06-06 15:00:00', 'place' => '甲子園球場', 'team_a_id' => '35', 'team_b_id' => '36', ],
            ['start_time' => '2018-06-07 09:00:00', 'place' => '甲子園球場', 'team_a_id' => '37', 'team_b_id' => '38', ],
            ['start_time' => '2018-06-07 12:00:00', 'place' => '甲子園球場', 'team_a_id' => '39', 'team_b_id' => '40', ],
            ['start_time' => '2018-06-07 15:00:00', 'place' => '甲子園球場', 'team_a_id' => '41', 'team_b_id' => '42', ],
            ['start_time' => '2018-06-08 09:00:00', 'place' => '甲子園球場', 'team_a_id' => '43', 'team_b_id' => '44', ],
            ['start_time' => '2018-06-08 12:00:00', 'place' => '甲子園球場', 'team_a_id' => '45', 'team_b_id' => '46', ],
            ['start_time' => '2018-06-08 15:00:00', 'place' => '甲子園球場', 'team_a_id' => '47', 'team_b_id' => '48', ],
            ['start_time' => '2018-06-09 09:00:00', 'place' => '甲子園球場', 'team_a_id' => '49', 'team_b_id' => '2', ],
            ['start_time' => '2018-06-09 12:00:00', 'place' => '甲子園球場', 'team_a_id' => '3', 'team_b_id' => '8', ],
            ['start_time' => '2018-06-09 15:00:00', 'place' => '甲子園球場', 'team_a_id' => '12', 'team_b_id' => '27', ],
            ['start_time' => '2018-06-10 09:00:00', 'place' => '甲子園球場', 'team_a_id' => '28', 'team_b_id' => '7', ],
            ['start_time' => '2018-06-10 12:00:00', 'place' => '甲子園球場', 'team_a_id' => '21', 'team_b_id' => '19', ],
            ['start_time' => '2018-06-10 15:00:00', 'place' => '甲子園球場', 'team_a_id' => '11', 'team_b_id' => '26', ],
            ['start_time' => '2018-06-11 09:00:00', 'place' => '甲子園球場', 'team_a_id' => '4', 'team_b_id' => '9', ],
            ['start_time' => '2018-06-11 12:00:00', 'place' => '甲子園球場', 'team_a_id' => '13', 'team_b_id' => '23', ],
            ['start_time' => '2018-06-11 15:00:00', 'place' => '甲子園球場', 'team_a_id' => '24', 'team_b_id' => '31', ],
            ['start_time' => '2018-06-12 09:00:00', 'place' => '甲子園球場', 'team_a_id' => '48', 'team_b_id' => '41', ],
            ['start_time' => '2018-06-12 12:00:00', 'place' => '甲子園球場', 'team_a_id' => '5', 'team_b_id' => '44', ],
            ['start_time' => '2018-06-12 15:00:00', 'place' => '甲子園球場', 'team_a_id' => '12', 'team_b_id' => '15', ],
            ['start_time' => '2018-06-13 09:00:00', 'place' => '甲子園球場', 'team_a_id' => '10', 'team_b_id' => '20', ],
            ['start_time' => '2018-06-13 12:00:00', 'place' => '甲子園球場', 'team_a_id' => '30', 'team_b_id' => '40', ],
            ['start_time' => '2018-06-13 15:00:00', 'place' => '甲子園球場', 'team_a_id' => '33', 'team_b_id' => '43', ],
            ['start_time' => '2018-06-14 09:00:00', 'place' => '甲子園球場', 'team_a_id' => '32', 'team_b_id' => '47', ],
            ['start_time' => '2018-06-14 12:00:00', 'place' => '甲子園球場', 'team_a_id' => '25', 'team_b_id' => '34', ],
            ['start_time' => '2018-06-14 15:00:00', 'place' => '甲子園球場', 'team_a_id' => '11', 'team_b_id' => '27', ],
            ['start_time' => '2018-06-15 09:00:00', 'place' => '甲子園球場', 'team_a_id' => '31', 'team_b_id' => '42', ],
            ['start_time' => '2018-06-15 12:00:00', 'place' => '甲子園球場', 'team_a_id' => '21', 'team_b_id' => '32', ],
            ['start_time' => '2018-06-15 15:00:00', 'place' => '甲子園球場', 'team_a_id' => '14', 'team_b_id' => '22', ],
            ['start_time' => '2018-06-16 09:00:00', 'place' => '甲子園球場', 'team_a_id' => '17', 'team_b_id' => '26', ],
            ['start_time' => '2018-06-16 12:00:00', 'place' => '甲子園球場', 'team_a_id' => '16', 'team_b_id' => '24', ],
            ['start_time' => '2018-06-16 15:00:00', 'place' => '甲子園球場', 'team_a_id' => '10', 'team_b_id' => '22', ],
            ['start_time' => '2018-06-17 09:00:00', 'place' => '甲子園球場', 'team_a_id' => '41', 'team_b_id' => '32', ],
            ['start_time' => '2018-06-17 12:00:00', 'place' => '甲子園球場', 'team_a_id' => '14', 'team_b_id' => '24', ],
            ['start_time' => '2018-06-17 15:00:00', 'place' => '甲子園球場', 'team_a_id' => '12', 'team_b_id' => '21', ],
            ['start_time' => '2018-06-18 09:00:00', 'place' => '甲子園球場', 'team_a_id' => '16', 'team_b_id' => '26', ],
            ['start_time' => '2018-06-18 12:00:00', 'place' => '甲子園球場', 'team_a_id' => '33', 'team_b_id' => '23', ],
            ['start_time' => '2018-06-18 15:00:00', 'place' => '甲子園球場', 'team_a_id' => '44', 'team_b_id' => '43', ],
            ['start_time' => '2018-06-18 18:00:00', 'place' => '甲子園球場', 'team_a_id' => '19', 'team_b_id' => '22', ],
        ]);
    }
}
