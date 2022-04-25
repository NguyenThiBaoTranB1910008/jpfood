<?php

require 'vendor/autoload.php';
require 'app/library.php';

define('PATH_VIEW', __DIR__ . '/app/views/auth');

$dbManger = new Illuminate\Database\Capsule\Manager;

$dbManger->addConnection([
	'driver'    => 'mysql',
	'host'      => 'localhost',
	'database'  => 'jpfood',
	'username'  => 'root',
	'password'  => '',
	'charset'   => 'utf8',
	'collation' => 'utf8_unicode_ci',
	'prefix'    => '',
]);

$dbManger->setAsGlobal();
$dbManger->bootEloquent();


?>