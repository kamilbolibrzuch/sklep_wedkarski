<?php

namespace App\Controller;
use App\Entity\Product;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ProductController extends AbstractController
{
    /**
     * @Route("/product", name="product")
     */

     // src/Controller/ProductController.php
 // ...

 /**
  * @Route("/product/{id}", name="product_show")
  */
 public function show(Product $product)
 {


     // or render a template
     // in the template, print things with {{ product.name }}
     // return $this->render('product/show.html.twig', ['product' => $product]);
 }

}
