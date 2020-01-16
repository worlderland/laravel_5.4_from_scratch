<?php

use App\Task;

Route::get('/tasks', function () {

    //$tasks = DB::table('tasks')->latest()->get(); //DB query to fetch data from database (in this case table tasks)

    $tasks = Task::all();

    return view('tasks.index', compact('tasks'));
});


Route::get('/tasks/{task}', function ($id) {

    $task = Task::find($id);

    

    // dd($task); die and dump function, Laravel helper

    return view('tasks.show', compact('task'));
});