<?php

namespace DUDEEGO\PlatformBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\ResetType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;

class EA_PhysiqueType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('nom', TextType::class, array(
            'attr' => array('class' => 'form-control'),
            ))

        ->add('prenom', TextType::class, array(
            'attr' => array('class' => 'form-control'),
            ))

        ->add('datenaissance', DateType::class, array('widget' => 'single_text'))

        ->add('numerocarteid', TextType::class, array(
            'attr' => array('class' => 'form-control'),
            ))

        ->add('personne', EA_PersonneType::class)

        ->add('image', EA_ImageType::class)

        ->add('documents', CollectionType::class, array(
            'entry_type' => EA_DocumentType::class,
            'allow_add' => true,
            'allow_delete' => true,
            'by_reference' => false,
            ))

        ->add('demandes', CollectionType::class, array(
            'entry_type' => EA_Demande_InscriptionType::class,
            'allow_add' => true,
            'allow_delete' => true,
            'by_reference' => false,
            ))
        
        ->add('enregistrer', SubmitType::class, array(
            'attr' => array('class' => 'btn btn-primary'),
            ))
        /*->add('reinitialiser', ResetType::class, array(
            'attr' => array('class' => 'btn btn-danger'),
            ))*/
        ;
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'DUDEEGO\PlatformBundle\Entity\EA_Physique'
            ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'dudeego_platformbundle_ea_physique';
    }


}
