<?php

namespace App\Form;

use App\Entity\Movie;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use App\Form\Types\JsonType;

class MovieType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('releaseYear')
            ->add('url')
            ->add('description')
            ->add('showDate')
            ->add('title')
            ->add('category')
            ->add('languages',Texttype::class,[
                'attr'=>[
                    'placeholder'=>'eg: En,Fr'
                ]
            ])
            ->add('runingTime')
            ->add('distributors',TextType::class,[
                'attr'=>[
                    'placeholder'=>'eg: Netflix,Amazon Primes'
                ]
            ])
            ->add('directors',TextType::class,[
                'attr'=>[
                    'placeholder'=>'eg: Modibo Sanogo,Gaby Sanogo'
                ]
            ])
            ->add('stars',TextType::class,[
                'attr'=>[
                    'placeholder'=>'eg: Modibo Sanogo,Gaby Sanogo'
                ]
            ])
            ->add('writers',TextType::class,[
                'attr'=>[
                    'placeholder'=>'eg: Modibo Sanogo,Gaby Sanogo'
                ]
            ])
            ->add('imageUrl');
        $builder->get('languages')
        ->addModelTransformer(new JsonType());
        $builder->get('stars')
        ->addModelTransformer(new JsonType());
        $builder->get('directors')
        ->addModelTransformer(new JsonType());
        $builder->get('writers')
        ->addModelTransformer(new JsonType());
        $builder->get('distributors')
        ->addModelTransformer(new JsonType());
    
    
    }


    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Movie::class,
        ]);
    }
}
