<?php
namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;


class AwardsType extends AbstractType{
    public function buildForm(FormBuilderInterface $builder,array $option){
       /* $choices = array();
        foreach ($option['data'] as $ceo){

            $number = $ceo->getNumber();
            $choices[$number] = $number;

        }*/

        $builder 
            ->add('name', TextType::class,array('attr'=>array('required'=>true,'class'=>'form-control','placeholder'=>'Nome')
            ))
            -> add('ceo', ChoiceType::class, array( 
                'choices'           =>   []/*$choices*/,
                'label'             =>  'Ceo',
                'attr'              => array('required' => true, 'class' => 'form-control'
            )))
            -> add('type', ChoiceType::class, array( 
                'choices'           =>   ['Nacional'=>'nacional','Internacional'=>'internacional']/*$choices*/,
                'label'             =>  'Tipo',
                'attr'              => array('required' => true, 'class' => 'form-control'
            )))
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