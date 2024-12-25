<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //Definimos la tabla que va a modificar
    protected $table = 'categories';
    use HasFactory;

    protected $fillable = ['title', 'slug'];

    //Definimos una relacion uno a muchos (una categoria puede estar en muchos post)
    public function posts(){
        return $this->hasMany(Post::class);
    }

}
