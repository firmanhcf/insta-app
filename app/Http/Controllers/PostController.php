<?php

namespace App\Http\Controllers;

use Illuminate\Validation\Rules;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Traits\StringRandomizer;

class PostController extends Controller
{
	use StringRandomizer;
    protected $request;

    public function __construct(Request $request) {
        $this->request = $request;
    }

    public function index()
    {
    	return view('pages.addpost');
    }

    public function add()
    {
    	$this->request->validate([
            'photo' => 'required',
            'caption' => 'required'
        ]);

        $photo = "";

        if($this->request->hasFile('photo')){
            $file = $this->request->photo;
            $filename = $this->randstr().".".$file->getClientOriginalExtension();
            $file->move('media', $filename);
            $photo = $filename;
        }

        Post::insert([
        	'user_id' => \Auth::user()->id,
        	'photo' => $photo,
        	'caption' => $this->request->caption
        ]);

    	return redirect()->route('home');
    }
}
