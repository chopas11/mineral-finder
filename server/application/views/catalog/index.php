<div class="catalog">
	<?php foreach ($minerals as $val) {
		echo '
		
		<div class="catalog-item">
			<a href="/catalog/mineral/id/'.$val["id"].'">
			<img src="/public/images/catalog/'.$val["url"].'.JPG" alt="'.$val["name"].'">
			<div class="catalog-item-text">
				<span class="catalog-item-text-light-regular">Каталог минералов</span>
				<h2>'.$val["name"].'</h2>
			</div>
			</a>
		</div>
		
		';}
	?>
</div>
		
<div class="loading"><input class="ajax-catalog" type="button" value="Показать еще"></div>

<br><br>