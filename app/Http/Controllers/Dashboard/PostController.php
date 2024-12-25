<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //Insertamos un registro
//        Post::create([
//            'title' => 'test title',
//            'slug' => "test slug",
//            'content' => 'test content',
//            'category_id' => 1,
//            'description' => "test description",
//            'posted' => 'no',
//            'image' => 'test image'
//        ]);

        //Actualizar un regisstro
        //$post = Post::find(1);
        /*//Seteamos los nuevos valores al objeto encontrado
        $post->update([
            'title' => "Titulo Actualizado",
            'slug' => "Slug  Actualizado",
            'content' => 'Content Actualizado',
            'category_id' => 1,
            'description' => "Description Actualizada",
            'posted' => 'no',
            'image' => 'Image Actualizada',
        ]);
        return "Actualizacion realizada";*/

        //Eliminar un registro
//        $post = Post::find(4);
//        $post->delete();
//        $response = ['msg' => 'Eliminacion correcta'];
//        return response()->json($response, 200);

        //Acedecmos a la categoria del post con ID 5
//        $post = Post::find(5);
//        dd($post->category->title);

        //Sacamos los post con la categoria 1
        $category = Category::find(1);
        dd($category->posts[1]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}
