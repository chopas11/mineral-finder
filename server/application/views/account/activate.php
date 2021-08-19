<div class="content">
<div class="content-form">
	<h2>Активация аккаунта</h2>
	<br><p>На указанную почту придет код активации. Пожалуйста, введите его в поле ниже для завершения регистрации.</p><br>
	<form class="form" action="/activate" method="POST">
		<input type="text" name="code" placeholder="Код активации" pattern="[A-Za-z-0-9]{32,32}" title="32 латинских символа или цифры." required>
		<span class="form-hint">В коде активации должно быть 32 латинских символа или цифры.</span>
		<a href="/login"><span class="form-link">Войти</span></a>
		<input type="submit" name="activate_f" value="Подтвердить">
	</form>
</div>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>