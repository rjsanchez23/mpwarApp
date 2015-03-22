<?php

return array (
    '/'   => array(
        'app\Controller\HelloController' => 'init'
    ),
    'hello/{var1}'   => array(
        'app\Controller\HelloController' => 'hello'
    ),
    'hello/{nombre}/{apellido}'   => array(
        'app\Controller\HelloController' => 'helloJson'
)
);
