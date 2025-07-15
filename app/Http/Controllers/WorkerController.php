<?php

namespace App\Http\Controllers;

use App\Http\Requests\Worker\StoreRequest;
use App\Http\Requests\Worker\UpdateRequest;
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
        return view('workers.create');

    }
    public function store(StoreRequest $request)
    {
        $data = $request->validated();
        $data['is_married'] = isset($data['is_married']) ? 1 : 0;
        Worker::create($data);
        return redirect()->route('workers.index');
    }

    public function edit(Worker $worker)
    {
        return view('workers.edit', compact('worker'));

    }
    public function update(Worker $worker, UpdateRequest $request)
    {
        $data = $request->validated();
        $data['is_married'] = isset($data['is_married']) ? 1 : 0;
        $worker->update($data);
        return redirect()->route('workers.show', $worker->id);
    }
    public function delete()
    {
        $worker = Worker::find(2);
        $worker->delete();
        return 'Was deleted';
    }
}

