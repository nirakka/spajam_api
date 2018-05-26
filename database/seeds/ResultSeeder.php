<?php

use Illuminate\Database\Seeder;

class ResultSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('results')->truncate();
        DB::table('results')->insert([
            ['game_id' => '1', 'team_a_score' => '4', 'team_b_score' => '2', 'win_team_id' => '0', ],
            ['game_id' => '2', 'team_a_score' => '3', 'team_b_score' => '4', 'win_team_id' => '0', ],
            ['game_id' => '3', 'team_a_score' => '3', 'team_b_score' => '5', 'win_team_id' => '0', ],
            ['game_id' => '4', 'team_a_score' => '7', 'team_b_score' => '5', 'win_team_id' => '0', ],
            ['game_id' => '5', 'team_a_score' => '1', 'team_b_score' => '5', 'win_team_id' => '0', ],
            ['game_id' => '6', 'team_a_score' => '3', 'team_b_score' => '1', 'win_team_id' => '0', ],
            ['game_id' => '7', 'team_a_score' => '2', 'team_b_score' => '1', 'win_team_id' => '0', ],
            ['game_id' => '8', 'team_a_score' => '3', 'team_b_score' => '4', 'win_team_id' => '0', ],
            ['game_id' => '9', 'team_a_score' => '4', 'team_b_score' => '1', 'win_team_id' => '0', ],
            ['game_id' => '10', 'team_a_score' => '5', 'team_b_score' => '2', 'win_team_id' => '0', ],
            ['game_id' => '11', 'team_a_score' => '32', 'team_b_score' => '5', 'win_team_id' => '0', ],
            ['game_id' => '12', 'team_a_score' => '10', 'team_b_score' => '5', 'win_team_id' => '0', ],
            ['game_id' => '13', 'team_a_score' => '8', 'team_b_score' => '3', 'win_team_id' => '0', ],
            ['game_id' => '14', 'team_a_score' => '9', 'team_b_score' => '4', 'win_team_id' => '0', ],
            ['game_id' => '15', 'team_a_score' => '5', 'team_b_score' => '7', 'win_team_id' => '0', ],
            ['game_id' => '16', 'team_a_score' => '2', 'team_b_score' => '5', 'win_team_id' => '0', ],
            ['game_id' => '17', 'team_a_score' => '3', 'team_b_score' => '2', 'win_team_id' => '0', ],
            ['game_id' => '18', 'team_a_score' => '31', 'team_b_score' => '1', 'win_team_id' => '0', ],
            ['game_id' => '19', 'team_a_score' => '1', 'team_b_score' => '2', 'win_team_id' => '0', ],
            ['game_id' => '20', 'team_a_score' => '13', 'team_b_score' => '15', 'win_team_id' => '0', ],
            ['game_id' => '21', 'team_a_score' => '3', 'team_b_score' => '2', 'win_team_id' => '0', ],
            ['game_id' => '22', 'team_a_score' => '3', 'team_b_score' => '2', 'win_team_id' => '0', ],
            ['game_id' => '23', 'team_a_score' => '5', 'team_b_score' => '3', 'win_team_id' => '0', ],
            ['game_id' => '24', 'team_a_score' => '3', 'team_b_score' => '5', 'win_team_id' => '0', ],
        ]);
    }
}
