<?php

namespace publicBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class veterinaireController extends Controller
{
    public function indexAction(){
        return $this->render(
            '@public/memberArea/pages/veterinaire.html.twig',
            []
        );
    }
}
