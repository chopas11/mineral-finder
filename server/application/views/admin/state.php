<h1 class="divider">Публикация</h1>
<?php
foreach ($state as $val) {
    if ($val['active']) $Active = '<input type="checkbox" name="active" checked>';
    else $Active = '<input type="checkbox" name="active">';
echo '
<div class="content">
    <img class="content-img" src="/public/images/blog/blog-'.$val['id'].'.jpg" width="100%">
    <div class="content-text">
        <p><i class="fa fa-calendar content-text-date-icon" aria-hidden="true"></i><span class="content-text-dark-regular">'.date("d/m/20y", strtotime($val['date'])).'</span></p>
        <form class="form" action="/admin/state/id/'.$val['id'].'" method="POST">
        <input type="text" name="hashtag" placeholder="Хештэг" value="'.$val['hashtag'].'">
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
        <div class="form-checkbox">'.$Active.' Показать на главной странице</div>
        <input type="hidden" name="hidden" value="'.$val['id'].'" required>
        <span class="form-link">Очистить поле ввода</span>
        <input type="submit" name="blog_f" value="Сохранить">
        </form>
    </div>
</div>
';}
?>
<br><br>