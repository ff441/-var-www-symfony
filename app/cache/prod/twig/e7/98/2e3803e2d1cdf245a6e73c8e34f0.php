<?php

/* ::base.html.twig */
class __TwigTemplate_e7982e3803e2d1cdf245a6e73c8e34f0 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 47,  85 => 31,  68 => 23,  45 => 12,  147 => 50,  143 => 49,  139 => 48,  118 => 39,  66 => 17,  125 => 49,  110 => 35,  100 => 10,  83 => 64,  65 => 35,  58 => 15,  36 => 10,  21 => 1,  56 => 30,  209 => 84,  205 => 82,  196 => 79,  192 => 78,  189 => 77,  178 => 71,  176 => 70,  165 => 63,  161 => 58,  152 => 58,  148 => 57,  145 => 56,  141 => 55,  134 => 50,  132 => 49,  127 => 46,  123 => 44,  109 => 39,  93 => 33,  90 => 32,  54 => 14,  133 => 45,  124 => 41,  111 => 37,  107 => 38,  80 => 26,  69 => 20,  63 => 18,  60 => 32,  52 => 12,  72 => 16,  64 => 15,  53 => 16,  42 => 11,  34 => 5,  23 => 2,  44 => 13,  30 => 6,  26 => 3,  224 => 96,  215 => 90,  211 => 88,  204 => 84,  200 => 83,  195 => 80,  193 => 79,  190 => 78,  188 => 77,  185 => 76,  179 => 72,  177 => 71,  171 => 67,  162 => 63,  158 => 61,  156 => 60,  153 => 53,  146 => 55,  142 => 54,  137 => 51,  131 => 48,  126 => 46,  120 => 50,  117 => 49,  103 => 37,  99 => 36,  74 => 19,  47 => 14,  39 => 9,  32 => 11,  97 => 30,  95 => 21,  88 => 29,  82 => 22,  78 => 27,  75 => 24,  71 => 14,  49 => 11,  40 => 10,  25 => 4,  27 => 5,  22 => 4,  20 => 2,  17 => 1,  92 => 20,  86 => 28,  79 => 40,  77 => 25,  57 => 6,  46 => 12,  37 => 9,  33 => 7,  29 => 4,  24 => 3,  19 => 2,  135 => 50,  129 => 44,  122 => 51,  116 => 42,  113 => 41,  108 => 35,  104 => 24,  102 => 32,  94 => 29,  89 => 32,  87 => 28,  84 => 28,  81 => 49,  73 => 25,  70 => 18,  67 => 11,  62 => 10,  59 => 17,  55 => 14,  51 => 5,  48 => 16,  41 => 11,  38 => 13,  35 => 7,  31 => 6,  28 => 6,);
    }
}
