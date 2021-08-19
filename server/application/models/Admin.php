<?php

namespace application\models;

use application\core\Model;

class Admin extends Model {

	public $error;
// --------------------------------- Валидация входа ---------------------------------- //
	public function loginValidate($post) {

		// Проверка на пустоту полей
		if (!$post['login']) {
			$this->error = 'Пожалуйста, введите ваш логин';
			return false;
		}
		if (!$post['password']) {
			$this->error = 'Пожалуйста, введите ваш пароль';
			return false;
		}

		// Проход через регулярные выражения
		if (!preg_match('/^[A-z0-9]{3,30}$/', $post['login'])) {
			$this->error = 'Поле с логином должно содержать не менее 3 и не более 30 латинских символов или цифр от 0 до 9';
			return false;
		}
		if (!preg_match('/^[A-z0-9]{6,30}$/', $post['password'])) {
			$this->error = 'Поле с паролем должно содержать не менее 6 и не более 30 латинских символов или цифр от 0 до 9';
			return false;
		}

		// Экранирование полей
		$post['login'] = $this->db->FormChars($post['login']);
		$post['password'] = $this->db->FormChars($post['password']);
		
		if ($post['login'] != 'root') {
			$this->error = 'Не верный логин или пароль.';
			return false;

		}  elseif ($post['password'] != 'luba228') {
			$this->error = 'Не верный логин или пароль.';
			return false;
		}
		return true;
	}
// --------------------------------- Вход ---------------------------------- //
	public function login() {
		$_SESSION['admin'] = 1;
	}

	//Blog
// --------------------------------- Показ статей ---------------------------------- //
	public function getStates() {
		$result = $this->db->row('SELECT * FROM `states` ORDER BY `id` DESC');
		return $result;
	}
// --------------------------------- Отображение статьи ---------------------------------- //
	public function showState($id) {
		$result = $this->db->row('SELECT * FROM `states` WHERE `id` = "'.$id.'"');
		return $result;
	}
// --------------------------------- Редактирование статьи ---------------------------------- //
	public function redactState($post) {
		$post['name'] = $this->db->FormChars($post['name']);
		$post['hashtag'] = $this->db->FormChars($post['hashtag']);
		$post['text'] = $this->db->FormChars($post['text']);
		$post['hidden'] = $this->db->FormChars($post['hidden']);
		$params = [
			'name' => $post['name'],
			'hashtag' => $post['hashtag'],
			'text' => $post['text'],
			'id' => $post['hidden'],
		];
		if (isset($post['active'])) $this->db->query('UPDATE states SET name = :name, hashtag = :hashtag, text = :text, active = 1 WHERE id = :id', $params);
		else $this->db->query('UPDATE states SET name = :name, hashtag = :hashtag, text = :text, active = 0 WHERE id = :id', $params);
	}
// --------------------------------- Добавление статьи ---------------------------------- //
public function addState($post) {
	$params = [
		'name' => $post['name'],
		'hashtag' => $post['hashtag'],
		'text' => $post['text'],
	];
	if (isset($post['active'])) $this->db->query('INSERT INTO states  VALUES ("0", :name, "Chopas", :hashtag, :text, 1, NOW(), 0, 0)', $params);
	else $this->db->query('INSERT INTO states  VALUES ("0", :name, "Chopas", :hashtag, :text, 0, NOW(), 0, 0)', $params);
	
}

	//Catalog
// --------------------------------- Показ минералов ---------------------------------- //
	public function getMinerals() {
		$result = $this->db->row('SELECT * FROM `loads` ORDER BY `id`');
		return $result;
	}
// --------------------------------- Отображение минерала ---------------------------------- //
	public function showMineral($id) {
		$result = $this->db->row('SELECT * FROM `loads` WHERE `id` = "'.$id.'"');
		return $result;
	}
// --------------------------------- Редактирование минерала ---------------------------------- //
	public function redactMineral($post) {
		$post['name'] = $this->db->FormChars($post['name']);
		$post['text'] = $this->db->FormChars($post['text']);
		$post['hidden'] = $this->db->FormChars($post['hidden']);

		$params = [
			'name' => $post['name'],
			'text' => $post['text'],
			'id' => $post['hidden'],
		];
		if (isset($post['visible'])) $this->db->query('UPDATE loads SET name = :name, visible = 1, text = :text WHERE id = :id', $params);
		else $this->db->query('UPDATE loads SET name = :name, visible = 0, text = :text WHERE id = :id', $params);
	}
// --------------------------------- Добавление минерала ---------------------------------- //
	public function addMineral($post) {
		$post['name'] = $this->db->FormChars($post['name']);
		$post['text'] = $this->db->FormChars($post['text']);
		$post['url'] = $this->db->FormChars($post['url']);
		$params = [
			'name' => $post['name'],
			'text' => $post['text'],
			'url' => $post['url'],
		];
		if (isset($post['visible'])) $this->db->query('INSERT INTO loads  VALUES ("0", :name, :url, 1, :text)', $params);
		else $this->db->query('INSERT INTO loads  VALUES ("0", :name, :url, 0, :text)', $params);
	}

}