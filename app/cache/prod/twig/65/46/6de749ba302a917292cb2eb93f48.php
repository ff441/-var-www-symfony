<?php

/* MyAppGdaBundle:Anomalie:lister.html.twig */
class __TwigTemplate_65466de749ba302a917292cb2eb93f48 extends Twig_Template
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
        echo "<h1>Liste des anomalies</h1>
<p><a href=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("myapp_anomalie_creer"), "html", null, true);
        echo "\">Creer une anomalie</a><p>
<table>
";
        // line 4
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "anomalies"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 5
            echo "\t<tr>
\t\t<td>";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "a"), "id"), "html", null, true);
            echo "</td>
\t\t<td>";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "a"), "projet"), "html", null, true);
            echo "</td>
\t\t<td>";
            // line 8
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "a"), "dateCreation"), "d/m/Y"), "html", null, true);
            echo "</td>
\t\t<td>";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "a"), "etat"), "html", null, true);
            echo "</td>
\t\t<td><a href=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("myapp_anomalie_modifier", array("id" => $this->getAttribute($this->getContext($context, "a"), "id"))), "html", null, true);
            echo "\">Détail</a></td>\t\t
\t</tr>
";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 13
            echo "\t<tr><td>Aucune anomalie en-cours</td></tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 15
        echo "</table>
";
    }

    public function getTemplateName()
    {
        return "MyAppGdaBundle:Anomalie:lister.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 9,  121 => 47,  114 => 35,  98 => 8,  85 => 47,  56 => 29,  36 => 10,  21 => 1,  61 => 19,  58 => 18,  50 => 18,  209 => 84,  205 => 82,  196 => 79,  192 => 78,  189 => 77,  178 => 71,  176 => 70,  165 => 63,  161 => 61,  152 => 58,  148 => 57,  145 => 56,  141 => 55,  134 => 50,  132 => 49,  127 => 46,  123 => 44,  109 => 39,  93 => 33,  90 => 32,  54 => 14,  133 => 44,  124 => 48,  111 => 37,  107 => 11,  80 => 26,  69 => 20,  63 => 18,  60 => 30,  52 => 12,  72 => 16,  64 => 15,  53 => 20,  42 => 7,  34 => 5,  23 => 2,  44 => 13,  30 => 5,  26 => 3,  224 => 96,  215 => 90,  211 => 88,  204 => 84,  200 => 83,  195 => 80,  193 => 79,  190 => 78,  188 => 77,  185 => 76,  179 => 72,  177 => 71,  171 => 67,  162 => 63,  158 => 61,  156 => 60,  153 => 59,  146 => 55,  142 => 54,  137 => 51,  131 => 48,  126 => 49,  120 => 39,  117 => 44,  103 => 36,  99 => 34,  74 => 27,  47 => 19,  39 => 9,  32 => 11,  97 => 34,  95 => 21,  88 => 29,  82 => 27,  78 => 25,  75 => 24,  71 => 35,  49 => 10,  40 => 6,  25 => 4,  27 => 3,  22 => 4,  20 => 2,  17 => 1,  92 => 20,  86 => 28,  79 => 40,  77 => 25,  57 => 13,  46 => 10,  37 => 7,  33 => 6,  29 => 4,  24 => 3,  19 => 2,  135 => 50,  129 => 50,  122 => 46,  116 => 42,  113 => 40,  108 => 40,  104 => 10,  102 => 37,  94 => 33,  89 => 20,  87 => 52,  84 => 28,  81 => 26,  73 => 37,  70 => 26,  67 => 19,  62 => 24,  59 => 23,  55 => 14,  51 => 13,  48 => 10,  41 => 8,  38 => 13,  35 => 7,  31 => 8,  28 => 6,);
    }
}
