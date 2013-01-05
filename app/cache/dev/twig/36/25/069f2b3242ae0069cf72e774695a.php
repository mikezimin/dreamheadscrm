<?php

/* DreamheadsLeadCRMBundle:Form:showList.html.twig */
class __TwigTemplate_3625069f2b3242ae0069cf72e774695a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("DreamheadsLeadCRMBundle::base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'menu' => array($this, 'block_menu'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "DreamheadsLeadCRMBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Мои формы";
    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        // line 6
        echo "Мои формы
";
    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        // line 10
        echo "
<table class=\"ETable\">

<tr><th>Имя</th><th>Поля</th><th colspan=\"2\">Операции</th></tr>

";
        // line 15
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["forms"]) ? $context["forms"] : $this->getContext($context, "forms")));
        foreach ($context['_seq'] as $context["_key"] => $context["form"]) {
            // line 16
            echo "<tr>
<td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name"), "html", null, true);
            echo "</td>

<td>
";
            // line 20
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fields"));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 21
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "name"), "html", null, true);
                if ((!$this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "last"))) {
                    echo "<br />";
                }
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 23
            echo "</td>

<td class=\"C\"><a class=\"Leads\" href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("leads_show", array("formId" => $this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "id"))), "html", null, true);
            echo "\">Лиды</a></td>
<td class=\"C\"><a class=\"Settings\" href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editForm", array("id" => $this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "id"))), "html", null, true);
            echo "\">Настройки</a></td>

</tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['form'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 30
        echo "
</table>

";
    }

    public function getTemplateName()
    {
        return "DreamheadsLeadCRMBundle:Form:showList.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 30,  109 => 26,  105 => 25,  101 => 23,  84 => 21,  67 => 20,  61 => 17,  58 => 16,  54 => 15,  47 => 10,  44 => 9,  39 => 6,  36 => 5,  30 => 3,);
    }
}
