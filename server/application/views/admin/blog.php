<h1 class="divider">Все публикации</h1>
<div class="catalog">
<?php 
foreach ($states as $val) {
	if ( date("d/m/20y", strtotime($val['date'])) == date("d/m/20y") ) {
		$date = date("Сегодня в H:i", strtotime($val['date']));
	} else if ( date("d/m/20y", strtotime($val['date'])) == date("d/m/20y") - 1 ) {
		$date = date("Вчера в H:i", strtotime($val['date']));
	} else {
		$date = date("d/m/20y в H:i", strtotime($val['date']));
	}
	if ($val['active']) $Active = '<p><i class="fa fa-check-square" aria-hidden="true"></i> Опубликована</p><br>';
	else $Active = '<p><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> В разработке</p><br>';
	echo '
	<div class="catalog-item">
	<a href="/admin/state/id/'.$val['id'].'">
		<img src="/public/images/blog/blog-'.$val['id'].'.jpg" alt="">
		<div class="catalog-item-text">
			<span class="catalog-item-text-light-regular">'.$val['hashtag'].'</span>
			<h2>'.$val['name'].'</h2>
			'.$Active.'
			<p><i class="fa fa-calendar catalog-item-text-date-icon" aria-hidden="true"></i><span class="catalog-item-text-dark-regular">'.$date.'</span></p>
			<p><i class="fa fa-eye catalog-item-text-icon" aria-hidden="true"></i> '.$val['vizit'].' <i class="fa fa-comment-o catalog-item-text-icon" aria-hidden="true"></i>'.$val['comments_count'].'</p>
		</div>
	</a>
	</div>
	';}?>
</div>
<br><br>