<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_e5721c36f3e6109dae680ae3eab9eeff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->env->loadTemplate("TwigBundle:Exception:exception.xml.twig")->display(array_merge($context, array("exception" => $this->getContext($context, "exception"))));
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 16,  64 => 15,  53 => 13,  42 => 7,  34 => 7,  23 => 3,  44 => 11,  30 => 9,  26 => 3,  224 => 96,  215 => 90,  211 => 88,  204 => 84,  200 => 83,  195 => 80,  193 => 79,  190 => 78,  188 => 77,  185 => 76,  179 => 72,  177 => 71,  171 => 67,  162 => 63,  158 => 61,  156 => 60,  153 => 59,  146 => 55,  142 => 54,  137 => 51,  131 => 48,  126 => 46,  120 => 45,  117 => 44,  103 => 36,  99 => 34,  74 => 27,  47 => 19,  39 => 9,  32 => 11,  97 => 22,  95 => 21,  88 => 19,  82 => 19,  78 => 17,  75 => 16,  71 => 14,  49 => 9,  40 => 6,  25 => 4,  27 => 3,  22 => 4,  20 => 2,  17 => 1,  92 => 20,  86 => 6,  79 => 40,  77 => 28,  57 => 22,  46 => 14,  37 => 8,  33 => 5,  29 => 4,  24 => 3,  19 => 2,  135 => 50,  129 => 47,  122 => 46,  116 => 42,  113 => 43,  108 => 40,  104 => 24,  102 => 37,  94 => 31,  89 => 20,  87 => 28,  84 => 27,  81 => 26,  73 => 21,  70 => 26,  67 => 12,  62 => 24,  59 => 23,  55 => 14,  51 => 11,  48 => 10,  41 => 7,  38 => 6,  35 => 7,  31 => 6,  28 => 3,);
    }
}
