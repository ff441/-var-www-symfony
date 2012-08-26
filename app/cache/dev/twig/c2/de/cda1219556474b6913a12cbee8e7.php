<?php

/* MyAppGdaBundle:Anomalie:creer.html.twig */
class __TwigTemplate_c2decda1219556474b6913a12cbee8e7 extends Twig_Template
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
        echo "
<h2>Créer une anomalie</h2>
<!-- Message pour l'ajout-->
";
        // line 13
        if ($this->getContext($context, "message")) {
            // line 14
            echo "     <p class=\"control-group success\">";
            echo twig_escape_filter($this->env, $this->getContext($context, "message"), "html", null, true);
            echo "</p>
";
        }
        // line 16
        echo "
<ul>
    <form action=\"\" method=\"post\" ";
        // line 18
        echo $this->env->getExtension('form')->renderEnctype($this->getContext($context, "form"));
        echo ">    
        <!-- Les erreurs générales du formulaire. -->
    ";
        // line 20
        echo $this->env->getExtension('form')->renderErrors($this->getContext($context, "form"));
        echo "
        <div>
            <!-- Génération du label. -->
        ";
        // line 23
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "form"), "dateCreation"), "Date de création");
        echo "    
            <!-- Affichage des erreurs pour ce champ précis. -->
        ";
        // line 25
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getContext($context, "form"), "dateCreation"));
        echo "
            <!-- Génération de l'input. -->
        ";
        // line 27
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "dateCreation"));
        echo "
        </div>
        <!-- Idem pour un autre champ. -->
        <div>
        ";
        // line 31
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "form"), "createur"), "Détectée par");
        echo "
        ";
        // line 32
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getContext($context, "form"), "createur"));
        echo "
        ";
        // line 33
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "createur"));
        echo "
            </div>
            <div>
        ";
        // line 36
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "form"), "projet"), "Version");
        echo "
        ";
        // line 37
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getContext($context, "form"), "projet"));
        echo "
        ";
        // line 38
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "projet"));
        echo "
                </div>   
                <!-- Génération des champs pas encore écrits-->
        ";
        // line 41
        echo $this->env->getExtension('form')->renderRest($this->getContext($context, "form"));
        echo "   
                <div>
                    <input type=\"submit\" />
                </div>

            </form>
            <p><a href=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("myapp_anomalie_lister"), "html", null, true);
        echo "\">Retour à la liste des anomalies</a></p>
        </ul>
            
";
        // line 50
        echo "        
";
    }

    public function getTemplateName()
    {
        return "MyAppGdaBundle:Anomalie:creer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 50,  122 => 47,  113 => 41,  107 => 38,  103 => 37,  99 => 36,  93 => 33,  89 => 32,  85 => 31,  78 => 27,  73 => 25,  68 => 23,  62 => 20,  57 => 18,  53 => 16,  47 => 14,  45 => 13,  40 => 10,  37 => 9,  30 => 6,  27 => 5,);
    }
}
