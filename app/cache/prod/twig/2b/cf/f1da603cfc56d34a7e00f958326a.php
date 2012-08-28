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
\t\t\t\t\t\t";
        // line 30
        echo "\t\t\t\t\t\t";
        // line 31
        echo "\t\t\t\t\t\t";
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

    public function getDebugInfo()
    {
        return array (  125 => 52,  110 => 35,  100 => 10,  83 => 64,  65 => 35,  58 => 31,  36 => 10,  21 => 1,  56 => 30,  209 => 84,  205 => 82,  196 => 79,  192 => 78,  189 => 77,  178 => 71,  176 => 70,  165 => 63,  161 => 61,  152 => 58,  148 => 57,  145 => 56,  141 => 55,  134 => 50,  132 => 49,  127 => 46,  123 => 44,  109 => 39,  93 => 33,  90 => 32,  54 => 14,  133 => 44,  124 => 41,  111 => 37,  107 => 36,  80 => 26,  69 => 20,  63 => 18,  60 => 32,  52 => 12,  72 => 16,  64 => 15,  53 => 13,  42 => 7,  34 => 5,  23 => 2,  44 => 13,  30 => 9,  26 => 3,  224 => 96,  215 => 90,  211 => 88,  204 => 84,  200 => 83,  195 => 80,  193 => 79,  190 => 78,  188 => 77,  185 => 76,  179 => 72,  177 => 71,  171 => 67,  162 => 63,  158 => 61,  156 => 60,  153 => 59,  146 => 55,  142 => 54,  137 => 51,  131 => 48,  126 => 46,  120 => 50,  117 => 49,  103 => 11,  99 => 34,  74 => 27,  47 => 19,  39 => 9,  32 => 11,  97 => 34,  95 => 21,  88 => 29,  82 => 27,  78 => 25,  75 => 24,  71 => 14,  49 => 11,  40 => 6,  25 => 4,  27 => 3,  22 => 4,  20 => 2,  17 => 1,  92 => 20,  86 => 28,  79 => 40,  77 => 25,  57 => 15,  46 => 10,  37 => 8,  33 => 5,  29 => 4,  24 => 3,  19 => 2,  135 => 50,  129 => 47,  122 => 51,  116 => 42,  113 => 40,  108 => 40,  104 => 24,  102 => 37,  94 => 8,  89 => 20,  87 => 28,  84 => 28,  81 => 49,  73 => 21,  70 => 26,  67 => 37,  62 => 24,  59 => 17,  55 => 14,  51 => 18,  48 => 16,  41 => 11,  38 => 13,  35 => 7,  31 => 8,  28 => 6,);
    }
}
