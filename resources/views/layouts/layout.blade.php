<!doctype html>
<html>
	<head>
		<title>@yield('title')</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	</head>
	<body>
	<div class="container">
		<ul class="nav nav-pills">
 			<li role="presentation"><a href="../">Domů</a></li>
			<li role="presentation"><a href="/create">Práce s DB</a></li>
			<li role="presentation"><a href="/test">Výpis DB</a></li>
		</ul>
		@yield('content')
		</div>
		
	</body>
</html>