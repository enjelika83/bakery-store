<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Home::index');          
$routes->get('/home', 'Home::index');        

$routes->get('/login', 'Auth::login');
$routes->post('/login', 'Auth::loginProcess');
$routes->get('/logout', 'Auth::logout');

$routes->get('/product', 'Product::index');                 
$routes->get('/product/detail/(:num)', 'Product::detail/$1');

$routes->get('/cart', 'Cart::index');
$routes->post('/cart/add', 'Cart::add');
$routes->post('/cart/checkout', 'Cart::showCheckoutForm'); 
$routes->post('/checkout/process', 'Cart::processCheckout');

$routes->get('/transactions/finish', 'Transaction::finish');
