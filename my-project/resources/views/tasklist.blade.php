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

            <div class="sort-section">
                <a class="btn sort-by-deadline" href="/sort_by_deadline">期日順</a>
                <form action="/show_until_sction" class="show-until">
                    <input class="btn show-until-date" type="date">
                    <input class="btn show-until-show" type="submit" value="までのタスクを表示">
                </form>
            </div>

        </div>

    </body>
</html>
