<?php

namespace App\Controller;

use App\Entity\Product;
use App\Form\ProductType;
use App\Repository\ProductRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ProductDetailController extends AbstractController
{
    /**
     * @Route("/product/detail/{id}", name="product_detail")
     */
    public function index(Product $product): Response
    {
        return $this->render('product_detail/index.html.twig', ['product' => $product]);
    }
}
