<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show Posts</title>
    <link rel="stylesheet" href="/css/Style.css">

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
        <a href="/index"><< Inicio</a> 
        <a href="/posts/{{ $post->id }}/edit">Editar >></a>
        <form action="/posts/{{ $post->id }}" method="POST" style="display:inline-block;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn" onclick="return confirm('Estas seguro que quieres borrar el post?')">Eliminar</button>   
        </form>
        <div>
            <h4>Comentarios</h4>
            @foreach ($comments as $comment)
                <div>{{ $comment->content }}</div>
                <small style="color: #aaa">{{ $comment->name }}</small>
                <hr>
            @endforeach
        </div>
        <form method="POST" action="/posts/{{ $post->id }}" style="display:flex;flex-direction:column">
            @csrf
            <input type="text" name="name" Placeholder="Name">
            <input type="number" name="post_id" hidden value="{{ $comment->post_id }}">
            <textarea name="content" cols="30" rows="10" placeholder="Escribe tu comentario"></textarea>
            <button type="submit">Guardar</button>
        </form>
    </div>
</body>
</html>
    