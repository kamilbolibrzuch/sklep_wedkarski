<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ProductController extends AbstractController
{
    /**
     * @Route("/product", name="product")
     */
     public function createProduct(): Response
     {
       $entityManager = $this->getDoctrine()->getManager();

       $product = new Product();
       $product->setName('Klawiatura');
       $product->setPrice(200);
       $product->setDescription('juhu działa');

       $entityManager->persist($product);

       $entityManager->flush();

       return new Response('Zapisano nowy produkt z id '.$product->getId());
     }
    public function index()
    {
        return $this->render('product/index.html.twig', [
            'controller_name' => 'ProductController',
        ]);
    }
}
