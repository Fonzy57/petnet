<?php

namespace App\Form;

use App\Entity\Message;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MessageType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('subject')
            ->add('content')
            /* ->add('sender') */
            /* ->add('date_demande') */
            ->add('date_rdv')
            ->add('ask_visio')
            ->add('ask_rdv')
            ->add('ask_esthetic')
            /* ->add('user_iduser') */
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
