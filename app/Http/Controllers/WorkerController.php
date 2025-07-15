<?php

namespace App\Http\Controllers;

use App\Http\Requests\Worker\IndexRequest;
use App\Http\Requests\Worker\StoreRequest;
use App\Http\Requests\Worker\UpdateRequest;
use Illuminate\Http\Request;
use App\Models\Worker;

class WorkerController extends Controller
{
    public function index(IndexRequest $request)
    {
        $data = $request->validated();
        $workerQuery = Worker::query();
        if (isset($data['name'])) {
            $workerQuery->where('name', 'like', '%' . $data['name'] . '%');
        }
        if (isset($data['surname'])) {
            $workerQuery->where('surname', 'like', '%' . $data['surname'] . '%');
        }
        if (isset($data['email'])) {
            $workerQuery->where('email', 'like', '%' . $data['email'] . '%');
        }
        if (isset($data['from'])) {
            $workerQuery->where('age', '>', $data['from']);
        }
        if (isset($data['to'])) {
            $workerQuery->where('age', '<', $data['to']);
        }
        if (isset($data['description'])) {
            $workerQuery->where('description', 'like', '%' . $data['description'] . '%');
        }
        if (isset($data['is_married'])) {
            $workerQuery->where('is_married', true);
        }
        $workers = $workerQuery->paginate(1);
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
    public function delete(Worker $worker)
    {
        $worker->delete();
        return redirect()->route('workers.index');
    }
}

