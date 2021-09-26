


<html>
	<head>
		<link rel="stylesheet" href="style/style.css">
		<title>Тестовые новости</title>		
		<meta charset="UTF-8">

	</head>
	<body>

		<div class='menu'>
			<a href='index.php' class='button'>Главная</a>
			<a href='news.php' class='button'>Список всех новостей</a>
			<a href='#' class='button'>...</a>
		</div>
		
		<header><a href='index.php'>Тестовые новости</a></header>
		<div class=content>

			<div class='panel'>
				<h2>Все новости портала</h2>
														
			<?php
				error_reporting(E_ALL);
				ini_set('display_errors', 'on');
				mb_internal_encoding('UTF-8');
				 require_once 'function.php';
				AllNews($arrNews);
			?>
	
				
			</div>


		</div>
		<div class='footer'>Интернет портал "Тестовые новости" - тестовое задание.</div>


		</div>
	</body>
</html>