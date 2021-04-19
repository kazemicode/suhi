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
        $tags = ["if" => 9, "for" => 30];
        $filters = ["escape" => 2, "raw" => 40, "striptags" => 40];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
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
 <div class=\"step\">Step 6 of ";
        // line 2
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["n"] ?? null)), "html", null, true);
        echo "</div>

<div class=\"form-header\">
<h2>You need two years of <big>";
        // line 5
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["subject"] ?? null)), "html", null, true);
        echo "</big> courses, but three are recommended!</h2></div>

<fieldset class=\"form-container js-form-item form-item js-form-wrapper form-group col-auto\" data-drupal-selector=\"edit-prefs\" id=\"edit-prefs\">
      <legend>
    <span class=\"fieldset-legend form-instructions\" id=\"select-one\"><h4>🔬 Select a <span class=\"name\">";
        // line 9
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["subject"] ?? null)), "html", null, true);
        echo "</span> course";
        if (((($context["grade"] ?? null) + 1) > 10)) {
            echo " OR that you've completed the requirement";
        }
        echo ":</h4></span>
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
        // line 19
        if (((($context["grade"] ?? null) + 1) > 10)) {
            // line 20
            echo "     <tr>
      <td>
      <div class=\"js-form-item js-form-type-radio radio form-check js-form-item-sci form-item-sci\">
                  <input data-drupal-selector=\"edit-sci\" type=\"radio\" id=\"edit-sci\" name=\"sci\" value=\"0\" class=\"form-radio form-check-input\"> 
    </div>
    </td>
      <td><b>Science requirement already met</b></td>
      <td><b>I have passed 2 years of science: Biology AND Chemistry/Physics</b></td>
      <td> N/A </td></tr>
";
        }
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["results"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
            // line 31
            echo "
 ";
            // line 32
            if (($this->getAttribute($this->getAttribute($this->getAttribute($context["result"], "field_course_number", []), 0, [], "array"), "value", []) != 92710)) {
                // line 33
                echo "   ";
                if ((((($context["isELD"] ?? null) && !twig_in_filter("Fundamentals", $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["result"], "field_other_attributes", []), 0, [], "array"), "entity", []), "label", []))) || (($context["isFund"] ?? null) && twig_in_filter("Fundamentals", $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["result"], "field_other_attributes", []), 0, [], "array"), "entity", []), "label", [])))) || ((($context["isAP"] ?? null) && !twig_in_filter("Fundamentals", $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["result"], "field_other_attributes", []), 0, [], "array"), "entity", []), "label", []))) && !twig_in_filter("Bilingual", $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["result"], "field_other_attributes", []), 0, [], "array"), "entity", []), "label", []))))) {
                    // line 34
                    echo "    <tr>
    <td>
    <div class=\"js-form-item js-form-type-radio radio form-check js-form-item-sci form-item-sci\">
                <input data-drupal-selector=\"edit-sci\" type=\"radio\" id=\"edit-sci\" name=\"sci\" value=\"";
                    // line 37
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($context["result"], "field_course_number", []), 0, [], "array"), "value", [])), "html", null, true);
                    echo "\" class=\"form-radio form-check-input\"> 
</div></td>
    <td>";
                    // line 39
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($context["result"], "title", []), 0, [], "array"), "value", [])), "html", null, true);
                    echo " (";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($context["result"], "field_course_number", []), 0, [], "array"), "value", [])), "html", null, true);
                    echo ")</td>
    <td>";
                    // line 40
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(strip_tags($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($context["result"], "body", []), 0, [], "array"), "value", []))));
                    echo "  </td>
    <td>
    ";
                    // line 42
                    if ( !(null === $this->getAttribute($this->getAttribute($context["result"], "field_a_g", []), 0, [], "array"))) {
                        // line 43
                        echo "       
    ";
                        // line 44
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["result"], "field_a_g", []), 0, [], "array"), "entity", []), "label", [])), "html", null, true);
                        echo " </td>
    ";
                    } else {
                        // line 46
                        echo "    Does not fulfill A-G requirements </td>
    ";
                    }
                    // line 48
                    echo "  </tr>


  ";
                } elseif (((((( !                // line 51
($context["isAP"] ?? null) &&  !($context["isELD"] ?? null)) &&  !($context["isFund"] ?? null)) && !twig_in_filter("Fundamentals", $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["result"], "field_other_attributes", []), 0, [], "array"), "entity", []), "label", []))) && !twig_in_filter("Bilingual", $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["result"], "field_other_attributes", []), 0, [], "array"), "entity", []), "label", []))) && !twig_in_filter("Advanced Placement", $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["result"], "field_other_attributes", []), 0, [], "array"), "entity", []), "label", [])))) {
                    // line 52
                    echo "  <tr>
    <td>
    <div class=\"js-form-item js-form-type-radio radio form-check js-form-item-sci form-item-sci\">
                <input data-drupal-selector=\"edit-sci\" type=\"radio\" id=\"edit-sci\" name=\"sci\" value=\"";
                    // line 55
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($context["result"], "field_course_number", []), 0, [], "array"), "value", [])), "html", null, true);
                    echo "\" class=\"form-radio form-check-input\"> 
</div></td>
    <td>";
                    // line 57
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($context["result"], "title", []), 0, [], "array"), "value", [])), "html", null, true);
                    echo " (";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($context["result"], "field_course_number", []), 0, [], "array"), "value", [])), "html", null, true);
                    echo ")</td>
    <td>";
                    // line 58
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(strip_tags($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($context["result"], "body", []), 0, [], "array"), "value", []))));
                    echo "  </td>
    <td>
    ";
                    // line 60
                    if ( !(null === $this->getAttribute($this->getAttribute($context["result"], "field_a_g", []), 0, [], "array"))) {
                        // line 61
                        echo "    ";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["result"], "field_a_g", []), 0, [], "array"), "entity", []), "label", [])), "html", null, true);
                        echo "

    ";
                    } else {
                        // line 64
                        echo "    Does not fulfill A-G requirements
    ";
                    }
                    // line 66
                    echo "  </tr>
  ";
                }
                // line 68
                echo " ";
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
        return array (  201 => 70,  194 => 68,  190 => 66,  186 => 64,  179 => 61,  177 => 60,  172 => 58,  166 => 57,  161 => 55,  156 => 52,  154 => 51,  149 => 48,  145 => 46,  140 => 44,  137 => 43,  135 => 42,  130 => 40,  124 => 39,  119 => 37,  114 => 34,  111 => 33,  109 => 32,  106 => 31,  102 => 30,  90 => 20,  88 => 19,  71 => 9,  64 => 5,  58 => 2,  55 => 1,);
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
<h2>You need two years of <big>{{ subject }}</big> courses, but three are recommended!</h2></div>

<fieldset class=\"form-container js-form-item form-item js-form-wrapper form-group col-auto\" data-drupal-selector=\"edit-prefs\" id=\"edit-prefs\">
      <legend>
    <span class=\"fieldset-legend form-instructions\" id=\"select-one\"><h4>🔬 Select a <span class=\"name\">{{ subject }}</span> course{% if (grade+1) > 10 %} OR that you've completed the requirement{% endif %}:</h4></span>
  </legend>
  <div class=\"fieldset-wrapper\">
<table style=\"width:80%\" class=\"table\">
<tr>
    <th></th>
    <th>Course title</th>
    <th>Description</th>
    <th>A-G</th>
  </tr>
{% if (grade+1) > 10 %}
     <tr>
      <td>
      <div class=\"js-form-item js-form-type-radio radio form-check js-form-item-sci form-item-sci\">
                  <input data-drupal-selector=\"edit-sci\" type=\"radio\" id=\"edit-sci\" name=\"sci\" value=\"0\" class=\"form-radio form-check-input\"> 
    </div>
    </td>
      <td><b>Science requirement already met</b></td>
      <td><b>I have passed 2 years of science: Biology AND Chemistry/Physics</b></td>
      <td> N/A </td></tr>
{% endif %}
{% for result in results %}

 {% if result.field_course_number[0].value != 92710 %}
   {% if (isELD  and \"Fundamentals\" not in result.field_other_attributes[0].entity.label ) or (isFund and \"Fundamentals\" in result.field_other_attributes[0].entity.label ) or (isAP and \"Fundamentals\" not in result.field_other_attributes[0].entity.label  and \"Bilingual\" not in result.field_other_attributes[0].entity.label)  %}
    <tr>
    <td>
    <div class=\"js-form-item js-form-type-radio radio form-check js-form-item-sci form-item-sci\">
                <input data-drupal-selector=\"edit-sci\" type=\"radio\" id=\"edit-sci\" name=\"sci\" value=\"{{result.field_course_number[0].value}}\" class=\"form-radio form-check-input\"> 
</div></td>
    <td>{{ result.title[0].value}} ({{result.field_course_number[0].value}})</td>
    <td>{{ result.body[0].value|striptags|raw }}  </td>
    <td>
    {% if result.field_a_g[0] is not null %}
       
    {{ result.field_a_g[0].entity.label }} </td>
    {% else %}
    Does not fulfill A-G requirements </td>
    {% endif %}
  </tr>


  {% elseif  ( not isAP and  not isELD and not isFund and \"Fundamentals\" not in result.field_other_attributes[0].entity.label  and \"Bilingual\" not in result.field_other_attributes[0].entity.label  and  \"Advanced Placement\" not in result.field_other_attributes[0].entity.label)  %}
  <tr>
    <td>
    <div class=\"js-form-item js-form-type-radio radio form-check js-form-item-sci form-item-sci\">
                <input data-drupal-selector=\"edit-sci\" type=\"radio\" id=\"edit-sci\" name=\"sci\" value=\"{{result.field_course_number[0].value}}\" class=\"form-radio form-check-input\"> 
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
 {% endif %}
{% endfor %}
</table>


", "modules/custom/multistep/templates/course-list-sci.html.twig", "/home/sarkaz/kazemicode.org/suhi/modules/custom/multistep/templates/course-list-sci.html.twig");
    }
}
