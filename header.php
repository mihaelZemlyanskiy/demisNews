<?php
	error_reporting(E_ALL);
	ini_set('display_errors', 'on');
	mb_internal_encoding('UTF-8');	
	require_once 'function.php';
?>
			
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="http://mihael34.beget.tech/style/style.css">
		<title><?=introductionTitle($arrNews);?></title>		
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
				<h2><?=introductionTitle($arrNews);?>
					
				</h2>
