<?php

/* TwigBundle:Exception:logs.html.twig */
class __TwigTemplate_c17fa46cf5fcb9af809352a2bc015fc1 extends Twig_Template
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
        echo "<ol class=\"traces logs\">
    ";
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "logs"));
        foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
            // line 3
            echo "        <li";
            if (twig_in_filter($this->getAttribute($this->getContext($context, "log"), "priorityName"), array(0 => "EMERG", 1 => "ERR", 2 => "CRIT", 3 => "ALERT", 4 => "ERROR", 5 => "CRITICAL"))) {
                echo " class=\"error\"";
            }
            echo ">
            ";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "log"), "message"), "html", null, true);
            echo "
        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 7
        echo "</ol>
";
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:logs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 16,  55 => 14,  53 => 13,  42 => 10,  34 => 7,  95 => 21,  88 => 19,  78 => 17,  75 => 16,  67 => 12,  49 => 12,  25 => 4,  22 => 3,  20 => 2,  224 => 96,  215 => 90,  211 => 88,  204 => 84,  200 => 83,  195 => 80,  193 => 79,  190 => 78,  188 => 77,  185 => 76,  179 => 72,  177 => 71,  171 => 67,  162 => 63,  158 => 61,  156 => 60,  146 => 55,  142 => 54,  137 => 51,  135 => 50,  131 => 48,  120 => 45,  117 => 44,  103 => 36,  99 => 34,  47 => 19,  39 => 9,  32 => 11,  17 => 1,  92 => 20,  86 => 6,  79 => 40,  77 => 28,  57 => 9,  33 => 7,  29 => 5,  24 => 3,  19 => 2,  126 => 46,  124 => 50,  121 => 49,  114 => 35,  107 => 11,  104 => 24,  98 => 8,  87 => 64,  85 => 49,  71 => 14,  69 => 35,  64 => 15,  60 => 30,  36 => 10,  23 => 4,  21 => 1,  59 => 23,  56 => 29,  48 => 16,  44 => 11,  41 => 7,  38 => 6,  31 => 4,  28 => 6,  161 => 58,  153 => 59,  147 => 50,  143 => 49,  139 => 48,  133 => 45,  129 => 47,  125 => 43,  118 => 39,  113 => 43,  108 => 35,  102 => 32,  97 => 22,  94 => 31,  89 => 20,  82 => 19,  74 => 27,  70 => 26,  66 => 17,  62 => 24,  58 => 15,  54 => 14,  51 => 18,  46 => 14,  40 => 7,  37 => 8,  30 => 4,  27 => 3,);
    }
}
