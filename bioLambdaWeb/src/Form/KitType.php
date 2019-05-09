<?php
namespace App\Form;

    use Symfony\Component\Form\AbstractType;
    use Symfony\Component\Form\FormBuilderInterface;
    use Symfony\Component\OptionResolver\OptionsResolver;

    use Symfony\Component\Form\Extension\Core\Type\TextType;
    use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
    use Symfony\Component\Form\Extension\Core\Type\SubmitType;


    class KitType extends AbstractType{
        public function buildForm(FormBuilderInterface $builder,array $option){
            $builder 
            ->add('name', TextType::class,array('attr'=>array('required'=>true,'class'=>'form-control','placeholder'=>'Nome')
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
    