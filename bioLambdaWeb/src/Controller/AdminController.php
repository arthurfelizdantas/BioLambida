<?php

namespace App\Controller;
use App\Form\ProfileType;
use App\Form\ApplicationType;
use App\Form\ProductType;
use App\Form\EventType;
use App\Form\ContactType;
use App\Form\TextContactType;
use App\Form\NavsType;
use App\Entity\Navs;
use App\Entity\Profile;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class AdminController extends Controller
{
    /**
     * @Route("/admin/login", name="adminLogin")
     */
    public function onLogin(Request $request)
    {
        return $this->render('admin/login.html.twig', [
        ]);
    }
    /**
     * @Route("/admin/", name="admin")
     */
    public function index()
    {
        return $this->render('admin/web/index.html.twig', [
            
        ]);
    }
    /**
     * @Route("/admin/perfil", name="profile")
     */
    public function profile(Request $request)
    {
        $profile = new Profile();
        $form = $this->createForm(ProfileType::class, $profile);
        $form->handleRequest($request);
        $repository = $this->getDoctrine()->getRepository(Profile::class);
        $entityManager = $this->getDoctrine()->getManager();
        $values = $repository->findAll();

        if ($form->isSubmitted() && $form->isValid()){
            $filelogoInstagram = $form['logoInstagram']->getData();
            $filelogoFacebook = $form['logoFacebook']->getData();
            $filelogoRG = $form['logoRG']->getData();
            $filelogoLinkedIn = $form['logoLinkedIn']->getData();

            $profile=$repository->findOneBy(['language'=>$form['language']->getData()]);
            if($profile){
                $profile->setPhone($form['phone']->getData());
                $profile->setMobile($form['mobile']->getData());
                $profile->setAddress($form['address']->getData());
                
                $profile->setUrlFacebook($form['urlFacebook']->getData());
                $profile->setUrlRG($form['urlRG']->getData());
                $profile->setUrlLinkedIn($form['urlLinkedIn']->getData());
                $profile->setUrlInstagram($form['urlInstagram']->getData());
                
                $profile->setLogoInstagram($filelogoInstagram->getClientOriginalName());
                $profile->setLogoLinkedIn($filelogoLinkedIn->getClientOriginalName());
                $profile->setLogoRG($filelogoRG->getClientOriginalName());
                $profile->setLogoFacebook($filelogoFacebook->getClientOriginalName());
                $profile->setLanguage($form['language']->getData());

                $filelogoInstagram->move($this->getParameter("logosRedeSocias"), $filelogoInstagram->getClientOriginalName());
                $filelogoFacebook->move($this->getParameter("logosRedeSocias"), $filelogoFacebook->getClientOriginalName());
                $filelogoRG->move($this->getParameter("logosRedeSocias"), $filelogoRG->getClientOriginalName());
                $filelogoLinkedIn->move($this->getParameter("logosRedeSocias"), $filelogoLinkedIn->getClientOriginalName());
                                
                $entityManager->persist($profile);
                $entityManager->flush();
                return $this->redirectToRoute('profile');

            }else{

                $profile = $form->getData();
                
                $profile->setLogoInstagram($filelogoInstagram->getClientOriginalName());
                $profile->setLogoLinkedIn($filelogoLinkedIn->getClientOriginalName());
                $profile->setLogoRG($filelogoRG->getClientOriginalName());
                $profile->setLogoFacebook($filelogoFacebook->getClientOriginalName());

                $filelogoInstagram->move($this->getParameter("logosRedeSocias"), $filelogoInstagram->getClientOriginalName());
                $filelogoFacebook->move($this->getParameter("logosRedeSocias"), $filelogoFacebook->getClientOriginalName());
                $filelogoRG->move($this->getParameter("logosRedeSocias"), $filelogoRG->getClientOriginalName());
                $filelogoLinkedIn->move($this->getParameter("logosRedeSocias"), $filelogoLinkedIn->getClientOriginalName());
                
                $entityManager->persist($profile);
                $entityManager->flush();

                return $this->redirectToRoute('profile');
            }
        }

        return $this->render('admin/web/profile.html.twig', [
            'form'=>$form->createView(),'values'=>$values
        ]);
    }
    /**
     * @Route("/admin/navegador", name="navs")
     */
    public function navs(Request $request)
    {
        $navs = new Navs();
        $form = $this->createForm(NavsType::class, $navs);
        $form->handleRequest($request);
        $repository = $this->getDoctrine()->getRepository(Navs::class);
        
        $entityManager = $this->getDoctrine()->getManager();
        $values = $repository->findAll();

        if ($form->isSubmitted() && $form->isValid()){
            $file = $form['logo']->getData();

            $navs=$repository->findOneBy(['language'=>$form['language']->getData()]);
            if($navs){
                $navs->setField01($form['field01']->getData());
                $navs->setField02($form['field02']->getData());
                $navs->setField03($form['field03']->getData());
                $navs->setField04($form['field04']->getData());
                $navs->setField05($form['field05']->getData());
                $navs->setField06($form['field06']->getData());
                $navs->setField07($form['field07']->getData());
                $navs->setField08($form['field08']->getData());
                $navs->setField09($form['field09']->getData());
                $navs->setLanguage($form['language']->getData());
                $navs->setLogo($file->getClientOriginalName());
                $file->move($this->getParameter("navs_directory"), $file->getClientOriginalName());
                
                $entityManager->persist($navs);
                $entityManager->flush();
                return $this->redirectToRoute('navs');

            }else{

                $navs = $form->getData();
                
                $navs->setLogo($file->getClientOriginalName());
                $file->move($this->getParameter("navs_directory"), $file->getClientOriginalName());

                
                $entityManager->persist($navs);
                $entityManager->flush();

                return $this->redirectToRoute('navs');
            }
        }

           return $this->render('admin/web/navs.html.twig', [
            'form'=>$form->createView(),'values'=>$values
        ]);
    }

    /**
     * @Route("/admin/aplicacoes", name="applications")
     */
    public function applications(Request $request)
    {
        $application = new Home();
        $form = $this->createForm(ApplicationType::class,[]);
        $form->handleRequest($request);

        $entityManager = $this->getDoctrine()->getManager();
        $repository = $this->getDoctrine()->getRepository(Home::class);
        $values = $repository->findByCategory(['category'=> 'application']);
        
        if ($form->isSubmitted() && $form->isValid()){
        
            
            $file = $form['photos']->getData();
            $home =  $form->getData();
            $home->setCategory('application');
            $file = $form['photos']->getData();
            $home->setPhotos(  $file->getClientOriginalName());
            $file->move($this->getParameter("application_directory"), $file->getClientOriginalName());
            $entityManager->persist($home);
            $entityManager->flush();

            return $this->redirectToRoute('applications');
            }
        return $this->render('admin/web/home/sliders.html.twig', [
            'form'=>$form->createView(),'values' => $values

        ]);
        return $this->render('admin/web/application.html.twig', [
            'form'=>$form->createView(),'values'=>$values

        ]);
    }
        /**
     * @Route("/admin/produtos", name="products")
     */
    public function products(Request $request)
    {
        $form = $this->createForm(ProductType::class);

        $form->handleRequest($request);

        return $this->render('admin/web/products.html.twig', [
            'form'=>$form->createView(),'values'=>$values

        ]);
    }
    /**
     * @Route("/admin/eventos", name="events")
     */
    public function events(Request $request)
    {
        $form = $this->createForm(EventType::class);

        $form->handleRequest($request);

        return $this->render('admin/web/events.html.twig', [
            'form'=>$form->createView(),'values'=>$values

        ]);
    }
    /**
     * @Route("/admin/contato/contato", name="contactServices")
     */
    public function contactServicesBiolamda(Request $request)
    {
        $form = $this->createForm(ContactType::class);

        $form->handleRequest($request);
        
        return $this->render('admin/web/contact/contact.html.twig', [
            'form'=>$form->createView(),'values'=>$values
    
        ]);
    }
    /**
     * @Route("/admin/contato/texto", name="contactText")
     */
    public function contactTextBiolamda(Request $request)
    {
        $form = $this->createForm(TextContactType::class);
        $form->handleRequest($request);

        return $this->render('admin/web/contact/text.html.twig', [
            'form'=>$form->createView(),'values'=>$values
    
        ]);
    }


}
