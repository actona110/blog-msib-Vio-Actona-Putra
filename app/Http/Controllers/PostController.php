<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all(); // Mengambil semua postingan
        return view('posts.index', compact('posts'));
    }

    // Tambahkan metode lain seperti create, store, show, edit, update, destroy di sini
}

