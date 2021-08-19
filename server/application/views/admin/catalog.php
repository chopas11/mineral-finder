<h1 class="divider">Каталог минералов</h1>
<div class="catalog">
	<?php foreach ($minerals as $val) {
		if ($val['visible']) $Visible = '<p><i class="fa fa-check-square" aria-hidden="true"></i> Опубликован</p><br>';
		else $Visible = '<p><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> В разработке</p><br>';
	echo '
	<div class="catalog-item">
	<a href="/admin/mineral/id/'.$val['id'].'">
		<img src="/public/images/catalog/'.$val['url'].'.jpg" alt="">
		<div class="catalog-item-text">
		<span class="catalog-item-text-light-regular">Каталог минералов</span>
		<h2>'.$val['name'].'</h2>
		'.$Visible.'
		</div>
	</a>
	</div>
	';} ?>
</div>
<br><br>