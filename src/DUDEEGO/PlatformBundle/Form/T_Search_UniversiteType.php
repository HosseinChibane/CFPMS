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
use Symfony\Component\Form\Extension\Core\Type\SearchType;

use Lexik\Bundle\FormFilterBundle\Filter\Form\Type as Filters;

class T_Search_UniversiteType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('nomuniversite', SearchType::class, array(
            'attr' => array('class' => 'form-control'),
            'required'    => false,
            'empty_data'  => null))

        ->add('formations', EntityType::class, array(
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

        ->add('langues', EntityType::class, array(
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

        ->add('villes', EntityType::class, array(
            'class' => 'DUDEEGOPlatformBundle:T_Ville_Universite',
            'query_builder' => function (EntityRepository $er) {
                return $er->createQueryBuilder('u')
                ->orderBy('u.commune', 'ASC');
            },
            'choice_label' => 'commune',
            'required'    => false,
            'placeholder' => 'Choisir une ville',
            'empty_data'  => null,
            ))

        ->add('pays', EntityType::class, array(
            'class' => 'DUDEEGOPlatformBundle:T_Pays_Universite',
            'query_builder' => function (EntityRepository $er) {
                return $er->createQueryBuilder('u')
                ->orderBy('u.pays', 'ASC');
            },
            'choice_label' => 'pays',
            'required'    => false,
            'placeholder' => 'Choisir un pays',
            'empty_data'  => null,
            ))

        ->add('comparez', SubmitType::class, array(
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
            'data_class' => 'DUDEEGO\PlatformBundle\Entity\T_Search_Universite'
            ));

        }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'dudeego_platform_filterComparateur';
        //return 'dudeego_platformbundle_t_search_universite';
    }


}
