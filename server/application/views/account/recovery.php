<div class="content">
<div class="content-form">
	<h2>Восстановление доступа к аккаунту</h2>
	<form class="form" action="/recovery" method="POST">
        <input type="email" name="email" placeholder="E-mail, привязанный к аккаунту" maxlength="30" title="E-mail должен быть в формате example@site.com." required>
		<span class="form-hint">В E-mail должно быть поле в формате example@site.com</span>
		<!-- <span class="form-link">Вопрос, который вы выбрали при регистрации: <b>Девичья фамилия матери</b></span> -->
		<input type="text" name="answer" placeholder="Ответ на ваш вопрос" pattern="[A-zА-я-0-9]{3,30}" title="Ответ на вопрос должно содержать не менее 3 и неболее 30 латинских символов и цифр от 0 до 9">
		<span class="form-hint">Ответ на вопрос должен содержать не менее 3 и неболее 30 латинских символов или цифр от 0 до 9</span>
		<span class="form-link">Если вы не указывали ответ на вопрос, оставьте поле пустым.</span><br><br>
		<div class="form-captcha">
			<img src="/public/images/captcha.php" alt="Captcha" height="50px">
		</div>
		<div class="form-reloadCaptcha"><i class="fa fa-refresh" aria-hidden="true"></i> Другой код</div>
		<input type="text" name="captcha" placeholder="Введите код с картинки" pattern="[a-z-0-9]{4,7}" title="Код с картинки должен содержать строчные латинские буквы и цифры от 0 до 9" required>
		<span class="form-hint">Код с картинки должен содержать строчные латинские буквы и цифры от 0 до 9</span><br>
			
		<a href="/login"><span class="form-link">Войти</span></a>
		<input type="submit" name="recovery_f" value="Восстановить">
	</form>
</div>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>