<?php

namespace publicBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class accouplementController extends Controller
{
    public function indexAction(){
        return $this->render(
            '@public/memberArea/pages/accouplement.html.twig',
            []
        );
    }
}
