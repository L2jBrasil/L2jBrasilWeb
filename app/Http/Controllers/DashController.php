<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\General\Posts;


class DashController extends Controller {

	/*
		Funções que retornam 'views'
	*/
	public function novoPost(){
		return view('modules.dashboard.addPost');
	}

	public function showDash(){
		return view('modules.dashboard.dash');
	}

	/*
		Funções de dados
	*/
	public function sendData(Request $request){

		if($request->hasFile('image') && $request->file('image')->isValid()){

			$url = "/storage/posts/";

			$name = $request->image->getClientOriginalName(); 

			$nameFile = "{$name}";

			// Faz upload da Imagem
			$upload = $request->image->storeAs('posts', $nameFile);

			// Insere os dados na tabela
			//DB::table('news_site')->insert([
			//'titulo' => $request->titulo, 
			//'date' => $request->date,
			//'autor' => $request->autor,
			//'post' => $request->post,
			//'urlimg' => "{$url}{$nameFile}"
			//]);

			$post = new Posts();
			$post->titulo = $request->titulo;
			$post->autor = $request->autor;
			$post->date = $request->date;
			$post->post = $request->post;
			$post->urlimg = "{$url}{$nameFile}";

			$post->save();
			
			
		}
		else
		{
			return "BOsta/";
		}
	}

	public function getData(){

	}
}