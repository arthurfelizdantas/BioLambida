<?php 
namespace App\Form;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

use Symfony\Component\Form\Extension\Core\Type\EmailType;

class ApplicationType extends AbstractType{
    public function buildForm(FormBuilderInterface $builder, array $options){
         $builder
            -> add("title", TextType ::class, array(
                'label'=>'Título',
                'attr' => array('required'=>true, 'class' => 'form-control')))
            -> add("subtitle", TextType ::class, array(
                'label'=>'Subtítulo',
                'attr' => array('required'=>true, 'class' => 'form-control')))
            -> add("text", TextAreaType ::class, array(
                'label'=>'Texto',
                'attr' => array('required'=>true, 'class' => 'form-control')))
            ->add('images', FileType::class, array(
                'label'=> 'Imagens', 'multiple'=>false,'mapped'=>false,'required'=>true, 'attr'=>array(
                    'class'=>'form-control','accept'=>'image/*')))
            ->add('language', ChoiceType::class, array('label'=>'Linguagem',
                'choices' => array(
                    'EN' => 'EN',
                    'PT' => 'PT',
                )
            ))
            ->add('create', SubmitType::class, array('label'=>"Criar", 'attr'=> array(
               'class'=>'btn btn-primary' 
            )))
            ->getForm();
    }
}