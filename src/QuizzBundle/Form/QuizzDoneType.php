<?php

namespace QuizzBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use QuizzBundle\Form\QuestionDoneType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;

class QuizzDoneType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('questiondone',   CollectionType::class, array(
                                'required'     => false,
                                'entry_type'   => QuestionDoneType::class,
                                'allow_add'    => true));
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'QuizzBundle\Entity\QuizzDone'
        ));
    }
}
