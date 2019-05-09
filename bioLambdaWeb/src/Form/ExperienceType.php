<?php
namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\DateType;

use Symfony\Component\Form\Extension\Core\Type\TextType;

class ExperienceType extends AbstractType{
    public function buildForm(FormBuilderInterface $builder,array $option){
        /*$choices = array();
        foreach ($options['data'] as $ceo){

            $number = $ceo->getNumber();
            $choices[$number] = $number;

        }*/

        $builder 
            ->add('experience', TextType::class,array('label'=>"Experiencia",'attr'=>array('required'=>true,'class'=>'form-control','placeholder'=>'Experiencia')
            ))
            ->add('dateStart', DateType::class, array('label'=>'Periodo',
                'required'=>true, 'attr'=>array(
                    'class'=>'form-control')
            ))
            ->add('dateEnd', DateType::class, array('label'=>'a',
                'required'=>true, 'attr'=>array(
                    'class'=>'form-control')
            ))
            -> add('ceo', ChoiceType::class, array( 
                'choices'           =>   []/*$choices*/,
                'label'             =>  'Ceo',
                'attr'              => array('required' => true, 'class' => 'form-control'
            )))
            ->add('save', SubmitType::class, array('label'=>'Criar','attr'=>array('class'=>'btn btn-primary')))
            ->getForm();
 
    }
}