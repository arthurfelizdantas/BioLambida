<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class BrController extends AbstractController
{
    /**
     * @Route("/br", name="br")
     */
    public function index()
    {
        return $this->render('br/index.html.twig', [
            'controller_name' => 'BrController',
        ]);
    }
      /**
     * @Route("/sobre", name="sobre")
     */
    public function sobre()
    {
        return $this->render('br/sobre.html.twig', [
            'controller_name' => 'BrController',
        ]);
    }
      /**
     * @Route("/contato", name="contato")
     */
    public function contato()
    {
        return $this->render('br/contato.html.twig', [
            'controller_name' => 'BrController',
        ]);
    }  /**
     * @Route("/produtos", name="produtos")
     */
    public function produtos()
    {
        return $this->render('br/produtos.html.twig', [
            'controller_name' => 'BrController',
        ]);
    }
      /**
     * @Route("/eventos", name="eventos")
     */
    public function eventos()
    {
        return $this->render('br/eventos.html.twig', [
            'controller_name' => 'BrController',
        ]);
    }
}
