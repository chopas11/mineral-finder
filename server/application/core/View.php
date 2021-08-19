<?php

namespace application\core;

class View {

	public $path;
	public $route;
	public $layout = 'default';

	public function __construct($route) {
		$this->route = $route;
		$this->path = $route['controller'].'/'.$route['action'];
	}

	public function render($title, $vars = []) {
		extract($vars);
		$path = 'application/views/'.$this->path.'.php';
		if (file_exists($path)) {
			ob_start();
			require $path;
			$content = ob_get_clean();
			require 'application/views/layouts/'.$this->layout.'.php';
		}
	}

	public function redirect($url) {
		header('location: '.$url);
		exit;
	}

	public static function errorCode($code) {
		http_response_code($code);
		$path = 'application/views/errors/'.$code.'.php';
		if (file_exists($path)) {
			require $path;
		}
		exit;
	}

	public function message($message) {
		exit(json_encode(['message' => $message]));
	}
		

	public function location($url) {
		exit(json_encode(['url' => $url]));
	}

	public function bbCode($text) {
		$search = array(

		  '[b]',
		  '[/b]',
		  
		  '[i]',
		  '[/i]',

		  '[url=',

		  '=+=',

		  '[/url]',

		  '[audio]',

		  '[/audio]',

		  '[video]',

		  '[/video]',
		    
		  '[br]',
		  ':D83DDE00:',
			':D83DDE0A:',
			':D83DDE0B:',
			':D83DDE0C:',
			':D83DDE0D:',
			':D83DDE0E:',

			':D83DDE0F:',
			':D83DDE01:',
			':D83DDE1A:',
			':D83DDE1B:',
			':D83DDE1C:',
			':D83DDE1D:',

			':D83DDE1E:',
			':D83DDE1F:',
			':D83DDE02:',
			':D83DDE2A:',
			':D83DDE2B:',
			':D83DDE2C:',

			'[preview11]',
			'[/preview11]',

			'[h1]',
			'[/h1]',

			'[podcast]',
			'[/podcast]',

			'[pi]',
			'[/pi]',

			'[div]',
			'[/div]',
		    
		  '[s]',
		  '[/s]',

		  '[u]',
		  '[/u]',

		  '[img url=',
		  ']',
		    
		);
		$replace = array(

		  	'<b>',
		  	'</b>',
		  
		  	'<i>',
		  	'</i>',

		  	'<a target="_blank" href="',

		  	'">',

		  	'</a>',


		  	'<audio src="',

		  	'" controls></audio>',


		  	'<video width="400" height="400" src="',

		  	'" controls></video>',
		    
		  	'<br>',
		  	'<img src="/public/img/smiles/D83DDE00.png" id="D83DDE00" class="smile" alt="">',
			'<img src="/public/img/smiles/D83DDE0A.png" id="D83DDE0A" class="smile" alt="">',
			'<img src="/public/img/smiles/D83DDE0B.png" id="D83DDE0B" class="smile" alt="">',
			'<img src="/public/img/smiles/D83DDE0C.png" id="D83DDE0C" class="smile" alt="">',
			'<img src="/public/img/smiles/D83DDE0D.png" id="D83DDE0D" class="smile" alt="">',
			'<img src="/public/img/smiles/D83DDE0E.png" id="D83DDE0E" class="smile" alt="">',

			'<img src="/public/img/smiles/D83DDE0F.png" id="D83DDE00" class="smile" alt="">',
			'<img src="/public/img/smiles/D83DDE01.png" id="D83DDE0A" class="smile" alt="">',
			'<img src="/public/img/smiles/D83DDE1A.png" id="D83DDE0B" class="smile" alt="">',
			'<img src="/public/img/smiles/D83DDE1B.png" id="D83DDE0C" class="smile" alt="">',
			'<img src="/public/img/smiles/D83DDE1C.png" id="D83DDE0D" class="smile" alt="">',
			'<img src="/public/img/smiles/D83DDE1D.png" id="D83DDE0E" class="smile" alt="">',

			'<img src="/public/img/smiles/D83DDE1E.png" id="D83DDE00" class="smile" alt="">',
			'<img src="/public/img/smiles/D83DDE1F.png" id="D83DDE0A" class="smile" alt="">',
			'<img src="/public/img/smiles/D83DDE02.png" id="D83DDE0B" class="smile" alt="">',
			'<img src="/public/img/smiles/D83DDE2A.png" id="D83DDE0C" class="smile" alt="">',
			'<img src="/public/img/smiles/D83DDE2B.png" id="D83DDE0D" class="smile" alt="">',
			'<img src="/public/img/smiles/D83DDE2C.png" id="D83DDE0E" class="smile" alt="">',
			
			'<div class="preview11">',
			'</div>',

			'<h1>',
			'</h1>',

			'<p class="podcast">',
			'</p>',

			'<p class="pi">',
			'</p>',

			'<div>',
			'</div>',


		    
		  '<s>',
		  '</s>',

		  '<u>',
		  '</u>',

		  '<img src="',
		  '" width="400px">',
		);
		return str_replace($search, $replace, $text);
	}

}	