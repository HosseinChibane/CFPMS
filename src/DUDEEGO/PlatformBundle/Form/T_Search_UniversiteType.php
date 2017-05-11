<?php

namespace DUDEEGO\PlatformBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\ButtonType;
use Symfony\Component\Form\Extension\Core\Type\ResetType;
use Symfony\Component\Form\Extension\Core\Type\SearchType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

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

        ->add('formations', ChoiceType::class, array(
            'choices' => array(
                'Kinésithérapeute' => 'Kinésithérapeute',
                'Dentiste' => 'Dentiste',
                'Psycologue' => 'Psycologue',
                'Audioprothésiste' => 'Audioprothésiste',
                'Biotechnologue' => 'Biotechnologue',
                'Pharmacien' => 'Pharmacien',
                'Médecin' => 'Médecin',
                'Vétérinaire' => 'Vétérinaire',
                'Infirmier' => 'Infirmier',
                'Sciences et techniques des activités physiques et sportives' => 'Sciences et techniques des activités physiques et sportives',
                'Podologie' => 'Podologie',
                'Orthopédiste' => 'Orthopédiste',
                'Science de la santé' => 'Science de la santé',
                'Physiothérapie' => 'Physiothérapie',
                'Prothésiste dentaire' => 'Prothésiste dentaire'
                ),
            'required'    => false,
            'placeholder' => 'Choisir une formation',
            'empty_data'  => null))

        ->add('langues', ChoiceType::class, array(
            'choices' => array(
                'Anglais' => 'Anglais',
                'Espagnol' => 'Espagnol',
                'Français' => 'Français'
                ),
            'required'    => false,
            'placeholder' => 'Choisir une langue',
            'empty_data'  => null))

        ->add('villes', ChoiceType::class, array(
            'choices' => array(
                'Madrid' => 'Madrid',
                'Valencia' => 'Valencia',
                'Santa Cruz de Tenerife' => 'Santa Cruz de Tenerife',
                'Murcia' => 'Murcia',
                'Barcelone' => 'Barcelone',
                'Zaragoza' => 'Zaragoza',
                'Ávila' => 'Ávila',
                'Navarra' => 'Navarra',
                'Sevilla' => 'Sevilla',
                'Egkomi' => 'Egkomi',
                'Budapest' => 'Budapest',
                'Pécs' => 'Pécs',
                'Szeged' => 'Szeged',
                'Gödöllő' => 'Gödöllő',
                'Differdange' => 'Differdange',
                'CASABLANCA' => 'CASABLANCA',
                'Gdańsk' => 'Gdańsk',
                'KraKow' => 'KraKow',
                'Łódź' => 'Łódź',
                'Lublin' => 'Lublin',
                'Poznan' => 'Poznan',
                'Varsovie' => 'Varsovie',
                'Wroclaw' => 'Wroclaw',
                'Barcarena' => 'Barcarena',
                'Almada' => 'Almada',
                'București' => 'București',
                'Constanta' => 'Constanta',
                'lasi' => 'lasi',
                'Timisoara' => 'Timisoara',
                'Targu Mures' => 'Targu Mures',
                'Arad' => 'Arad',
                'Cluj-Napoca' => 'Cluj-Napoca',
                'Oradea' => 'Oradea'
                ),
            'required'    => false,
            'placeholder' => 'Choisir une ville',
            'empty_data'  => null))

        ->add('pays', ChoiceType::class, array(
            'choices' => array(
                'Chypre' => 'Chypre',
                'Espagne' => 'Espagne',
                'Hongrie' => 'Hongrie',
                'Maroc' => 'Maroc',
                'Roumanie' => 'Roumanie',
                'Pologne' => 'Pologne',
                'Portugal' => 'Portugal'
                ),
            'required'    => false,
            'placeholder' => 'Choisir un pays',
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
            'csrf_protection' => false,
            'data_class' => 'DUDEEGO\PlatformBundle\Entity\T_Search_Universite'
            ));

        }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'dudeego_platformbundle_t_search_universite';
    }


}
