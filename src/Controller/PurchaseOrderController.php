<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PurchaseOrderController extends AbstractController
{
    /**
     * @Route("/purchase/order", name="purchase_order")
     */
    public function index()
    {
        return $this->render('purchase_order/index.html.twig', [
            'controller_name' => 'PurchaseOrderController',
        ]);
    }
}
