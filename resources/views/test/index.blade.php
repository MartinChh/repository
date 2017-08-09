<!doctype html>
<html>
	<head>
		<title>Test databáze</title>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	</head>
	<body>
		<div class="container">
			<div class="page-header">	
				<h1>Test</h1>
			</div>
			<h1><a href="..">Zpět</a></h1>
			<ul class="list-group">
			@foreach ($veci as $vec)
				<li class="list-group-item">
				<h2 class="list-group-item-heading">{{ $vec->nazev }}
				</h2>
				<p class="list-group-item-text">
					<strong>Cena: </strong>{{$vec->cena}}
					<br>
					<strong>Popis: </strong>{{$vec->popis}}
				</p>
			@endforeach
			</ul>
		</div>
	</body>
</html>