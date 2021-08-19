<div class="content">
<div class="content-form">
	<h2>Авторизация</h2>
	<form class="form" action="/login" method="POST">
		<input type="text" name="login" placeholder="Ваш логин" pattern="[A-Za-z-0-9]{3,20}" title="Логин должен содержать не менее 3 и неболее 30 латинских символов или цифр от 0 до 9." required>
		<span class="form-hint">Логин должен содержать не менее 3 и неболее 30 латинских символов или цифр от 0 до 9.</span>
		<input type="password" name="password" placeholder="Ваш пароль" pattern="[A-Za-z-0-9]{6,30}" title="Пароль должен содержать не менее 6 и неболее 30 латинских символов или цифр от 0 до 9." required>
		<span class="form-hint">Пароль должен содержать не менее 6 и неболее 30 латинских символов или цифр от 0 до 9.</span>
		<div class="form-captcha">
			<img src="/public/images/captcha.php" alt="Captcha" height="50px">
		</div>
		<div class="form-reloadCaptcha"><i class="fa fa-refresh" aria-hidden="true"></i> Другой код</div>
		<input type="text" name="captcha" placeholder="Введите код с картинки" pattern="[a-z-0-9]{4,7}" title="Код с картинки должен содержать строчные латинские буквы и цифры от 0 до 9" required>
		<span class="form-hint">Код с картинки должен содержать строчные латинские буквы и цифры от 0 до 9</span>
		<div class="form-checkbox"><input type="checkbox" name="save"> Запомнить меня</div>
		<a href="/recovery"><span class="form-link">Забыли пароль?</span></a>
		<input type="submit" name="login_f" value="Войти">
	</form>
</div>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
