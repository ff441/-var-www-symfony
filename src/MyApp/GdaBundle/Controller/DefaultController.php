<?php

namespace MyApp\GdaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use MyApp\GdaBundle\Entity\Etat;

class DefaultController extends Controller 
{
    
    public function indexAction()
	{
		$em = $this->container->get('doctrine')->getEntityManager();
		$etats = $em->getRepository('MyAppGdaBundle:Etat')->findAll();

		return $this->container->get('templating')->renderResponse('MyAppGdaBundle:Default:index.html.twig',array(
			 'etats' => $etats)
		);
	}
    
    
    
    public function ajoutEtat($nomEtat) {
	 
	  $em = $this->container->get('doctrine')->getEntityManager();
	  
	  $etat1 = new Etat();
	  $etat1->setEtat($nomEtat);
	  $em->persist($etat1);  

	  $em->flush(); 
	 
	 
	  $message = 'Catégories créées avec succès';

	  return $this->container->get('templating')->renderResponse('MyAppGdaBundle:Default:index.html.twig',
		array('message' => $message)
	  );
	}
}
