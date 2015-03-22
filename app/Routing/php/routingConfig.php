<?php

return array (


    '/'   => array(
        'app\Controller\HomeController' => 'init'
    ),
    'user/{var1}'   => array(
        'app\Controller\HomeController' => 'userURL'
    ),
    'smarty'   => array(
        'app\Controller\HomeController' => 'smarty'
    ),
    'twig'   => array(
        'app\Controller\HomeController' => 'twig'
    ),
    'eloquent'   => array(
        'app\Controller\DBController' => 'eloquent'
    ),
    'pdo'   => array(
        'app\Controller\DBController' => 'pdo'
    ),
    'newUser'   => array(
        'app\Controller\HomeController' => 'formUsers'
    ),
    'create'   => array(
        'app\Controller\HomeController' => 'create'
    ),
    '404'   => array(
        'app\Controller\HomeController' => 'http404'
    ),
    'json'   => array(
        'app\Controller\HomeController' => 'json'
    ),
    'login'   => array(
        'app\Controller\AuthController' => 'login'
    ),
    'logout'   => array(
        'app\Controller\AuthController' => 'logout'
    ),
    'home'   => array(
        'app\Controller\AuthController' => 'home'
    ),
    'quijote/{idioma}'   => array(
        'app\Controller\HomeController' => 'quijote'
    ),


);
