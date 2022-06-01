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

            @isset ($shown_tasks_deadline)
                <h2>{{ $shown_tasks_deadline }}までのタスク一覧</h2>
            @endisset

            <div class="task-box">
                @foreach ($tasks as $task)
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
                <form action="/show_until" class="show-until" method="get">
                    <input name="deadline" class="btn show-until-date" type="date">
                    <input class="btn show-until-show" type="submit" value="までのタスクを表示">
                </form>
            </div>
            @isset ($shown_tasks_deadline)
                <a class="btn show_all_tasks" href="/list">全タスク表示</a>
            @endisset

        </div>

    </body>
</html>
