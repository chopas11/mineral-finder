<?php
foreach ($state as $val) {
	if ( date("d/m/20y", strtotime($val['date'])) == date("d/m/20y") ) {
		$date = date("Сегодня в H:i", strtotime($val['date']));
	} else if ( date("d/m/20y", strtotime($val['date'])) == date("d/m/20y") - 1 ) {
		$date = date("Вчера в H:i", strtotime($val['date']));
	} else {
		$date = date("d/m/20y в H:i", strtotime($val['date']));
	}
echo '
<h1 class="divider">Публикация</h1>
<div class="content">
	<img class="content-img" src="/public/images/blog/blog-'.$val['id'].'.jpg" width="100%" alt="'.$val['name'].'">
	<div class="content-text">
		<span class="content-text-light-bold">'.$val['hashtag'].'</span>
		<h2>'.$val['name'].'</h2>
		<i class="fa fa-calendar content-text-date-icon" aria-hidden="true"></i><span class="content-text-dark-regular">'.$date.'</span>
		<img class="content-text-avatar" src="/public/images/avatars/1/1.jpg" alt="Avatar"><span class="content-text-dark-regular">'.$val['creytor'].'</span>
		<p>'.$val['text'].'</p>
		<p><i class="fa fa-eye content-text-icon" aria-hidden="true"></i>'.$val['vizit'].' <i class="fa fa-comment-o content-text-icon" aria-hidden="true"></i>'.$val['comments_count'].'</p>
	</div>
</div>';
}
?>
<h2 class="divider">Комментарии</h2>

<?php

foreach ($comments as $val) {
	if ($val['creytor_avatar'] == 0) $Avatar = 0;
	else $Avatar = $val['creytor_avatar'].'/'.$val['creytor_id'];
	if ( date("d/m/y", strtotime($val['date'])) == date("d/m/y") ) {
		$date = date("Сегодня в H:i", strtotime($val['date']));
	} else if ( date("d/m/y", strtotime($val['date'])) == date("d/m/y") - 1 ) {
		$date = date("Вчера в H:i", strtotime($val['date']));
	} else {
		$date = date("d/m/y в H:i", strtotime($val['date']));
	}
	echo '
	<div class="comment">
		<img class="comment-avatar" src="/public/images/avatars/'.$Avatar.'.jpg" alt="Avatar"><span class="comment-author">'.$val['creytor'].'</span>
		<span class="comment-date">'.$date.'</span>
		<p>'.$val['text'].'</p>
	</div>
	';} 

if (isset($_SESSION['account']['id'])) {
echo '
<br>
<h2 class="divider">Добавить комментарий</h2>
<form class="form" action="/blog/state/id/'.$id.'" method="POST">
<i class="form-bbcode form-bbcode-bold fa fa-bold" aria-hidden="true"></i>
<i class="form-bbcode form-bbcode-underline fa fa-underline" aria-hidden="true"></i>
<i class="form-bbcode form-bbcode-italic fa fa-italic" aria-hidden="true"></i>
<i class="form-bbcode form-bbcode-strike fa fa-strikethrough" aria-hidden="true"></i>
<i class="form-bbcode form-bbcode-link fa fa-link" aria-hidden="true"></i>
<i class="form-bbcode form-bbcode-image fa fa-file-image-o" aria-hidden="true"></i>
<i class="form-bbcode form-bbcode-audio fa fa-volume-up" aria-hidden="true"></i>
<i class="form-bbcode form-bbcode-video fa fa-fast-forward" aria-hidden="true"></i>
<!-- <i class="form-bbcode form-bbcode-smile fa fa-smile-o" aria-hidden="true"></i> -->
	<textarea id="form-bbcode-textarea" name="text" rows="20" placeholder="Текст комментария" required></textarea>
	<input type="hidden" name="hidden" value="'.$id.'" required>
	<span class="form-link">Очистить поле ввода</span>
	<input type="submit" value="Добавить">
</form>
';}
else {

echo '<br><p>Неавторизированным пользователям запрещено добавлять комментарии. Авторизуйтесь для просмотра и комментирования статей.</p>';
}
?>
<br><br><br>