<?php
namespace App\Form;

    use Symfony\Component\Form\AbstractType;
    use Symfony\Component\Form\FormBuilderInterface;
    use Symfony\Component\OptionResolver\OptionsResolver;
    use App\Entity\Index;

    use Symfony\Component\Form\Extension\Core\Type\TextType;
    use Symfony\Component\Form\Extension\Core\Type\TextareaType;
    use Symfony\Component\Form\Extension\Core\Type\HiddenType;
    use Symfony\Component\Form\Extension\Core\Type\FileType;

    use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
    use Symfony\Component\Form\Extension\Core\Type\SubmitType;

    class HomeType extends AbstractType{
        public function buildForm(FormBuilderInterface $builder,array $option){
            $builder 
            ->add('title', TextType::class,array('label'=>' ','attr'=>array('required'=>true,'class'=>'form-control','placeholder'=>'Título')
            ))
            ->add('subtitle', TextType::class,array('label'=>" ",'attr'=>array('required'=>false,'class'=>'form-control','placeholder'=>'Subtítulo')
            ))
            ->add('photos', FileType::class,array(
                'label'=>'Background',
                'multiple'=> false,
                'mapped'=>false, 
                'required' => false, 
                'attr' => array(
                    'class' => 'form-control',
                    'accept' => 'image/*'
            )))
            ->add('text', TextareaType::class,array('label'=>' ','attr'=>array('required'=>true,'class'=>'form-control','placeholder'=>'Texto')
            ))
            ->add('category', HiddenType::class,array('label'=>" ",'attr'=>array('required'=>false,'class'=>'form-control')
            ))
            ->add('language', ChoiceType::class, array('label'=>'Linguagem',
                'choices' => array(
                    'EN' => 'EN',
                    'PT' => 'PT',
                ),'attr'=> array('class'=>'form-control')

            ))
            ->add('save', SubmitType::class, array('label'=>'Criar','attr'=>array('class'=>'btn btn-primary')))
            ->getForm();
 
        }

}
    