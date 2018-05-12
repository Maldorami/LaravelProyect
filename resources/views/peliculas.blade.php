<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Peliculas</title>
</head>
<body>
	<ul>
		<?php foreach($peliculas as $pelicula) :?>
			<li><?= $pelicula ?></li>
		<?php endforeach; ?>
	</ul>
</body>
</html>