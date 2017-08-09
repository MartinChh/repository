<?php

namespace App\Http\Controllers;

use Request;
use App\Http\Requests;
use App\test;
class DatabaseHandle extends Controller
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
		return view("create");
	}
}