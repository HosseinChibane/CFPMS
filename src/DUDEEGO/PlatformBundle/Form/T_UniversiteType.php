<?php

namespace DUDEEGO\PlatformBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ResetType;
use Doctrine\ORM\EntityRepository;

class T_UniversiteType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
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
        ->add('siteinternet')
        ->add('description')
        ->add('longetitude')
        ->add('latitude')
        ->add('telephone')
        ->add('classement')
        ->add('bourse')
        ->add('montantbourse')
        ->add('logement')
        ->add('partenaire')
        ->add('type')
        ->add('taille')
        ->add('adresse', T_Adresse_UniversiteType::class)
        ->add('formations', T_Formation_UniversiteType::class)
        
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
            'data_class' => 'DUDEEGO\PlatformBundle\Entity\T_Universite'
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
