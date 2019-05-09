<?php 

namespace App\Form;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

use Symfony\Component\Form\Extension\Core\Type\EmailType;


class NavsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder  
        ->add('field01', TextType::class, array(
            'label'=>' ','attr' => array('required'=> true, 'class' => 'form-control', 'placeholder'=>"Campo 1 | Home")
            ))
        ->add('field02', TextType::class, array(
                'label'=>' ','attr' => array('required'=> true, 'class' => 'form-control', 'placeholder'=>"Campo 2 | Produtos")
            ))
        ->add('field03', TextType::class, array(
                'label'=>' ','attr' => array('required'=> true, 'class' => 'form-control', 'placeholder'=>"Campo 3 | Aplicações")
            ))
        ->add('field04', TextType::class, array(
            'label'=>' ','attr' => array('required'=> true, 'class' => 'form-control', 'placeholder'=>"Campo 4 | Empresa")            ))
        ->add('field05', TextType::class, array(
            'label'=>' ','attr' => array('required'=> true, 'class' => 'form-control', 'placeholder'=>"Campo 5 | Calculadoras")
        ))
        ->add('field06', TextType::class, array(
            'label'=>' ','attr' => array('required'=> true, 'class' => 'form-control', 'placeholder'=>"Campo 6 | Eventos")
        ))
        ->add('field07', TextType::class, array(
            'label'=>' ','attr' => array('required'=> true, 'class' => 'form-control', 'placeholder'=>"Campo 7 | Fale conosco")
        ))
        ->add('field08', TextType::class, array(
            'label'=>' ','attr' => array('required'=> true, 'class' => 'form-control', 'placeholder'=>"Campo 8 | Iniciar Sessão")
        ))
        ->add('field09', TextType::class, array(
            'label'=>' ','attr' => array('required'=> true, 'class' => 'form-control', 'placeholder'=>"Campo 9 | EN|PT")
        ))
        ->add('logo', FileType::class,array(
        'label'=>'Logo',
            'multiple'=> false,
            'mapped'=>false, 
            'required' => false, 
            'attr' => array(
                'class' => 'form-control',
                'accept' => 'image/*'
        )))
        ->add('language', ChoiceType::class, array('label'=>'Linguagem',
            'choices' => array(
                'EN' => 'EN',
                'PT' => 'PT',
            )
        ))
        ->add('save', SubmitType::class, array(
            'label'=>'Salvar', 'attr'=>array('class'=>'btn btn-primary btn-block')
        ))->getForm();
    }
}