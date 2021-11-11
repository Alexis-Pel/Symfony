<?php

namespace App\Form;

use App\Entity\Objet;
use App\Entity\Users;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\NotNull;

class ObjetType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('Nom')
            ->add('Image')
            ->add('Pays')
            ->add('Description',
            TextareaType::class,
                [
                    'required' => true,
                    'attr' => [
                        'maxlength' => 255,
                        'minlength' => 10,
                        'placeholder' => "Description"
                    ],
                    'constraints' => array(
                        new notBlank(),
                        new NotNull(),
                    )
                ])
        ;
        $builder->add('user', EntityType::class, [
            // looks for choices from this entity
            'class' => Users::class,

            // uses the User.username property as the visible option string
            'choice_label' => 'mail',

            // used to render a select box, check boxes or radios
            // 'multiple' => true,
            // 'expanded' => true,
        ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Objet::class,
        ]);
    }
}
