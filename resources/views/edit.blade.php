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
            <h1>Modifier</h1>
        </header>

        <main>
            <form method="POST">
                @csrf

                <label for="title">Title</label>
                <input type="text" name="title" id="title"  value="{{$task->title}}">

                <label for="description">Description</label>
                <textarea name="description" id="description" cols="30" rows="10">{{$task->description}}</textarea>

                <button type="submit">Modifier</button>
            </form>
        </main>
    </body>
</html>