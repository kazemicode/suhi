<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* modules/custom/multistep/templates/course-list-math.html.twig */
class __TwigTemplate_a7b9509ac207e04666faf9623e91a4bc49f445eabc105a8b53ca1c7012769905 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["for" => 21, "if" => 22];
        $filters = ["escape" => 2, "raw" => 30, "striptags" => 30];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['for', 'if'],
                ['escape', 'raw', 'striptags'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "
 <div class=\"step\">Step 4 of ";
        // line 2
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["n"] ?? null)), "html", null, true);
        echo "</div>

<div class=\"form-header\">
<h2>Moving on to <big>";
        // line 5
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["subject"] ?? null)), "html", null, true);
        echo "</big> courses. . .</h2></div>

<fieldset class=\"form-container js-form-item form-item js-form-wrapper form-group col-auto\" data-drupal-selector=\"edit-prefs\" id=\"edit-prefs\">
      <legend>
    <span class=\"fieldset-legend form-instructions\" id=\"select-one\"><h4>📏 Select a course to fulfill your <span class=\"name\">";
        // line 9
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (($context["grade"] ?? null) + 1), "html", null, true);
        echo "th grade ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["subject"] ?? null)), "html", null, true);
        echo "</span> requirement:</h4></span>
  </legend>
  <div class=\"fieldset-wrapper\">

<table style=\"width:80%\" class=\"table\">
<tr>
    <th></th>
    <th>Course title</th>
    <th>Description</th>
    <th>A-G</th>
  </tr>

";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["results"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
            // line 22
            echo "   ";
            if ((((($context["isELD"] ?? null) && !twig_in_filter("Fundamentals", $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["result"], "field_other_attributes", []), 0, [], "array"), "entity", []), "label", []))) || (($context["isFund"] ?? null) && twig_in_filter("Fundamentals", $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["result"], "field_other_attributes", []), 0, [], "array"), "entity", []), "label", [])))) || ((($context["isAP"] ?? null) && !twig_in_filter("Fundamentals", $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["result"], "field_other_attributes", []), 0, [], "array"), "entity", []), "label", []))) && !twig_in_filter("Bilingual", $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["result"], "field_other_attributes", []), 0, [], "array"), "entity", []), "label", []))))) {
                // line 23
                echo "    <tr>
    <td>

    <div class=\"js-form-item js-form-type-radio radio form-check js-form-item-math form-item-math\">
                <input data-drupal-selector=\"edit-math\" type=\"radio\" id=\"edit-math\" name=\"math\" value=\"";
                // line 27
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($context["result"], "field_course_number", []), 0, [], "array"), "value", [])), "html", null, true);
                echo "\" class=\"form-radio form-check-input\"> 
</div></td>
    <td>";
                // line 29
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($context["result"], "title", []), 0, [], "array"), "value", [])), "html", null, true);
                echo " (";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($context["result"], "field_course_number", []), 0, [], "array"), "value", [])), "html", null, true);
                echo ")</td>
    <td>";
                // line 30
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(strip_tags($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($context["result"], "body", []), 0, [], "array"), "value", []))));
                echo "  </td>
    <td>
    ";
                // line 32
                if ( !(null === $this->getAttribute($this->getAttribute($context["result"], "field_a_g", []), 0, [], "array"))) {
                    // line 33
                    echo "       
    ";
                    // line 34
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["result"], "field_a_g", []), 0, [], "array"), "entity", []), "label", [])), "html", null, true);
                    echo " </td>
    ";
                } else {
                    // line 36
                    echo "    Does not fulfill A-G requirements
    ";
                }
                // line 38
                echo "  </tr>


  ";
            } elseif (((((( !            // line 41
($context["isAP"] ?? null) &&  !($context["isELD"] ?? null)) &&  !($context["isFund"] ?? null)) && !twig_in_filter("Fundamentals", $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["result"], "field_other_attributes", []), 0, [], "array"), "entity", []), "label", []))) && !twig_in_filter("Bilingual", $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["result"], "field_other_attributes", []), 0, [], "array"), "entity", []), "label", []))) && !twig_in_filter("Advanced Placement", $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["result"], "field_other_attributes", []), 0, [], "array"), "entity", []), "label", [])))) {
                // line 42
                echo "  <tr> <td>
    <div class=\"js-form-item js-form-type-radio radio form-check js-form-item-math form-item-math\">
                <input data-drupal-selector=\"edit-math\" type=\"radio\" id=\"edit-math\" name=\"math\" value=\"";
                // line 44
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($context["result"], "field_course_number", []), 0, [], "array"), "value", [])), "html", null, true);
                echo "\" class=\"form-radio form-check-input\"> 
</div></td>
    <td>";
                // line 46
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($context["result"], "title", []), 0, [], "array"), "value", [])), "html", null, true);
                echo " (";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($context["result"], "field_course_number", []), 0, [], "array"), "value", [])), "html", null, true);
                echo ")</td>
    <td>";
                // line 47
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(strip_tags($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($context["result"], "body", []), 0, [], "array"), "value", []))));
                echo "  </td>
    <td>
    ";
                // line 49
                if ( !(null === $this->getAttribute($this->getAttribute($context["result"], "field_a_g", []), 0, [], "array"))) {
                    // line 50
                    echo "    ";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["result"], "field_a_g", []), 0, [], "array"), "entity", []), "label", [])), "html", null, true);
                    echo "

    ";
                } else {
                    // line 53
                    echo "    Does not fulfill A-G requirements
    ";
                }
                // line 55
                echo "  </tr>
  ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "</table>


";
    }

    public function getTemplateName()
    {
        return "modules/custom/multistep/templates/course-list-math.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 58,  171 => 55,  167 => 53,  160 => 50,  158 => 49,  153 => 47,  147 => 46,  142 => 44,  138 => 42,  136 => 41,  131 => 38,  127 => 36,  122 => 34,  119 => 33,  117 => 32,  112 => 30,  106 => 29,  101 => 27,  95 => 23,  92 => 22,  88 => 21,  71 => 9,  64 => 5,  58 => 2,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("
 <div class=\"step\">Step 4 of {{n}}</div>

<div class=\"form-header\">
<h2>Moving on to <big>{{ subject }}</big> courses. . .</h2></div>

<fieldset class=\"form-container js-form-item form-item js-form-wrapper form-group col-auto\" data-drupal-selector=\"edit-prefs\" id=\"edit-prefs\">
      <legend>
    <span class=\"fieldset-legend form-instructions\" id=\"select-one\"><h4>📏 Select a course to fulfill your <span class=\"name\">{{ grade + 1 }}th grade {{ subject }}</span> requirement:</h4></span>
  </legend>
  <div class=\"fieldset-wrapper\">

<table style=\"width:80%\" class=\"table\">
<tr>
    <th></th>
    <th>Course title</th>
    <th>Description</th>
    <th>A-G</th>
  </tr>

{% for result in results %}
   {% if (isELD  and \"Fundamentals\" not in result.field_other_attributes[0].entity.label ) or (isFund and \"Fundamentals\" in result.field_other_attributes[0].entity.label ) or (isAP and \"Fundamentals\" not in result.field_other_attributes[0].entity.label  and \"Bilingual\" not in result.field_other_attributes[0].entity.label)  %}
    <tr>
    <td>

    <div class=\"js-form-item js-form-type-radio radio form-check js-form-item-math form-item-math\">
                <input data-drupal-selector=\"edit-math\" type=\"radio\" id=\"edit-math\" name=\"math\" value=\"{{result.field_course_number[0].value}}\" class=\"form-radio form-check-input\"> 
</div></td>
    <td>{{ result.title[0].value}} ({{result.field_course_number[0].value}})</td>
    <td>{{ result.body[0].value|striptags|raw }}  </td>
    <td>
    {% if result.field_a_g[0] is not null %}
       
    {{ result.field_a_g[0].entity.label }} </td>
    {% else %}
    Does not fulfill A-G requirements
    {% endif %}
  </tr>


  {% elseif  ( not isAP and  not isELD and not isFund and \"Fundamentals\" not in result.field_other_attributes[0].entity.label  and \"Bilingual\" not in result.field_other_attributes[0].entity.label  and  \"Advanced Placement\" not in result.field_other_attributes[0].entity.label ) %}
  <tr> <td>
    <div class=\"js-form-item js-form-type-radio radio form-check js-form-item-math form-item-math\">
                <input data-drupal-selector=\"edit-math\" type=\"radio\" id=\"edit-math\" name=\"math\" value=\"{{result.field_course_number[0].value}}\" class=\"form-radio form-check-input\"> 
</div></td>
    <td>{{ result.title[0].value}} ({{result.field_course_number[0].value}})</td>
    <td>{{ result.body[0].value|striptags|raw }}  </td>
    <td>
    {% if result.field_a_g[0] is not null %}
    {{ result.field_a_g[0].entity.label }}

    {% else %}
    Does not fulfill A-G requirements
    {% endif %}
  </tr>
  {% endif %}
{% endfor %}
</table>


", "modules/custom/multistep/templates/course-list-math.html.twig", "/home/sarkaz/kazemicode.org/suhi/modules/custom/multistep/templates/course-list-math.html.twig");
    }
}
