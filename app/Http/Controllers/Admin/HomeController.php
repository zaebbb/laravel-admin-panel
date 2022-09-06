<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Posts;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Category $category){
        $posts_count = Posts::all()->count();
        $category_count = $category::all()->count();

        return view('admin.home.index', [
            'posts_count' => $posts_count,
            'category_count' => $category_count,
        ]);
    }
}
