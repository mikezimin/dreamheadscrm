<?php

/* DreamheadsLeadCRMBundle:Security:login.html.twig */
class __TwigTemplate_cc5d576a5a94b6530deec3cff7c57091 extends Twig_Template
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
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Strict//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd\">
<html>
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\" />
<title>Dreamheads CRM</title>
<link rel=\"SHORTCUT ICON\" href=\"\" />
<link rel=\"stylesheet\" type=\"text/css\" href=\"/css/main.css\" />
<body>
<div class=\"LoginFixWidth\">

<div id=\"login_logo\">
<img src=\"/i/login_logo.png\" />
</div><!-- #login_logo -->

<div id=\"login_form\">
<form action=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("login_check"), "html", null, true);
        echo "\" method=\"post\">

<div id=\"email\">
<label>E-mail:</label><br />
<input type=\"text\" name=\"_username\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["lastEmail"]) ? $context["lastEmail"] : $this->getContext($context, "lastEmail")), "html", null, true);
        echo "\" />
</div>

<div id=\"password\">
<label>Пароль:</label><br />
<input type=\"password\" name=\"_password\" />
</div>

<input type=\"hidden\" name=\"_target_path\" value=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("forms_show"), "html", null, true);
        echo "\" />

<div id=\"submit\">
<input type=\"submit\" value=\"Войти\" />
</div>

</form>

";
        // line 35
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 36
            echo "<div id=\"error\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message"), "html", null, true);
            echo "</div>
";
        }
        // line 38
        echo "

</div><!-- #login_form -->

</div><!-- .LoginFixWidth -->
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "DreamheadsLeadCRMBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 38,  66 => 36,  64 => 35,  53 => 27,  42 => 19,  35 => 15,  19 => 1,);
    }
}
