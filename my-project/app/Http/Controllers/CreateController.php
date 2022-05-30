<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class CreateController extends Controller
{
    public function create_task($task_name, $deadline, $remarks)
    {
        DB::table('tasks')->insert([
            'id' => $id,
            'task_name' => $task_name,
            'deadline' => $deadline,
            'remarks' => $reamrks
        ]);

        return view('list');
    }


    public function create_task2(Request $request, $id)
    {
        DB::table('tasks')->insert([
            'id' => $id,
            'task_name' => $request->input('task_name'),
            'deadline' => $request->input('deadline'),
            'remarks' => $request->input('reamrks')
        ]);

        return view('create');
    }


    public function create_task_test(Request $request)
    {
        $task_name = $request->input('task_name');

        return view('create')->with([
            "task_name" => $task_name
         ]);
    }

}
