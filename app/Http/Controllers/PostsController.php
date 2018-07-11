<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use L2jBrasilWeb_Faces\teste;

class PostsController extends Controller {

	public function ListPosts(){

		$posts = DB::table('news_site')->get();

		return view('modules.welcome')->with('posts', $posts);
	}

	public function ShowPost(){
		return view('modules.posts');
	}

}
