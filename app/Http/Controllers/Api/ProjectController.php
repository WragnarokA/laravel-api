<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $posts = Post::all();

        $response = [
            "success" => true,
            "results" => $posts,
            "message" => "prova",
        ];
        return response()->json($response);
    }
}
