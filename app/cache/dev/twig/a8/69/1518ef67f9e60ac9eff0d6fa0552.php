<?php

/* WebProfilerBundle:Profiler:toolbar_js.html.twig */
class __TwigTemplate_a8691518ef67f9e60ac9eff0d6fa0552 extends Twig_Template
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
        echo "<div id=\"sfwdt";
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "\" style=\"display: none\"></div>
<script type=\"text/javascript\">/*<![CDATA[*/
    (function () {
        var wdt, xhr;
        wdt = document.getElementById('sfwdt";
        // line 5
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "');
        if (window.XMLHttpRequest) {
            xhr = new XMLHttpRequest();
        } else {
            xhr = new ActiveXObject('Microsoft.XMLHTTP');
        }
        xhr.open('GET', '";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_wdt", array("token" => $this->getContext($context, "token"))), "html", null, true);
        echo "', true);
        xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
        xhr.onreadystatechange = function(state) {
            if (4 === xhr.readyState && 200 === xhr.status && -1 !== xhr.responseText.indexOf('sf-toolbarreset')) {
                wdt.innerHTML = xhr.responseText;
                wdt.style.display = 'block';
            }
        };
        xhr.send('');
    })();
/*]]>*/</script>
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_js.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 16,  55 => 14,  53 => 13,  42 => 10,  34 => 11,  95 => 21,  88 => 19,  78 => 17,  75 => 16,  67 => 12,  49 => 12,  25 => 5,  22 => 3,  20 => 2,  224 => 96,  215 => 90,  211 => 88,  204 => 84,  200 => 83,  195 => 80,  193 => 79,  190 => 78,  188 => 77,  185 => 76,  179 => 72,  177 => 71,  171 => 67,  162 => 63,  158 => 61,  156 => 60,  146 => 55,  142 => 54,  137 => 51,  135 => 50,  131 => 48,  120 => 45,  117 => 44,  103 => 36,  99 => 34,  47 => 19,  39 => 9,  32 => 11,  17 => 1,  92 => 20,  86 => 6,  79 => 40,  77 => 28,  57 => 9,  33 => 7,  29 => 5,  24 => 3,  19 => 2,  126 => 46,  124 => 50,  121 => 49,  114 => 35,  107 => 11,  104 => 24,  98 => 8,  87 => 64,  85 => 49,  71 => 14,  69 => 35,  64 => 15,  60 => 30,  36 => 10,  23 => 4,  21 => 1,  59 => 23,  56 => 29,  48 => 16,  44 => 11,  41 => 7,  38 => 6,  31 => 4,  28 => 6,  161 => 58,  153 => 59,  147 => 50,  143 => 49,  139 => 48,  133 => 45,  129 => 47,  125 => 43,  118 => 39,  113 => 43,  108 => 35,  102 => 32,  97 => 22,  94 => 31,  89 => 20,  82 => 19,  74 => 27,  70 => 26,  66 => 17,  62 => 24,  58 => 15,  54 => 14,  51 => 18,  46 => 14,  40 => 7,  37 => 8,  30 => 4,  27 => 3,);
    }
}
