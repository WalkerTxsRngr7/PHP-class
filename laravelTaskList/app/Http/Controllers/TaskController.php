<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index(){
        // $aryList = [
        //     "Go Shopping",
        //     "Feed Dog"
        // ];
        $aryList = \App\Task::all();

        return view('tasks.index', [
            'title' => request('aTitle'),
            'taskList' => $aryList
        ]);
    }
}
