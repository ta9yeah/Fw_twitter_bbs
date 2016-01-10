<?php

class Post {

	private $hoge;
	private $fuga;

	//__construct
	public function __construct() {
	}

	//Contorollerのアクションメッソドから呼び出される
	public function view($value) {
		echo 'called view.php<br>';//DBアクセス処理
	}
	//Contorollerのアクションメッソドから呼び出される
	public function update($value) {
		echo 'update view.php<br>';//DBアクセス処理
	}
	//Contorollerのアクションメッソドから呼び出される
	public function delete($vale) {
		echo 'delete view.php<br>';//DBアクセス処理
	}
	
}
?>