<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class TestController extends Controller
{
	function index()
	{
		$vec=\App\Test::all();

		//echo '<pre>';
		//print_r($movies);
		//echo '</pre>';

		return view('test.index', ['veci' => $vec]);
	}

}