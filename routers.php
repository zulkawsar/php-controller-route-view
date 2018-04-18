<?php


$router->get('', 'controller/index.php');
$router->get('about', 'controller/about.php');
$router->get('contact', 'controller/contact.php');
$router->post('name', 'controller/add-name.php');


// var_dump($router->routes);