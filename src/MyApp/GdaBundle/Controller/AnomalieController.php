<?php

namespace MyApp\GdaBundle\Controller;

use Symfony\Component\DependencyInjection\ContainerAware;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use MyApp\GdaBundle\Entity\Anomalie;
use MyApp\GdaBundle\Form\AnomalieForm;

class AnomalieController extends Controller {
    /*
     *    Lister les anomalies non terminées
     *    Utilisation de QueryBuilder Object
     * 	  http://docs.doctrine-project.org/projects/doctrine-orm/en/2.1/reference/query-builder.html
     */

    public function listerAction() {
        $repository = $this->getDoctrine()->getRepository('MyAppGdaBundle:Anomalie');
        $anomalies = $repository->findAll();
        //Requête pour récupérer les anomalies non terminées
        /* $query = $repository->createQueryBuilder('a');
          $query->getSQL("select ");
          $anomalies= $query->getResult(); */

        return $this->container->get('templating')->renderResponse('MyAppGdaBundle:Anomalie:lister.html.twig', array(
                    'anomalies' => $anomalies
                ));
    }

    /*
     * Créer une anomalie     
     */

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

    public function modifierAction($id) {
        return $this->container->get('templating')->renderResponse(
                        'MyAppGdaBundle:Anomalie:modifier.html.twig');
    }

    public function supprimerAction($id) {
        return $this->container->get('templating')->renderResponse(
                        'MyAppGdaBundle:Anomalie:supprimer.html.twig');
    }

}
