<?php 

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;


class EventType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder  
        ->add('title', TextType::class, array(
            'label'=>' ','attr' => array('required'=> true, 'class' => 'form-control', 'placeholder'=>"Título")
            ))
            ->add('subtitle', TextType::class, array( 
                'label' => ' ', 'attr'=>array('required'=>true, 'class'=>'form-control', 'placeholder'=>"Subtítulo")
            ))
            ->add('senteces', TextareaType::class, array(
                'label'=> ' ', 'attr'=>array('required'=>true, 'class'=>'form-control','placeholder'=>'Texto')
            ))
            ->add('images', FileType::class, array(
                'label'=> 'Imagens', 'multiple'=>true,'mapped'=>false,'required'=>true, 'attr'=>array(
                    'class'=>'form-control','accept'=>'image/*')
            ))

            ->add('dateStart', DateType::class, array('label'=>'Periodo',
                'required'=>true, 'attr'=>array(
                    'class'=>'form-control')
            ))
            ->add('dateEnd', DateType::class, array('label'=>'a',
                'required'=>true, 'attr'=>array(
                    'class'=>'form-control')
            ))
            ->add('language', ChoiceType::class, array('label'=>'Linguagem',
                'choices' => array(
                    'EN' => 'EN',
                    'PT' => 'PT',
                )
            ))
            ->add('save', SubmitType::class, array(
                'label'=>'Salvar', 'attr'=>array('class'=>'btn btn-primary')
            ))->getForm();
    }


}
