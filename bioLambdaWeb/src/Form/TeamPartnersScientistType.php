<?php 

namespace App\Form;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

use Symfony\Component\Form\Extension\Core\Type\EmailType;


class TeamPartnersScientistType extends AbstractType{
    
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $choices = array();

       foreach ($options['data'] as $category){

            $number = $category->getNumber();
            $choices[$number] = $number;

        }

        $builder
            -> add("name", TextType ::class, array(
            'label'=>'Nome',
            'attr' => array('required'=>true, 'class' => 'form-control')))
            -> add("local", TextType ::class, array(
                'label'=>'Local',
                'attr' => array('required'=>true, 'class' => 'form-control')))
            -> add ('area', TextType::class, array('label'=>'Area',
                'attr' => array('required' => true,
                'class' => 'form-control'
                )))
            ->add('photos', FileType::class,array(
                'label'=>'Fotos',
                  'mapped'=>false, 
                  'required' => true, 
                    'attr' => array(
                        'class' => 'form-control',
                        'accept' => 'image/*'
                    )
            ))    
            -> add('curriculum', TextType::class, array('label'=>'Url Lattes',
            'attr' => array('required' => true,
            'class' => 'form-control'
            ))) 

            -> add('category', ChoiceType::class, array( 
                'choices'           =>   $choices,
                'label'             =>  'Categoria',
                'attr'              => array('required' => true, 'class' => 'form-control'
            )))
            ->add('language', ChoiceType::class, array('label'=>'Linguagem',
                'choices' => array(
                    'EN' => 'EN',
                    'PT' => 'PT',
                )
            ))
            -> add("create", SubmitType::class,array (
                'label'=>'Contratar',
                'attr'=> array  ('class'=>'btn btn-primary')))
                ->getForm();
    }


}