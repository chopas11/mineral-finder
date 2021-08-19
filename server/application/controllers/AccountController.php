<?php

namespace application\controllers;

use application\core\Controller;

class AccountController extends Controller {

	public function registerAction() {

		if (!empty($_POST)) {

			if (!$this->model->regValidate($_POST)) {
				$this->view->message('<p class="notice notice-error"><b>Ошибка: </b> '.$this->model->error.'<span class="notice-close"><i class="fa fa-times" aria-hidden="true"></i></span></p>');
			}

			$this->model->reg($_POST);
			$_SESSION['message'] = '<p class="notice notice-info"><b>Информация: </b> Ваша заявка на регистрацию успешно сформирована.<span class="notice-close"><i class="fa fa-times" aria-hidden="true"></i></span></p>';
			$this->view->location('/activate');
		}
		
		$this->view->render('Регистрация');
	}

	public function activateAction() {

		if (!empty($_POST)) {

			if (!$this->model->activateValidate($_POST)) {
				$this->view->message('<p class="notice notice-error"><b>Ошибка: </b> '.$this->model->error.'<span class="notice-close"><i class="fa fa-times" aria-hidden="true"></i></span></p>');
			}

			$this->model->activate($_POST);
			$_SESSION['message'] = '<p class="notice notice-info"><b>Информация: </b> Активация аккаунта успешно выполена.<span class="notice-close"><i class="fa fa-times" aria-hidden="true"></i></span></p>';
			$this->view->location('/activate');
		}

		$this->view->render('Активация аккаунта');
	}

	public function loginAction() {

		if (!empty($_POST)) {

			if (!$this->model->loginValidate($_POST)) {
				$this->view->message('<p class="notice notice-error"><b>Ошибка: </b> '.$this->model->error.'<span class="notice-close"><i class="fa fa-times" aria-hidden="true"></i></span></p>');
			}
			$this->model->login($_POST['login']);
			
			$this->view->location('/profile');
		}
		

		$this->view->render('Вход');
	}

	public function recoveryAction() {

		if (!empty($_POST)) {

			if (!$this->model->recoveryValidate($_POST)) {
				$this->view->message('<p class="notice notice-error"><b>Ошибка: </b> '.$this->model->error.'<span class="notice-close"><i class="fa fa-times" aria-hidden="true"></i></span></p>');
			}
			$this->model->recovery($_POST);
			$_SESSION['message'] = '<p class="notice notice-info"><b>Информация: </b> На указанную электронную почту придут новые данные для входа.<span class="notice-close"><i class="fa fa-times" aria-hidden="true"></i></span></p>';
			$this->view->location('/recovery');
		}
		$this->view->render('Восстановление пароля');
	}

	public function profileAction() {

		$vars = [
			'account' => $_SESSION['account'],
		];

		$this->view->render('Профиль', $vars);
	}

	public function usersAction() {
		$this->view->render('Поиск людей');
	}

	public function editAction() {
		if (!empty($_POST)) {

			if (!$this->model->editValidate($_POST)) {
				$this->view->message('<p class="notice notice-error"><b>Ошибка: </b> '.$this->model->error.'<span class="notice-close"><i class="fa fa-times" aria-hidden="true"></i></span></p>');
			}
			$this->model->edit($_POST);
			if ($_FILES['avatar']['tmp_name']) {
				$this->model->postUploadImage($_FILES['avatar']['tmp_name'], $_SESSION['account']['id']);
			}
			$this->view->message('<p class="notice notice-info"><b>Информация: </b> Изменения сохранены.<span class="notice-close"><i class="fa fa-times" aria-hidden="true"></i></span></p>');
		}

		$this->view->render('Редактирование профиля');
	}

	public function logoutAction() {
		session_unset();
		$this->view->redirect('/login');
	}


}