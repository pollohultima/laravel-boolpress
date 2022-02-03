<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\PostResource;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function index()
    {
        # Senza la risorsa
        //$posts = Post::with(['tags'])->paginate();
        //return $posts;

        # Con la risorsa senza relazioni
        //return PostResource::collection(Post::all());

        # Con la risorsa e le relazioni
        return PostResource::collection(Post::with(['category', 'tags'])->paginate(8));
    }
}