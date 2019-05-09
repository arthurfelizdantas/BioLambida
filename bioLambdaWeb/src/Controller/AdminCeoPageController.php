<?php

namespace App\Controller;
use App\Form\CeoType;
use App\Form\AwardsType;
use App\Form\ExperienceType;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class AdminCeoPageController extends AbstractController
{
    /**
     * @Route("/admin/ceo/fundador", name="ceo")
     */
    public function ceo(Request $request)
    {
        $form = $this->createForm(CeoType::class);
        $form->handleRequest($request);

        return $this->render('/admin/web/ceo/ceo.html.twig', [
            'form'=>$form->createView()
        ]);
    }

}