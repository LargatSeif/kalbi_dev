<?php

namespace publicBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class adoptionController extends Controller
{
    public function indexAction(){
        return $this->render(
            '@public/memberArea/pages/adoption.html.twig',
            []
        );
    }
}
