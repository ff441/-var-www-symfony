<?php

/* HEADER
 * --------------------------
 * 27/08/2012
 * CREATION DU FICHIER  
 * --------------------------
 */


namespace MyApp\GdaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class DetailAnomalieForm extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {        
        $builder
            
            ->add('dateCreation','date', array(
                                                'widget' => 'single_text',
                                                'input' => 'datetime',
                                                'format' => 'dd/MM/yyyy',
                                                'attr' => array('class' => 'date'),
                                                ))
            ->add('createur', 'entity', array(
                'class'=>'MyAppGdaBundle:Utilisateur'))
            ->add('proprietaire', 'entity', array(
                'class'=>'MyAppGdaBundle:Utilisateur'))
            ->add('solveur', 'entity', array(
                'class'=>'MyAppGdaBundle:Utilisateur'))    
            ->add('projet', 'entity', array(
                'class'=>'MyAppGdaBundle:Projet'))
            ->add('categorie', 'entity', array(
                'class'=>'MyAppGdaBundle:Categorie'))
            ->add('etat', 'entity', array(
                'class'=>'MyAppGdaBundle:Etat'))    
            ->add('description', 'textarea')
                
        ;
    }
    
    public function getName()
    {
        return 'detailAnomalieForm';        
    }
}
?>
