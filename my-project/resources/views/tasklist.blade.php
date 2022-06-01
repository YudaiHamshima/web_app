<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="{{ asset('css/list.css') }}">
        <title></title>
    </head>
    <body>
        <header>
            <a class="btn return_list" href="{{ url('/create_form') }}">新規作成</a>
        </header>

        <div class="main">
            <div class="task-box">
                @foreach($tasks as $task)
                    <div class="update">
                        <a class="btn update" href="/edit_form/{{ $task->id }}">Edit</a>
                        <a class="btn update" href="/delete/{{ $task->id }}">Delete</a>
                    </div>
                    <div class="task-contents">
                        <p>タスク名</p>
                        <p class="task-name">{{ $task->task_name }}</p>
                        <p>期日</p>
                        <p class="task-name">{{ $task->deadline }}</p>
                        <p>備考</p>
                        <p class="task-name">{{ $task->remarks }}</p>
                    </div>
                @endforeach
            </div>
        </div>

    </body>
</html>
