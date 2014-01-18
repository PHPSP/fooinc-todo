<?php
require __DIR__.'/../vendor/autoload.php';

$router = new Respect\Rest\Router;

$router->get('/','Foobar\Context\Index');

$router->any('/**',function($args){
	return "The URL ".implode('/',$args).' does not exists';
});
