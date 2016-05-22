<?php

namespace Condors\TnMallBundle\Form;


use FOS\UserBundle\Form\Type\RegistrationFormType;
use Symfony\Component\Form\FormBuilderInterface;
use Gregwar\CaptchaBundle\Type\CaptchaType;

class UserRegistrationType extends RegistrationFormType {
    //put your code here

    public function buildForm(FormBuilderInterface $builder, array $options) {
        parent::buildForm($builder, $options);
        $builder
            ->add('nom')
            ->add('prenom')
            ->add('Sexe')
            ->add('Anniversaire','date')
            ->add('telephone')
            ->add('cin')
            ->add('adresse')
            ->add('telephone')
            ->add('file','file',['label'=>'Image de Profile'])
            ->add('captcha', CaptchaType::class);

        
    }




    public function getName() {
        return 'tnmall_user_registration';
    }
}
