<?php

namespace App\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

use Symfony\Component\Form\Extension\Core\Type\TextType;

class CeoType extends AbstractType{
    public function buildForm(FormBuilderInterface $builder,array $option){
            $builder 
            ->add('name', TextType::class,array('label'=>' ', 'attr'=>array('required'=>true,'class'=>'form-control','placeholder'=>'Nome')
            ))
            ->add('resposibility', TextType::class,array('label'=>' ','attr'=>array('required'=>true,'class'=>'form-control','placeholder'=>'Resposabilidade')
            ))
            ->add('univertity', TextType::class,array('label'=>' ','attr'=>array('required'=>true,'class'=>'form-control','placeholder'=>'Universidade')
            ))
            ->add('phD', TextType::class,array('label'=>' ','attr'=>array('required'=>true,'class'=>'form-control','placeholder'=>'PhD.')
            ))
            ->add('images', FileType::class, array(
                'label'=> ' ', 'mapped'=>false,'required'=>true, 'attr'=>array(
                    'class'=>'form-control','accept'=>'image/*')
            ))
            ->add('texto', TextareaType::class,array('label'=>' ','attr'=>array('required'=>true,'class'=>'form-control','placeholder'=>'Messagem')
            ))
            ->add('language', ChoiceType::class, array('label'=>'Linguagem',
                'choices' => array(
                    'EN' => 'EN',
                    'PT' => 'PT',
                )
            ))
            ->add('save', SubmitType::class, array('label'=>'Criar','attr'=>array('class'=>'btn btn-primary')))
            ->getForm();
 
    }
}