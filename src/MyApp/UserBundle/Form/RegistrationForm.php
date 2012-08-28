<?php

/*
 * Header
 * ----------------------------------
 * 28/08/12
 * Creation du formulaire d'inscription 
 */

namespace MyApp\UserBundle\Form;

use Symfony\Component\Form\FormBuilder;
use FOS\UserBundle\Form\Type\RegistrationFormType as BaseType;

class RegistrationForm extends BaseType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        parent::buildForm($builder, $options);
        // Ajoutez vos champs ici exemple adresse        
    }

    public function getName()
    {
        return 'myapp_user_registration';
    }
}



?>
