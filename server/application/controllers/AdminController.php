<?php

namespace application\controllers;

use application\core\Controller;

class AdminController extends Controller {

	public function loginAction() {
		if (!empty($_POST)) {
			if (!$this->model->loginValidate($_POST)) {
				$this->view->message('<p class="notice notice-error"><b>Ошибка: </b> '.$this->model->error.'<span class="notice-close"><i class="fa fa-times" aria-hidden="true"></i></span></p>');
			}
			$this->model->login();
			
			$this->view->location('/admin/blog');
		}
		

		$this->view->render('Вход в ПУ');
	}

	//Blog

	public function blogAction() {
		$this->view->layout = 'admin';
		$result = $this->model->getStates();
		$vars = [
			'states' => $result,
		];
		$this->view->render('Статьи', $vars);
	}

	public function stateAction() {
		$this->view->layout = 'admin';

		if (!empty($_POST)) {
			$this->model->redactState($_POST);
			$this->view->message('<p class="notice notice-info"><b>Информация: </b> Изменения сохранены.<span class="notice-close"><i class="fa fa-times" aria-hidden="true"></i></span></p>');
		}

		$result = $this->model->showState($this->route['id']);

		if (isset($result[0]['id'])) {
			$vars = [
				'state' => $result,
				'id' => $this->route['id'],
			];
			$this->view->render($result[0]['name'], $vars);
		} else {
			$this->view->redirect('/');
		}

	}

	public function blogaddAction() {
		$this->view->layout = 'admin';

		if (!empty($_POST)) {
			$this->model->addState($_POST);
			$_SESSION['message'] = '<p class="notice notice-info"><b>Информация: </b> Статья добавлена.<span class="notice-close"><i class="fa fa-times" aria-hidden="true"></i></span></p>';
			$this->view->location('/admin/blog');
		}
		
		$this->view->render('Добавление Статьи');
	}

	//Catalog

	public function catalogAction() {
		$this->view->layout = 'admin';
		$result = $this->model->getMinerals();
		$vars = [
			'minerals' => $result,
		];
		$this->view->render('Каталог минералов', $vars);
	}

	public function mineralAction() {
		$this->view->layout = 'admin';

		if (!empty($_POST)) {
			$this->model->redactMineral($_POST);
			$this->view->message('<p class="notice notice-info"><b>Информация: </b> Изменения сохранены.<span class="notice-close"><i class="fa fa-times" aria-hidden="true"></i></span></p>');
		}

		$result = $this->model->showMineral($this->route['id']);

		if (isset($result[0]['id'])) {
			$vars = [
				'mineral' => $result,
				'id' => $this->route['id'],
			];
			$this->view->render($result[0]['name'], $vars);
		} else {
			$this->view->redirect('/');
		}

	}

	public function catalogaddAction() {
		$this->view->layout = 'admin';

		if (!empty($_POST)) {
			$this->model->addMineral($_POST);
			$_SESSION['message'] = '<p class="notice notice-info"><b>Информация: </b> Минерал добавлен.<span class="notice-close"><i class="fa fa-times" aria-hidden="true"></i></span></p>';
			$this->view->location('/admin/catalog');
		}
		
		$this->view->render('Добавление минерала');
	}





	public function logoutAction() {
		session_unset();
		$this->view->redirect('/admin/login');
	}

	
}