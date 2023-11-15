<?php   

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;



class BlogController extends Controller {
    public  function index() {
        return view('blogs', [
            'tittle' => "All Blogs",
            // 'blogs' => Blog::all()
            'blogs' => Blog::with(['author', 'category'])->latest()->get()
        ]);
    }

    public function show(blog $blog) {
        return view('blog', [
            'tittle' => "single Blogs",
            'blog' => $blog
            ]);
    }
}