<?php 

namespace App\Form;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;


class ProfileType extends AbstractType
{ public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder  
        ->add('phone', TextType::class, array(
            'label'=>' ','attr' => array('required'=> true, 'class' => 'form-control', 'placeholder'=>"Telefone")
            ))
            ->add('address', TextType::class, array( 
                'label' => ' ', 'attr'=>array('required'=>true, 'class'=>'form-control', 'placeholder'=>"Endereço")
            ))
            ->add('mobile', TextType::class, array( 
                'label' => ' ', 'attr'=>array('required'=>true, 'class'=>'form-control', 'placeholder'=>"Celular")
            ))
            ->add('urlFacebook', TextType::class, array( 
                'label' => ' ', 'attr'=>array('required'=>true, 'class'=>'form-control', 'placeholder'=>"Url Facebook")
            ))
            ->add('urlRG', TextType::class, array( 
                'label' => ' ', 'attr'=>array('required'=>true, 'class'=>'form-control', 'placeholder'=>"Url R G")
            ))
            ->add('urlLinkedIn', TextType::class, array( 
                'label' => ' ', 'attr'=>array('required'=>true, 'class'=>'form-control', 'placeholder'=>"Url LinkedIn")
            ))
            ->add('urlInstagram', TextType::class, array( 
                'label' => ' ', 'attr'=>array('required'=>true, 'class'=>'form-control', 'placeholder'=>"Url Instagram")
            ))
            ->add('logoLinkedIn', FileType::class, array(
                'label'=> 'Logo LinkedIn', 'multiple'=>false,'mapped'=>false,'required'=>false, 'attr'=>array(
                    'class'=>'form-control','accept'=>'image/*')
            ))
            ->add('logoRG', FileType::class, array(
                'label'=> 'Logo RG', 'multiple'=>false,'mapped'=>false,'required'=>false, 'attr'=>array(
                    'class'=>'form-control','accept'=>'image/*')
            ))
            ->add('logoFacebook', FileType::class, array(
                'label'=> 'Logo Facebook', 'multiple'=>false,'mapped'=>false,'required'=>false, 'attr'=>array(
                    'class'=>'form-control','accept'=>'image/*')
            ))
            ->add('logoInstagram', FileType::class, array(
                'label'=> 'Logo Instagram', 'multiple'=>false,'mapped'=>false,'required'=>false, 'attr'=>array(
                    'class'=>'form-control','accept'=>'image/*')
            ))
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
