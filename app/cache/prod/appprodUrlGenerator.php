<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;


/**
 * appprodUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appprodUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    static private $declaredRouteNames = array(
       'myapp_accueil' => true,
       'myapp_anomalie_lister' => true,
       'myapp_anomalie_creer' => true,
       'myapp_anomalie_modifier' => true,
       'myapp_anomalie_supprimer' => true,
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function generate($name, $parameters = array(), $absolute = false)
    {
        if (!isset(self::$declaredRouteNames[$name])) {
            throw new RouteNotFoundException(sprintf('Route "%s" does not exist.', $name));
        }

        $escapedName = str_replace('.', '__', $name);

        list($variables, $defaults, $requirements, $tokens) = $this->{'get'.$escapedName.'RouteInfo'}();

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $absolute);
    }

    private function getmyapp_accueilRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyApp\\GdaBundle\\Controller\\DefaultController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/myapp/',  ),));
    }

    private function getmyapp_anomalie_listerRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'MyApp\\GdaBundle\\Controller\\AnomalieController::listerAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/myapp/anomalie',  ),));
    }

    private function getmyapp_anomalie_creerRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyApp\\GdaBundle\\Controller\\AnomalieController::creerAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/myapp/anomalie/creer',  ),));
    }

    private function getmyapp_anomalie_modifierRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'MyApp\\GdaBundle\\Controller\\AnomalieController::anomalieAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/myapp/anomalie/modifier',  ),));
    }

    private function getmyapp_anomalie_supprimerRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'MyApp\\GdaBundle\\Controller\\AnomalieController::supprimerAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/myapp/anomalie/supprimer',  ),));
    }
}
