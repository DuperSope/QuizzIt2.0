<?php 
// src/QuizzBundle/Form/RatingType.php

namespace QuizzBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;


class RatingType extends AbstractType
{
    
    public function setDefaultOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(       // Ne marche pas ---> pourquoi ?
            'expanded' => true,
            'attr' => array(
                'class' => 'rating',
            ),
            'choices' => array(
                1 => '1',
                2 => '2',
                3 => '3',
                4 => '4',
                5 => '5',
           )
        ));
    }

    public function getParent()
    {
        return ChoiceType::class;
    }
}