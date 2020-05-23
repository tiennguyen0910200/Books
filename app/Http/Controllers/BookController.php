<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{

	function index(){
		$todos=	 DB::table('book')->get();
		return view("todos",["todos"=> $todos]);

	}

	function store(Request $request){
		$name=  $request->input("name");
		$category= $request->input("category");
		$price= $request->input("price");


		DB::table('book')->insert(
			["name" => $name,"category"=>$category,"price"=>$price]);
	}

	function create(){
		return view("createtodo");
	}
	function destroy($ida){
		DB::table('book')->where('id', '=', $ida)->delete();

	}
}
