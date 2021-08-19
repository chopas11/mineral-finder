<div class="content">
	<div class="content-form">
		<h2>Вход в панель администратора</h2>
		<form class="form" action="/admin/login" method="POST">
			<input type="text" name="login" placeholder="Логин" pattern="[A-Za-z-0-9]{3,30}" title="От 3 до 30 латинских символов или цифр." required>
			<span class="form-hint">В логине должно быть от 3 до 30 латинских символов или цифр</span>
			<input type="password" name="password" placeholder="Пароль" pattern="[A-Za-z-0-9]{6,30}" title="От 6 до 30 латинских символов или цифр." required>
            <span class="form-hint">В пароле должно быть от 6 до 30 латинских символов или цифр</span>
            <input type="submit" name="adminlogin_f" value="Войти">
		</form>
	</div>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>