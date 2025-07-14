<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Worker;

class WorkerController extends Controller
{
    public function index()
    {
        $workers = Worker::all();
        return view('workers.index', compact('workers'));
    }

    public function show(Worker $worker){
        return view('workers.show', compact('worker'));
    }
    public function create()
    {
        $worker = [
            'name' => 'Mark',
            'surname' => 'Markov',
            'email' => 'Markov@mail.ru',
            'age' => 20,
            'description' => 'Im Mark',
            'is_married' => false,
        ];

        Worker::create($worker);

        return 'Ivan was created';
    }
    public function update()
    {
        $worker = Worker::find(2);
        $worker->update([
            'name' => 'Karl',
            'surname' => 'Petrov',
        ]);
        return 'Was updated';
    }
    public function delete()
    {
        $worker = Worker::find(2);
        $worker->delete();
        return 'Was deleted';
    }
}

