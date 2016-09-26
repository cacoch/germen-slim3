<?php 


$app->get('/', function($request, $response) {
	//$response->write("Hola cabrones");
	$body = $this->view->render('../src/template.pug');
	return $response->write($body);
});
