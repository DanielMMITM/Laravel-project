<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function show(){
        $posts = DB::table('posts')
            ->select('title', 'excerpt')
            ->get();
        // $posts = [
        //     [
        //         'title' => 'Novedades de Laravel 9.',
        //         'excerpt' => 'Cillum nulla magna ut laborist aeaeg agjwejga egjagjweg wegjawengg gjgja gjngjg ajgngj jap paoaf agumr jgjgit af fr g rgr gagrgagea',
        //     ],
        //     [
        //         'title' => 'Curso de Laravel 9.',
        //         'excerpt' => 'Cillum nulla magna ut laborist aeaeg agjwejga egjagjweg wegjawengg gjgja gjngjg ajgngj jap paoaf agumr jgjgit af fr g rgr gagrgagea',
        //     ],
        //     [
        //         'title' => 'Manejo basico de Eloquent',
        //         'excerpt' => 'Cillum nulla magna ut laborist aeaeg agjwejga egjagjweg wegjawengg gjgja gjngjg ajgngj jap paoaf agumr jgjgit af fr g rgr gagrgagea',
        //     ],
        // ];
    
        // // return view('index', [
        // //     'posts' => $posts
        // // ]);
    
        // // return view('index')->with([
        // //     'posts' => $posts,
        // // ]);
    
        // //ESTO SE HACE PARA PASAR UNA SOLA VARIABLE, SE PUEDE ENCADENAR MAS METODOS WITH Y PASAR MAS VARIABLES
        return view('index')->with('posts', $posts);
    }
}
