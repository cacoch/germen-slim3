<?php 

$container = $app->getContainer();

//view render
$container['view'] = function ($c) {
	$settings = $c->get('settings')['view'];
	$view = new \Pug\Pug($settings);
	return $view;
};
