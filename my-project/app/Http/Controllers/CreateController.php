<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class CreateController extends Controller
{
    public function create_task($id)
    {
        DB::table('tasks')->insert([
            'id' => $id,
            'task_name' => 'souzi',
            'deadline' => '2022-06-01',
            'remarks' => 'ASAP!'
        ]);

        return view('create');
    }

}
