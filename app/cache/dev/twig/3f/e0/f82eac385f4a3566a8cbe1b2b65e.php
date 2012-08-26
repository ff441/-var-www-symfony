<?php

/* MyAppGdaBundle::layout.html.twig */
class __TwigTemplate_3fe0f82eac385f4a3566a8cbe1b2b65e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'gda_body' => array($this, 'block_gda_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        // line 7
        echo "    ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        // line 11
        echo "
    ";
        // line 13
        echo "    <hr>

    ";
        // line 16
        echo "    ";
        $this->displayBlock('gda_body', $context, $blocks);
        // line 18
        echo "
";
    }

    // line 16
    public function block_gda_body($context, array $blocks = array())
    {
        // line 17
        echo "    ";
    }

    public function getTemplateName()
    {
        return "MyAppGdaBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 17,  56 => 16,  51 => 18,  48 => 16,  44 => 13,  41 => 11,  38 => 10,  31 => 7,  28 => 6,);
    }
}
