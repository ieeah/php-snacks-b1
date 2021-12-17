<!DOCTYPE html>
<html lang="it">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>

<body>
	<h3>Snack 3 </h3>
	<?php

	// SNACK 3
	//	Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data. Stampare ogni data con i relativi post.
	// Qui l'array di esempio: https://www.codepile.net/pile/R2K5d68z
	$posts = [

		'10/01/2019' => [
			[
				'title' => 'Post 1',
				'author' => 'Michele Papagni',
				'text' => 'Testo post 1'
			],
			[
				'title' => 'Post 2',
				'author' => 'Michele Papagni',
				'text' => 'Testo post 2'
			],
		],
		'10/02/2019' => [
			[
				'title' => 'Post 3',
				'author' => 'Michele Papagni',
				'text' => 'Testo post 3'
			]
		],
		'15/05/2019' => [
			[
				'title' => 'Post 4',
				'author' => 'Michele Papagni',
				'text' => 'Testo post 4'
			],
			[
				'title' => 'Post 5',
				'author' => 'Michele Papagni',
				'text' => 'Testo post 5'
			],
			[
				'title' => 'Post 6',
				'author' => 'Michele Papagni',
				'text' => 'Testo post 6'
			]
		],
	];

	$postsKeys = array_keys($posts);


	for ($i = 0; $i < count($posts); $i++) {
		echo '<b>' . $postsKeys[$i] . ":</b><br>";
		for ($o = 0; $o < count($posts[$postsKeys[$i]]); $o++) {
			echo '----------<br>' . $posts[$postsKeys[$i]][$o]['title'] . '<br>';
			echo $posts[$postsKeys[$i]][$o]['author'] . '<br>';
			echo $posts[$postsKeys[$i]][$o]['text'] . '<br>';
		}
	}
	?>

	<h3>Snack 4 </h3>

	<?php
	//		Snack 4
	// Creare un array con 15 numeri casuali, tenendo conto che l'array non dovrà contenere lo stesso numero più di una volta
	$numbers = [];
	while (count($numbers) < 15) {
		$n = rand(1, 15);
		if (!in_array($n, $numbers)) {
			$numbers[] = $n;
		}
	}

	echo var_dump($numbers);
	?>

	<h3>Snack 5</h3>
	<!-- Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo. -->
	<?php
		$p = 'In at ultricies odio. Vivamus interdum urna enim, ac condimentum lorem euismod et. Nunc quis feugiat ipsum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur ut massa at diam tincidunt euismod sed pulvinar leo. Vivamus mi est, dapibus sit amet lorem a, viverra vestibulum quam. Maecenas consequat egestas neque nec rutrum. Proin id magna a eros ultricies ultrices. Sed purus justo, ultrices vel lacus eu, semper maximus ex. Donec facilisis ante nec lacus vestibulum blandit. Duis cursus varius purus eu placerat. Cras ut magna sem. Fusce imperdiet velit ac ultricies tincidunt. Nulla efficitur aliquet velit, in sagittis mauris. Vestibulum iaculis scelerisque tellus et laoreet. Nullam consequat felis sed lorem egestas iaculis. Orci varius natoque.';

		$ps = explode('.', $p);

		for ($i = 0; $i < count($ps); $i++) {
			echo $ps[$i] . '<br><br>';
		}
	?>

</body>

</html>