<?php
if ($account['avatar'] == 0) $Avatar = 0;
else $Avatar = $account['avatar'].'/'.$account['id'];

echo '
<div class="content">
	<div class="content-profile">
		<img src="/public/images/avatars/'.$Avatar.'.jpg" alt="Avatar">
	</div>
	<div class="content-form"><br><br>
		<div><span class="content-text-dark-regular">'.$account['login'].'</span></div>
		<div><span class="content-text-light-bold">'.$account['country'].'</span></div>
		<div><span class="content-text-dark-regular">Дата регистрации:</span>
		<span class="content-text-light-regular-20">'.date("d/m/20y", strtotime($account['date'])).'</span></div>
		<div><span class="content-text-dark-regular">E-mail:</span>
		<span class="content-text-light-regular-20">'.$account['email'].'</span></div>
		<div><span class="content-text-dark-regular">Опубликовано статей:</span>
		<span class="content-text-light-regular-20">0</span></div>
		<div><span class="content-text-dark-regular">Комментариев:</span>
		<span class="content-text-light-regular-20">0</span></div><br>
		<a href="/edit">Редактировать профиль </a>
	</div>
</div>
';
?>
<br><br><br><br><br><br><br>