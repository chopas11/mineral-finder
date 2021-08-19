<?php

namespace application\models;

use application\core\Model;

class Catalog extends Model {

	public function getMinerals() {
		$result = $this->db->row('SELECT * FROM `loads` WHERE `visible` = 1 ORDER BY id LIMIT 0, 6');
		return $result;
	}

	public function showMineral($id) {
		$result = $this->db->row('SELECT * FROM `loads` WHERE `id` = "'.$id.'"');

		return $result;
	}

	public function getAjaxStates($num) {
		$result = $this->db->row('SELECT * FROM `loads` WHERE `visible` = 1 ORDER BY `id` LIMIT '.$num.', 6');
		return $result;
	}

}