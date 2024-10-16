<?php

namespace App\Http\Controllers;

use App\Models\Category; // Pastikan ini diimpor
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all(); // Ambil semua kategori
        return view('categories.index', compact('categories')); // Ganti dengan nama view yang sesuai
    }

    // Tambahkan metode lain untuk create, store, show, edit, update, destroy di sini
}


