<?php

namespace application\controllers;

use application\core\Controller;

class BlogController extends Controller {

	public function indexAction() {
		//  $result = $this->model->getStates();
		//  $vars = [
		//  	'states' => $result,
		//  ];
		$vars = [];
		//echo 123;
		$this->view->render('Mineral-finder', $vars);

	}

	public function stateAction() {
		if (!empty($_POST)) {
			if (!$this->model->CommentValidate($_POST)) {
				$this->view->message('<p class="notice notice-error"><b>Ошибка: </b> '.$this->model->error.'<span class="notice-close"><i class="fa fa-times" aria-hidden="true"></i></span></p>');
			}

			$this->model->addComment($_POST);
			$_SESSION['message'] = '<p class="notice notice-info"><b>Информация: </b> Комментарий добавлен.<span class="notice-close"><i class="fa fa-times" aria-hidden="true"></i></span></p>';
			$this->view->location('/blog/state/id/'.$_POST['hidden']);
		}

		$result = $this->model->showState($this->route['id']);
		if (isset($result[0]['id'])) {

			$comments = $this->model->showComments($this->route['id']);
			foreach ($comments as &$val) {
				$val['text'] = $this->view->bbCode($val['text']);
			}
			$result[0]['text'] = $this->view->bbCode($result[0]['text']);
			$vars = [
				'state' => $result,
				'comments' => $comments,
				'id' => $this->route['id'],
			];

			$this->view->render($result[0]['name'], $vars);
			$this->model->visitCounter($this->route['id']);
		} else {
			$this->view->redirect('/');
		}

	}

	public function uploadAction() {
		if (!empty($_POST)) {
			$num = $_POST['num'];
			$Row = $this->model->getAjaxStates($num);
			sleep(2);
			foreach ($Row as $val) {
				if ( date("d/m/20y", strtotime($val['date'])) == date("d/m/20y") ) {
					$date = date("Сегодня в H:i", strtotime($val['date']));
				} else if ( date("d/m/20y", strtotime($val['date'])) == date("d/m/20y") - 1 ) {
					$date = date("Вчера в H:i", strtotime($val['date']));
				} else {
					$date = date("d/m/20y в H:i", strtotime($val['date']));
				}
				echo '
				<div class="content">
					<img class="content-img" src="public/images/blog/blog-'.$val['id'].'.jpg" width="100%" alt="'.$val['name'].'">
					<div class="content-text">
						<span class="content-text-light-bold">'.$val['hashtag'].'</span>
						<h2>'.$val['name'].'</h2>
						<p><i class="fa fa-calendar content-text-date-icon" aria-hidden="true"></i><span class="content-text-dark-regular">'.$date.'</span></p>
						<a href="/blog/state/id/'.$val['id'].'" class="content-text-light-regular-15">Читать далее</a>
						<p><i class="fa fa-eye content-text-icon" aria-hidden="true"></i>'.$val['vizit'].'<i class="fa fa-comment-o content-text-icon" aria-hidden="true"></i>'.$val['comments_count'].'</p>
					</div>
				</div>';
			
			}
		}
	}
}