<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_b1d4b769d844e9c2169587131a04ff32 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TwigBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "exception"), "message"), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, $this->getContext($context, "status_code"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getContext($context, "status_text"), "html", null, true);
        echo ")
";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        $this->env->loadTemplate("TwigBundle:Exception:exception.html.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 51,  124 => 50,  121 => 49,  114 => 35,  107 => 11,  104 => 10,  98 => 8,  87 => 64,  85 => 49,  71 => 37,  69 => 35,  64 => 32,  60 => 30,  36 => 10,  23 => 2,  21 => 1,  59 => 17,  56 => 29,  48 => 16,  44 => 8,  41 => 7,  38 => 13,  31 => 8,  28 => 6,  161 => 58,  153 => 53,  147 => 50,  143 => 49,  139 => 48,  133 => 45,  129 => 52,  125 => 43,  118 => 39,  113 => 37,  108 => 35,  102 => 32,  97 => 30,  94 => 29,  89 => 23,  82 => 22,  74 => 19,  70 => 18,  66 => 17,  62 => 16,  58 => 15,  54 => 14,  51 => 18,  46 => 12,  40 => 10,  37 => 9,  30 => 4,  27 => 3,);
    }
}
