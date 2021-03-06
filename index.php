<?php 

require_once("vendor/autoload.php");

use \Slim\Slim;
use \Ecommerce\Page;
use Ecommerce\PageAdmin;

error_reporting(E_ALL & ~E_DEPRECATED);

$app = new Slim();

$app->config('debug', true);

$app->get('/', function() {
   
	$page = new Page();

	$page->setTpl("index");

});

$app->get('/admin', function() {
   
	$page = new PageAdmin();

	$page->setTpl("index");

});

$app->run();

 ?>