<?php

namespace SoftUniBlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ArticleControlerController extends Controller
{
    public function createdAction()
    {
        return $this-> render("article/create.html.twig");
    }

    public function indexAction($name)
    {
        return $this->render('', array('name' => $name));
    }
}
