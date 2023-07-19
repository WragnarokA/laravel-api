<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        // $posts = Post::all();
        // $posts = Post::paginate(3);
        // $posts = Post::with("type", "tags")->get();

        $posts = Post::with("type", "tags")->paginate(4);


        $response = [
            "success" => true,
            "results" => $posts,
            "message" => "prova",
        ];
        return response()->json($response);
    }
}
