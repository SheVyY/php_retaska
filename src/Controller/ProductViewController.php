<?php

namespace App\Controller;

use App\Entity\Product;
use App\Form\ProductType;
use App\Repository\ProductRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ProductViewController extends AbstractController
{
    /**
     * @Route("/product/view", name="product_view")
     */
    public function index(ProductRepository $productRepository): Response
    {
        return $this->render('product_view/index.html.twig', [
              'products_view' => $productRepository->findAll()
        ]);
    }
}
