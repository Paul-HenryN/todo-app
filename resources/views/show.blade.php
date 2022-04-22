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
            <h1>{{$task->title}}</h1>
        </header>

        <main>
            <p>{{$task->description}}</p>
            <a href="/">Retour</a>
            <a href="/edit/{{$task->id}}">Modifier</a>
            <a href="/delete/{{$task->id}}">Supprimer</a>
        </main>
    </body>
</html>