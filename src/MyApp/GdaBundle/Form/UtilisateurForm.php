<?php
/*
 * UtilisateurForm.php
 * 
 * Copyright 2012 Sragneau <sragneau@sragneau-P42F>
 * 
 */
namespace MyApp\GdaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class UtilisateurForm extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {        
        $builder
            ->add('username')
            /*A Définir*/
        ;
    }
    
    public function getUtilisateur()
    {
        return 'utilisateur';
    }    
}





?>
