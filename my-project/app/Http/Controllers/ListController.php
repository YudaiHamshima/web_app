<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ListController extends Controller
{
    public function show_task()
    {
        # $task_name = DB::select('select task_name from tasks where id = ?', [1]);

        $task_name = DB::table('tasks')->get('task_name');

        # task_name = DB::table('tasks')->value('task_name');

        # $task_name = DB::select('select task_name from tasks where id = ?', [1]);

        #foreach ($task_name as $task) {
        #    echo $task->task_name;
        #}

        return view('list', [
            'task_name' => $task_name
        ]);
    }
}
