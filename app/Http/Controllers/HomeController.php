<?php

namespace App\Http\Controllers;

use Illuminate\Validation\Rules;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Models\Post;

class HomeController extends Controller
{
    protected $request;

    public function __construct(Request $request) {
        $this->request = $request;
    }

    public function index()
    {
    	$posts = Post::orderBy('created_at', 'desc')->get();
    	return view('pages.home', compact('posts'));
    }
}
