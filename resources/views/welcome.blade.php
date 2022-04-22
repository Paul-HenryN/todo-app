<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body>
        <header>
            <h1>To-do List</h1>
        </header>

        <main>
            <div class="todo-list container">
                @foreach($tasks as $task)
                <a href="/task/{{$task->id}}">
                    <div class="card">
                        <h2>&plus; {{$task->title}}</h2>
                    </div>
                </a>
                @endforeach
            </div>

            <a href="/add">Add</a>
        </main>  
    </body>
</html>