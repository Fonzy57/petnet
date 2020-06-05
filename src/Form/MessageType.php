<?php

namespace App\Form;

use App\Entity\Message;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;


class MessageType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('subject', ChoiceType::class, [
                'choices' => [
                    'Demande de rendez-vous' => 'RDV',
                    'Demande de soins esthétique' => 'Esthetique',
                    'Demande de visio avec l\'animal' => 'Visio',
                    'Autre' => 'Autre'
                ]
            ])
            ->add('content')
            ->add('date_rdv', DateType::class, [
                'widget' => 'single_text'
            ])
            ->add('animal_idanimal')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Message::class,
        ]);
    }
}
