<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class DiscountCodeType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('discountCode')->add('discountCodeOffer')->add('discountCodeDescription')->add('discountCodeStart')->add('discountCodeFinish')->add('idRestaurant', EntityType::class, array(
        'class' => 'AppBundle:Restaurant',
        'choice_label' => function($restaurant, $key, $index) {
        $name = $restaurant->getRestaurantName();
        return strtoupper($name);
        }))->add('idUser');
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\DiscountCode'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_discountcode';
    }


}
