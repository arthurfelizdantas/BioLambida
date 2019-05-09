<?php 

namespace App\Form;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

use Symfony\Component\Form\Extension\Core\Type\EmailType;


class FeedbackType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder  
        ->add('name', TextType::class, array(
            'label'=>' ','attr' => array('required'=> true, 'class' => 'form-control', 'placeholder'=>"Nome")
            ))
            ->add('local', TextType::class, array( 
                'label' => ' ', 'attr'=>array('required'=>true, 'class'=>'form-control', 'placeholder'=>"Local")
            ))
            ->add('text', TextareaType::class, array(
                'label'=>' ', 'attr'=>array('required'=>true, 'class'=>'form-control','placeholder'=>'Texto')
            ))
            ->add('satisfaction', ChoiceType::class, array('label'=>'Satisfação',
            'choices' => array(
                '5' => '5',
                '4' => '4',
                '3' => '3',
                '2' => '2',
                '1' => '1'
            ),'attr'=> array('class'=>'form-control')
        ))
            ->add('photo', FileType::class, array(
                'label'=> 'Foto', 'multiple'=>false,'mapped'=>false,'required'=>true, 'attr'=>array(
                    'class'=>'form-control','accept'=>'image/*')
            ))
            ->add('language', ChoiceType::class, array('label'=>'Linguagem',
                'choices' => array(
                    'EN' => 'EN',
                    'PT' => 'PT',
                ),'attr'=> array('class'=>'form-control')
            ))
            ->add('save', SubmitType::class, array(
                'label'=>'Salvar', 'attr'=>array('class'=>'btn btn-primary btn-block')
            ))
            ->getForm();
    }
}
