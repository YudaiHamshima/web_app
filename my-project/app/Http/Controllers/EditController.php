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
        $validated = $request->validate([
            'task_name' => ['required','max:20'],
            'deadline' => ['required'],
            'remarks' => ['max:200']
        ],
            [
                'task_name.required' => 'タスク名が未入力です',
                'task_name.max' => 'タスク名は20文字以内です',
                'deadline.required' => '期日が未入力です',
                'remarks.max' => '備考は200文字以内です'
            ]);

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
