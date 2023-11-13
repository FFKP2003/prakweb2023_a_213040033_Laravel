<?php   

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;



class BlogController extends Controller {
    public  function index() {
        return view('blogs', [
            'tittle' => "Blogs",
            'blogs' => Blog::all()
        ]);
    }

    public function show(blog $blog) {
        return view('blog', [
            'tittle' => "single Blogs",
            'blog' => $blog
            ]);
    }
}