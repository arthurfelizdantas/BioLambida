<?php
namespace App\Form;

    use Symfony\Component\Form\AbstractType;
    use Symfony\Component\Form\FormBuilderInterface;
    use Symfony\Component\OptionResolver\OptionsResolver;

    use Symfony\Component\Form\Extension\Core\Type\TextType;

    class LedsType extends AbstractType{
        public function buildForm(FormBuilderInterface $builder,array $option){
            $builder 
            ->add('name', TextType::class,array('attr'=>array('required'=>true,'class'=>'form-control','placeholder'=>'Nome')
            ))
            ->add('password', PasswordType::class,array('attr'=>array('required'=>true,'class'=>'form-control','placeholder'=>'Senha')
            ))
            ->add('save', SubmitType::class, array('label'=>'Continuar','attr'=>array('class'=>'btn btn-primary')))
            ->getForm();
 
        }
    }
    