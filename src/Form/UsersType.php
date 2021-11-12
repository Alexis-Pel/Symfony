<?php

namespace App\Form;

use App\Entity\Users;
use Cassandra\Date;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\NotNull;

class UsersType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('first_name',
                TextType::class,
                [
                    'required' => true,
                    'attr' => [
                        'maxlength' => 32,
                        'minlength' => 2,
                        'placeholder' => "FIRSTNAME"
                    ],
                    'constraints' => array(
                        new notBlank(),
                        new NotNull(),
                    )

                ])
            ->add('last_name',
                TextType::class,
                [
                    'required' => true,
                    'attr' => [
                        'maxlength' => 32,
                        'minlength' => 2,
                        'placeholder' => "LASTNAME"
                    ],
                    'constraints' => array(
                        new notBlank(),
                        new NotNull(),
                    )

                ])
            ->add('birthday',
                DateType::class,
            [
                'widget' => 'choice',
                'years' => range(1900, 2020)

            ])

            ->add('mail',
                EmailType::class,
                [
                    'required' => true,
                    'attr' => [
                        'maxlength' => 32,
                        'minlength' => 2,
                        'placeholder' => "EMAIL"
                    ],
                    'constraints' => array(
                        new notBlank(),
                        new NotNull(),
                    )
                ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Users::class,
        ]);
    }
}
