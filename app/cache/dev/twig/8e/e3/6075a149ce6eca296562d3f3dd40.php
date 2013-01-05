<?php

/* DreamheadsLeadCRMBundle::base.html.twig */
class __TwigTemplate_8ee36075a149ce6eca296562d3f3dd40 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'menu' => array($this, 'block_menu'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Strict//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd\">
<html>

";
        // line 4
        $context["currentRoute"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "attributes"), "get", array(0 => "_route"), "method");
        // line 5
        $context["params"] = twig_array_merge($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "attributes"), "get", array(0 => "_route_params"), "method"), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "query"), "all", array(), "method"));
        // line 6
        $context["user"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "security"), "getToken", array(), "method"), "getUser", array(), "method");
        // line 7
        echo "
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\" />
<title>";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
<link rel=\"SHORTCUT ICON\" href=\"\" />
<link rel=\"stylesheet\" type=\"text/css\" href=\"/css/main.css\" />

<!-- JQuery -->
<script src=\"http://code.jquery.com/jquery-1.8.3.js\"></script>

<!-- EDate -->
<script src=\"/s/e.js\" type=\"text/javascript\"></script>

<!-- Datepicker -->
<link rel=\"stylesheet\" href=\"/css/Aristo/Aristo.css\" />
<script src=\"http://code.jquery.com/ui/1.9.2/jquery-ui.js\"></script>

<body>
<div class=\"FixWidth\">

<div id=\"top\">
<div id=\"logo\"><a href=\"/\"><img src=\"/i/logo.png\"></a></div>
<div id=\"auth\">
<div id=\"username\">";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email"), "html", null, true);
        echo "</div>
<div id=\"logout\"><a href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("logout"), "html", null, true);
        echo "\">Выйти</a></div>
<div class=\"B\"></div>
</div>
<div class=\"B\"></div>
</div><!-- #top -->

<div id=\"menu\">
";
        // line 37
        $this->displayBlock('menu', $context, $blocks);
        // line 40
        echo "</div>

<div id=\"content\">
";
        // line 43
        $this->displayBlock('content', $context, $blocks);
        // line 44
        echo "</div><!-- #content -->

</div><!-- .FixWidth -->
</body>
</html>";
    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        echo "Dreamheads CRM";
    }

    // line 37
    public function block_menu($context, array $blocks = array())
    {
        // line 38
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("forms_show"), "html", null, true);
        echo "\">Мои формы</a> &nbsp;→&nbsp; ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name"), "html", null, true);
        echo " &nbsp;→&nbsp; Лиды
";
    }

    // line 43
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "DreamheadsLeadCRMBundle::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 43,  100 => 38,  97 => 37,  91 => 9,  83 => 44,  81 => 43,  76 => 40,  74 => 37,  64 => 30,  60 => 29,  37 => 9,  33 => 7,  31 => 6,  29 => 5,  27 => 4,  22 => 1,);
    }
}
