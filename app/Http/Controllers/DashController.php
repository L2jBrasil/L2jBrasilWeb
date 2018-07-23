<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\General\Posts;

class DashController extends Controller {

	public function novoPost(){
		return view('modules.dashboard.addPost');
	}

	public function sendData(Request $request){

		if($request->hasFile('image') && $request->file('image')->isValid()){

			$name = $request->image->getClientOriginalName(); 

			$nameFile = "{$name}";

			$upload = $request->image->storeAs('posts', $nameFile);

			DB::table('news_site')->insert(['title' => $request->title, ])

		}
		else
		{
			return "BOsta/";
		}
	}
}