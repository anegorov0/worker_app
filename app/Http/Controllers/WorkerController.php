<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WorkerController extends Controller
{
    public function index()
    {
        return 'this is worker index';
    }

    public function show(){
        return 'this is worker show';
    }
}
