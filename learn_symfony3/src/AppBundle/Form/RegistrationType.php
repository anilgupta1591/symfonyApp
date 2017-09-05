<?php
// src/AppBundle/Form/RegistrationType.php

namespace AppBundle\Form;

use AppBundle\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Validator\Constraints\NotBlank;

class RegistrationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
                ->add('username', TextType::class,
                array('attr'=>array('class'=>'form-control','placeholder'=>'Username'),
                    'constraints'=>new NotBlank(array()),
                    'required'=>false))
            ->add('email', EmailType::class,
                array('attr'=>array('class'=>'form-control','placeholder'=>'Email'),
                    'required'=>false))
            
            ->add('plainPassword', RepeatedType::class, array(
                'type' => PasswordType::class,
                'first_options'  => array('label' => 'Password','attr'=>array('class'=>'form-control','placeholder'=>'Password'),
                    'required'=>false),
                'second_options' => array('label' => 'Repeat Password','attr'=>array('class'=>'form-control','placeholder'=>'Confirm Password'),
                    'required'=>false),
            ));
    }

    public function getParent()
    {
        return 'FOS\UserBundle\Form\Type\RegistrationFormType';

        // Or for Symfony < 2.8
        // return 'fos_user_registration';
    }

    public function getBlockPrefix()
    {
        return 'app_user_registration';
    }

    // For Symfony 2.x
    public function getName()
    {
        return $this->getBlockPrefix();
    }
}