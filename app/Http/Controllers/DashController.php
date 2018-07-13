<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Request;

class DashController extends Controller {

	public function novoPost(){
		return view('modules.dashboard.addPost');
	}

	public function sendData(){


		$titulo = Request::input('postTitle');
		$autor = Request::input('autorPost');
		$date = Request::input('datePost');
		$post = Request::input('editor1');

		return implode(', ', array($titulo, $autor, $date, $post));
	}
}