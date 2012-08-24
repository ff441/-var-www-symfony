<?php

/* MyAppGdaBundle:Anomalie:creer.html.twig */
class __TwigTemplate_c2decda1219556474b6913a12cbee8e7 extends Twig_Template
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
        echo "<script type=\"text/javascript\" src=\"http://code.jquery.com/jquery-latest.min.js\"></script>
<script type=\"text/javascript\" src=\"http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.14/jquery-ui.min.js\"></script>
<script type=\"text/javascript\" src=\"http://jquery-ui.googlecode.com/svn/trunk/ui/i18n/jquery.ui.datepicker-fr.js\"></script>
<link rel=\"stylesheet\" href=\"http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.14/themes/ui-lightness/jquery-ui.css\" type=\"text/css\" />


<h1>Créer une anomalie</h1>
";
        // line 8
        if ($this->getContext($context, "message")) {
            // line 9
            echo "    <p>";
            echo twig_escape_filter($this->env, $this->getContext($context, "message"), "html", null, true);
            echo "</p>
";
        }
        // line 11
        echo "
<form action=\"\" method=\"post\" ";
        // line 12
        echo $this->env->getExtension('form')->renderEnctype($this->getContext($context, "form"));
        echo ">    
    <!-- Les erreurs générales du formulaire. -->
    ";
        // line 14
        echo $this->env->getExtension('form')->renderErrors($this->getContext($context, "form"));
        echo "
    <div>
        <!-- Génération du label. -->
        ";
        // line 17
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "form"), "dateCreation"), "Date de création");
        echo "    
        <!-- Affichage des erreurs pour ce champ précis. -->
        ";
        // line 19
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getContext($context, "form"), "dateCreation"));
        echo "
        <!-- Génération de l'input. -->
        ";
        // line 21
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "dateCreation"));
        echo "
    </div>
    <!-- Idem pour un autre champ. -->
    <div>
        ";
        // line 25
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "form"), "createur"), "Détectée par");
        echo "
        ";
        // line 26
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getContext($context, "form"), "createur"));
        echo "
        ";
        // line 27
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "createur"));
        echo "
    </div>
    <div>
        ";
        // line 30
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "form"), "projet"), "Version");
        echo "
        ";
        // line 31
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getContext($context, "form"), "projet"));
        echo "
        ";
        // line 32
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "projet"));
        echo "
    </div>   
        <!-- Génération des champs pas encore écrits-->
        ";
        // line 35
        echo $this->env->getExtension('form')->renderRest($this->getContext($context, "form"));
        echo "   
    <div>
        <input type=\"submit\" />
    </div>
    
</form>
<p><a href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("myapp_anomalie_lister"), "html", null, true);
        echo "\">Retour à la liste des anomalies</a></p>


<script> 
    \$(\"form input.date\").datepicker({
        dateFormat: 'dd/mm/yy', 
        firstDay:1
    }).attr(\"readonly\",\"readonly\"); 
</script>";
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
        return array (  102 => 41,  93 => 35,  87 => 32,  83 => 31,  79 => 30,  73 => 27,  69 => 26,  65 => 25,  58 => 21,  53 => 19,  48 => 17,  42 => 14,  37 => 12,  34 => 11,  28 => 9,  26 => 8,  17 => 1,);
    }
}
