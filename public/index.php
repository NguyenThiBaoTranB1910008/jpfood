<?php
require __DIR__ . '/../bootstrap.php';

$router = new \Bramus\Router\Router();

$router->get('/signup', '\App\Controllers\auth\SignupController@showSignupForm');
$router->post('/signup', '\App\Controllers\auth\SignupController@signup');
$router->get('/login', '\App\Controllers\auth\LoginController@showLoginForm');
$router->post('/login', '\App\Controllers\auth\LoginController@login');
$router->get('/booktable', '\App\Controllers\auth\BooktableController@showBooktableForm');
$router->get('/', '\App\Controllers\HomeController@index');
$router->get('/out', '\App\Controllers\auth\LoginController@logout');  
$router->get('/menu', '\App\Controllers\auth\MenuController@showMenu');  
$router->post('/cart', '\App\Controllers\auth\CartController@showCart');  
$router->get('/cart', '\App\Controllers\auth\CartController@deleteCart');  
$router->post('cart/update', '\App\Controllers\auth\CartController@updateCart');  
$router->post('/booktable', '\App\Controllers\auth\BooktableController@saveForm');  
$router->get('/booktable/del', '\App\Controllers\auth\BooktableController@deleteTable');  
$router->post('/cart/save', '\App\Controllers\auth\CartController@saveCart');  
$router->get('/bill', '\App\Controllers\auth\BillController@showBill');  
$router->get('/icon', '\App\Controllers\auth\CartController@showCart');  
$router->post('/order', '\App\Controllers\auth\MenuController@saveSession');  

$router->run();
