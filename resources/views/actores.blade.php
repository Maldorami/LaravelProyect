<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Actores</title>
</head>
<body>
	<ul>
		@foreach($actores as $actor)
			<li>
				{{ $actor->getNombreCompleto() }}
			</li>
		@endforeach
	</ul>
</body>
</html>