<?php
namespace App\Controller;
use Symfony\Component\HttpFundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class MainController extends AbstractController
{
  public function index(){return $this->render('home/index.html.twig');
}


public function strona1(){return $this->render('home/strona1.html.twig');
}
}
