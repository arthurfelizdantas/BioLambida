<?php

namespace App\Controller;
use App\Form\FeedbackType;
use App\Form\BusinessPartnersType;
use App\Form\TeamType;
use App\Form\CeoType;
use App\Form\HomeType;
use App\Form\BusinessClientType;

use App\Entity\Feedback;

use App\Entity\Home;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class AdminBusinessPageController extends AbstractController
{
    /**
     * @Route("/admin/empresa/missao", name="mission")
     */
    public function mission(Request $request)
    {
        $home = new Home();
        $form = $this->createForm(HomeType::class, $home);
        $form->handleRequest($request);
        $entityManager = $this->getDoctrine()->getManager();
        $repository = $this->getDoctrine()->getRepository(Home::class);
        $values = $repository->findBy(['category'=> 'mission']);
        if ($form->isSubmitted() && $form->isValid()){
        
            $home=$repository->findOneBy(['category'=>['mission'],'language'=>$form['language']->getData()]);
            $file = $form['photos']->getData();
            if($home){
                $home->setTitle($form['title']->getData());
                $home->setSubTitle($form['subtitle']->getData());
                $home->setText($form['text']->getData());

                $file = $form['photos']->getData();
                $home->setPhotos($file->getClientOriginalName());
                $file->move($this->getParameter("home_directory"),  $file->getClientOriginalName());
                
                $entityManager->persist($home);
                $entityManager->flush();

                return $this->redirectToRoute('home_whats_biolambda');    
            } else{          
            
            $home =  $form->getData();
            $home->setCategory('mission');
            $file = $form['photos']->getData();

            $home->setPhotos($file->getClientOriginalName());
            
            $file->move($this->getParameter("home_directory"), $file->getClientOriginalName());
            $entityManager->persist($home);
            $entityManager->flush();

            return $this->redirectToRoute('home_whats_biolambda');
            }
        }
        return $this->render('/admin/web/business/mission.html.twig', [
            'form' => $form->createView(),
            'values' => $values
        ]);
    }
    /**
     * @Route("/admin/empresa/feedback", name="feedbacks")
     */
    public function feedback(Request $request)
    {
        $feedback = new Feedback();
        $form = $this->createForm(FeedbackType::class, $feedback);
        $form->handleRequest($request);

        $entityManager = $this->getDoctrine()->getManager();

        $repository = $this->getDoctrine()->getRepository(Feedback::class);
        $values = $repository->findAll();

        if ($form->isSubmitted() && $form->isValid()){
            $file = $form['photo']->getData();

            if($feedback){
                $feedback->setName($form['name']->getData());
                $feedback->setLocal($form['local']->getData());
                $feedback->setText($form['text']->getData());
                $feedback->setSatisfaction($form['satisfaction']->getData());
                $feedback->setLanguage($form['language']->getData());
                $feedback->setPhoto($file->getClientOriginalName());
                $file->move($this->getParameter("people_directory"), $file->getClientOriginalName());
                $entityManager->persist($feedback);
                $entityManager->flush();
                return $this->redirectToRoute('feedbacks');
            }else{
                $feedback = $form->getData();
                $feedback->setPhoto($file->getClientOriginalName());
                $file->move($this->getParameter("people_directory"), $file->getClientOriginalName());
            
                $entityManager->persist($feedback);
                $entityManager->flush();

                return $this->redirectToRoute('feedbacks');
            }
        }
        return $this->render('/admin/web/business/feedback.html.twig', [
            'form'=>$form->createView(),'values'=>$values
        ]);
    }
    /**
     * @Route("/admin/empresa/novosProdutos", name="inProcessProduct")
     */
    public function inProcessProduct(Request $request)
    {
        $form = $this->createForm(BusinessPartnersType::class);
        $form->handleRequest($request);

        return $this->render('/admin/web/business/inProcessProduct.html.twig', [
            'form'=>$form->createView()
        ]);
    }

    /**
     * @Route("/admin/empresa/equipeTecnica", name="team")
     */
    public function team(Request $request)
    {
        $form = $this->createForm(TeamType::class);
        $form->handleRequest($request);

        return $this->render('/admin/web/business/team.html.twig', [
            'form'=>$form->createView()
        ]);
    }

    /**
     * @Route("/admin/empresa/cientistasAssociados", name="sciencesPartners")
     */
    public function sciencesPartners(Request $request)
    {
        $form = $this->createForm(TeamPartnersScientistType::class);
        $form->handleRequest($request);

        return $this->render('/admin/web/business/scientistPartners.html.twig', [
            'form'=>$form->createView()
        ]);
    }


    /**
     * @Route("/admin/empresa/empresaCliente", name="businessClient")
     */
    public function businessClient(Request $request)
    {
        $form = $this->createForm(BusinessPartnersType::class);
        $form->handleRequest($request);

        return $this->render('/admin/web/business/client.html.twig', [
            'form'=>$form->createView()
        ]);
    }

}