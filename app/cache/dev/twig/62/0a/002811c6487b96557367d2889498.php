<?php

/* TwigBundle::layout.html.twig */
class __TwigTemplate_620a002811c6487b96557367d2889498 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\"/>
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/framework/css/exception_layout.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
        <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/framework/css/exception.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
    </head>
    <body>
        <div id=\"content\">
            <div class=\"header clear_fix\">
                <div class=\"header_logo\">
                    <img src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/framework/images/logo_symfony.gif"), "html", null, true);
        echo "\" alt=\"Symfony\" />
                </div>

                <div class=\"search\">
                  <form method=\"get\" action=\"http://symfony.com/search\">
                    <div class=\"form_row\">

                      <label for=\"search_id\">
                          <img src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/framework/images/grey_magnifier.png"), "html", null, true);
        echo "\" alt=\"Search on Symfony website\" />
                      </label>

                      <input name=\"q\" id=\"search_id\" type=\"search\" placeholder=\"Search on Symfony website\" />

                      <button type=\"submit\">
                        <span class=\"border_l\">
                          <span class=\"border_r\">
                            <span class=\"btn_bg\">OK</span>
                          </span>
                        </span>
                      </button>
                    </div>
                   </form>
                </div>
            </div>

            ";
        // line 39
        $this->displayBlock('body', $context, $blocks);
        // line 40
        echo "        </div>
    </body>
</html>
";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "";
    }

    // line 39
    public function block_body($context, array $blocks = array())
    {
        echo "";
    }

    public function getTemplateName()
    {
        return "TwigBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 39,  86 => 6,  79 => 40,  77 => 39,  57 => 22,  33 => 7,  29 => 6,  24 => 4,  19 => 1,  126 => 51,  124 => 50,  121 => 49,  114 => 35,  107 => 11,  104 => 10,  98 => 8,  87 => 64,  85 => 49,  71 => 37,  69 => 35,  64 => 32,  60 => 30,  36 => 10,  23 => 2,  21 => 1,  59 => 17,  56 => 29,  48 => 16,  44 => 8,  41 => 7,  38 => 13,  31 => 8,  28 => 6,  161 => 58,  153 => 53,  147 => 50,  143 => 49,  139 => 48,  133 => 45,  129 => 52,  125 => 43,  118 => 39,  113 => 37,  108 => 35,  102 => 32,  97 => 30,  94 => 29,  89 => 23,  82 => 22,  74 => 19,  70 => 18,  66 => 17,  62 => 16,  58 => 15,  54 => 14,  51 => 18,  46 => 14,  40 => 10,  37 => 8,  30 => 4,  27 => 3,);
    }
}
