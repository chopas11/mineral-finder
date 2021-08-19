<div class="content">
    <div class="content-text">
        <form class="form" action="/admin/blog/add" method="POST">
        <input type="text" name="hashtag" placeholder="Хештэг">
        <input type="text" name="name" placeholder="Название">
        <i class="form-bbcode form-bbcode-bold fa fa-bold" aria-hidden="true"></i>
		<i class="form-bbcode form-bbcode-underline fa fa-underline" aria-hidden="true"></i>
		<i class="form-bbcode form-bbcode-italic fa fa-italic" aria-hidden="true"></i>
		<i class="form-bbcode form-bbcode-strike fa fa-strikethrough" aria-hidden="true"></i>
		<i class="form-bbcode form-bbcode-link fa fa-link" aria-hidden="true"></i>
		<i class="form-bbcode form-bbcode-image fa fa-file-image-o" aria-hidden="true"></i>
		<i class="form-bbcode form-bbcode-audio fa fa-volume-up" aria-hidden="true"></i>
		<i class="form-bbcode form-bbcode-video fa fa-fast-forward" aria-hidden="true"></i>
        <textarea id="form-bbcode-textarea" name="text" rows="20" placeholder="Текст статьи" required></textarea>
        <div class="form-checkbox"><input type="checkbox" name="active"> Показать на главной странице</div>
        <span class="form-link">Очистить поле ввода</span>
        <input type="submit" name="blog_f" value="Сохранить">
        </form>
    </div>
</div>
<br><br><br><br><br><br>