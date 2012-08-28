<?php
/* HEADER
 * 24/08/2012
 * CREATION DU FICHIER 
 * --------------------------
 * 27/08/2012
 * Ajout des méthodes modifier et supprimer 
 */


namespace MyApp\GdaBundle\Controller;

use Symfony\Component\DependencyInjection\ContainerAware;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use MyApp\GdaBundle\Entity\Anomalie;
use MyApp\GdaBundle\Form\AnomalieForm;
use MyApp\GdaBundle\Form\DetailAnomalieForm;

class AnomalieController extends Controller {
    
    /*
     *    Lister les anomalies non terminées
     *    Utilisation de QueryBuilder Object
     * 	  http://docs.doctrine-project.org/projects/doctrine-orm/en/2.1/reference/query-builder.html
     */
    public function listerAction($id = null) {
        //TODO : Ajouter la requête avec le filtre de l'état
        $message = '';
        $anomalie = new Anomalie();
        $form = $this->container->get('form.factory')->create(new DetailAnomalieForm(), $anomalie);
        
                
        $em = $this->container->get('doctrine')->getEntityManager();
        $repository = $this->getDoctrine()->getRepository('MyAppGdaBundle:Anomalie');
        $anomalies = $repository->findAll();
        //Requête pour récupérer les anomalies non terminées
        /* $query = $repository->createQueryBuilder('a');
          $query->getSQL("select ");
          $anomalies= $query->getResult(); */
        
        // On remplit la zone de détail avec les éléments de l'anomalie sélectionnée 
        if (isset($id)) 
	{
           // modification d'une anomalie existante
            $anomalie = $em->find('MyAppGdaBundle:Anomalie', $id);
            if (!$anomalie)
            {
                $message='Aucune anomalie trouvée';
            }        
            $form = $this->container->get('form.factory')->create(new DetailAnomalieForm(), $anomalie);
        }
        
        
	$request = $this->container->get('request');

	if ($request->getMethod() == 'POST') 
	{
    	  	$form->bindRequest($request);

            if ($form->isValid()) 
            {
                    $em->persist($anomalie);
                    $em->flush();
                    if (isset($id)) 
                    {
                            $message='Anomalie modifiée avec succès !';
                    }
                    else 
                    {
                            $message='Anomalie ajoutée avec succès !';
                    }
            }
	}    
        
        
        
        
        return $this->container->get('templating')->renderResponse(
                        'MyAppGdaBundle:Anomalie:lister.html.twig', array(
                    'form' => $form->createView(),
                    'message' => $message,
                    'anomalies' => $anomalies,
                ));
    }

    /*
     * Créer une anomalie     
     */
     // TODO à supprimer le bloc creer
    public function creerAction() {
        $message = '';
        $anomalie = new Anomalie();
        $form = $this->container->get('form.factory')->create(new AnomalieForm(), $anomalie);

        $request = $this->container->get('request');

        if ($request->getMethod() == 'POST') {
            $form->bindRequest($request);

            if ($form->isValid()) {
                $em = $this->container->get('doctrine')->getEntityManager();
                $em->persist($anomalie);
                $em->flush();
                $message = 'Anomalie créée avec succès !';
            }
        }

        return $this->container->get('templating')->renderResponse(
                        'MyAppGdaBundle:Anomalie:creer.html.twig', array(
                    'form' => $form->createView(),
                    'message' => $message,
                ));
    }

    public function detailAction($id = null) {       
        
        $message='';
	$em = $this->container->get('doctrine')->getEntityManager();

	if (isset($id)) 
	{
		// modification d'une anomalie existante
		$anomalie = $em->find('MyAppGdaBundle:Anomalie', $id);

		if (!$anomalie)
		{
                    $message='Aucune anomalie trouvée';
		}
	}
	else 
	{
		// ajout d'une nouvelle anomalie
		$anomalie = new Anomalie();
	}

	$form = $this->container->get('form.factory')->create(new AnomalieForm(), $anomalie);

	$request = $this->container->get('request');

	if ($request->getMethod() == 'POST') 
	{
    	  	$form->bindRequest($request);

            if ($form->isValid()) 
            {
                    $em->persist($anomalie);
                    $em->flush();
                    if (isset($id)) 
                    {
                            $message='Anomalie modifiée avec succès !';
                    }
                    else 
                    {
                            $message='Anomalie ajoutée avec succès !';
                    }
            }
	}

	return $this->container->get('templating')->renderResponse('MyAppGdaBundle:Anomalie:creer.html.twig',
	array(
	'form' => $form->createView(),
	'message' => $message,
	));
                    
    }

    
    /*
     * Supprimer une anomalie     
     */
    public function supprimerAction($id) {
    
        $em = $this->container->get('doctrine')->getEntityManager();
        $anomalie = $em->find('MyAppGdaBundle:Anomalie', $id);

        if (!$anomalie) 
        {
          throw new NotFoundHttpException("Anomalie non trouvée");
        }

        $em->remove($anomalie);
        $em->flush();        


        return new RedirectResponse($this->container->get('router')->generate('myapp_anomalie_lister'));
          
    }

}
