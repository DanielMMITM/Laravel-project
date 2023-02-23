<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show Posts</title>
</head>
<body>
    <div class="container">
        <article>
            <h1>{{ $post->title }}</h1>
            <h2>Resumen</h3>
            <p>{{ $post->excerpt }}</p>
            <h2>Contenido</h3>   
            <p>{{ $post->content }}</p>   
        </article>
        <a href="/"><< Inicio</a>     
    </div>
</body>
</html>
    