<!doctype html>
<html>
	<head>
		<title>create</title>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	</head>
	<body>
	<div class="container"> 
		<div class="page-header">	
			<h1>Přidat do databáze</h1>
		</div>
		<h1><a href="..">Zpět</a></h1>
		<form action="store" method="post">
			<label for="nazev">Název</label><br />
			<input type="text" name="nazev" value=""><br />
			<label for="cena">Cena</label><br />
			<input type="text" name="cena" value=""><br />
			<label for="popis">Popis</label><br />
			<input type="text" name="popis" value=""><br />
			<label for="kategorie">Kategorie</label><br />
			<input type="text" name="kategorie" value=""><br />
			<input type="hidden" name="_token" value="{{csrf_token()}}"><br />
			<label for=""></label>
			<input type="submit" name="submit" value="Přidat"><br />
			
		</form>
		</div>
	</div>

	</body>
</html>