<?php

namespace app\Controller;


use app\Model\User;
use src\Component\Controller\Controller;
use src\Component\Response\Response;
use src\Component\Response\JsonResponse;



class DBController extends Controller {




    public function eloquent()
    {

        $userRepository = $this->container->get("EloquentUserRepository");

        $users = $userRepository->findAll();

        return new Response($this->container->get('Twig')->render('users.tpl','data',array(
                'users' => $users,
                'db_type' => 'Eloquent'
            )
        ));
    }
    public function pdo()
    {
        $userRepository = $this->container->get("PDOUserRepository");

        $users = $userRepository->findAll();

        return new Response($this->container->get('Twig')->render('users.tpl','data',
            array(
                'users' => $users,
                'db_type' => 'PDO'
                )
        ));

    }

}