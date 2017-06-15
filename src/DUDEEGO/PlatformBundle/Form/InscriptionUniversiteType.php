<?php

namespace DUDEEGO\PlatformBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\FormInterface;
use DUDEEGO\PlatformBundle\Entity\T_Formation_Universite;
use DUDEEGO\PlatformBundle\Entity\T_Langue_Universite;
use DUDEEGO\PlatformBundle\Entity\T_Universite;

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
        ->add('langue', EntityType::class, array(
            'class' => 'DUDEEGOPlatformBundle:T_Langue_Universite',
            'query_builder' => function (EntityRepository $er) {
                return $er->createQueryBuilder('u')
                ->orderBy('u.langue', 'ASC');
            },
            'choice_label' => 'langue',
            'required'    => true,
            'placeholder' => 'Sélectionner un élément dans la liste des langues',
            'empty_data'  => '',
            ))

        ->add('formation', ChoiceType::class, array(
            'placeholder' => '',
            ))

        ->add('nometablissement', ChoiceType::class, array(
            'placeholder' => '',
            ))

        ->add('rechercher', SubmitType::class, array(
            'attr' => array('class' => 'btn btn-primary'),
            ))

        ->add('reinitialiser', ResetType::class, array(
            'attr' => array('class' => 'btn btn-danger'),
            ));

        $formModifier = function (FormInterface $form, T_Langue_Universite $langue = null) {
            $formation = null === $langue ? array() : $langue->getFormation();

            $form->add('formation', EntityType::class, array(
                'class'       => 'DUDEEGOPlatformBundle:T_Formation_Universite',
                'placeholder' => 'Sélectionner un élément dans la liste des formations',
                'choices'     => $formation,
                ));        
        };

        $formModifierFormation = function (FormInterface $form, T_Formation_Universite $formation = null) {

            $nometablissement = null === $formation ? array() : $formation->getUniversite();

            $form->add('nometablissement', EntityType::class, array(
                'class'       => 'DUDEEGOPlatformBundle:T_Universite',
                'placeholder' => 'Sélectionner un élément dans la liste des universités',
                'choices'     => $nometablissement,
                ));
        };

        $builder->addEventListener(
            FormEvents::PRE_SET_DATA,
            function (FormEvent $event) use ($formModifier) {
                $data = $event->getData();
                if($data === null || !method_exists($data, 'getLangue')) {
                    $formModifier($event->getForm(), null);
                } else {
                    $formModifier($event->getForm(), $data->getLangue());
                }
            });

        $builder->get('langue')->addEventListener(
            FormEvents::POST_SUBMIT,
            function (FormEvent $event) use ($formModifier) {
                $langue = $event->getForm()->getData();
                $formModifier($event->getForm()->getParent(), $langue);
            });

        $builder->addEventListener(
            FormEvents::PRE_SET_DATA,
            function (FormEvent $event) use ($formModifierFormation) {
                $data = $event->getData();
                
                if($data === null || !method_exists($data, 'getFormation')) {
                    $formModifierFormation($event->getForm(), null);
                } else {
                    $formModifierFormation($event->getForm(), $data->getFormation());
                }
            });

        $builder->get('formation')->addEventListener(
            FormEvents::POST_SUBMIT,
            function (FormEvent $event) use ($formModifierFormation) {
                $formation = $event->getForm()->getData();
                dump($formation);exit();
                $formModifierFormation($event->getForm()->getParent(), $formation);
            });    

        
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => null,
            'csrf_protection'   => false,
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