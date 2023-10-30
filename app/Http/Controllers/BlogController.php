<?php   

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;



class BlogController extends Controller {
    public  function index() {
        return view('blogs', [
            'judul' => "blogs",
            'blogs' => Blog::all()
        ]);
    }

    public function show($slug) {
        return view('blog', [
            'judul' => "single Blog",
            'blog' => Blog::find($slug)
            ]);
    }
}