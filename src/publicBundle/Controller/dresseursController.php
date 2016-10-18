<?php

namespace publicBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class dresseursController extends Controller
{
    public function indexAction(){
        return $this->render(
            '@public/memberArea/pages/dresseurs.html.twig',
            []
        );
    }
}
