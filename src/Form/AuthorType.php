<?php

namespace App\Form;

use App\Entity\Author;
use Symfony\Component\Form\AbstractType;
use FOS\CKEditorBundle\Form\Type\CKEditorType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class AuthorType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', TextType::class, ["label" => "Nom", "required" => false])
            ->add('firstName', TextType::class, ["label" => "Prénom", "required" => false])
            ->add('pseudo', TextType::class, ["label" => "Pseudo", "required" => false])
            ->add('imageFile', FileType::class, ["label" => "Image", "required" => false])
            // ->add('imageName')
            // ->add('updatedAt')
            ->add('biography', CKEditorType::class, ["label" => "Biographie", "required" => false])
            ->add('birthdate', DateTimeType::class, ["label" => "Date de naissance", "widget" => "single_text", "required" => false])
            ->add('dateOfDeath', DateTimeType::class, ["label" => "Décédé le", "widget" => "single_text", "required" => false])
            // ->add('slug')
            ->add('imageFile', FileType::class, ["label" => "Portrait de l'autheur", "required" => true,]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Author::class,
        ]);
    }
}
