<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear post</title>
    <link rel="stylesheet" href="/css/navbar.css">
</head>
<body>
    <div class="container">
        <h1 class="main-title">Nuevo post</h1>
        <form method="POST" action="/posts">
            @csrf
            <div class="post">
                <label>Titulo</label>
                <input type="text" name="title" required>
            </div>
            <div class="summary">
                <label >Resumen</label>
                <textarea class="text-content" name="excerpt" placeholder="Resumen del contenido" required maxlength="1000"></textarea>
            </div>
            <div class="content">
                <label>Texto</label>
                <textarea class="text-content" name="content" placeholder="Escribe aquí el contenido" required maxlength="3000"></textarea>
            </div>
            <div>
                <button type="submit" class="button">Guardar</button>
            </div>
        </form>
    </div>
</body>
</html>
    
