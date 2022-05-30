<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class CreateController extends Controller
{

    public function create_task(Request $request)
    {

        DB::table('tasks')->insert([
            'task_name' => $request->input('task_name'),
            'deadline' => $request->input('deadline'),
            'remarks' => $request->input('remarks'),
            'registration_date' => now()->format('Y-m-d')
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
