<?php

namespace DUDEEGO\PlatformBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ResetType;
use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class EA_MoraleType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
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
        ->add('siret')
        ->add('fax')
        ->add('naf')
        ->add('url')
        ->add('alt')

        ->add('personne', EA_PersonneType::class)

        ->add('langues', CollectionType::class, array(
            'entry_type' => EA_LangueType::class
            ))

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
            'data_class' => 'DUDEEGO\PlatformBundle\Entity\EA_Morale'
            ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'dudeego_platformbundle_ea_morale';
    }


}
