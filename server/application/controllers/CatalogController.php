<?php

namespace application\controllers;

use application\core\Controller;

class CatalogController extends Controller {

	public function indexAction() {
		$result = $this->model->getMinerals();
		$vars = [
			'minerals' => $result,
		];
		$this->view->render('Каталог Минералов', $vars);

	}

	public function mineralAction() {
		$result = $this->model->showMineral($this->route['id']);
		if (isset($result[0]['id'])) {
			$result[0]['text'] = $this->view->bbCode($result[0]['text']);
			$vars = [
				'state' => $result,
			];
			$this->view->render($result[0]['name'], $vars);
		} else {
			$this->view->redirect('/catalog');
		}
	}

	public function uploadAction() {
		if (!empty($_POST)) {
			$num = $_POST['num'];
			$Row = $this->model->getAjaxStates($num);
			sleep(2);
			foreach ($Row as $val) {
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
				';
			
			}
		}
	}
}