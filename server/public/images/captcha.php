<?php
session_start();

function GenerateString($input, $strength = 5) {										// Функция генерации случайной последовательности
	$input_length = strlen($input);
	$random_string = $input[mt_rand(0, $input_length - 1)];
	return $random_string;
}

$permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyz';
$Code;																					// Переменная для хранения капчи
$im = imagecreatetruecolor(110, 30); 													// Создание изображения
imagefilledrectangle($im, 0, 0, 110, 30, imagecolorallocate($im, 13, 152, 156)); 		// Заполнение синеватым цветом
$posx = rand(10,55);																	// Случайная позиция строки по оси x
$posy = rand(6,12);																		// Случайная позиция БУКВЫ по оси y
for ($i = 0; $i < 2; $i++) {															// Наложение 2 линий
	$color = imagecolorallocate($im, rand(0, 100), rand(0, 100), rand(0, 150));
	imageline($im, rand(0, 20), rand(1, 50), rand(150, 180), rand(1, 50), $color);
}
for ($i = 0; $i < rand(5,6); $i++) {													// Отрисовка кода
	$letter = GenerateString($permitted_chars, 1);										// Создание буквы
	$Code .= $letter;
	$textcolor = imagecolorallocate($im, rand(180,250), rand(150,230), rand(100,150));	// Случайный цвет для текста
	imagestring($im, rand(2,6), $posx+$i*8, rand(6,12), $letter, $textcolor);			// Пишем букву со всеми параметраи
}
for ($i = 0; $i < 2; $i++) {															// Наложение еще 2 линий поверх кода
	$color = imagecolorallocate($im, rand(0, 100), rand(0, 100), rand(0, 150));
	imageline($im, rand(0, 20), rand(1, 50), rand(150, 180), rand(1, 50), $color);
}
$_SESSION['captcha'] = hash('sha512', 'sLKNJH9&%8uo3)eoyhdielk(*ds'.$Code.'LkjsdkljeeddLJkls*(32lkn');
Header("Content-type: image/jpeg");
imageJpeg($im);
imageDestroy($im);
?>