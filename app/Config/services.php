<?php



return array (

    'PDOUserRepository' => array(
        "Controller" => 'app\Classes\PDOUserRepository',
        "Arguments" => array('@SqlDatabase')
    ),
    'EloquentUserRepository' => array(
        "Controller" => 'app\Classes\EloquentUserRepository',
        "Arguments" => array('@Eloquent')
    ),

);
