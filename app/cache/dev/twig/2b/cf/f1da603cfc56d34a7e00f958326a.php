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
        echo "
<!DOCTYPE html>
<html>
\t<head>
\t\t<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />

\t\t<title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

\t\t";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "\t</head>

\t<body>
\t\t<div class=\"container\">
\t\t\t<div id=\"header\" class=\"hero-unit\">
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
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("myapp_anomalie_lister"), "html", null, true);
        echo "\">Recherche Anomalie</a></li>
\t\t\t\t\t\t<li><a href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("myapp_anomalie_creer"), "html", null, true);
        echo "\">Ajouter une Anomalie</a></li>
\t\t\t\t\t\t";
        // line 32
        echo "\t\t\t\t\t</ul>\t\t\t\t
\t\t\t\t</div>
\t\t\t\t<div id=\"content\" class=\"span9\">
\t\t\t\t\t";
        // line 35
        $this->displayBlock('body', $context, $blocks);
        // line 37
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
        // line 49
        $this->displayBlock('javascripts', $context, $blocks);
        // line 64
        echo "
\t</body>
</html>




";
    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        echo "GdA";
    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 11
        echo "\t\t\t<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" type=\"text/css\" />
\t\t";
    }

    // line 35
    public function block_body($context, array $blocks = array())
    {
        echo "\t\t\t\t\t
\t\t\t\t\t";
    }

    // line 49
    public function block_javascripts($context, array $blocks = array())
    {
        // line 50
        echo "\t\t";
        // line 51
        echo "\t\t<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 52
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
        return array (  129 => 52,  126 => 51,  124 => 50,  121 => 49,  114 => 35,  107 => 11,  104 => 10,  98 => 8,  87 => 64,  85 => 49,  71 => 37,  69 => 35,  64 => 32,  60 => 30,  56 => 29,  38 => 13,  36 => 10,  31 => 8,  23 => 2,  21 => 1,);
    }
}
