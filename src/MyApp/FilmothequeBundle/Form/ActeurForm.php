<?php

namespace MyApp\FilmothequeBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class ActeurForm extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {        
        $builder->add('nom');
        $builder->add('prenom');
        $builder->add('dateNaissance', 'birthday');
        $builder->add('sexe', 'choice', array('choices' => array('F'=>'Féminin','M'=>'Masculin')));

    }
	
	public function getName()
	{
		return 'acteur';
	}
}