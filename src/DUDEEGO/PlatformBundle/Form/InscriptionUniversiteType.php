<?php

namespace DUDEEGO\PlatformBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ResetType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class InscriptionUniversiteType extends AbstractType
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
                ->orderBy('u.nometablissement', 'ASC')
                ;
            },
            'choice_label' => 'nometablissement',
            'required'    => true,
            'placeholder' => 'Choisir un établissement',
            'empty_data'  => '',
            ))

        ->add('formation', EntityType::class, array(
            'class' => 'DUDEEGOPlatformBundle:T_Formation_Universite',
            'query_builder' => function (EntityRepository $er) {
                return $er->createQueryBuilder('u')
                ->orderBy('u.formation', 'ASC');
            },
            'choice_label' => 'formation',
            'required'    => true,
            'placeholder' => 'Choisir une formation',
            'empty_data'  => null,
            ))

        ->add('langue', EntityType::class, array(
            'class' => 'DUDEEGOPlatformBundle:T_Langue_Universite',
            'query_builder' => function (EntityRepository $er) {
                return $er->createQueryBuilder('u')
                ->orderBy('u.langue', 'ASC');
            },
            'choice_label' => 'langue',
            'required'    => true,
            'placeholder' => 'Choisir une langue',
            'empty_data'  => '',
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
 /*PRE SUBMIT

        ->addEventListener(
            FormEvents::PRE_SUBMIT,
            function(FormEvent $event) {
                $data = $event->getData();
                $form = $event->getForm();

                if (!$data['nometablissement']) {
                    return;
                }
                else{
                    $id = $data['nometablissement'];

                    $form->add('formation', EntityType::class, array(
                        'class' => 'DUDEEGOPlatformBundle:T_Formation_Universite',
                        'query_builder' => function (EntityRepository $er) {
                            return $er->getFormation(1);
                        },
                        'choice_label' => 'formation',
                        'required'    => true,
                        'placeholder' => 'Choisir une formation',
                        'empty_data'  => null,
                        ));
                }})

        ->addEventListener(
            FormEvents::PRE_SUBMIT,
            function(FormEvent $event) {
                $data = $event->getData();
                $form = $event->getForm();

                if (!isset($data['formation'])) {
                    return;
                }
                else{
                    $id = $data['formation'];
                    $form->add('langue', EntityType::class, array(
                        'class' => 'DUDEEGOPlatformBundle:T_Langue_Universite',
                        'query_builder' => function (EntityRepository $er) {
                            return $er->getLangue(1);
                        },
                        'choice_label' => 'langue',
                        'required'    => true,
                        'placeholder' => 'Choisir une langue',
                        'empty_data'  => '',
                        ));
                }})*/