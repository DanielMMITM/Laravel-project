<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar post</title>
    <link rel="stylesheet" href="/css/Style.css">
</head>
<body>
    <div class="container">
        <section>
            <h1 class="main-title">Editar el post</h1>
        </section>
        <form method="POST" action="/posts/{{ $post->id }}">
            @csrf
            @method('PATCH')
            <div class="post">
                <label>Titulo</label>
                <input type="text" required value="{{ $post->title }}" name="title">
            </div>
            <div class="summary">
                <label >Resumen</label>
                <textarea class="text-content" placeholder="Resumen del contenido" required maxlength="1000" name="excerpt">{{ $post->excerpt }}</textarea>
            </div>
            <div class="content">
                <label>Texto</label>
                <textarea class="text-content" placeholder="Escribe aquí el contenido" required maxlength="3000" name="content">{{ $post->content }}</textarea>
            </div>
            <div>
                <button type="submit" class="button">Actualizar</button>
            </div>
        </form>
        <a href="/posts/{{ $post->id }}"><< Cancelar</a>
    </div>
</body>
</html>