<div class="content">
	<div class="content-form">
		<h2>Редактирование профиля</h2>
		<form class="form" action="/edit" method="POST" enctype="multipart/form-data">
			<input type="password" name="password" placeholder="Новый пароль" pattern="[A-Za-z-0-9]{6,30}" title="Не менее 6 и неболее 20 латинских символов или цифр.">
            <span class="form-hint">В пароле должно быть не менее 6 и неболее 30 латинских символов или цифр</span>
            <input type="password" name="retry_password" placeholder="Повторите новый пароль" pattern="[A-Za-z-0-9]{6,30}" title="Не менее 6 и неболее 20 латинских символов или цифр.">
			<span class="form-hint">В пароле должно быть не менее 6 и неболее 30 латинских символов или цифр</span>
			<div class="form-checkbox"><input type="file" name="avatar"> Аватар</div>
			<span class="form-link">Изображение для профиля не должно превышать 10Мб и должно быть в форматах PNG, JPEG или GIF.</span><br>
			<a href="/profile"><span class="form-link">Мой профиль</span></a>
    		<input type="submit" name="edit_f" value="Изменить">
		</form>
	</div>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>