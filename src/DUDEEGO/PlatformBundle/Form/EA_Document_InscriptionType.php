<?php

namespace DUDEEGO\PlatformBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Vich\UploaderBundle\Form\Type\VichFileType;


class EA_Document_InscriptionType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('nom', TextType::class, array(
            'attr' => array('class' => 'form-control'),
            'required'    => false,
            'empty_data'  => 'null'))
        ->add('pdfName', TextType::class, array(
            'attr' => array('class' => 'form-control'),
            'required'    => false,
            'empty_data'  => 'null'))
        ->add('pdfFile', VichFileType::class, [
            'label' => 'Choissisez un document...',
            'required' => false,
            'allow_delete' => true, // optional, default is true
            'download_link' => true, // optional, default is true
            ])
        ->add('Enregistrer', SubmitType::class, array(
            'attr' => array('class' => 'btn btn-primary'),
            ))
        ;
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'DUDEEGO\PlatformBundle\Entity\EA_Document_Inscription'
            ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'dudeego_platformbundle_ea_document_inscription';
    }


}
