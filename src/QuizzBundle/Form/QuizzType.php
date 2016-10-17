<?php

namespace QuizzBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use QuizzBundle\Form\QuestionType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;


class QuizzType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name',       TextType::class,     array('label' => 'Nom du Quizz'))
            ->add('description',      TextareaType::class, array('label' => 'Description', 'required' => false))
            ->add('userDescription',      TextareaType::class, array('label' => 'Description personnelle', 'required' => false))
//            ->add('level',            ChoiceType::class,     array('label' => 'Niveau', 'choices' => array(
//                                                                                "Sixième" => 7,
//                                                                                "Cinquième" => 6,
//                                                                                "Quatrième" => 5,
//                                                                                "Troisième" => 4,
//                                                                                "Seconde" => 3,
//                                                                                "Première" => 2,
//                                                                                "Terminale" => 1,
//                                                                                "Autre" => 0
//            )))
//            ->add('topic',          ChoiceType::class,     array('label' => 'Matière', 'choices' => array(
//                                                                                "Français" => 1,
//                                                                                "Maths" => 2,  
//                                                                                "Physique Chimie" => 3,
//                                                                                "SVT" => 4,
//                                                                                "Histoire Géographie" => 5,
//                                                                                "Anglais" => 6,
//                                                                                "Espagnol" => 7,
//                                                                                "Italien" => 8,
//                                                                                "Allemand" => 9,
//                                                                                "Philosophie" => 10,
//                                                                                "Autre" => 11,
//            )))
            ->add('back',             CheckboxType::class, array('label' => 'Retour en arrière',
                                                  'required' => false))
            ->add('tag')
            ->add('questions', CollectionType::class, array(
                                'entry_type'   => QuestionType::class,
                                'allow_add'    => true))
            ->add('private', CheckboxType::class, array('label' => 'Quizz privé',
                                                    'required' => false))
            ->add('theme', EntityType::class, array(
                                                'class' => 'GeneralBundle:Theme'));
        
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'QuizzBundle\Entity\Quizz'
        ));
    }
}
