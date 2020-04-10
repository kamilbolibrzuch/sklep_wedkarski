<?php
namespace App\Controller;
use Symfony\Component\HttpFundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class MainController extends AbstractController
{
  public function index(){return $this->render('home/index.html.twig');
}

public function index(){return $this->render('home/stron1.html.twig');
}
}
