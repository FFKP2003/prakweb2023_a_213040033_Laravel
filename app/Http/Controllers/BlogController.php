<?php   

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\User;



class BlogController extends Controller {
    public  function index() {

        $tittle = '';
        if(request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            $tittle = ' in ' . $category->name;
        }

        if(request('author')) {
            $author = User::firstWhere('username', request('author'));
            $tittle = ' by ' . $author->name;
        }

        return view('blogs', [
            "tittle" => "All Blogs" . $tittle,
            "active" => 'blogs',
            "blogs" => Blog::latest()->filter(request(['search', 'category', 'author']))->paginate(5)->withQueryString()
        ]);
    }

    public function show(blog $blog) {
        return view('blog', [
            'tittle' => "single Blogs",
            "active" => 'blogs',
            'blog' => $blog
            ]);
    }
}