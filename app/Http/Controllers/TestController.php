<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class TestController extends Controller
{
	function index()
	{
		$item=\App\Test::all();
		return view('test.index', ['items' => $item]);
	}

}