<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ListController extends Controller
{

    public function show_task($id)
    {
        $task_name = DB::table('tasks')->where('id',$id)->value('task_name');
        $deadline = DB::table('tasks')->where('id',$id)->value('deadline');
        $remarks = DB::table('tasks')->where('id',$id)->value('remarks');

        return view('list', [
            'task_name' => $task_name,
            'deadline' => $deadline,
            'remarks' => $remarks
        ]);
    }


    public function show_task_test()
    {
        $tasks = DB::table('tasks')->get();

        return view('list', [
            'tasks' => $tasks
        ]);
    }

    public function read_test()
    {
        $tasks = DB::table('tasks')->get();

        return view('readtest', [
            'tasks' => $tasks
        ]);
    }


}
