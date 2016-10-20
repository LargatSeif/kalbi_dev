<?php

namespace dataBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class etatType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add(
                'vente',
                ChoiceType::class ,
                [
                    'label'=>'En vente ?',
                    'choices'=>[
                        '0'=>'NON',
                        '1'=>'OUI'
                    ],
                    'expanded'=>true
                ]
            )
            ->add(
                'adoption',
                ChoiceType::class ,
                [
                    'label'=>'En adoption ?',
                    'choices'=>[
                        '0'=>'NON',
                        '1'=>'OUI'
                    ],
                    'expanded'=>true
                ]
            )
            ->add(
                'periode',
                'dataBundle\Form\periodeType',
                [
                    'label'=>true
                ]
            )        ;
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'dataBundle\Entity\etat'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'databundle_etat';
    }


}
