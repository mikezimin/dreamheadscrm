<?php

/* DreamheadsLeadCRMBundle:Form:edit.html.twig */
class __TwigTemplate_b4911bcba8d0c6dd15fde15cb791e8e1 extends Twig_Template
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
        echo "Настройки формы";
    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        // line 6
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("forms_show"), "html", null, true);
        echo "\">Мои формы</a> &nbsp;→&nbsp; ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name"), "html", null, true);
        echo " &nbsp;→&nbsp; Настройки
";
    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        // line 10
        echo "

<div class=\"Params EParams\" data-update-url=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("updateForm", array("id" => $this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "id"))), "html", null, true);
        echo "\">

<table>

<tr>
<td></td>
<td>Название формы:</td>
<td><input type=\"string\" name=\"name\" class=\"E String\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name"), "html", null, true);
        echo "\" /></td>

<td></td>
<td>Название в SMS уведомлении<br />(до 5 символов):</td>
<td><input type=\"string\" name=\"smsName\" class=\"E String\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "smsName"), "html", null, true);
        echo "\" /></td></tr>

<tr>
<td><input type=\"checkbox\" class=\"EC Checkbox\" name=\"postMails\" id=\"search_checkbox\" ";
        // line 26
        echo (($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "postMails")) ? ("checked=\"checked\"") : (""));
        echo " /></td>
<td><label for=\"search_checkbox\">Отправлять новые лиды<br /> на E-mail:</label></td>
<td><input type=\"string\" name=\"email\" class=\"E String\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), "html", null, true);
        echo "\" /></td>

<td style=\"padding-left: 24px\"><input type=\"checkbox\" class=\"EC Checkbox\" name=\"postSms\" class=\"Checkbox\" id=\"date_checkbox\" ";
        // line 30
        echo (($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "postSms")) ? ("checked=\"checked\"") : (""));
        echo " /></td>
<td><label for=\"date_checkbox\">Отправлять новые лиды<br />по SMS на телефон:</label></td>
<td><input type=\"string\" name=\"phone\" class=\"E String\" id=\"date_from\" value=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "phone"), "html", null, true);
        echo "\" /></td>
</tr>

<tr>
<td></td>
<td>Текст, если форма<br /> успешно заполнена:</td>
<td colspan=\"4\"><input type=\"string\" name=\"successText\" class=\"E String LongString\" value=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "successText"), "html", null, true);
        echo "\" /></td>
</tr>

<tr>
<td></td>
<td>Текст, если заполнены<br /> не все обязательные поля:</td>
<td colspan=\"4\"><input type=\"string\" name=\"failText\" class=\"E String LongString\" value=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "failText"), "html", null, true);
        echo "\" /></td>
</tr>

</table>
</div><!-- .Params -->


<div class=\"EData\" data-update-url=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("updateField"), "html", null, true);
        echo "\">


<table class=\"ETable\">

<tr>
<th>HTML name атрибут</th>
<th>Название</th>
<th>Название для SMS<br />
уведомлений<br />
(до 5 символов)</th>
<th>Телефон</th>
<th>Обязательное поле</th>
</tr>

";
        // line 66
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["fields"]) ? $context["fields"] : $this->getContext($context, "fields")));
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
            // line 67
            echo "<tr>
<td class=\"E\" data-cell=\"";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "id"), "html", null, true);
            echo ",htmlName\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "htmlName"), "html", null, true);
            echo "</td>
<td class=\"E\" data-cell=\"";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "id"), "html", null, true);
            echo ",name\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "name"), "html", null, true);
            echo "</td>
<td class=\"E\" data-cell=\"";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "id"), "html", null, true);
            echo ",smsName\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "smsName"), "html", null, true);
            echo "</td>
<td class=\"EC C\" data-cell=\"";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "id"), "html", null, true);
            echo ",isPhone\"><input type=\"checkbox\" ";
            if ($this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "isPhone")) {
                echo "checked=\"checked\"";
            }
            echo " /></td>
<td class=\"EC C\" data-cell=\"";
            // line 72
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "id"), "html", null, true);
            echo ",isRequired\"><input type=\"checkbox\" ";
            if ($this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "isRequired")) {
                echo "checked=\"checked\"";
            }
            echo " /></td>
</tr>

";
            // line 75
            if ($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "last")) {
                // line 76
                echo "<!--
<tr>
<td class=\"C Add\" colspan=\"4\"><a href=\"";
                // line 78
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("addField", array("formId" => $this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "id"))), "html", null, true);
                echo "\"><u>Добавить поле</u></a></td>
</tr>
-->
";
            }
            // line 82
            echo "
";
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
        // line 84
        echo "
</table>

<input class=\"EditField\" type=\"text\" />
</div><!-- .EData -->

";
    }

    public function getTemplateName()
    {
        return "DreamheadsLeadCRMBundle:Form:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  223 => 84,  208 => 82,  201 => 78,  197 => 76,  195 => 75,  185 => 72,  177 => 71,  171 => 70,  165 => 69,  159 => 68,  156 => 67,  139 => 66,  121 => 51,  111 => 44,  102 => 38,  93 => 32,  88 => 30,  83 => 28,  78 => 26,  72 => 23,  65 => 19,  55 => 12,  51 => 10,  48 => 9,  39 => 6,  36 => 5,  30 => 3,);
    }
}
