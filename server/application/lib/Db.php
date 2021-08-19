<?php

namespace application\lib;

use PDO;

class Db {

	protected $db;
	
	public function __construct() {
		$config = require 'application/config/db.php';
		$this->db = new PDO('mysql:host='.$config['host'].';dbname='.$config['name'].'', $config['user'], $config['password']);
		
	}

	public function query($sql, $params = []) { // Запрос без SELECT
		$stmt = $this->db->prepare($sql);
		if (!empty($params)) {
			foreach ($params as $key => $val) {
				$stmt->bindValue(':'.$key, $val);
			}
		}
		$stmt->execute();
		return $stmt;
	}

	public function row($sql, $params = []) { // SELECT запрос с множественным выводом
		$result = $this->query($sql, $params);
		return $result->fetchAll(PDO::FETCH_ASSOC);
	}

	public function column($sql, $params = []) { // SELECT запрос с одиночным выводом
		$result = $this->query($sql, $params);
		return $result->fetchColumn();
	}

	public function FormChars($text) {
		return nl2br(htmlspecialchars(trim($text), ENT_QUOTES), false);
	}

	public function GenPass ($word1, $salt) {
		$pass = $word1;
		for ($i = 0; $i<3; $i++) {
			$pass = hash('sha512', $pass);
		}
		for ($i = 0; $i<3; $i++) {
			$pass = hash('sha512', ''.$pass.$salt.'');
		}
		return hash('sha256', 'CHOPAS>%ALEX'.md5('XhB$yjwIoV>iuBPG%9$CE%EJ5H4kw'.$pass.'heN#TI7nPo^u^GA8zS$0ViB$Kda*1IK').md5('nc39@Cd$UeyrQ3iBXdJ@c10'.$salt.'ec$bfe@39cd$d221d*4555#d1d857'));
	}


}