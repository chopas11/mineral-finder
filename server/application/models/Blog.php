<?php

namespace application\models;

use application\core\Model;

class Blog extends Model {
// --------------------------------------- Показ статей --------------------------------------- //
	public function getStates() {
		$result = $this->db->row('SELECT * FROM `states` WHERE `active` = 1 ORDER BY `id` DESC LIMIT 0, 5');
		return $result;
	}
// -------------------------------------- Открыть статью -------------------------------------- //
	public function showState($id) {
		$result = $this->db->row('SELECT * FROM `states` WHERE `id` = "'.$id.'"');

		return $result;
	}
// ------------------------ Обновление счетчика просмотров статьи ----------------------------- //
	public function visitCounter($id) {
		$this->db->query('UPDATE `states` SET `vizit` = `vizit` + 1 WHERE `id` = "'.$id.'"');
	}
// ------------------------------------ Показ комментариев ------------------------------------ //
	public function showComments($id) {
		$params = [
			'id' => $id,
		];
		$comments = $this->db->row('SELECT * FROM `comments` WHERE `material` = :id AND `module` = 2 ORDER BY id DESC', $params);

		return $comments;
	}
// ---------------------------------- Валидация комментариев ---------------------------------- //
	public function CommentValidate($post) {
		
		// Текст
		if (!$post['text']) {
			$this->error = 'Поле с комментарием пустое';
			return false;
		}
		
		if ( strlen($post['text']) > 300 ) {
			$this->error = 'Текстовое поле может содержать не более 300 символов.';
			return false;
		}

		// Скрытое поле
		if (!$post['hidden']) {
			$this->error = 'Неверный запрос.';
			return false;
		}
		
		return true;
	}
// --------------------------------- Добавление комментариев ---------------------------------- //
	public function addComment($post) {

		// Экранирование символов
		$post['text'] = $this->db->FormChars($post['text']);
		$post['hidden'] = $this->db->FormChars($post['hidden']);

		$params = [
			'material' => $post['hidden'],
			'text' => $post['text'],
			'creytor' => $_SESSION['account']['login'],
			'creytor_avatar' => $_SESSION['account']['avatar'],
			'creytor_id' => $_SESSION['account']['id'],
		];
		$result = $this->db->query('INSERT INTO `comments` VALUES ("0", :material, 2, :creytor, :creytor_avatar, :creytor_id, :text, NOW())', $params);
		
		$this->db->query('UPDATE `states` SET `comments_count` = `comments_count` + 1 WHERE `id` = '.$post['hidden'].'');
		
		return $result;
	}
// ---------------------------- Запрос на получение новых статей  ------------------------------ //
	public function getAjaxStates($num) {
		$result = $this->db->row('SELECT * FROM `states` WHERE `active` = 1 ORDER BY `id` DESC LIMIT '.$num.', 5');
		return $result;
	}

}