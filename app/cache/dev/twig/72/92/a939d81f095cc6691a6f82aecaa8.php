<?php

/* DreamheadsLeadCRMBundle:Lead:showList.html.twig */
class __TwigTemplate_7292a939d81f095cc6691a6f82aecaa8 extends Twig_Template
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
        echo "Список лидов";
    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        // line 6
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("forms_show"), "html", null, true);
        echo "\">Мои формы</a> &nbsp;→&nbsp; ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name"), "html", null, true);
        echo " &nbsp;→&nbsp; Лиды
";
    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        // line 10
        echo "
<script>

\t\$.datepicker.regional['ru'] = { 
\t\tcloseText: 'Закрыть', 
\t\tprevText: '&#x3c;Пред', 
\t\tnextText: 'След&#x3e;', 
\t\tcurrentText: 'Сегодня', 
\t\tmonthNames: ['Январь','Февраль','Март','Апрель','Май','Июнь', 
\t\t'Июль','Август','Сентябрь','Октябрь','Ноябрь','Декабрь'], 
\t\tmonthNamesShort: ['Янв','Фев','Мар','Апр','Май','Июн','Июл','Авг','Сен','Окт','Ноя','Дек'], 
\t\tdayNames: ['воскресенье','понедельник','вторник','среда','четверг','пятница','суббота'], 
\t\tdayNamesShort: ['вск','пнд','втр','срд','чтв','птн','сбт'], 
\t\tdayNamesMin: ['Вс','Пн','Вт','Ср','Чт','Пт','Сб'], 
\t\tdateFormat: 'dd.mm.yy', 
\t\tfirstDay: 1, 
\t\tisRTL: false 
\t}; 
\t\$.datepicker.setDefaults(\$.datepicker.regional['ru']); 

\t\$(function() {
\t\t\$(\".Filters .Date\").datepicker();\t
\t});
\t
</script>

<div class=\"Filters\">
<form action=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("leads_show", array("formId" => $this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "id"))), "html", null, true);
        echo "\" method=\"get\">
<input type=\"hidden\" name=\"order\" value=\"";
        // line 38
        echo twig_escape_filter($this->env, (isset($context["order"]) ? $context["order"] : $this->getContext($context, "order")), "html", null, true);
        echo "\" />
<input type=\"hidden\" name=\"orderBy\" value=\"";
        // line 39
        echo twig_escape_filter($this->env, (isset($context["orderBy"]) ? $context["orderBy"] : $this->getContext($context, "orderBy")), "html", null, true);
        echo "\" />
<table>

<tr><td><input type=\"checkbox\" class=\"Checkbox\" name=\"filterByText\" id=\"search_checkbox\" ";
        // line 42
        echo (((!(null === (isset($context["filterByText"]) ? $context["filterByText"] : $this->getContext($context, "filterByText"))))) ? ("checked=\"checked\"") : (""));
        echo " /></td>
<td><label for=\"search_checkbox\">Искать текст:</label></td>
<td><input type=\"string\" name=\"text\" class=\"String\" value=\"";
        // line 44
        echo twig_escape_filter($this->env, (((!(null === (isset($context["text"]) ? $context["text"] : $this->getContext($context, "text"))))) ? ((isset($context["text"]) ? $context["text"] : $this->getContext($context, "text"))) : ("")), "html", null, true);
        echo "\" /></td>

<td style=\"padding-left: 24px\"><input type=\"checkbox\" name=\"filterByDate\" class=\"Checkbox\" id=\"date_checkbox\" ";
        // line 46
        echo (((!(null === (isset($context["filterByDate"]) ? $context["filterByDate"] : $this->getContext($context, "filterByDate"))))) ? ("checked=\"checked\"") : (""));
        echo " /></td>
<td><label for=\"date_checkbox\">Фильтровать по дате:</label></td>
<td><input type=\"string\" name=\"from\" id=\"date_from\" class=\"Date\" value=\"";
        // line 48
        echo twig_escape_filter($this->env, (((!(null === (isset($context["from"]) ? $context["from"] : $this->getContext($context, "from"))))) ? ((isset($context["from"]) ? $context["from"] : $this->getContext($context, "from"))) : ("")), "html", null, true);
        echo "\" /> — 
<input type=\"string\" name=\"to\" id=\"date_to\" class=\"Date\" value=\"";
        // line 49
        echo twig_escape_filter($this->env, (((!(null === (isset($context["to"]) ? $context["to"] : $this->getContext($context, "to"))))) ? ((isset($context["to"]) ? $context["to"] : $this->getContext($context, "to"))) : ("")), "html", null, true);
        echo "\" /></td>

<td style=\"padding-left: 24px\"><input type=\"submit\" class=\"Submit\" value=\"Поиск\" /></td></tr>
</table>
</form>
</div><!-- .Filters -->


<div class=\"EData\" data-update-url=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("updateLead"), "html", null, true);
        echo "\">

";
        // line 59
        $context["newOrder"] = ((((isset($context["order"]) ? $context["order"] : $this->getContext($context, "order")) == "asc")) ? ("desc") : ("asc"));
        // line 60
        echo "
<table class=\"ETable\">
<tr>
";
        // line 63
        if (((isset($context["orderBy"]) ? $context["orderBy"] : $this->getContext($context, "orderBy")) == "id")) {
            // line 64
            echo "<th class=\"Selected\"><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["currentRoute"]) ? $context["currentRoute"] : $this->getContext($context, "currentRoute")), twig_array_merge((isset($context["params"]) ? $context["params"] : $this->getContext($context, "params")), array("orderBy" => "id", "order" => (isset($context["newOrder"]) ? $context["newOrder"] : $this->getContext($context, "newOrder"))))), "html", null, true);
            echo "\">ID ";
            echo ((((isset($context["order"]) ? $context["order"] : $this->getContext($context, "order")) == "asc")) ? ("↑") : ("↓"));
            echo "</a></th>
";
        } else {
            // line 66
            echo "<th><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["currentRoute"]) ? $context["currentRoute"] : $this->getContext($context, "currentRoute")), twig_array_merge((isset($context["params"]) ? $context["params"] : $this->getContext($context, "params")), array("orderBy" => "id", "order" => "asc"))), "html", null, true);
            echo "\">ID</a></th>
";
        }
        // line 68
        if (((isset($context["orderBy"]) ? $context["orderBy"] : $this->getContext($context, "orderBy")) == "time")) {
            // line 69
            echo "<th class=\"Selected\"><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["currentRoute"]) ? $context["currentRoute"] : $this->getContext($context, "currentRoute")), twig_array_merge((isset($context["params"]) ? $context["params"] : $this->getContext($context, "params")), array("orderBy" => "time", "order" => (isset($context["newOrder"]) ? $context["newOrder"] : $this->getContext($context, "newOrder"))))), "html", null, true);
            echo "\">Время ";
            echo ((((isset($context["order"]) ? $context["order"] : $this->getContext($context, "order")) == "asc")) ? ("↑") : ("↓"));
            echo "</a></th>
";
        } else {
            // line 71
            echo "<th><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["currentRoute"]) ? $context["currentRoute"] : $this->getContext($context, "currentRoute")), twig_array_merge((isset($context["params"]) ? $context["params"] : $this->getContext($context, "params")), array("orderBy" => "time", "order" => "asc"))), "html", null, true);
            echo "\">Время</a></th>
";
        }
        // line 73
        echo "
";
        // line 74
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["fields"]) ? $context["fields"] : $this->getContext($context, "fields")));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 75
            echo "<th>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "name"), "html", null, true);
            echo "</th>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 77
        echo "
<th>Регион</th>
<th>Не лид</th>
<th>Комментарий</th>
</tr>

";
        // line 83
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["leads"]) ? $context["leads"] : $this->getContext($context, "leads")));
        foreach ($context['_seq'] as $context["_key"] => $context["lead"]) {
            // line 84
            echo "<tr ";
            if ($this->getAttribute((isset($context["lead"]) ? $context["lead"] : $this->getContext($context, "lead")), "isBad")) {
                echo "class=\"Bad\"";
            }
            echo ">
<td class=\"C\">";
            // line 85
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lead"]) ? $context["lead"] : $this->getContext($context, "lead")), "id"), "html", null, true);
            echo "</td>
<td class=\"C\">";
            // line 86
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["lead"]) ? $context["lead"] : $this->getContext($context, "lead")), "time"), "d.m.Y H:i:s"), "html", null, true);
            echo "</td>


";
            // line 89
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["fields"]) ? $context["fields"] : $this->getContext($context, "fields")));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 90
                echo "<td>
";
                // line 91
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["lead"]) ? $context["lead"] : $this->getContext($context, "lead")), "couples"));
                foreach ($context['_seq'] as $context["_key"] => $context["couple"]) {
                    // line 92
                    echo "\t";
                    if (($this->getAttribute((isset($context["couple"]) ? $context["couple"] : $this->getContext($context, "couple")), "field") == (isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")))) {
                        // line 93
                        echo "\t\t";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["couple"]) ? $context["couple"] : $this->getContext($context, "couple")), "value"), "html", null, true);
                        echo "
\t";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['couple'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 96
                echo "</td>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 98
            echo "
<td>";
            // line 99
            if ((!(null === $this->getAttribute((isset($context["lead"]) ? $context["lead"] : $this->getContext($context, "lead")), "region")))) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["lead"]) ? $context["lead"] : $this->getContext($context, "lead")), "region"), "name"), "html", null, true);
            }
            echo "</td>
<td class=\"EC C\" data-cell=\"";
            // line 100
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lead"]) ? $context["lead"] : $this->getContext($context, "lead")), "id"), "html", null, true);
            echo ",isBad\" data-checked-row-class=\"Bad\"><input type=\"checkbox\" ";
            if ($this->getAttribute((isset($context["lead"]) ? $context["lead"] : $this->getContext($context, "lead")), "isBad")) {
                echo "checked=\"checked\"";
            }
            echo " /></td>
<td class=\"E\" data-cell=\"";
            // line 101
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lead"]) ? $context["lead"] : $this->getContext($context, "lead")), "id"), "html", null, true);
            echo ",comment\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lead"]) ? $context["lead"] : $this->getContext($context, "lead")), "comment"), "html", null, true);
            echo "</td>

</tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lead'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 105
        echo "
</table>

<input class=\"EditField\" type=\"text\" />
</div><!-- .EData -->

";
    }

    public function getTemplateName()
    {
        return "DreamheadsLeadCRMBundle:Lead:showList.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  273 => 105,  261 => 101,  253 => 100,  247 => 99,  244 => 98,  237 => 96,  227 => 93,  224 => 92,  220 => 91,  217 => 90,  213 => 89,  207 => 86,  203 => 85,  196 => 84,  192 => 83,  184 => 77,  175 => 75,  171 => 74,  168 => 73,  162 => 71,  154 => 69,  152 => 68,  146 => 66,  138 => 64,  136 => 63,  131 => 60,  129 => 59,  124 => 57,  113 => 49,  109 => 48,  104 => 46,  99 => 44,  94 => 42,  88 => 39,  84 => 38,  80 => 37,  51 => 10,  48 => 9,  39 => 6,  36 => 5,  30 => 3,);
    }
}
