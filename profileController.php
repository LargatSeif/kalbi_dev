<?php

namespace userBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class profileController extends Controller
{
    public function indexAction()
    {
        $userData = $this->getUser();
        $user = [
            'id' =>$userData->getId(),
            'username' => $userData->getUsername() ,

        ];

        
        //var_dump($dogs);die;
        if(empty($userData)){
            return new Response('ERROR you have no acces to this section this request have been saved you will be banned');
        }
        return $this->render('@user/profile/index.html.twig',['userData'=>$user,'dogs'=>$dogs ]);
    }
}
