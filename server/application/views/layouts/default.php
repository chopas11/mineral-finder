<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<title><?php echo $title ?></title>
	<link rel="icon" type="image/png" sizes="32x32" href="/public/images/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/public/images/favicon/favicon-16x16.png">
	<link rel="apple-touch-icon" href="/public/images/favicon/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="76x76" href="/public/images/favicon/apple-touch-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="120x120" href="/public/images/favicon/apple-touch-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="180x180" href="/public/images/favicon/apple-touch-icon-180x180.png">
	<meta name="description" content="На данном ресурсе вы узнаете много нового о минералав, о поисках минералов" />
	<meta name="msapplication-TileColor" content="#FFFFFF"> <!-- Microsoft -->
	<meta name="theme-color" content="#0D98BA" > <!-- Top line in android browser -->
	<link rel="stylesheet" href="/public/css/app.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>
	<!-- Main menu in top of site -->
	<div class="menu-navbar">
		<a href="/">
		<img class="menu-navbar-icon" src="/public/images/favicon/apple-touch-icon-120x120.png" alt="Mineral-finder">
		<span class="menu-navbar-title">Mineral-finder</span>
		<span class="menu-navbar-admin">admin</span>
		</a>
		<!-- <div class="menu-navbar-search">
			<input type="search" placeholder="Поиск">
			<button><i class="fa fa-search" aria-hidden="true"></i></button>
		</div> -->
		<?php
		if ($_SESSION['account']['avatar'] == 0) $Avatar = 0;
		else $Avatar = $_SESSION['account']['avatar'].'/'.$_SESSION['account']['id'];
		if (isset($_SESSION['account']['id'])) {
		echo '
		<div class="menu-navbar-avatar">
			<img class="menu-navbar-avatar-img" src="/public/images/avatars/'.$Avatar.'.jpg" alt="Avatar">
			<span class="menu-navbar-avatar-login">'.$_SESSION['account']['login'].' <i class="fa fa-caret-down" aria-hidden="true"></i></span>
			<div class="popup-menu" id="menu-navbar-loginPopup">
				<a href="/profile">Открыть профиль</a>
				<a href="/edit">Редактировать профиль</a>
				<a href="/logout">Выйти</a>
			</div>
		</div>
		';}?>
		<span class="menu-navbar-dropdown-btn"><i class="fa fa-2x fa-bars" id="navbar-menu-listDropdown" aria-hidden="true"></i></span>
		<ul class="menu-navbar-dropdown-list">
			<a href="/"><li class="menu-navbar-dropdown-list-item"><i class="fa fa-home" aria-hidden="true"></i> Главная</li></a>
			<?php
			if (isset($_SESSION['account']['id'])) {
				echo '
					<a href="/profile"><li class="menu-navbar-dropdown-list-item"><i class="fa fa-user-circle-o" aria-hidden="true"></i> Профиль</li></a>
					<a href="/edit"><li class="menu-navbar-dropdown-list-item"><i class="fa fa-pencil" aria-hidden="true"></i> Редактирование профиля</li></a>
				';
			} else {
				echo '
					<a href="/register"><li class="menu-navbar-dropdown-list-item"><i class="fa fa-address-book" aria-hidden="true"></i> Регистрация</li></a>
					<a href="/login"><li class="menu-navbar-dropdown-list-item"><i class="fa fa-sign-in" aria-hidden="true"></i> Вход</li></a>
				';
			}
			?>
			<a href="/catalog"><li class="menu-navbar-dropdown-list-item"><i class="fa fa-picture-o" aria-hidden="true"></i> Каталог минералов</li></a>
		</ul>
	</div>
	<!-- Sidebar section -->
	<div class="sidebar ">
		<ul class="sidebar-list">
			<a href="/"><li class="sidebar-list-item"><i class="fa fa-home" aria-hidden="true"></i> Главная</li></a>
			<?php
			if (isset($_SESSION['account']['id'])) {
				echo '
					<a href="/profile"><li class="sidebar-list-item"><i class="fa fa-user-circle-o" aria-hidden="true"></i> Профиль</li></a>
					<a href="/edit"><li class="sidebar-list-item"><i class="fa fa-pencil" aria-hidden="true"></i> Редактирование профиля</li></a>
				';
			} else {
				echo '
					<a href="/register"><li class="sidebar-list-item"><i class="fa fa-address-book" aria-hidden="true"></i> Регистрация</li></a>
					<a href="/login"><li class="sidebar-list-item"><i class="fa fa-sign-in" aria-hidden="true"></i> Вход</li></a>
				';
			}
			?>
			<a href="/catalog"><li class="sidebar-list-item"><i class="fa fa-picture-o" aria-hidden="true"></i> Каталог минералов</li></a>
		</ul>
	</div>
	<!-- Main block of all contnet in site -->
	<div class="wrapper">
		<div class="notices">
		
			<?php if ($_SESSION['message']) { echo $_SESSION['message']; $_SESSION['message'] = 0;} ?>
		
		</div>
		
		<?php echo $content; ?>
		

		<button class="but-turnup"><i class="fa fa-chevron-up" aria-hidden="true"></i></button>
	</div>
	<!-- Footer -->
	<div class="footer">
		© Mineral-finder.ru, 2020
	</div>
	<!-- script -->
	<script src="/public/js/app.min.js"></script>
</body>
</html>
