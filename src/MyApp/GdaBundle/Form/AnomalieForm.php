<?php

namespace MyApp\GdaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class AnomalieForm extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {        
        $builder
            //->add('id','label')
            ->add('dateCreation','date', array(
                                                'widget' => 'single_text',
                                                'input' => 'datetime',
                                                'format' => 'dd/MM/yyyy',
                                                'attr' => array('class' => 'date'),
                                                ))
            ->add('createur', 'entity', array(
                'class'=>'MyAppGdaBundle:Utilisateur')
            )
            ->add('projet', 'entity', array(
                'class'=>'MyAppGdaBundle:Projet')
            )
            ->add('categorie', 'entity', array(
                'class'=>'MyAppGdaBundle:Categorie')
            )                
        ;
    }
    
    public function getName()
    {
        return 'anomalie';
    }    
}
