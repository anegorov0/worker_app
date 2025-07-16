<?php

namespace App\Console\Commands;

use App\Models\Profile;
use Illuminate\Console\Command;
use App\Models\Worker;


class DevCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'develop';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command develops';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->prepareData();

        $workers = Worker::find(1);
        $profile = Profile::find(1);
        dd($workers->profile->toArray());

        return 0;
    }
    private function prepareData()
    {
        $workerData = [
            'name' => 'Denis',
            'surname' => 'Gusev',
            'email' => 'gusev@mail.ru',
            'age' => 35,
            'description' => 'Gusev power',
            'is_married' => false,

        ];

        $worker = Worker::create($workerData);

        $profileData = [
            'worker_id' => $worker->id,
            'city' => 'Tashkent',
            'skill' => 'Programmer',
            'experience' => 7,
            'finish_study' => '2010-07-01',
        ];

        $profile = Profile::create($profileData);

        dd($profile->id);
    }
}
