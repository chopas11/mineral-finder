<?php

namespace application\models;

use application\core\Model;
use Imagick;

class Account extends Model {

	public $error;

	public $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

	public function GenerateString($input, $strength = 32) {
		$input_length = strlen($input);
		$random_string = '';
		for($i = 0; $i < $strength; $i++) {
			$random_character = $input[mt_rand(0, $input_length - 1)];
			$random_string .= $random_character;
		}
	 
		return $random_string;
	}

	public function Country($country) {
		if ($country == 0) return 'Не указано';
		else if ($country == 1) return 'Абхазия';
		else if ($country == 2) return 'Австралия';
		else if ($country == 3) return 'Австрия';
		else if ($country == 4) return 'Азербайджан';
		else if ($country == 5) return 'Албания';
		else if ($country == 6) return 'Алжир';
		else if ($country == 7) return 'Ангилья';
		else if ($country == 8) return 'Ангола';
		else if ($country == 9) return 'Андорра';
		else if ($country == 10) return 'Антигуа и Барбуда';
		else if ($country == 11) return 'Аргентина';
		else if ($country == 12) return 'Армения';
		else if ($country == 13) return 'Аруба';
		else if ($country == 14) return 'Афганистан';
		else if ($country == 15) return 'Багамские Острова';
		else if ($country == 16) return 'Бангладеш';
		else if ($country == 17) return 'Барбадос';
		else if ($country == 18) return 'Бахрейн';
		else if ($country == 19) return 'Белиз';
		else if ($country == 20) return 'Белоруссия';
		else if ($country == 21) return 'Бельгия';
		else if ($country == 22) return 'Бенин';
		else if ($country == 23) return 'Болгария';
		else if ($country == 24) return 'Боливия';
		else if ($country == 25) return 'Босния и Герцеговина';
		else if ($country == 26) return 'Ботсвана';
		else if ($country == 27) return 'Бразилия';
		else if ($country == 28) return 'Бруней';
		else if ($country == 29) return 'Буркина-Фасо';
		else if ($country == 30) return 'Бурунди';
		else if ($country == 31) return 'Бутан';
		else if ($country == 32) return 'Вануату';
		else if ($country == 33) return 'Ватикан';
		else if ($country == 34) return 'Великобритания';
		else if ($country == 35) return 'Венгрия';
		else if ($country == 36) return 'Венесуэла';
		else if ($country == 37) return 'Восточный Тимор';
		else if ($country == 38) return 'Вьетнам';
		else if ($country == 39) return 'Габон';
		else if ($country == 40) return 'Гаити';
		else if ($country == 41) return 'Гайана';
		else if ($country == 42) return 'Гамбия';
		else if ($country == 43) return 'Гана';
		else if ($country == 44) return 'Гватемала';
		else if ($country == 45) return 'Гвинея';
		else if ($country == 46) return 'Гвинея-Бисау';
		else if ($country == 47) return 'Германия';
		else if ($country == 48) return 'Гондурас';
		else if ($country == 49) return 'Гонконг';
		else if ($country == 50) return 'Государство Палестина';
		else if ($country == 51) return 'Гренада';
		else if ($country == 52) return 'Греция';
		else if ($country == 53) return 'Грузия';
		else if ($country == 54) return 'Дания';
		else if ($country == 55) return 'Демократическая Республика Конго';
		else if ($country == 56) return 'Джибути';
		else if ($country == 57) return 'Доминика';
		else if ($country == 58) return 'Доминиканская Республика';
		else if ($country == 59) return 'Египет';
		else if ($country == 60) return 'Замбия';
		else if ($country == 61) return 'Зимбабве';
		else if ($country == 62) return 'Израиль';
		else if ($country == 63) return 'Индия';
		else if ($country == 64) return 'Индонезия';
		else if ($country == 65) return 'Иордания';
		else if ($country == 66) return 'Ирак';
		else if ($country == 67) return 'Иран';
		else if ($country == 68) return 'Ирландия';
		else if ($country == 69) return 'Исландия';
		else if ($country == 70) return 'Испания';
		else if ($country == 71) return 'Италия';
		else if ($country == 72) return 'Йемен';
		else if ($country == 73) return 'Кабо-Верде';
		else if ($country == 74) return 'Казахстан';
		else if ($country == 75) return 'Камбоджа';
		else if ($country == 76) return 'Камерун';
		else if ($country == 77) return 'Канада';
		else if ($country == 78) return 'Катар';
		else if ($country == 79) return 'Кения';
		else if ($country == 80) return 'Кипр';
		else if ($country == 81) return 'Киргизия';
		else if ($country == 82) return 'Кирибати';
		else if ($country == 83) return 'Китай';
		else if ($country == 84) return 'Корейская Народная Демократическая Республика';
		else if ($country == 85) return 'Колумбия';
		else if ($country == 86) return 'Коморские Острова';
		else if ($country == 87) return 'Коста-Рика';
		else if ($country == 88) return 'Кот-д’Ивуар';
		else if ($country == 89) return 'Куба';
		else if ($country == 90) return 'Кувейт';
		else if ($country == 91) return 'Кюрасао';
		else if ($country == 92) return 'Лаос';
		else if ($country == 93) return 'Латвия';
		else if ($country == 94) return 'Либерия';
		else if ($country == 95) return 'Ливан';
		else if ($country == 96) return 'Ливия';
		else if ($country == 97) return 'Литва';
		else if ($country == 98) return 'Лихтенштейн';
		else if ($country == 99) return 'Люксембург';
		else if ($country == 100) return 'Маврикий';
		else if ($country == 101) return 'Мавритания';
		else if ($country == 102) return 'Мадагаскар';
		else if ($country == 103) return 'Македония';
		else if ($country == 104) return 'Малави';
		else if ($country == 105) return 'Малайзия';
		else if ($country == 106) return 'Мали';
		else if ($country == 107) return 'Мальдивы';
		else if ($country == 108) return 'Мальта';
		else if ($country == 109) return 'Марокко';
		else if ($country == 110) return 'Маршалловы Острова';
		else if ($country == 111) return 'Мексика';
		else if ($country == 112) return 'Микронезия';
		else if ($country == 113) return 'Мозамбик';
		else if ($country == 114) return 'Молдавия';
		else if ($country == 115) return 'Монако';
		else if ($country == 116) return 'Монголия';
		else if ($country == 117) return 'Мьянма';
		else if ($country == 118) return 'Намибия';
		else if ($country == 119) return 'Науру';
		else if ($country == 120) return 'Непал';
		else if ($country == 121) return 'Нигер';
		else if ($country == 122) return 'Нигерия';
		else if ($country == 123) return 'Нидерланды';
		else if ($country == 124) return 'Никарагуа';
		else if ($country == 125) return 'Ниуэ';
		else if ($country == 126) return 'Новая Зеландия';
		else if ($country == 127) return 'Норвегия';
		else if ($country == 128) return 'ОАЭ';
		else if ($country == 129) return 'Оман';
		else if ($country == 130) return 'Острова Кука';
		else if ($country == 131) return 'Пакистан';
		else if ($country == 132) return 'Палау';
		else if ($country == 133) return 'Панама';
		else if ($country == 134) return 'Папуа – Новая Гвинея';
		else if ($country == 135) return 'Парагвай';
		else if ($country == 136) return 'Перу';
		else if ($country == 137) return 'Польша';
		else if ($country == 138) return 'Португалия';
		else if ($country == 139) return 'Пуэрто-Рико';
		else if ($country == 140) return 'Республика Конго<';
		else if ($country == 141) return 'Российская Федерация';
		else if ($country == 142) return 'Руанда';
		else if ($country == 143) return 'Румыния';
		else if ($country == 144) return 'Сальвадор';
		else if ($country == 145) return 'Самоа';
		else if ($country == 146) return 'Сан-Марино';
		else if ($country == 147) return 'Сан-Томе и Принсипи';
		else if ($country == 148) return 'Саудовская Аравия';
		else if ($country == 149) return 'Сахарская Арабская Демократическая Республика';
		else if ($country == 150) return 'Свазиленд';
		else if ($country == 151) return 'Северный Кипр';
		else if ($country == 152) return 'Сейшельские Острова';
		else if ($country == 153) return 'Сенегал';
		else if ($country == 154) return 'Сент-Винсент и Гренадины';
		else if ($country == 155) return 'Сент-Китс и Невис';
		else if ($country == 156) return 'Сент-Люсия';
		else if ($country == 157) return 'Сербия';
		else if ($country == 158) return 'Сингапур';
		else if ($country == 159) return 'Синт-Мартен';
		else if ($country == 160) return 'Сирия';
		else if ($country == 161) return 'Словакия';
		else if ($country == 162) return 'Словения';
		else if ($country == 163) return 'Соединённые Штаты Америки';
		else if ($country == 164) return 'Соломоновы Острова';
		else if ($country == 165) return 'Сомали';
		else if ($country == 166) return 'Судан';
		else if ($country == 167) return 'Суринам';
		else if ($country == 168) return 'Сьерра-Леоне';
		else if ($country == 169) return 'Таджикистан';
		else if ($country == 170) return 'Таиланд';
		else if ($country == 171) return 'Танзания';
		else if ($country == 172) return 'Того';
		else if ($country == 173) return 'Тонга';
		else if ($country == 174) return 'Тринидад и Тобаго';
		else if ($country == 175) return 'Тувалу';
		else if ($country == 176) return 'Тунис';
		else if ($country == 177) return 'Туркмения';
		else if ($country == 178) return 'Турция';
		else if ($country == 179) return 'Уганда';
		else if ($country == 180) return 'Узбекистан';
		else if ($country == 181) return 'Украина';
		else if ($country == 182) return 'Уругвай';
		else if ($country == 183) return 'Фарерские острова';
		else if ($country == 184) return 'Фиджи';
		else if ($country == 185) return 'Филиппины';
		else if ($country == 186) return 'Финляндия';
		else if ($country == 187) return 'Франция';
		else if ($country == 188) return 'Хорватия';
		else if ($country == 189) return 'Центральноафриканская Республика';
		else if ($country == 190) return 'Чад';
		else if ($country == 191) return 'Черногория';
		else if ($country == 192) return 'Чехия';
		else if ($country == 193) return 'Чили';
		else if ($country == 194) return 'Швейцария';
		else if ($country == 195) return 'Швеция';
		else if ($country == 196) return 'Ямайка';
		else if ($country == 197) return 'Япония';
	}
//-------------------------------- Валидация форм регистрации -------------------------------- //
public function regValidate($post) {

		// Проверка на пустоту
		if (!$post['login']) {
			$this->error = 'Пожалуйста, укажите логин';
			return false;
		} 
		if (!$post['email']) {
			$this->error = 'Пожалуйста, укажите ваш E-mail';
			return false;
		} 
		if (!$post['password']) {
			$this->error = 'Пожалуйста, укажите пароль';
			return false;
		} 
		if (!$post['retry_password']) {
			$this->error = 'Пожалуйста, повторите пароль';
			return false;
		} 
		if (!$post['country']) {
			$this->error = 'Пожалуйста, выберите страну.';
			return false;
		}
		if (!$post['captcha']) {
			$this->error = 'Не введен код с картинки.';
			return false;
		}
		
		// Проверка заданной длины в полях и проход через регулярные выражения
		// Логин
		if ( strlen($post['login']) < 3 ) {
			$this->error = 'Поле с логином может содержать не менее 3 символов.';
			return false;
		} else if ( strlen($post['login']) > 30 ) {
			$this->error = 'Поле с логином может содержать не более 30 символов.';
			return false;
		}
		if (!preg_match('/^[A-z0-9]{3,30}$/', $post['login'])) {
			$this->error = 'Поле с логином может содержать только латинские буквы или цифры от 0 до 9';
			return false;
		}

		// E-mail
		if ( strlen($post['email']) > 30 ) {
			$this->error = 'Поле с E-mail может содержать не более 30 символов.';
			return false;
		}
		if (!preg_match('/^([A-z0-9_\.-]+)@([A-z0-9_\.-]+)\.([A-z\.]{2,6})$/', $post['email'])) {
			$this->error = 'Поле с E-mail должно быть в формате example@site.com';
			return false;
		}

		// Пароль
		if ( strlen($post['password']) < 6 ) {
			$this->error = 'Поле с паролем может содержать не менее 6 символов.';
			return false;
		} else if ( strlen($post['password']) > 30 ) {
			$this->error = 'Поле с паролем может содержать не более 30 символов.';
			return false;
		}
		if (!preg_match('/^[A-z0-9]{6,30}$/', $post['password'])) {
			$this->error = 'Поле с паролем может содержать только латинские буквы или цифры от 0 до 9';
			return false;
		}

		// повторение пароля
		if ( strlen($post['retry_password']) < 6 ) {
			$this->error = 'Поле с повторением паролем может содержать не менее 6 символов.';
			return false;
		} else if ( strlen($post['retry_password']) > 30 ) {
			$this->error = 'Поле с повторением паролем может содержать не более 30 символов.';
			return false;
		}
		if (!preg_match('/^[A-z0-9]{6,30}$/', $post['retry_password'])) {
			$this->error = 'Поле с повторением пароля может содержать только латинские буквы или цифры от 0 до 9';
			return false;
		}

		// Ответ на вопрос
		if ($post['answer']) {
			if (!preg_match('/^[A-z0-9]{1,30}$/', $post['answer'])) {
				$this->error = 'Ответ на вопрос может содержать только латинские буквы или цифры от 0 до 9';
				return false;
			}
		}

		// Капча
		if ( strlen($post['captcha']) < 4 ) {
			$this->error = 'Код с картинки может содержать не менее 4 символов.';
			return false;
		} else if ( strlen($post['captcha']) > 30 ) {
			$this->error = 'Код с картинки может содержать не более 7 символов.';
			return false;
		}
		if (!preg_match('/^[a-z0-9]{4,7}$/', $post['captcha'])) {
			$this->error = 'Код с картинки может содержать только строчные латинские буквы или цифры от 0 до 9';
			return false;
		}


		// Проверка Логина и E-mail на существование
		$existlogin = $this->db->row('SELECT `login` FROM `users` WHERE `login` = "'.$post['login'].'"');
		$existemail = $this->db->row('SELECT `email` FROM `users` WHERE `email` = "'.$post['email'].'"');


		if ($existlogin) {
			$this->error = 'Этот логин занят';
			return false;
		} elseif ($existemail) {
			$this->error = 'Этот Email занят';
			return false;
		// Проверка на правильность введенных паролей
		} elseif ($post['retry_password'] != $post['password']) {
			$this->error = 'Введенные пароли не совпадают';
			return false;
		}

		// Проверка капчи
		if ( hash('sha512', 'sLKNJH9&%8uo3)eoyhdielk(*ds'.$post['captcha'].'LkjsdkljeeddLJkls*(32lkn') != $_SESSION['captcha'] ) {
			$this->error = 'Код с картинки введен неверно.';
			return false;
		}

		// Если все условия выполнились
		return true;
	}

// --------------------------------- Добавление юзера в базу данных ---------------------------------- //
	public function reg($post) {

		// Экранирование полей
		$post['login'] = $this->db->FormChars($post['login']);
		$post['email'] = $this->db->FormChars($post['email']);
		$post['password'] = $this->db->FormChars($post['password']);
		$post['retry_password'] = $this->db->FormChars($post['retry_password']);
		$post['answer'] = $this->db->FormChars($post['answer']);

		$code = $this->GenerateString($this->permitted_chars, 32);										// Генерируем строку для подтвержения о регистрации

		$pass = $this->db->GenPass($post['password'], $post['login']);									// Хешируем пароль

		$result = $this->db->query('INSERT INTO `users`  VALUES ("0", "'.$post['email'].'", "'.$post['login'].'", "'.$pass.'", 0, "'.$post['answer'].'", "'.$post['country'].'", NOW(), 0, 0, "'.$code.'")');
		
		// Письмо для подтверждения регистрации

		$subject = "Завершение регистрации на сайте Mineral-finder.ru"; 

		$message = '
		<table border="0" cellpadding="0" cellspacing="0" height="100%" lang="ru" width="100%" style="min-width:320px">
			<tr>
				<td align="center" bgcolor="#ffffff">
					<div class="mail-box" style="max-width:500px;min-width:320px; border: 1px solid #f1f1f1;border-radius: 2px;padding:20px;font-family:Arial;text-align:left">
						<div class="mail-box-header" style="text-align:center;">
							<img src="images/favicon/apple-touch-icon-180x180.ng" alt="Mineral-finder" height="50px" width="50px" style="border-radius: 50px"><br><br>
							<span style="font-size:20px;color:#333333;">Подтверждение регистрации аккаунта <br> на сайте mineral-finder.ru</span>
						</div>
						<p style="font-size:18px;color:#333333;line-height: 1.3em;">Здравствуйте, <b>'.$post['login'].'</b><br>
							Вы зарегистрировались на портале Mineral-finder и указали адрес: <a href="mailto:'.$post['email'].'" target="_blank" style="color:#2f72f9">'.$post['email'].'</a> <br>
							Для активации аккаунта введите регистрационный код на странице <a href="http://mineral-finder.ru/activate" target="_blank" style="color:#2f72f9;text-decoration:none">активации учетных записей:</a><br>
							<b>'.$code.'</b>
						</p>
						<hr>
						<span style="font-size:15px;color:#576369;line-height: 1.2em;">Если вы не совершали подобных действий, проигнорируйте 
							это письмо. Это письмо отправлено автоматически, 
							пожалуйста, не отвечайте на него. 
							<br><br>
							С уважением, <br>
							Команда Mineral-finder.ru
						</span>
					</div>
				</td>
			</tr>
		</table>
		';

		$headers  = "Content-type: text/html; charset=utf-8 \r\n"; 
		$headers .= "From: От кого письмо <creytor.sajtov@yandex.ru>\r\n"; 
		$headers .= "Reply-To: creytor.sajtov@yandex.ru\r\n"; 

		mail($post['email'], $subject, $message, $headers); 
		
		return $result;
	}

// -------------------------------- Валидация форм Активации -------------------------------- //
public function activateValidate($post) {
		
	// Проверка на пустоту полей
	if (!$post['code']) {
		$this->error = 'Пожалуйста, введите код активации';
		return false;
	}
	// Экранирование символов
	$post['code'] = $this->db->FormChars($post['code']);
	
	// Проход через регулярные выражения
	if (!preg_match('/^[A-z0-9]{32,32}$/', $post['code'])) {
		$this->error = 'Поле с кодом должно содержать 32 латинских символа или цифры от 0 до 9';
		return false;
	}
	// Проверка на совпадение кода
	$existcode = $this->db->row('SELECT `active_code` FROM `users` WHERE `active_code` = "'.$post['code'].'"');
	if (!$existcode) {
		$this->error = 'Код активации не совпадает с кодом, высланным на электронный адрес.';
		return false;
	}

	// Проверка на повторную активацию
	$isactive = $this->db->column('SELECT `active` FROM `users` WHERE `active_code` = "'.$post['code'].'"');
	if ($isactive == 1) {
		$this->error = 'Ваш аккаунт уже активирован.';
		return false;
	}
	return true;
}
// -------------------------------- Активация аккаунта -------------------------------- //
public function activate($post) {
	$params = [
		'code' => $post['code'],
	];
	$this->db->query('UPDATE `users`  SET `active` = 1 WHERE `active_code` = :code', $params);
}

// ------------------------------- Валидация форм восстановление пароля ------------------------------ //
	public function recoveryValidate($post) {

		// Проверка на пустоту полей
		if (!$post['email']) {
			$this->error = 'Пожалуйста, введите ваш E-mail';
			return false;
		}
		if (!$post['captcha']) {
			$this->error = 'Не введен код с картинки.';
			return false;
		}

		// Проход через регулярные выражения
		if (!preg_match('/^([A-z0-9_\.-]+)@([A-z0-9_\.-]+)\.([A-z\.]{2,6})$/', $post['email'])) {
			$this->error = 'Поле с E-mail должно быть в формате example@site.com';
			return false;
		}
		if ($post['answer']) {
			if (!preg_match('/^[A-z0-9]{3,30}$/', $post['answer'])) {
				$this->error = 'Ответ на вопрос должен содержать не менее 3 и не более 30 латинских символов или цифр от 0 до 9';
				return false;
			}
		}
		if (!preg_match('/^[a-z0-9]{4,30}$/', $post['captcha'])) {
			$this->error = 'Код с картинки содержать не менее 4 и не более 30 латинских символов или цифр от 0 до 9';
			return false;
		}

		// Проверка правильности ответа на вопрос
		$answer = $this->db->column('SELECT `answer` FROM `users` WHERE `email` = "'.$post['email'].'"');

		if ($answer != $post['answer']) {
			$this->error = 'Ответ на вопрос неверен.';
			return false;
		} elseif ($post['retry_password'] != $post['password']) {
			$this->error = 'Введенные пароли не совпадают';
			return false;
		}

		// Проверка капчи
		if ( hash('sha512', 'sLKNJH9&%8uo3)eoyhdielk(*ds'.$post['captcha'].'LkjsdkljeeddLJkls*(32lkn') != $_SESSION['captcha'] ) {
			$this->error = 'Код с картинки введен неверно.';
			return false;
		}

		return true;
	}

// -------------------------------------- Восстановление пароля --------------------------------------- //
	public function recovery($post) {

		// Экранирование символов
		$post['email'] = $this->db->FormChars($post['email']);
		$post['answer'] = $this->db->FormChars($post['answer']);

		$pass = $this->GenerateString($this->permitted_chars, 20);										// Генерим новый пароль
		$login = $this->db->column('SELECT `login` FROM `users` WHERE `email` = "'.$post['email'].'"');	// Берем логин для хеширования
		$password = $this->db->GenPass($pass, $login);												// Хешируем пароль
		
		$params = [
			'password' => $password,
			'email' => $post['email'],
		];
		$this->db->query('UPDATE `users`  SET password = :password WHERE `email` = :email', $params);

		// Высылаем новый пароль на E-mail
		$subject = "Восстановление пароля на сайте mineral-finder.ru"; 

		$message = '
		<table border="0" cellpadding="0" cellspacing="0" height="100%" lang="ru" width="100%" style="min-width:320px">
			<tr>
				<td align="center" bgcolor="#ffffff">
					<div class="mail-box" style="max-width:500px;min-width:320px; border: 1px solid #f1f1f1;border-radius: 2px;padding:20px;font-family:Arial;text-align:left">
						<div class="mail-box-header" style="text-align:center;">
							<img src="images/favicon/apple-touch-icon-180x180.ng" alt="Mineral-finder" height="50px" width="50px" style="border-radius: 50px"><br><br>
							<span style="font-size:20px;color:#333333;">Восстановление пароля<br>на сайте Mineral-finder</span>
						</div>
						<p style="font-size:18px;color:#333333;line-height: 1.3em;">Здравствуйте, <b>'.$login.'</b><br>
							Вы подали заявку на восстановление вашего 
							аккаунта на нашем сайте, привязанного к данному 
							адресу: <a href="mailto:'.$post['email'].'" target="_blank" style="color:#2f72f9">'.$post['email'].'</a> <br>
							Мы сбросили пароль к вашей учетной записи: <br>
							<b>'.$pass.'</b> <br>
							Используйте этот пароль для доступа к ресурсу.
							Вы всегда можете поменять его в разделе 
							<a href="http://mineral-finder.ru/edit" target="_blank" style="color:#2f72f9;text-decoration:none">редактирования профиля</a> 
							в личном кабинете.
						</p>
						<hr>
						<span style="font-size:15px;color:#576369;line-height: 1.2em;">Если вы не совершали подобных действий, проигнорируйте 
							это письмо. Это письмо отправлено автоматически, 
							пожалуйста, не отвечайте на него. 
							<br><br>
							С уважением, <br>
							Команда Mineral-finder.ru
						</span>
					</div>
				</td>
			</tr>
		</table>
		';

		$headers  = "Content-type: text/html; charset=utf-8 \r\n"; 
		$headers .= "From: От кого письмо <creytor.sajtov@yandex.ru>\r\n"; 
		$headers .= "Reply-To: creytor.sajtov@yandex.ru\r\n"; 

		mail($post['email'], $subject, $message, $headers); 
	}

// ----------------------------------- Валидация форм Авторицации ----------------------------------- //
	public function loginValidate($post) {

		// Проверка на пустоту полей
		if (!$post['login']) {
			$this->error = 'Пожалуйста, введите ваш логин';
			return false;
		}
		if (!$post['password']) {
			$this->error = 'Пожалуйста, введите ваш пароль';
			return false;
		}
		if (!$post['captcha']) {
			$this->error = 'Не введен код с картинки.';
			return false;
		}

		// Проход через регулярные выражения
		if (!preg_match('/^[A-z0-9]{3,30}$/', $post['login'])) {
			$this->error = 'Поле с логином должно содержать не менее 3 и не более 30 латинских символов или цифр от 0 до 9';
			return false;
		}
		if (!preg_match('/^[A-z0-9]{6,30}$/', $post['password'])) {
			$this->error = 'Поле с паролем должно содержать не менее 6 и не более 30 латинских символов или цифр от 0 до 9';
			return false;
		}
		if (!preg_match('/^[a-z0-9]{4,30}$/', $post['captcha'])) {
			$this->error = 'Код с картинки содержать не менее 4 и не более 30 латинских символов или цифр от 0 до 9';
			return false;
		}
		
		// Проверка правильности введенного пароля или логина
		$password = $this->db->column('SELECT `password` FROM `users` WHERE `login` = "'.$post['login'].'"');
		
		if ($this->db->GenPass($post['password'], $post['login']) != $password) {
			$this->error = 'Не верный логин или пароль.';
			return false;
		}  

		//Проверка активации
		$active = $this->db->column('SELECT `active` FROM `users` WHERE `login` = "'.$post['login'].'"');

		if (!$active) {
			$this->error = 'Ваш аккаунт не активирован. Пожалуйста, активируйте его на <a href="/activate" target="_blank">данной странице</a>';
			return false;
		}

		// Проверка капчи
		if ( hash('sha512', 'sLKNJH9&%8uo3)eoyhdielk(*ds'.$post['captcha'].'LkjsdkljeeddLJkls*(32lkn') != $_SESSION['captcha'] ) {
			$this->error = 'Код с картинки введен неверно.';
			return false;
		}

		return true;
	}

// -------------------------------- Сама Авторизация -------------------------------- //
	public function login($login) {

		// Экранирование символов
		$post['login'] = $this->db->FormChars($post['login']);
		$post['password'] = $this->db->FormChars($post['password']);

		$params = [
			'login' => $login,
		];
		$data = $this->db->row('SELECT * FROM `users` WHERE login = :login', $params);

		$_SESSION['account'] = $data[0];
		$_SESSION['account']['country'] = $this->Country($_SESSION['account']['country']);
	}

// -------------------------------- Валидация форм Редактирование профиля -------------------------------- //
	public function editValidate($post) {

		// Проход через регулярные выражения
		if ($post['password']) {
			if (!preg_match('/^[A-z0-9]{6,30}$/', $post['password'])) {
				$this->error = 'Поле с паролем должно содержать не менее 6 и не более 30 латинских символов и цифр от 0 до 9';
				return false;
			}
		} 
		if ($post['retry_password']) {
			if (!preg_match('/^[A-z0-9]{6,30}$/', $post['retry_password'])) {
				$this->error = 'Поле с повторением пароля должно содержать не менее 6 и не более 30 латинских символов и цифр от 0 до 9';
				return false;
			}
		}

		// Соответствие введенных паролей
		if ($post['retry_password'] != $post['password']) {
			$this->error = 'Пароли не совпадают';
			return false;
		} 
		return true;
	}

// -------------------------------- Редактирование профиля -------------------------------- //
	public function edit($post) {

		// Экранирование символов
		$post['password'] = $this->db->FormChars($post['password']);
		$post['retry_password'] = $this->db->FormChars($post['retry_password']);

		$password = $this->db->GenPass($post['password'], $_SESSION['account']['login']);

		$params = [
			'password' => $password,
			'id' => $_SESSION['account']['id'],
		];
		$this->db->query('UPDATE users  SET password = :password WHERE id = :id', $params);
	}

	public function postUploadImage($path, $id) {
		$img = new Imagick($path);
		$img->cropThumbnailImage(276, 276);
		$img->setImageCompressionQuality(90);
		$img->writeImage('public/img/avatar/1/'.$id.'.jpg');
	}
}