<?php 

namespace App\Form;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

use Symfony\Component\Form\Extension\Core\Type\EmailType;


class SiteBusinessCategoryType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder  
        ->add('title', TextType::class, array(
            'label'=>' ','attr' => array('required'=> true, 'class' => 'form-control', 'placeholder'=>"Título")
            ))
            ->add('Subtitle', TextType::class, array( 
                'label' => ' ', 'attr'=>array('required'=>true, 'class'=>'form-control', 'placeholder'=>"Subtítulo")
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
