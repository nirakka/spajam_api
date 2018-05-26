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
            ['id' => '1', 'start_time' => '2018-08-08 09:00:00', 'place' => '甲子園球場', 'team_a_id' => '27', 'team_b_id' => '44' ],
            ['id' => '2', 'start_time' => '2018-08-08 12:00:00', 'place' => '甲子園球場', 'team_a_id' => '40', 'team_b_id' => '42' ],
            ['id' => '3', 'start_time' => '2018-08-08 15:00:00', 'place' => '甲子園球場', 'team_a_id' => '20', 'team_b_id' => '23' ],
            ['id' => '4', 'start_time' => '2018-08-09 09:00:00', 'place' => '甲子園球場', 'team_a_id' => '10', 'team_b_id' => '4' ],
            ['id' => '5', 'start_time' => '2018-08-09 12:00:00', 'place' => '甲子園球場', 'team_a_id' => '18', 'team_b_id' => '9' ],
            ['id' => '6', 'start_time' => '2018-08-09 15:00:00', 'place' => '甲子園球場', 'team_a_id' => '11', 'team_b_id' => '19' ],
            ['id' => '7', 'start_time' => '2018-08-09 18:00:00', 'place' => '甲子園球場', 'team_a_id' => '6', 'team_b_id' => '41' ],
            ['id' => '8', 'start_time' => '2018-08-10 09:00:00', 'place' => '甲子園球場', 'team_a_id' => '13', 'team_b_id' => '25' ],
            ['id' => '9', 'start_time' => '2018-08-10 12:00:00', 'place' => '甲子園球場', 'team_a_id' => '36', 'team_b_id' => '12' ],
            ['id' => '10', 'start_time' => '2018-08-10 15:00:00', 'place' => '甲子園球場', 'team_a_id' => '8', 'team_b_id' => '33' ],
            ['id' => '11', 'start_time' => '2018-08-10 18:00:00', 'place' => '甲子園球場', 'team_a_id' => '43', 'team_b_id' => '47' ],
            ['id' => '12', 'start_time' => '2018-08-11 09:00:00', 'place' => '甲子園球場', 'team_a_id' => '23', 'team_b_id' => '24' ],
            ['id' => '13', 'start_time' => '2018-08-11 12:00:00', 'place' => '甲子園球場', 'team_a_id' => '25', 'team_b_id' => '26' ],
            ['id' => '14', 'start_time' => '2018-08-11 15:00:00', 'place' => '甲子園球場', 'team_a_id' => '27', 'team_b_id' => '28' ],
            ['id' => '15', 'start_time' => '2018-08-11 18:00:00', 'place' => '甲子園球場', 'team_a_id' => '28', 'team_b_id' => '30' ],
            ['id' => '16', 'start_time' => '2018-08-12 09:00:00', 'place' => '甲子園球場', 'team_a_id' => '31', 'team_b_id' => '32' ],
            ['id' => '17', 'start_time' => '2018-08-12 12:00:00', 'place' => '甲子園球場', 'team_a_id' => '33', 'team_b_id' => '34' ],
            ['id' => '18', 'start_time' => '2018-08-12 15:00:00', 'place' => '甲子園球場', 'team_a_id' => '35', 'team_b_id' => '36' ],
            ['id' => '19', 'start_time' => '2018-08-13 09:00:00', 'place' => '甲子園球場', 'team_a_id' => '37', 'team_b_id' => '38' ],
            ['id' => '20', 'start_time' => '2018-08-13 12:00:00', 'place' => '甲子園球場', 'team_a_id' => '39', 'team_b_id' => '40' ],
            ['id' => '21', 'start_time' => '2018-08-13 15:00:00', 'place' => '甲子園球場', 'team_a_id' => '41', 'team_b_id' => '42' ],
            ['id' => '22', 'start_time' => '2018-09-08 09:00:00', 'place' => '甲子園球場', 'team_a_id' => '43', 'team_b_id' => '44' ],
            ['id' => '23', 'start_time' => '2018-09-08 12:00:00', 'place' => '甲子園球場', 'team_a_id' => '45', 'team_b_id' => '46' ],
            ['id' => '24', 'start_time' => '2018-09-08 15:00:00', 'place' => '甲子園球場', 'team_a_id' => '47', 'team_b_id' => '48' ],
            ['id' => '25', 'start_time' => '2018-09-09 09:00:00', 'place' => '甲子園球場', 'team_a_id' => '49', 'team_b_id' => '2' ],
            ['id' => '26', 'start_time' => '2018-09-09 12:00:00', 'place' => '甲子園球場', 'team_a_id' => '3', 'team_b_id' => '8' ],
            ['id' => '27', 'start_time' => '2018-09-09 15:00:00', 'place' => '甲子園球場', 'team_a_id' => '12', 'team_b_id' => '27' ],
            ['id' => '28', 'start_time' => '2018-09-10 09:00:00', 'place' => '甲子園球場', 'team_a_id' => '28', 'team_b_id' => '7' ],
            ['id' => '29', 'start_time' => '2018-09-10 12:00:00', 'place' => '甲子園球場', 'team_a_id' => '21', 'team_b_id' => '19' ],
            ['id' => '30', 'start_time' => '2018-09-10 15:00:00', 'place' => '甲子園球場', 'team_a_id' => '11', 'team_b_id' => '26' ],
            ['id' => '31', 'start_time' => '2018-09-11 09:00:00', 'place' => '甲子園球場', 'team_a_id' => '4', 'team_b_id' => '9' ],
            ['id' => '32', 'start_time' => '2018-09-11 12:00:00', 'place' => '甲子園球場', 'team_a_id' => '13', 'team_b_id' => '23' ],
            ['id' => '33', 'start_time' => '2018-09-11 15:00:00', 'place' => '甲子園球場', 'team_a_id' => '24', 'team_b_id' => '31' ],
            ['id' => '34', 'start_time' => '2018-09-12 09:00:00', 'place' => '甲子園球場', 'team_a_id' => '48', 'team_b_id' => '41' ],
            ['id' => '35', 'start_time' => '2018-09-12 12:00:00', 'place' => '甲子園球場', 'team_a_id' => '5', 'team_b_id' => '44' ],
            ['id' => '36', 'start_time' => '2018-09-12 15:00:00', 'place' => '甲子園球場', 'team_a_id' => '12', 'team_b_id' => '15' ],
            ['id' => '37', 'start_time' => '2018-09-13 09:00:00', 'place' => '甲子園球場', 'team_a_id' => '10', 'team_b_id' => '20' ],
            ['id' => '38', 'start_time' => '2018-09-13 12:00:00', 'place' => '甲子園球場', 'team_a_id' => '30', 'team_b_id' => '40' ],
            ['id' => '39', 'start_time' => '2018-09-13 15:00:00', 'place' => '甲子園球場', 'team_a_id' => '33', 'team_b_id' => '43' ],
            ['id' => '40', 'start_time' => '2018-09-14 09:00:00', 'place' => '甲子園球場', 'team_a_id' => '32', 'team_b_id' => '47' ],
            ['id' => '41', 'start_time' => '2018-09-14 12:00:00', 'place' => '甲子園球場', 'team_a_id' => '25', 'team_b_id' => '34' ],
            ['id' => '42', 'start_time' => '2018-09-14 15:00:00', 'place' => '甲子園球場', 'team_a_id' => '11', 'team_b_id' => '27' ],
            ['id' => '43', 'start_time' => '2018-09-15 09:00:00', 'place' => '甲子園球場', 'team_a_id' => '31', 'team_b_id' => '42' ],
            ['id' => '44', 'start_time' => '2018-09-15 12:00:00', 'place' => '甲子園球場', 'team_a_id' => '21', 'team_b_id' => '32' ],
            ['id' => '45', 'start_time' => '2018-09-15 15:00:00', 'place' => '甲子園球場', 'team_a_id' => '14', 'team_b_id' => '22' ],
            ['id' => '46', 'start_time' => '2018-09-16 09:00:00', 'place' => '甲子園球場', 'team_a_id' => '17', 'team_b_id' => '26' ],
            ['id' => '47', 'start_time' => '2018-09-16 12:00:00', 'place' => '甲子園球場', 'team_a_id' => '16', 'team_b_id' => '24' ],
            ['id' => '48', 'start_time' => '2018-09-16 15:00:00', 'place' => '甲子園球場', 'team_a_id' => '10', 'team_b_id' => '22' ],
            ['id' => '49', 'start_time' => '2018-09-17 09:00:00', 'place' => '甲子園球場', 'team_a_id' => '41', 'team_b_id' => '32' ],
            ['id' => '50', 'start_time' => '2018-09-17 12:00:00', 'place' => '甲子園球場', 'team_a_id' => '14', 'team_b_id' => '24' ],
            ['id' => '51', 'start_time' => '2018-09-17 15:00:00', 'place' => '甲子園球場', 'team_a_id' => '12', 'team_b_id' => '21' ],
            ['id' => '52', 'start_time' => '2018-09-18 09:00:00', 'place' => '甲子園球場', 'team_a_id' => '16', 'team_b_id' => '26' ],
            ['id' => '53', 'start_time' => '2018-09-18 12:00:00', 'place' => '甲子園球場', 'team_a_id' => '33', 'team_b_id' => '23' ],
            ['id' => '54', 'start_time' => '2018-09-18 15:00:00', 'place' => '甲子園球場', 'team_a_id' => '44', 'team_b_id' => '43' ],
            ['id' => '55', 'start_time' => '2018-09-18 18:00:00', 'place' => '甲子園球場', 'team_a_id' => '19', 'team_b_id' => '22' ],
        ]);
    }
}
