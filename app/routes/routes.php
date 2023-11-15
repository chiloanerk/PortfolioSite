<?php

global $router;
$router->addRoute('GET', '/', 'home/index');
$router->addRoute('GET', '/feed', 'main/feed');
$router->addRoute('GET', '/highlights', 'main/highlights');
$router->addRoute('GET', '/blog', 'main/blog');
$router->addRoute('GET', '/about', 'main/about');