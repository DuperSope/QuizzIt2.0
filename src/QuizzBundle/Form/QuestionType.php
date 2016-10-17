<?php

namespace QuizzBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;

class QuestionType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
//            ->add('questionType',           ChoiceType::class,      array('label' => 'Type de Question', 'required' => false, 'choices' => array(
//                                                                                "Texte" => 1,
//                                                                                "QCM" => 2,  
//                                                                                "Date" => 3,
//                
//            )))
            ->add('questionType',           HiddenType::class)
            ->add('question',               TextareaType::class,    array('label' => 'Question', 'required' => true, 'attr' => array(
                                                                                                                'class' => 'form-control text-center'
            )))
            ->add('answer',                 TextType::class,    array('label' => 'Réponse', 'required' => false, 'attr' => array(
                                                                                                                'class' => 'form-control auto-form text-center'
            )))
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'QuizzBundle\Entity\Question'
        ));
    }
}
