<?php

namespace App\Form;

use App\Entity\BookPage;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;

class BookPageType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('imageName')
            ->add('updatedAt')
            ->add('book')
            ->add('imageFile', FileType::class, ["label" => "Couverture de l'oeuvre", "required"=>true,])

        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => BookPage::class,
        ]);
    }
}
