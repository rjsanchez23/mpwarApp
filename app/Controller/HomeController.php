<?php

namespace app\Controller;



use src\Component\Controller\Controller;
use src\Component\Response\JsonResponse;
use src\Component\Response\Response;
use src\Language\Language;


class HomeController extends Controller
{

    public function init()
    {


        return new Response($this->container->get('Twig')->render('welcome.tpl'));
    }


    public function twig()
    {
        $user = $this->getUserBySession();

        return new Response($this->container->get('Twig')->render('twig.tpl', 'user', $user));

    }

    public function smarty()
    {
        $user = $this->getUserBySession();

        return new Response($this->container->get('Smarty')->render('smarty.tpl', 'user', $user));

    }

    public function http404()
    {
        return new Response($this->container->get('Twig')->render('404.tpl'), 404);

    }

    public function userURL($id)
    {
        $userRepository = $this->container->get("EloquentUserRepository");
        $user = $userRepository->find($id);

        return new Response($this->container->get('Twig')->render('userURL.tpl', 'userURL', $user));

    }
    public function formUsers()
    {
        $userRepository = $this->container->get("EloquentUserRepository");
        $users = $userRepository->findAll();

        return new Response($this->container->get('Twig')->render('newUser.tpl', 'users', $users));



    }
    public function create()
    {
        $name = $this->request->post->getValue("name");
        $email =  $this->request->post->getValue("email");
        $userRepository = $this->container->get("PDOUserRepository");
        $userRepository->create($name, $email);

        $response = new Response("redirect");
        $response->redirect("/newUser");

    }


    public function json()
    {
        $userRepository = $this->container->get("EloquentUserRepository");
        $users = $userRepository->findAll();
        if ($this->request->isAjaxRequest()) {
            return new JsonResponse($users);
        }
        return new Response($this->container->get('Twig')->render('json.tpl'));


    }

    public function getUserBySession()
    {
        $userRepository = $this->container->get("EloquentUserRepository");
        return $userRepository->find($this->request->session->getValue("user"));

    }

    public function quijote($idioma){
        $language = $this->container->get("Language");
        $quijote = $language->get('Quijote',$idioma);
        return new Response($this->container->get('Twig')->render('traduccion.tpl', 'quijote', $quijote));
    }
}