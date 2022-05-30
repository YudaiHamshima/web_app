<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="{{ asset('css/list.css') }}">
        <title></title>
    </head>
    <body>
        <header>
            <a class="btn return_list" href="{{ url('/create') }}">新規作成</a>
        </header>
        <div class="main">

            @foreach ($tasks as $task)
                <div class="task-box">
                    <div class="update">
                        <button class="edit">Edit</button>
                        <button class="delete">Delete</button>
                    </div>
                    <div class="task-contents">
                        <p>タスク名</p>
                        <p class="task-name">{{ $task->task_name }}</p>
                        <p>期日</p>
                        <p class="task-name">{{ $task->deadline }}</p>
                        <p>備考</p>
                        <p class="task-name">{{ $task->remarks }}</p>
                    </div>
                </div>
            @endforeach

        </div>
    </body>
</html>
