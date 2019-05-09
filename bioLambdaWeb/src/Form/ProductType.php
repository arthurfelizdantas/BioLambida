<?php 
namespace App\Form;

    use Symfony\Component\Form\AbstractType;
    use Symfony\Component\Form\FormBuilderInterface;
    use Symfony\Component\OptionsResolver\OptionsResolver;

    
    use Symfony\Component\Form\Extension\Core\Type\TextType;
    use Symfony\Component\Form\Extension\Core\Type\TextareaType;
    use Symfony\Component\Form\Extension\Core\Type\FileType;
    use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
    use Symfony\Component\Form\Extension\Core\Type\SubmitType;
    use Symfony\Component\Form\Extension\Core\Type\CollectionType;
    use Symfony\Component\Form\Extension\Core\Type\HiddenType;

class ProductType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $choices = array();
        /*
       foreach ($options['data'] as $category){

            $number = $category->getNumber();
            $choices[$number] = $number;

        }*/

        $builder
        -> add("id", HiddenType ::class, array(
            'attr' => array('required'=>false)))
            -> add("name", TextType ::class, array(
            'label'=>'Nome',
            'attr' => array('required'=>true, 'class' => 'form-control')))
        ->add('photos', FileType::class,array(
            'label'=>'Fotos',
            'multiple'=> true,
            'mapped'=>false, 
            'required' => true, 
            'attr' => array(
                'class' => 'form-control',
                'accept' => 'image/*'
        )))
        -> add('category', ChoiceType::class, array( 
            'choices'           =>   $choices,
            'label'             =>  'Categoria',
            'attr'              => array('required' => true, 'class' => 'form-control'
        )))
        -> add('kit', ChoiceType::class, array( 
            'choices'           =>   $choices,
            'label'             =>  'Kit',
            'attr'              => array('required' => true, 'class' => 'form-control'
        )))
        ->add('language', ChoiceType::class, array('label'=>'Linguagem',
            'choices' => array(
                'EN' => 'EN',
                'PT' => 'PT',
            )
        ))
        -> add("create", SubmitType::class,array (
            'label'=>'Criar',
            'attr'=> array  ('class'=>'btn btn-primary')))
        ->getForm();
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
                ['data_class' => Product::class]
            
        ));
    }
    public function getBlockPrefix()
    {
        return 'app_bundle_post_product';
    }
}