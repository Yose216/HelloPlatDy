<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RestaurantType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('restaurantName')->add('restaurantMail')->add('restaurantStreet')->add('restaurantTown')->add('restaurantZipCode')->add('restaurantHoraireMonday')->add('restaurantHoraireTuesday')->add('restaurantHoraireWednesday')->add('restaurantHoraireThursday')->add('restaurantHoraireFriday')->add('restaurantHoraireSaturday')->add('restaurantHoraireSunday')->add('restaurantCategory')->add('restaurantDescription');
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Restaurant'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_restaurant';
    }


}
