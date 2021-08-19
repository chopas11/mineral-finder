
<?php
foreach ($mineral as $val) {
    if ($val['visible']) $Visible = '<input type="checkbox" name="visible" checked>';
    else $Visible = '<input type="checkbox" name="visible">';
echo '
<h1 class="divider">'.$val['name'].'</h1>
<div class="content">
    <img class="content-img" src="/public/images/catalog/'.$val['url'].'.jpg" width="100%">
    <div class="content-text">
        <form class="form" action="/admin/mineral/id/'.$val['id'].'" method="POST">
        <input type="text" name="name" placeholder="Название" value="'.$val['name'].'">
        <i class="form-bbcode form-bbcode-bold fa fa-bold" aria-hidden="true"></i>
		<i class="form-bbcode form-bbcode-underline fa fa-underline" aria-hidden="true"></i>
		<i class="form-bbcode form-bbcode-italic fa fa-italic" aria-hidden="true"></i>
		<i class="form-bbcode form-bbcode-strike fa fa-strikethrough" aria-hidden="true"></i>
		<i class="form-bbcode form-bbcode-link fa fa-link" aria-hidden="true"></i>
		<i class="form-bbcode form-bbcode-image fa fa-file-image-o" aria-hidden="true"></i>
		<i class="form-bbcode form-bbcode-audio fa fa-volume-up" aria-hidden="true"></i>
		<i class="form-bbcode form-bbcode-video fa fa-fast-forward" aria-hidden="true"></i>
		<!-- <i class="form-bbcode form-bbcode-smile fa fa-smile-o" aria-hidden="true"></i> -->
        <textarea id="form-bbcode-textarea" name="text" rows="20" placeholder="Текст статьи" required>'.$val['text'].'</textarea>
        <input type="hidden" name="hidden" value="'.$val['id'].'" required>
        <div class="form-checkbox"> '.$Visible.' Показать в каталоге</div>
        <span class="form-link">Очистить поле ввода</span>
        <input type="submit" name="blog_f" value="Сохранить">
        </form>
    </div>
</div>
';}
?>
<br><br>