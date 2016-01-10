<?php
	require ('models/'.changesingulare($resource).'.php');

	$cont = new PostController();
	$modl = new Post();

	//複数形を単数形に変換
	function changesingulare($value){
		if ($value == 'posts') {
			return 'post';
		}
	}
	//$action = $_GET['action'];
	//var_dump($_GET['action']);

	switch ($action){
		case 'index'://各条件
			$cont->index();	
			break;

		case 'show'://各条件
			$cont->show(10);	
			break;

		case 'edit'://各条件
			$cont->edit(20);	
			break;		

		case 'destroy'://各条件
			$cont->destroy(10);	
			break;	

		case 'view'://各条件
			$modl->view(10);	
			break;

		case 'update'://各条件
			$modl->update(10);	
			break;	

		case 'delete'://各条件
			$modl->delete(10);	
			break;

		default:
			echo 'It is error';
			break;	
	}

	//controller class
	class PostController {
		//property
		private $resouce = '';
		private $action = '';
		private $view_options = '';

		//construct
		public function __construct(){
			$this->resouce = 'posts';
			$this->action = 'index';
			$this->view_options = array();
		}

		//show itiran
		public function index(){
			//echo 'called index.php<br>';
			$this->display();
		}
		//
		public function show($id){
			echo 'called show.php<br>';
		}
		//
		public function edit($id){
			echo 'called edit.php<br>';
		}
		//
		public function destroy($id){
			echo 'called destory.php<br>';
		}
		//
		private function display() {

			require('/var/www/html/Fw_twitter_bbs/views/layouts/application.php');

		}

	}
?>