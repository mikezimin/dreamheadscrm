<?php

/* WebProfilerBundle:Profiler:toolbar_js.html.twig */
class __TwigTemplate_79b73126624491addbd84fdd92d61365 extends Twig_Template
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
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "\" class=\"sf-toolbar\" style=\"display: none\"></div>
";
        // line 2
        $this->env->loadTemplate("WebProfilerBundle:Profiler:base_js.html.twig")->display($context);
        // line 3
        echo "<script type=\"text/javascript\">/*<![CDATA[*/
    (function () {
        ";
        // line 5
        if (("top" == (isset($context["position"]) ? $context["position"] : $this->getContext($context, "position")))) {
            // line 6
            echo "            var sfwdt = document.getElementById('sfwdt";
            echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
            echo "');
            document.body.insertBefore(
                document.body.removeChild(sfwdt),
                document.body.firstChild
            );
        ";
        }
        // line 12
        echo "
        Sfjs.load(
            'sfwdt";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "',
            '";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_wdt", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))), "html", null, true);
        echo "',
            function(xhr, el) {
                el.style.display = -1 !== xhr.responseText.indexOf('sf-toolbarreset') ? 'block' : 'none';
            },
            function(xhr) {
                if (xhr.status !== 0) {
                    confirm('An error occurred while loading the web debug toolbar (' + xhr.status + ': ' + xhr.statusText + ').\\n\\nDo you want to open the profiler?') && (window.location = '";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))), "html", null, true);
        echo "');
                }
            }
        );
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
        return array (  20 => 1,  790 => 469,  787 => 468,  776 => 466,  772 => 465,  768 => 463,  755 => 462,  729 => 457,  726 => 456,  707 => 454,  690 => 453,  686 => 451,  682 => 450,  678 => 449,  674 => 448,  670 => 447,  666 => 446,  663 => 445,  661 => 444,  644 => 443,  633 => 442,  618 => 437,  613 => 435,  609 => 434,  606 => 433,  604 => 432,  590 => 431,  558 => 401,  540 => 398,  523 => 397,  520 => 396,  518 => 395,  513 => 393,  508 => 391,  181 => 87,  173 => 85,  166 => 82,  161 => 80,  156 => 77,  126 => 61,  388 => 160,  385 => 159,  379 => 158,  377 => 157,  370 => 156,  366 => 155,  362 => 153,  360 => 152,  357 => 151,  354 => 150,  352 => 149,  344 => 147,  342 => 146,  339 => 145,  330 => 140,  327 => 139,  320 => 135,  314 => 131,  311 => 130,  308 => 129,  306 => 128,  280 => 114,  275 => 111,  264 => 105,  258 => 103,  254 => 101,  247 => 97,  240 => 93,  234 => 89,  231 => 88,  226 => 86,  221 => 83,  207 => 95,  202 => 73,  193 => 68,  190 => 89,  169 => 56,  107 => 27,  209 => 77,  176 => 61,  170 => 60,  90 => 41,  62 => 25,  56 => 15,  188 => 66,  174 => 58,  167 => 64,  164 => 63,  134 => 54,  356 => 163,  347 => 160,  343 => 159,  340 => 158,  335 => 157,  333 => 141,  325 => 138,  323 => 149,  316 => 145,  309 => 141,  302 => 137,  288 => 129,  281 => 125,  274 => 121,  259 => 109,  252 => 138,  238 => 97,  228 => 87,  217 => 83,  214 => 82,  206 => 78,  203 => 77,  192 => 72,  182 => 64,  148 => 74,  135 => 47,  128 => 45,  110 => 42,  69 => 20,  113 => 40,  53 => 38,  40 => 8,  140 => 42,  97 => 23,  86 => 29,  77 => 18,  49 => 17,  23 => 3,  301 => 125,  295 => 121,  292 => 120,  289 => 119,  287 => 118,  282 => 115,  276 => 86,  273 => 110,  270 => 84,  268 => 107,  263 => 80,  249 => 79,  245 => 96,  230 => 75,  222 => 73,  220 => 72,  215 => 79,  211 => 81,  204 => 94,  198 => 69,  185 => 68,  183 => 63,  177 => 59,  160 => 59,  109 => 51,  103 => 25,  82 => 19,  65 => 23,  38 => 18,  158 => 56,  150 => 75,  144 => 73,  142 => 50,  129 => 45,  125 => 44,  117 => 44,  112 => 52,  87 => 40,  67 => 21,  61 => 18,  47 => 21,  105 => 41,  93 => 42,  76 => 34,  72 => 22,  68 => 30,  27 => 4,  91 => 28,  84 => 27,  94 => 33,  88 => 20,  79 => 35,  59 => 21,  21 => 2,  44 => 11,  31 => 6,  28 => 3,  225 => 88,  216 => 90,  212 => 78,  205 => 71,  201 => 83,  196 => 92,  194 => 62,  191 => 70,  189 => 77,  186 => 76,  180 => 72,  172 => 64,  159 => 61,  154 => 48,  147 => 58,  132 => 47,  127 => 52,  121 => 45,  118 => 29,  114 => 43,  104 => 35,  100 => 24,  78 => 26,  75 => 24,  71 => 23,  58 => 25,  34 => 8,  26 => 3,  24 => 2,  25 => 29,  19 => 1,  70 => 13,  63 => 21,  46 => 14,  22 => 2,  163 => 81,  155 => 50,  152 => 49,  149 => 51,  145 => 57,  139 => 71,  131 => 46,  123 => 35,  120 => 50,  115 => 44,  106 => 35,  101 => 33,  96 => 21,  83 => 28,  80 => 32,  74 => 25,  66 => 19,  55 => 15,  52 => 18,  50 => 15,  43 => 11,  41 => 12,  37 => 7,  35 => 8,  32 => 6,  29 => 6,  184 => 88,  178 => 86,  171 => 84,  165 => 54,  162 => 53,  157 => 56,  153 => 62,  151 => 47,  143 => 43,  138 => 55,  136 => 50,  133 => 31,  130 => 39,  122 => 51,  119 => 57,  116 => 31,  111 => 38,  108 => 41,  102 => 34,  98 => 32,  95 => 34,  92 => 21,  89 => 28,  85 => 29,  81 => 24,  73 => 33,  64 => 11,  60 => 15,  57 => 20,  54 => 19,  51 => 37,  48 => 11,  45 => 13,  42 => 12,  39 => 9,  36 => 7,  33 => 6,  30 => 5,);
    }
}