<?php

/* ::layout.html.twig */
class __TwigTemplate_2bcff1da603cfc56d34a7e00f958326a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "﻿";
        // line 2
        echo "﻿";
        // line 3
        echo "﻿";
        // line 4
        echo " ";
        // line 5
        echo " ";
        // line 6
        echo "﻿";
        // line 7
        echo "

<!DOCTYPE html>
<html>
\t<head>
\t\t<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />

\t\t<title>";
        // line 14
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

\t\t";
        // line 16
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 19
        echo "\t</head>

\t<body>
\t\t<div class=\"container\">                                                                    
                    
\t\t\t<div id=\"header\" class=\"hero-unit\">
                            
                                <div class=\"offset10\">                            
                                    ";
        // line 28
        echo "                                    ";
        // line 29
        echo "
                                    ";
        // line 30
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 31
            echo "                                        Connecté en tant que ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user"), "username"), "html", null, true);
            echo " - <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_security_logout"), "html", null, true);
            echo "\">Déconnexion</a>
                                    ";
        } else {
            // line 33
            echo "                                        <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_security_login"), "html", null, true);
            echo "\">Connexion</a>
                                    ";
        }
        // line 34
        echo "                                        
                                </div>
                            
\t\t\t\t<h1>Gestion des anomalies</h1>
\t\t\t\t<p>Projet d'étude sur symfony pour gérer les anomalies d'un projet</p>
\t\t\t\t<p><a class=\"btn btn-primary btn-large\" href=\"http://srblog.info\">
\t\t\t\t\tAccéder à mon blog
\t\t\t\t</a></p>
\t\t\t</div>

\t\t\t<div class=\"row\">
\t\t\t\t<div id=\"menu\" class=\"span3\">
\t\t\t\t\t<h3>Menu</h3>
\t\t\t\t\t<ul class=\"nav nav-pills nav-stacked\">
\t\t\t\t\t\t<li><a href=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("myapp_anomalie_lister"), "html", null, true);
        echo "\">Recherche Anomalie</a></li>
\t\t\t\t\t\t<li><a href=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("myapp_anomalie_creer"), "html", null, true);
        echo "\">Ajouter une Anomalie</a></li>
\t\t\t\t\t\t";
        // line 51
        echo "\t\t\t\t\t</ul>\t\t\t\t
\t\t\t\t</div>
\t\t\t\t<div id=\"content\" class=\"span9\">
\t\t\t\t\t";
        // line 54
        $this->displayBlock('body', $context, $blocks);
        // line 56
        echo "\t\t\t\t</div>
\t\t\t</div>

\t\t\t<hr>

\t\t\t<footer>
                            <div style=\"text-align: center\"
\t\t\t\t<p>Aucun copyright production &copy; 2012.</p>
                            </div>
\t\t\t</footer>
\t\t</div>

\t";
        // line 68
        $this->displayBlock('javascripts', $context, $blocks);
        // line 83
        echo "
\t</body>
</html>




";
    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        echo "GdA";
    }

    // line 16
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 17
        echo "\t\t\t<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" type=\"text/css\" />
\t\t";
    }

    // line 54
    public function block_body($context, array $blocks = array())
    {
        echo "\t\t\t\t\t
\t\t\t\t\t";
    }

    // line 68
    public function block_javascripts($context, array $blocks = array())
    {
        // line 69
        echo "\t\t";
        // line 70
        echo "\t\t<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
                <script type=\"text/javascript\" src=\"http://code.jquery.com/jquery-latest.min.js\"></script>
                <script type=\"text/javascript\" src=\"http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.14/jquery-ui.min.js\"></script>
                <script type=\"text/javascript\" src=\"http://jquery-ui.googlecode.com/svn/trunk/ui/i18n/jquery.ui.datepicker-fr.js\"></script>
                <link rel=\"stylesheet\" href=\"http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.14/themes/ui-lightness/jquery-ui.css\" type=\"text/css\" />
                <script> 
                    \$(\"form input.date\").datepicker({
                        dateFormat: 'dd/mm/yy', 
                          firstDay:1
                    }).attr(\"readonly\",\"readonly\"); 
                </script>
\t";
    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 71,  166 => 70,  164 => 69,  161 => 68,  154 => 54,  147 => 17,  144 => 16,  138 => 14,  127 => 83,  125 => 68,  111 => 56,  109 => 54,  104 => 51,  100 => 49,  96 => 48,  80 => 34,  74 => 33,  66 => 31,  64 => 30,  61 => 29,  59 => 28,  49 => 19,  47 => 16,  42 => 14,  33 => 7,  31 => 6,  29 => 5,  27 => 4,  25 => 3,  23 => 2,  21 => 1,);
    }
}
