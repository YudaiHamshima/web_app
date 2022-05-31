<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>

        @foreach($tasks as $task)
        <p>タスク<p>
         {{ $task->task_name }}
         <p>----<p>
        @endforeach


    </body>
</html>
