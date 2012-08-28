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
        echo "Création anomalie - ";
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
        ";
        // line 47
        echo "        </ul>
            
";
        // line 49
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
        return array (  121 => 47,  85 => 31,  68 => 23,  45 => 13,  147 => 50,  143 => 49,  139 => 48,  118 => 39,  66 => 17,  125 => 49,  110 => 35,  100 => 10,  83 => 64,  65 => 35,  58 => 15,  36 => 10,  21 => 1,  56 => 30,  209 => 84,  205 => 82,  196 => 79,  192 => 78,  189 => 77,  178 => 71,  176 => 70,  165 => 63,  161 => 58,  152 => 58,  148 => 57,  145 => 56,  141 => 55,  134 => 50,  132 => 49,  127 => 46,  123 => 44,  109 => 39,  93 => 33,  90 => 32,  54 => 14,  133 => 45,  124 => 41,  111 => 37,  107 => 38,  80 => 26,  69 => 20,  63 => 18,  60 => 32,  52 => 12,  72 => 16,  64 => 15,  53 => 16,  42 => 7,  34 => 5,  23 => 2,  44 => 13,  30 => 6,  26 => 3,  224 => 96,  215 => 90,  211 => 88,  204 => 84,  200 => 83,  195 => 80,  193 => 79,  190 => 78,  188 => 77,  185 => 76,  179 => 72,  177 => 71,  171 => 67,  162 => 63,  158 => 61,  156 => 60,  153 => 53,  146 => 55,  142 => 54,  137 => 51,  131 => 48,  126 => 46,  120 => 50,  117 => 49,  103 => 37,  99 => 36,  74 => 19,  47 => 14,  39 => 9,  32 => 11,  97 => 30,  95 => 21,  88 => 29,  82 => 22,  78 => 27,  75 => 24,  71 => 14,  49 => 11,  40 => 10,  25 => 4,  27 => 5,  22 => 4,  20 => 2,  17 => 1,  92 => 20,  86 => 28,  79 => 40,  77 => 25,  57 => 18,  46 => 12,  37 => 9,  33 => 5,  29 => 4,  24 => 3,  19 => 2,  135 => 50,  129 => 44,  122 => 51,  116 => 42,  113 => 41,  108 => 35,  104 => 24,  102 => 32,  94 => 29,  89 => 32,  87 => 28,  84 => 28,  81 => 49,  73 => 25,  70 => 18,  67 => 37,  62 => 20,  59 => 17,  55 => 14,  51 => 13,  48 => 16,  41 => 11,  38 => 13,  35 => 7,  31 => 8,  28 => 6,);
    }
}
