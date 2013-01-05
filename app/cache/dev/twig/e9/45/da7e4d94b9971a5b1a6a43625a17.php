<?php

/* DreamheadsLeadCRMBundle:Temp:logOut.html.twig */
class __TwigTemplate_e945da7e4d94b9971a5b1a6a43625a17 extends Twig_Template
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
        echo "﻿<html>
<head>
<title>Список лидов</title>
</head>
<body>

<pre>";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
        echo "</pre>


</body>
</html>";
    }

    public function getTemplateName()
    {
        return "DreamheadsLeadCRMBundle:Temp:logOut.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 7,  19 => 1,);
    }
}
