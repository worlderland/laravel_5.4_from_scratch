<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Support\Facades\DB;

//Working function
// Route::get('/', function () {

//     $tasks = DB::table('tasks')->latest()->get(); //DB query to fetch data from database (in this case table tasks)

//     return view('welcome', compact('tasks'));
// });

Route::get('/tasks', function () {

    $tasks = DB::table('tasks')->latest()->get(); //DB query to fetch data from database (in this case table tasks)

    return view('tasks.index', compact('tasks'));
});


Route::get('/tasks/{task}', function ($id) {

    $task = DB::table('tasks')->find($id);

    // dd($task); die and dump function, Laravel helper

    return view('tasks.show', compact('task'));
});