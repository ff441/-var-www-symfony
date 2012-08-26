<?php

/* MyAppGdaBundle:Default:index.html.twig */
class __TwigTemplate_e06e6fb994bd36e731ad07ac074b97b2 extends Twig_Template
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

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "    Liste des anomalies - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_gda_body($context, array $blocks = array())
    {
        // line 8
        echo "    <h2>Liste des anomalies</h2>
    
    
    
";
    }

    public function getTemplateName()
    {
        return "MyAppGdaBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 8,  37 => 7,  30 => 4,  27 => 3,);
    }
}
