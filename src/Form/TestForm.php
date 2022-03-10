<?php
namespace App\Form;


use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\AbstractType;



class TaskType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('PrenomRealisateur')
        ;
    }
}