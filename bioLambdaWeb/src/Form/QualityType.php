<?php 
namespace App\Form;

    use Symfony\Component\Form\AbstractType;
    use Symfony\Component\Form\FormBuilderInterface;
    use Symfony\Component\OptionResolver\OptionsResolver;

    use Symfony\Component\Form\Extension\Core\Type\TextType;
    use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
    use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class QualityType extends AbstractType{
    public function buildForm(FormBuilderInterface $builder, array $options)
        {
          /*  $choices = array();
    
           foreach ($options['data'] as $product){
    
                $number = $product->getNumber();
                $choices[$number] = $number;
    
            }
    */
            $builder
                -> add("name", TextType ::class, array(
                'label'=>'Nome',
                'attr' => array('required'=>true, 'class' => 'form-control')))
                -> add('product', ChoiceType::class, array( 
                    'choices'           =>  /* $choices*/[],
                    'label'             =>  'Produto',
                    'attr'              => array('required' => true, 'class' => 'form-control'
                )))
                ->add('language', ChoiceType::class, array('label'=>'Linguagem',
                    'choices' => array(
                        'EN' => 'EN',
                        'PT' => 'PT',
                    )
                ))
                -> add("add", SubmitType::class,array (
                    'label'=>'Adicionar',
                    'attr'=> array  ('class'=>'btn btn-primary')))
                    ->getForm();
        }
    

   
}