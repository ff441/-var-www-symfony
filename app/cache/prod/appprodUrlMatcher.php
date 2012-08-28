<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appprodUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appprodUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = urldecode($pathinfo);

        if (0 === strpos($pathinfo, '/myapp')) {
            // myapp_accueil
            if (rtrim($pathinfo, '/') === '/myapp') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'myapp_accueil');
                }
                return array (  '_controller' => 'MyApp\\GdaBundle\\Controller\\DefaultController::indexAction',  '_route' => 'myapp_accueil',);
            }

            // myapp_anomalie_lister
            if (0 === strpos($pathinfo, '/myapp/anomalie') && preg_match('#^/myapp/anomalie/(?P<id>[^/]+?)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\GdaBundle\\Controller\\AnomalieController::listerAction',)), array('_route' => 'myapp_anomalie_lister'));
            }

            // myapp_anomalie_creer
            if ($pathinfo === '/myapp/anomalie/creer') {
                return array (  '_controller' => 'MyApp\\GdaBundle\\Controller\\AnomalieController::creerAction',  '_route' => 'myapp_anomalie_creer',);
            }

            // myapp_anomalie_modifier
            if (0 === strpos($pathinfo, '/myapp/anomalie/modifier') && preg_match('#^/myapp/anomalie/modifier/(?P<id>[^/]+?)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\GdaBundle\\Controller\\AnomalieController::anomalieAction',)), array('_route' => 'myapp_anomalie_modifier'));
            }

            // myapp_anomalie_supprimer
            if (0 === strpos($pathinfo, '/myapp/anomalie/supprimer') && preg_match('#^/myapp/anomalie/supprimer/(?P<id>[^/]+?)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\GdaBundle\\Controller\\AnomalieController::supprimerAction',)), array('_route' => 'myapp_anomalie_supprimer'));
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
