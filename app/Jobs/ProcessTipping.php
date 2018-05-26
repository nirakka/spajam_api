<?php

namespace App\Jobs;

use App\Team;
use App\Tipping;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

/**
 * @property Tipping tipping
 * @property  id
 *
 */
class ProcessTipping implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $team;
    /**
     * Create a new job instance.
     *
     * @param Team $team
     */
    public function __construct(Team $team)
    {
        //
        $this->team = $team;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
//        //
        $tipping = $this->team->tipping->sum('money');
        $team = Team::findOrFail($this->team->id);
        $team->update(['sum_money'=>$tipping]);
    }
}
