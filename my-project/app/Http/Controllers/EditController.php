<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class EditController extends Controller
{
    public function show_edit_form($id)
    {
        $task = DB::table('tasks')->where('id', $id)->first();

        return view('edit', [
            'id' => $id,
            'task_name' => $task->task_name,
            'deadline' => $task->deadline,
            'remarks' => $task->remarks
        ]);
    }

    public function edit_task(Request $request, $id)
    {

        DB::table('tasks')
            ->where('id', $id)
            ->update([
            'task_name' => $request->input('task_name'),
            'deadline' => $request->input('deadline'),
            'remarks' => $request->input('remarks'),
            'edit_date' => now()->format('Y-m-d')
        ]);

        $tasks = DB::table('tasks')->get();

        return view('tasklist', [
            'tasks' => $tasks
        ]);
    }

}
