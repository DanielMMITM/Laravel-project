<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', function () {
    $posts = [
        [
            'title' => 'Novedades de Laravel 9.',
            'excerpt' => 'Cillum nulla magna ut laborist aeaeg agjwejga egjagjweg wegjawengg gjgja gjngjg ajgngj jap paoaf agumr jgjgit af fr g rgr gagrgagea',
        ],
        [
            'title' => 'Curso de Laravel 9.',
            'excerpt' => 'Cillum nulla magna ut laborist aeaeg agjwejga egjagjweg wegjawengg gjgja gjngjg ajgngj jap paoaf agumr jgjgit af fr g rgr gagrgagea',
        ],
        [
            'title' => 'Manejo basico de Eloquent',
            'excerpt' => 'Cillum nulla magna ut laborist aeaeg agjwejga egjagjweg wegjawengg gjgja gjngjg ajgngj jap paoaf agumr jgjgit af fr g rgr gagrgagea',
        ],
    ];

    // return view('index', [
    //     'posts' => $posts
    // ]);

    // return view('index')->with([
    //     'posts' => $posts,
    // ]);

    //ESTO SE HACE PARA PASAR UNA SOLA VARIABLE, SE PUEDE ENCADENAR MAS METODOS WITH Y PASAR MAS VARIABLES
    return view('index')->with('posts', $posts);
});