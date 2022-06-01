<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="{{ asset('css/create.css') }}">
        <title></title>
    </head>
    <body>

        <a class="btn return_list" href="{{ url('/list') }}">一覧に戻る</a>

        <form action="/edit" method="get">
            <p>タスク名</p>
            <input name="task_name" class="taskname" type="text" value="{{ $task_name }}">
            <p>期日</p>
            <input name="deadline" type="date" value="{{ $deadline }}">
            <p>備考</p>
            <textarea name="remarks" class="tasktxt" cols="50" rows="25">{{ $remarks }}</textarea>
            <input type="submit" class="btn return_list" value="登録">
        </form>

    </body>
</html>
