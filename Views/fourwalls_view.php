<!DOCTYPE html>
<html>
	<head>
		<title>Rezultati pretrage nekretnina</title>
	</head>
	<body>
		<h1>Rezultati pretrage nekretnina</h1>

		<ul>
			<?php /** @var $results */
			foreach ($results as $result) : ?>
				<li><?= $result['for'] ?> -Cena: <?= $result['price'] ?> - Površina <?= $result['m2'] ?> m2</li>
			<?php endforeach; ?>
		</ul>
	</body>
</html>