<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name',
        'post_id',
        'content',
    ];
    
    public function post(){
        return $this->belongsTo(Post::class);//busca un campo que corresponda al modelo y le añade un _id post_id y lo asocia a la tabla
    }
}
