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

/* modules/custom/multistep/templates/course-list-sci.html.twig */
class __TwigTemplate_249c1c280723d594ae556d673a56bfba7988e091f791bcb195815f3f0dfa6556 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["for" => 31, "if" => 34];
        $filters = ["escape" => 2, "striptags" => 41];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['for', 'if'],
                ['escape', 'striptags'],
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
 <div class=\"step\">Step 6 of ";
        // line 2
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["n"] ?? null)), "html", null, true);
        echo "</div>

<div class=\"form-header\">
<h2>You need two years of ";
        // line 5
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["subject"] ?? null)), "html", null, true);
        echo " courses, but three are recommended!</h2></div>

 <div class=\"form-instructions\">
<h4>Select a ";
        // line 8
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["subject"] ?? null)), "html", null, true);
        echo " course or \"I've completed my ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["subject"] ?? null)), "html", null, true);
        echo " requirement\":</h4></div>
<fieldset class=\"form-container js-form-item form-item js-form-wrapper form-group col-auto\" data-drupal-selector=\"edit-prefs\" id=\"edit-prefs\">
      <legend>
    <span class=\"fieldset-legend id=\"select-one\"\">Select one:</span>
  </legend>
  <div class=\"fieldset-wrapper\">
<table style=\"width:100%\">
<tr>
    <th></th>
    <th>Course title</th>
    <th>Description</th>
    <th>A-G Requirement</th>
  </tr>

   <tr>
    <td>
    <div class=\"js-form-item js-form-type-radio radio form-check js-form-item-sci form-item-sci\">
                <input data-drupal-selector=\"edit-sci\" type=\"radio\" id=\"edit-sci\" name=\"sci\" value=\"";
        // line 25
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute(($context["result"] ?? null), "field_course_number", []), 0, [], "array"), "value", [])), "html", null, true);
        echo "\" class=\"form-radio form-check-input\"> 
</div></td>
    <td>I have already completed by Science requirements.</td>
    <td>N/A  </td>
    <td> N/A </td></tr>

";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["results"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
            // line 32
            echo "

   ";
            // line 34
            if ((((($context["isELD"] ?? null) && !twig_in_filter("Fundamentals", $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["result"], "field_other_attributes", []), 0, [], "array"), "entity", []), "label", []))) || (($context["isFund"] ?? null) && twig_in_filter("Fundamentals", $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["result"], "field_other_attributes", []), 0, [], "array"), "entity", []), "label", [])))) || ((($context["isAP"] ?? null) && !twig_in_filter("Fundamentals", $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["result"], "field_other_attributes", []), 0, [], "array"), "entity", []), "label", []))) && !twig_in_filter("Bilingual", $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["result"], "field_other_attributes", []), 0, [], "array"), "entity", []), "label", []))))) {
                // line 35
                echo "    <tr>
    <td>
    <div class=\"js-form-item js-form-type-radio radio form-check js-form-item-sci form-item-sci\">
                <input data-drupal-selector=\"edit-sci\" type=\"radio\" id=\"edit-sci\" name=\"sci\" value=\"";
                // line 38
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($context["result"], "field_course_number", []), 0, [], "array"), "value", [])), "html", null, true);
                echo "\" class=\"form-radio form-check-input\"> 
</div></td>
    <td>";
                // line 40
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($context["result"], "title", []), 0, [], "array"), "value", [])), "html", null, true);
                echo " (";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($context["result"], "field_course_number", []), 0, [], "array"), "value", [])), "html", null, true);
                echo ")</td>
    <td>";
                // line 41
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, strip_tags($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($context["result"], "body", []), 0, [], "array"), "value", []))), "html", null, true);
                echo "  </td>
    <td>
    ";
                // line 43
                if ( !(null === $this->getAttribute($this->getAttribute($context["result"], "field_a_g", []), 0, [], "array"))) {
                    // line 44
                    echo "       
    ";
                    // line 45
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["result"], "field_a_g", []), 0, [], "array"), "entity", []), "label", [])), "html", null, true);
                    echo " </td>
    ";
                } else {
                    // line 47
                    echo "    Does not fulfill A-G requirements </td>
    ";
                }
                // line 49
                echo "  </tr>


  ";
            } elseif (((((( !            // line 52
($context["isAP"] ?? null) &&  !($context["isELD"] ?? null)) &&  !($context["isFund"] ?? null)) && !twig_in_filter("Fundamentals", $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["result"], "field_other_attributes", []), 0, [], "array"), "entity", []), "label", []))) && !twig_in_filter("Bilingual", $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["result"], "field_other_attributes", []), 0, [], "array"), "entity", []), "label", []))) && !twig_in_filter("Advanced Placement", $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["result"], "field_other_attributes", []), 0, [], "array"), "entity", []), "label", [])))) {
                // line 53
                echo "  <tr>
    <td>
    <div class=\"js-form-item js-form-type-radio radio form-check js-form-item-sci form-item-sci\">
                <input data-drupal-selector=\"edit-sci\" type=\"radio\" id=\"edit-sci\" name=\"sci\" value=\"";
                // line 56
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($context["result"], "field_course_number", []), 0, [], "array"), "value", [])), "html", null, true);
                echo "\" class=\"form-radio form-check-input\"> 
</div></td>
    <td>";
                // line 58
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($context["result"], "title", []), 0, [], "array"), "value", [])), "html", null, true);
                echo " (";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($context["result"], "field_course_number", []), 0, [], "array"), "value", [])), "html", null, true);
                echo ")</td>
    <td>";
                // line 59
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, strip_tags($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($context["result"], "body", []), 0, [], "array"), "value", []))), "html", null, true);
                echo "  </td>
    <td>
    ";
                // line 61
                if ( !(null === $this->getAttribute($this->getAttribute($context["result"], "field_a_g", []), 0, [], "array"))) {
                    // line 62
                    echo "    ";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["result"], "field_a_g", []), 0, [], "array"), "entity", []), "label", [])), "html", null, true);
                    echo "

    ";
                } else {
                    // line 65
                    echo "    Does not fulfill A-G requirements
    ";
                }
                // line 67
                echo "  </tr>
  ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "</table>


";
    }

    public function getTemplateName()
    {
        return "modules/custom/multistep/templates/course-list-sci.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 70,  187 => 67,  183 => 65,  176 => 62,  174 => 61,  169 => 59,  163 => 58,  158 => 56,  153 => 53,  151 => 52,  146 => 49,  142 => 47,  137 => 45,  134 => 44,  132 => 43,  127 => 41,  121 => 40,  116 => 38,  111 => 35,  109 => 34,  105 => 32,  101 => 31,  92 => 25,  70 => 8,  64 => 5,  58 => 2,  55 => 1,);
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
 <div class=\"step\">Step 6 of {{n}}</div>

<div class=\"form-header\">
<h2>You need two years of {{ subject }} courses, but three are recommended!</h2></div>

 <div class=\"form-instructions\">
<h4>Select a {{ subject }} course or \"I've completed my {{ subject }} requirement\":</h4></div>
<fieldset class=\"form-container js-form-item form-item js-form-wrapper form-group col-auto\" data-drupal-selector=\"edit-prefs\" id=\"edit-prefs\">
      <legend>
    <span class=\"fieldset-legend id=\"select-one\"\">Select one:</span>
  </legend>
  <div class=\"fieldset-wrapper\">
<table style=\"width:100%\">
<tr>
    <th></th>
    <th>Course title</th>
    <th>Description</th>
    <th>A-G Requirement</th>
  </tr>

   <tr>
    <td>
    <div class=\"js-form-item js-form-type-radio radio form-check js-form-item-sci form-item-sci\">
                <input data-drupal-selector=\"edit-sci\" type=\"radio\" id=\"edit-sci\" name=\"sci\" value=\"{{result.field_course_number[0].value}}\" class=\"form-radio form-check-input\"> 
</div></td>
    <td>I have already completed by Science requirements.</td>
    <td>N/A  </td>
    <td> N/A </td></tr>

{% for result in results %}


   {% if (isELD  and \"Fundamentals\" not in result.field_other_attributes[0].entity.label ) or (isFund and \"Fundamentals\" in result.field_other_attributes[0].entity.label ) or (isAP and \"Fundamentals\" not in result.field_other_attributes[0].entity.label  and \"Bilingual\" not in result.field_other_attributes[0].entity.label)  %}
    <tr>
    <td>
    <div class=\"js-form-item js-form-type-radio radio form-check js-form-item-sci form-item-sci\">
                <input data-drupal-selector=\"edit-sci\" type=\"radio\" id=\"edit-sci\" name=\"sci\" value=\"{{result.field_course_number[0].value}}\" class=\"form-radio form-check-input\"> 
</div></td>
    <td>{{ result.title[0].value}} ({{result.field_course_number[0].value}})</td>
    <td>{{ result.body[0].value|striptags}}  </td>
    <td>
    {% if result.field_a_g[0] is not null %}
       
    {{ result.field_a_g[0].entity.label }} </td>
    {% else %}
    Does not fulfill A-G requirements </td>
    {% endif %}
  </tr>


  {% elseif  ( not isAP and  not isELD and not isFund and \"Fundamentals\" not in result.field_other_attributes[0].entity.label  and \"Bilingual\" not in result.field_other_attributes[0].entity.label  and  \"Advanced Placement\" not in result.field_other_attributes[0].entity.label ) %}
  <tr>
    <td>
    <div class=\"js-form-item js-form-type-radio radio form-check js-form-item-sci form-item-sci\">
                <input data-drupal-selector=\"edit-sci\" type=\"radio\" id=\"edit-sci\" name=\"sci\" value=\"{{result.field_course_number[0].value}}\" class=\"form-radio form-check-input\"> 
</div></td>
    <td>{{ result.title[0].value}} ({{result.field_course_number[0].value}})</td>
    <td>{{ result.body[0].value|striptags}}  </td>
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


", "modules/custom/multistep/templates/course-list-sci.html.twig", "/app/modules/custom/multistep/templates/course-list-sci.html.twig");
    }
}
