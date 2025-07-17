<?php

namespace App\Console\Commands;

use App\Models\Position;
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
//        $this->prepareData();
        $worker = Worker::find(1);
        $position = Position::find(1);
        dd($position->workers->toArray());

        return 0;
    }
    private function prepareData()
    {

        $position1 = Position::create([
            'title' => 'Developer',
        ]);
//        $position2 = Position::create([
//            'title' => 'Manager',
//        ]);
        $position3 = Position::create([
            'title' => 'HR',
        ]);

        $workerData1 = [
            'name' => 'Denis',
            'surname' => 'Gusev',
            'email' => 'gusev@mail.ru',
            'position_id' => $position1->id,
            'age' => 35,
            'description' => 'Gusev power',
            'is_married' => false,

        ];
        $workerData2 = [
            'name' => 'Zaur',
            'surname' => 'Zaurov',
            'email' => 'zaur@mail.ru',
            'position_id' => $position1->id,
            'age' => 39,
            'description' => 'Zaur power',
            'is_married' => false,

        ];
        $workerData3 = [
            'name' => 'Kate',
            'surname' => 'Polikova',
            'email' => 'kate@mail.ru',
            'position_id' => $position3->id,
            'age' => 19,
            'description' => 'kate power',
            'is_married' => false,

        ];

        $worker1 = Worker::create($workerData1);
        $worker2 = Worker::create($workerData2);
        $worker3 = Worker::create($workerData3);

        $profileData1 = [
            'worker_id' => $worker1->id,
            'city' => 'Tashkent',
            'skill' => 'Programmer',
            'experience' => 7,
            'finish_study' => '2010-07-01',
        ];
        $profileData2 = [
            'worker_id' => $worker2->id,
            'city' => 'Moscow',
            'skill' => 'Programmer',
            'experience' => 12,
            'finish_study' => '2007-07-01',
        ];
        $profileData3 = [
            'worker_id' => $worker3->id,
            'city' => 'Samare',
            'skill' => 'MassNaim',
            'experience' => 1,
            'finish_study' => '2027-07-01',
        ];

        Profile::create($profileData1);
        Profile::create($profileData2);
        Profile::create($profileData3);

    }
}
