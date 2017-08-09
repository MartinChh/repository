@extends('layouts/layout')

@section('title', 'Test databáze')	

@section('content')
	<div class="page-header">	
		<h1>Test</h1>
	</div>
	<h1><a href="..">Zpět</a></h1>
	<ul class="list-group">
	@foreach ($items as $item)
		<li class="list-group-item">
		<h2 class="list-group-item-heading">{{ $item->nazev }}
		</h2>
		<p class="list-group-item-text">
			<strong>Cena: </strong>{{$item->cena}}
			<br>
			<strong>Popis: </strong>{{$item->popis}}
		</p>
	@endforeach	
	</ul>
@endsection
