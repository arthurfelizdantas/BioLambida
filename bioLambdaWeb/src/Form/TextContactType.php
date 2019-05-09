<?php 

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

use Symfony\Component\Form\Extension\Core\Type\ChoiceType;


class TextContactType extends AbstractType
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
            ->add('text', TextareaType::class, array(
                'label'=> ' ', 'attr'=>array('required'=>true, 'class'=>'form-control','placeholder'=>'Texto')
            ))
            ->add('key', HiddenType::class, array(
                'label'=> ' ', 'attr'=>array('required'=>true, 'class'=>'form-control','placeholder'=>'Texto')
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
