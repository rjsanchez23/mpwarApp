<?php

namespace app\Controller;


use app\Model\User;
use src\Component\Controller\Controller;
use src\Component\Response\Response;
use src\Component\Response\JsonResponse;



class AuthController extends Controller {


    public function login()
    {

        return new Response($this->container->get('Twig')->render('login.tpl'));//, "user", $user

    }

    public function home()
    {

        if($this->isSession() || $this->checkLogin() ){
            return new Response($this->container->get('Twig')->render('home.twig.tpl'));//, "user", $user}
        }else{
           $response = new Response("redirect");
           $response->redirect("/login");
        }
    }



    public function isSession(){
        return $this->request->session->getValue("user");
    }
    public function checkLogin(){
        $result = false;
        if($this->request->post->getValue("user")){
            $email = $this->request->post->getValue("user");
            $password = $this->request->post->getValue("password");
            $userRepository = $this->container->get("EloquentUserRepository");
            $user = $userRepository->findByEmail($email);
            if($user->password == $password) {
                $this->request->session->setValue("user", $user->id);

                $result = true;
            }
        }

        return $result;

    }

    public function logout()
    {
        $this->request->session->close();
        $response = new Response("redirect");
        $response->redirect("/login");
    }
}