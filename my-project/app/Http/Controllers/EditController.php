<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class EditController extends Controller
{
    public function show_edit_form()
    {
        return view('edit');
    }

    public function edit_task(Request $request)
    {

        DB::table('tasks')->insert([
            'task_name' => $request->input('task_name'),
            'deadline' => $request->input('deadline'),
            'remarks' => $request->input('remarks'),
            'registration_date' => now()->format('Y-m-d')
        ]);

        $tasks = DB::table('tasks')->get();

        return view('tasklist', [
            'tasks' => $tasks
        ]);
    }

}
