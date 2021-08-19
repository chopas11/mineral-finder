<h1 class="divider">Все публикации</h1>
<div class="news">
	<?php foreach ($states as $val) {
		if ( date("d/m/20y", strtotime($val['date'])) == date("d/m/20y") ) {
			$date = date("Сегодня в H:i", strtotime($val['date']));
		} else if ( date("d/m/20y", strtotime($val['date'])) == date("d/m/20y") - 1 ) {
			$date = date("Вчера в H:i", strtotime($val['date']));
		} else {
			$date = date("d/m/20y в H:i", strtotime($val['date']));
		}
		echo '
		<div class="content">
			<img class="content-img" src="public/images/blog/blog-'.$val['id'].'.jpg" width="100%" alt="'.$val['name'].'">
			<div class="content-text">
				<span class="content-text-light-bold">'.$val['hashtag'].'</span>
				<h2>'.$val['name'].'</h2>
				<p><i class="fa fa-calendar content-text-date-icon" aria-hidden="true"></i><span class="content-text-dark-regular">'.$date.'</span></p>
				<a href="/blog/state/id/'.$val['id'].'" class="content-text-light-regular-15">Читать далее</a>
				<p><i class="fa fa-eye content-text-icon" aria-hidden="true"></i>'.$val['vizit'].'<i class="fa fa-comment-o content-text-icon" aria-hidden="true"></i>'.$val['comments_count'].'</p>
			</div>
		</div>';

	} 
	?>
</div>
<div class="loading"><input class="ajax-states" type="button" value="Показать еще"></div>

<br><br>
