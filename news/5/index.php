<!DOCTYPE html>
<html>
	<head>
		<?php
			error_reporting(E_ALL);
			ini_set('display_errors', 'on');
			mb_internal_encoding('UTF-8');
			require_once('../../function.php');
			?>
		<link rel="stylesheet" href="/style/style.css">
		<title><?=$arrNews[4][1]?></title>		
		<meta charset="UTF-8">

	</head>
	<body>

		<div class='menu'>
			<a href='/' class='button'>Главная</a>
			<a href='/news/' class='button'>Список всех новостей</a>
			<a href='/o-nas/' class='button'>О нас</a>
		</div>
		
		<header><a href='/'>Тестовые новости</a></header>
		<div class=content>
			<div class='panel'>
					<?
					showNews($arrNews,5);
					?>								
			</div>
		</div>
		<div class='footer'>Интернет портал "Тестовые новости" - тестовое задание.</div>
		</div>
	</body>
</html>