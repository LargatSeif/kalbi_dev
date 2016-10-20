<?php

namespace dataBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class chienType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom')
            ->add(
                'sexe',
                ChoiceType::class,
                [
                    'label'=>'Sexe ',
                    'choices'=>
                        [
                            'M'=>'Male',
                            'F'=>'Femelle',
                        ],
                    'expanded'=>true,
                ]
            )
            ->add('age')
            ->add('taille')
            ->add('etat','dataBundle\Form\etatType')
            ->add('race','dataBundle\Form\raceType')        ;
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'dataBundle\Entity\chien'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'databundle_chien';
    }


}
