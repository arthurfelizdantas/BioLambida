<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\HomeType;
use App\Entity\Home;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\File\UploadedFile;
class AdminHomePageController extends AbstractController
{
 /**
     * @Route("/admin/home/sobre", name="home_about")
     */
    public function aboutBiolamda(Request $request)
    {
        $home = new Home();
        $form = $this->createForm(HomeType::class, $home);
        $form->handleRequest($request);
        $entityManager = $this->getDoctrine()->getManager();
        $repository = $this->getDoctrine()->getRepository(Home::class);
        $values = $repository->findByCategory(['category'=> 'screen01']);
        
        if ($form->isSubmitted() && $form->isValid()){
        
            $home=$repository->findOneBy(['category'=>['screen01'],'language'=>$form['language']->getData()]);
                        $file = $form['photos']->getData();
            if($home){
                
                
                $home->setTitle($form['title']->getData());
                $home->setSubTitle($form['subtitle']->getData());
                $home->setText($form['text']->getData());
                $file = $form['photos']->getData();
                $home->setPhotos($file->getClientOriginalName());
                $file->move($this->getParameter("home_directory"),  $file->getClientOriginalName());

                $entityManager->flush();

                return $this->redirectToRoute('home_about');    
            } else{          
            
            $home =  $form->getData();
            $home->setCategory('screen01');
            $file = $form['photos']->getData();
            $home->setPhotos(  $file->getClientOriginalName());
            $file->move($this->getParameter("home_directory"), $file->getClientOriginalName());
            $entityManager->persist($home);
            $entityManager->flush();

            return $this->redirectToRoute('home_about');

        }
    }

        return $this->render('admin/web/home/about.html.twig', [
            'form' =>$form->createView(),
            'values' => $values
        ]);
    }
    /**
     * @Route("/admin/home/biolambda", name="home_whats_biolambda")
     */
    public function whatsBiolambda(Request $request)
    {
        $home = new Home();
        $form = $this->createForm(HomeType::class, $home);
        $form->handleRequest($request);
        $entityManager = $this->getDoctrine()->getManager();
        $repository = $this->getDoctrine()->getRepository(Home::class);
        $values = $repository->findByCategory(['category'=> 'screen02']);
        
        if ($form->isSubmitted() && $form->isValid()){
        
            $home=$repository->findOneBy(['category'=>['screen02'],'language'=>$form['language']->getData()]);
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
            $home->setCategory('screen02');
            $file = $form['photos']->getData();

            $home->setPhotos($file->getClientOriginalName());
            
            $file->move($this->getParameter("home_directory"), $file->getClientOriginalName());
            $entityManager->persist($home);
            $entityManager->flush();

            return $this->redirectToRoute('home_whats_biolambda');
            }
        }
        return $this->render('admin/web/home/whatsBioLambda.html.twig', [
            'form'=>$form->createView()
            ,'values' => $values

        ]);    
    }
    /**
     * @Route("/admin/home/descricao", name="home_description")
     */
    public function DescriptionBiolamda(Request $request)
    {
        $home = new Home();
        $form = $this->createForm(HomeType::class, $home);
        $form->handleRequest($request);
        $entityManager = $this->getDoctrine()->getManager();
        $repository = $this->getDoctrine()->getRepository(Home::class);
        $values = $repository->findByCategory(['category'=> 'screen02']);
        
        if ($form->isSubmitted() && $form->isValid()){
        
            $home=$repository->findOneBy(['category'=>['screen03'],'language'=>$form['language']->getData()]);
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

                return $this->redirectToRoute('home_description');    
            } else{          
            
            $home =  $form->getData();
            $home->setCategory('screen03');
            $file = $form['photos']->getData();
            $home->setPhotos(  $file->getClientOriginalName());
            $file->move($this->getParameter("home_directory"), $file->getClientOriginalName());
            $entityManager->persist($home);
            $entityManager->flush();

            return $this->redirectToRoute('home_description');
            }
        }

        return $this->render('admin/web/home/descriptionBiolambda.html.twig', [
            'form'=>$form->createView(),'values' => $values

        ]);
    }
    /**
     * @Route("/admin/home/produtos/ledLaber", name="home_product_ledSaber")
     */
    public function productLedLaberBiolamda(Request $request)
    {
        $home = new Home();
        $form = $this->createForm(HomeType::class, $home);
        $form->handleRequest($request);
        $entityManager = $this->getDoctrine()->getManager();
        $repository = $this->getDoctrine()->getRepository(Home::class);
        $values = $repository->findByCategory(['category'=> 'screen04']);
        
        if ($form->isSubmitted() && $form->isValid()){
            $home=$repository->findOneBy(['category'=>['screen02'],'language'=>$form['language']->getData()]);
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

                return $this->redirectToRoute('home_product_ledSaber');    
            } else{          
            
            $home =  $form->getData();
            $home->setCategory('screen04');
            $file = $form['photos']->getData();
            $home->setPhotos(  $file->getClientOriginalName());
            $file->move($this->getParameter("home_directory"), $file->getClientOriginalName());
            $entityManager->persist($home);
            $entityManager->flush();

            return $this->redirectToRoute('home_product_ledSaber');
            }
        }

        return $this->render('admin/web/home/productDescription/ledSaber.html.twig', [
            'form'=>$form->createView(),'values' => $values

        ]);
    }
    /**
     * @Route("/admin/home/produtos/ledBox", name="home_product_ledbox")
     */
    public function productLedBoxBiolamda(Request $request)
    {
        $home = new Home();
        $form = $this->createForm(HomeType::class, $home);
        $form->handleRequest($request);
        $entityManager = $this->getDoctrine()->getManager();
        $repository = $this->getDoctrine()->getRepository(Home::class);
        $values = $repository->findByCategory(['category'=> 'screen05']);
        
        if ($form->isSubmitted() && $form->isValid()){
        
            $home=$repository->findOneBy(['category'=>['screen04'],'language'=>$form['language']->getData()]);
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

                return $this->redirectToRoute('home_product_ledbox');    
            } else{          
            
            $home =  $form->getData();
            $home->setCategory('screen05');
            $file = $form['photos']->getData();
            $home->setPhotos(  $file->getClientOriginalName());
            $file->move($this->getParameter("home_directory"), $file->getClientOriginalName());
            $entityManager->persist($home);
            $entityManager->flush();

            return $this->redirectToRoute('home_product_ledbox');
            }
        }

        return $this->render('admin/web/home/productDescription/ledBox.html.twig', [
            'form'=>$form->createView(),'values' => $values

        ]);
    }


    /**
     * @Route("/admin/home/descricao/servicos", name="home_description_services")
     */
    public function DescriptionServicesBiolamda(Request $request)
    {
        $home = new Home();
        $form = $this->createForm(HomeType::class, $home);
        $form->handleRequest($request);
        $entityManager = $this->getDoctrine()->getManager();
        $repository = $this->getDoctrine()->getRepository(Home::class);
        $values = $repository->findByCategory(['category'=> 'screen07']);
        
        if ($form->isSubmitted() && $form->isValid()){
        
            $home=$repository->findOneBy(['category'=>['screen06'],'language'=>$form['language']->getData()]);
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

                return $this->redirectToRoute('home_description_services');    
            } else{          
            
            $home =  $form->getData();
            $home->setCategory('screen07');
            $file = $form['photos']->getData();
            $home->setPhotos(  $file->getClientOriginalName());
            $file->move($this->getParameter("home_directory"), $file->getClientOriginalName());
            $entityManager->persist($home);
            $entityManager->flush();

            return $this->redirectToRoute('home_description_services');
            }
        }

        return $this->render('/admin/web/home/descriptionServices.html.twig', [
            'form'=>$form->createView(),'values' => $values

        ]);
    }
       
    /**
     * @Route("/admin/home/descricao/produto", name="home_description_products")
     */
    public function DescriptionProductsBiolamda(Request $request)
    {
        $home = new Home();
        $form = $this->createForm(HomeType::class, $home);
        $form->handleRequest($request);
        $entityManager = $this->getDoctrine()->getManager();
        $repository = $this->getDoctrine()->getRepository(Home::class);
        $values = $repository->findByCategory(['category'=> 'screen08']);
        
        if ($form->isSubmitted() && $form->isValid()){
        
            $home=$repository->findOneBy(['category'=>['screen07'],'language'=>$form['language']->getData()]);
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

                return $this->redirectToRoute('home_description_products');    
            } else{          
            
            $home =  $form->getData();
            $home->setCategory('screen08');
            $file = $form['photos']->getData();
            $home->setPhotos(  $file->getClientOriginalName());
            $file->move($this->getParameter("home_directory"), $file->getClientOriginalName());
            $entityManager->persist($home);
            $entityManager->flush();

            return $this->redirectToRoute('home_description_products');
            }
        }

        return $this->render('/admin/web/home/descriptionProduct.html.twig', [
            'form'=>$form->createView(),'values' => $values

        ]);
    }
    /**
     * @Route("/admin/home/contato", name="home_contact")
     */
    public function ContactBiolamda(Request $request)
    {
        $home = new Home();
        $form = $this->createForm(HomeType::class, $home);
        $form->handleRequest($request);
        $entityManager = $this->getDoctrine()->getManager();
        $repository = $this->getDoctrine()->getRepository(Home::class);
        $values = $repository->findByCategory(['category'=> 'screen09']);
        
        if ($form->isSubmitted() && $form->isValid()){
        
            $home=$repository->findOneBy(['category'=>['screen08'],'language'=>$form['language']->getData()]);
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

                return $this->redirectToRoute('home_about');    
            } else{          
            
            $home =  $form->getData();
            $home->setCategory('screen09 ');
            $file = $form['photos']->getData();
            $home->setPhotos(  $file->getClientOriginalName());
            $file->move($this->getParameter("home_directory"), $file->getClientOriginalName());
            $entityManager->persist($home);
            $entityManager->flush();

            return $this->redirectToRoute('home_contact');
            }
        }

        return $this->render('/admin/web/home/contact.html.twig', [
            'form'=>$form->createView(),'values' => $values

        ]);
    }
    
}