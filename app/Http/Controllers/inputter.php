<?php

namespace App\Http\Controllers;

use Request;
use App\Http\Requests;
use App\test;
class inputter extends Controller
{
	public function index()
	{
		return view("create");
	}

	public function create()
	{

	}

	public function store(Request $request)
	{
		test::create(Request::all());
		echo "Položka byla přidána";
		return view("create");
	}
}