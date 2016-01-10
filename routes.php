<?php

	$params   = explode('/', $_GET['url']);
	$resource = $params[0];
	$action   = $params[1];

	var_dump($_GET['url']);
	var_dump($resource);
	var_dump($action);

	// require ('controllers/posts_controller.php'); //元はこれ
	require ('controllers/'.$resource.'_controller.php');
	//require ('models/'.$resource.'.php');

	// function changesingulare($value){
	// 	//複数形を単数形に変換
	// 	if ($value == 'posts') {
	// 		return 'post';
	// 	}
	// }

	echo 'Here is routes.php<br>';

?>