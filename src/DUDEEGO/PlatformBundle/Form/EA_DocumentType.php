<?php

namespace DUDEEGO\PlatformBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Vich\UploaderBundle\Form\Type\VichFileType;

class EA_DocumentType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        //->add('pdfName', TextType::class);
        ->add('pdfFile', VichFileType::class, [
            'label' => 'Choissisez un document...',
            'required' => false,
            ])
        ->add('transferer', SubmitType::class, array(
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
            'data_class' => 'DUDEEGO\PlatformBundle\Entity\EA_Document'
            ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'dudeego_platformbundle_ea_document';
    }


}
