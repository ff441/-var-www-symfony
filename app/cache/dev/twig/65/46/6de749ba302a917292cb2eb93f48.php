<?php

/* MyAppGdaBundle:Anomalie:lister.html.twig */
class __TwigTemplate_65466de749ba302a917292cb2eb93f48 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("MyAppGdaBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'gda_body' => array($this, 'block_gda_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MyAppGdaBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        // line 6
        echo "Liste des anomalies - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 9
    public function block_gda_body($context, array $blocks = array())
    {
        // line 10
        echo "<p><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("myapp_anomalie_creer"), "html", null, true);
        echo "\">Creer une anomalie</a><p>
<table>
";
        // line 12
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "anomalies"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 13
            echo "\t<tr>
\t\t<td>";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "a"), "id"), "html", null, true);
            echo "</td>
\t\t<td>";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "a"), "projet"), "html", null, true);
            echo "</td>
\t\t<td>";
            // line 16
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "a"), "dateCreation"), "d/m/Y"), "html", null, true);
            echo "</td>
\t\t<td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "a"), "etat"), "html", null, true);
            echo "</td>
\t\t<td><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("myapp_anomalie_detail", array("id" => $this->getAttribute($this->getContext($context, "a"), "id"))), "html", null, true);
            echo "\">Détail</a></td>
                <td><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("myapp_anomalie_supprimer", array("id" => $this->getAttribute($this->getContext($context, "a"), "id"))), "html", null, true);
            echo "\">Supprimer</a></td>
\t</tr>
";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 22
            echo "\t<tr><td>Aucune anomalie en-cours</td></tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 23
        echo "      
</table>

";
        // line 29
        echo " <ul>
    <form action=\"\" method=\"post\" ";
        // line 30
        echo $this->env->getExtension('form')->renderEnctype($this->getContext($context, "form"));
        echo ">    
        <!-- Les erreurs générales du formulaire. -->
    ";
        // line 32
        echo $this->env->getExtension('form')->renderErrors($this->getContext($context, "form"));
        echo "
        <div>
            <!-- Génération du label. -->
        ";
        // line 35
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "form"), "dateCreation"), "Date de création");
        echo "    
            <!-- Affichage des erreurs pour ce champ précis. -->
        ";
        // line 37
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getContext($context, "form"), "dateCreation"));
        echo "
            <!-- Génération de l'input. -->
        ";
        // line 39
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "dateCreation"));
        echo "
        </div>
        <!-- Idem pour un autre champ. -->
        <div>
        ";
        // line 43
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "form"), "createur"), "Détectée par");
        echo "
        ";
        // line 44
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getContext($context, "form"), "createur"));
        echo "
        ";
        // line 45
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "createur"));
        echo "
        </div>
        <div>
        ";
        // line 48
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "form"), "projet"), "Version");
        echo "
        ";
        // line 49
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getContext($context, "form"), "projet"));
        echo "
        ";
        // line 50
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "projet"));
        echo "
        </div>   
        <!-- Génération des champs pas encore écrits-->
        ";
        // line 53
        echo $this->env->getExtension('form')->renderRest($this->getContext($context, "form"));
        echo "   
        <div>
           <input type=\"submit\" />
        </div>
    </form>
        <p><a href=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("myapp_anomalie_lister"), "html", null, true);
        echo "\">Retour à la liste des anomalies</a></p>
</ul>



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
        return array (  161 => 58,  153 => 53,  147 => 50,  143 => 49,  139 => 48,  133 => 45,  129 => 44,  125 => 43,  118 => 39,  113 => 37,  108 => 35,  102 => 32,  97 => 30,  94 => 29,  89 => 23,  82 => 22,  74 => 19,  70 => 18,  66 => 17,  62 => 16,  58 => 15,  54 => 14,  51 => 13,  46 => 12,  40 => 10,  37 => 9,  30 => 6,  27 => 5,);
    }
}
