<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class MovieController extends Controller
{
	function index()
	{
		$movies=\App\Movie::all();

		//echo '<pre>';
		//print_r($movies);
		//echo '</pre>';

		return view('movies.index', ['movies' => $movies]);
	}

}