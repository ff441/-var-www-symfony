<?php

/*
 * Header
 * ---------------------
 * 28/08/2012
 * Creation du fichier
 */

namespace MyApp\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class MyAppUserBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}


?>
