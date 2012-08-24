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
        return array (  64 => 15,  57 => 13,  49 => 10,  45 => 9,  41 => 8,  37 => 7,  33 => 6,  30 => 5,  25 => 4,  20 => 2,  17 => 1,);
    }
}
