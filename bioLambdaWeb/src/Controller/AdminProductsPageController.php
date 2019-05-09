<?php

namespace App\Controller;
use App\Form\FeedbackType;
use App\Form\BusinessPartnersType;
use App\Form\TeamType;
use App\Form\CeoType;
use App\Form\IndexType;
use App\Form\BusinessClientType;
use App\Form\CategoryType;
use App\Form\QualityType;
use App\Form\KitType;
use App\Form\ProductType;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class AdminProductsPageController extends AbstractController
{
    /**
     * @Route("/admin/produtos/categoria", name="products_category")
     */
    public function products_category(Request $request)
    {
        $form = $this->createForm(CategoryType::class);
        $form->handleRequest($request);

        return $this->render('/admin/web/products/category.html.twig', [
            'form'=>$form->createView()
        ]);
    }
       /**
     * @Route("/admin/produtos/descricao", name="products_descritions")
     */
    public function products_descritions(Request $request)
    {
        $form = $this->createForm(QualityType::class);
        $form->handleRequest($request);

        return $this->render('/admin/web/products/descriptionProduct.html.twig', [
            'form'=>$form->createView()
        ]);
    }
    /**
     * @Route("/admin/produtos/produtos", name="products_products")
     */
    public function products(Request $request)
    {
        $form = $this->createForm(ProductType::class);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            // $form->getData() holds the submitted values
            // but, the original `$task` variable has also been updated
            $task = $form->getData();
            return $this->redirectToRoute('task_success');

        }
        return $this->render('/admin/web/products/products.html.twig', [
            'form'=>$form->createView()
        ]);
    }
       /**
     * @Route("/admin/produtos/tag", name="product_tags")
     */
    public function product_tags(Request $request)
    {
        $form = $this->createForm(TagType::class);
        $form->handleRequest($request);

        return $this->render('/admin/web/products/tags.html.twig', [
            'form'=>$form->createView()
        ]);
    }
       /**
     * @Route("/admin/produtos/kit", name="kit_product")
     */
    public function kit_product(Request $request)
    {
        $form = $this->createForm(KitType::class);
        $form->handleRequest($request);

        return $this->render('/admin/web/products/kit.html.twig', [
            'form'=>$form->createView()
        ]);
    }
    /**
     * @Route("/admin/produtos/mensagemDeCompra", name="messagePurchase")
     */
    public function messagePurchase(Request $request)
    {
        $form = $this->createForm(MessagePurchaseType::class);
        $form->handleRequest($request);

        return $this->render('/admin/web/products/messagePurchase.html.twig', [
            'form'=>$form->createView()
        ]);
    }
}