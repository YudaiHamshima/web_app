<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="{{ asset('css/create.css') }}">
        <title></title>
    </head>
    <body>
            <a class="btn return_list" href="{{ url('/list') }}">一覧に戻る</a>

            <p>タスク名</p>
            <input class="taskname" type="text">
            <p>期日</p>
            <input type="date">
            <p>備考</p>
            <textarea class="tasktxt" cols="50" rows="25"></textarea>

            <input class="btn return_list" type="submit" value="登録" onClick="{{ url('/list') }}">
        </div>
    </body>
</html>
