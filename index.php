<!DOCTYPE html>
<html lang="it">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>

<body>
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
	echo var_dump($posts);
	echo var_dump($postsKeys);


	for ($i = 0; $i < count($posts); $i++) {
		echo '<b>' . $postsKeys[$i] . ":</b><br>";
		for ($o = 0; $o < count($posts[$postsKeys[$i]]); $o++) {
			echo '----------<br>' . $posts[$postsKeys[$i]][$o]['title'] . '<br>';
			echo $posts[$postsKeys[$i]][$o]['author'] . '<br>';
			echo $posts[$postsKeys[$i]][$o]['text'] . '<br>';
		}
	}
	?>

	<h1> ciao </h1>
</body>

</html>