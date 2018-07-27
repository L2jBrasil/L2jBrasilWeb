<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Request;


class IndexController extends Controller {

	public function getData(){

		$posts = DB::table('news_site')
		->orderBy('date', 'desc')
		->get(); // Busca se possuem postagens no banco de dados!

		$rankpvp = DB::table('characters')
		->orderBy('pvpkills', 'desc')
		->get();


		if(sizeof($posts) > 0):
		$post = 0;
		return view('modules.welcome')
		->with('posts', $posts)
		->with('post', $post)
		->with('rankpvp', $rankpvp);

		else:

			$post = 1;
			return view('modules.welcome')
			->with('post', $post);

		endif;

	}

	public function showPost($id){

		$resposta = DB::table('news_site')->where('id', [$id])->get();

		if(empty($resposta)){
			return "Esse Post Não Existe";
		}

		return view('modules.posts')
		->with('p', $resposta[0]);
	}
}
