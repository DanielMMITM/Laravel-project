<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'excerpt',
        'content',
    ];

    //se define la relacion que tiene comments con posts, un post tiene miuchos comentarios

    public function comments(){
        return $this->hasMany(Comment::class); //va a buscar la tabla comments y va a buscar post_id
    }
}
