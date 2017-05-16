<?php

namespace DUDEEGO\PlatformBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ResetType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class InscriptionType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('languePartenaire', EntityType::class, array(
            'class' => 'DUDEEGOPlatformBundle:EA_Langue',
            'query_builder' => function (EntityRepository $er) {
                return $er->createQueryBuilder('u')
                ->orderBy('u.langue', 'ASC');
            },
            'choice_label' => 'langue',
            'required'    => false,
            'placeholder' => 'Choisir une langue',
            'empty_data'  => null,
            ))

        ->add('langueUniversite', EntityType::class, array(
            'class' => 'DUDEEGOPlatformBundle:T_Langue_Universite',
            'query_builder' => function (EntityRepository $er) {
                return $er->createQueryBuilder('u')
                ->orderBy('u.langue', 'ASC');
            },
            'choice_label' => 'langue',
            'required'    => false,
            'placeholder' => 'Choisir une langue',
            'empty_data'  => null,
            ))

        ->add('formation', EntityType::class, array(
            'class' => 'DUDEEGOPlatformBundle:T_Formation_Universite',
            'query_builder' => function (EntityRepository $er) {
                return $er->createQueryBuilder('u')
                ->orderBy('u.formation', 'ASC');
            },
            'choice_label' => 'formation',
            'required'    => false,
            'placeholder' => 'Choisir une formation',
            'empty_data'  => null,
            ))

        ->add('nometablissement', EntityType::class, array(
            'class' => 'DUDEEGOPlatformBundle:T_Universite',
            'query_builder' => function (EntityRepository $er) {
                return $er->createQueryBuilder('u')
                ->orderBy('u.nometablissement', 'ASC');
            },
            'choice_label' => 'nometablissement',
            'required'    => true,
            'placeholder' => 'Choisir un établissement',
            'empty_data'  => null,
            ))

        ->add('pays', EntityType::class, array(
            'class' => 'DUDEEGOPlatformBundle:EA_Personne',
            'query_builder' => function (EntityRepository $er) {
                return $er->createQueryBuilder('u')
                ->orderBy('u.pays', 'ASC');
            },
            'choice_label' => 'pays',
            'required'    => false,
            'placeholder' => 'Choisir un pays',
            'empty_data'  => null,
            ))
        
        ->add('raisonsocial', EntityType::class, array(
            'class' => 'DUDEEGOPlatformBundle:EA_Morale',
            'query_builder' => function (EntityRepository $er) {
                return $er->createQueryBuilder('u')
                ->orderBy('u.raisonsocial', 'ASC');
            },
            'choice_label' => 'raisonsocial',
            'required'    => true,
            'placeholder' => 'Choisir un partenaire',
            'empty_data'  => null,
            ))

        ->add('typeLogement', ChoiceType::class, array(
            'choices' => array(
                'campus' => 'campus',
                'partenaire' => 'partenaire'
                ),
            'required'    => false,
            'placeholder' => 'Choisir un type de logement',
            'empty_data'  => null))

        ->add('typePreparation', ChoiceType::class, array(
            'choices' => array(
                'Foundation Year - Universite Europeen de Madrid' => 'madrid',
                'Foundation Year - Universite Europeen de Valence' => 'valence',
                'Preparation Sante - CFPMS' => 'cfpms'
                ),
            'required'    => true,
            'placeholder' => 'Choisir un type de logement',
            'empty_data'  => null))

        ->add('rechercher', SubmitType::class, array(
            'attr' => array('class' => 'btn btn-primary'),
            ))

        ->add('reinitialiser', ResetType::class, array(
            'attr' => array('class' => 'btn btn-danger'),
            ))
        ;
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => null
            ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'dudeego_platformbundle_t_universite';
    }


}
