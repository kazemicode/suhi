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

/* modules/custom/multistep/templates/course-list-health.html.twig */
class __TwigTemplate_22bcc1c8011be7cf598d15804e2c71305128ee48b710c8fe54e28a9bf0ce8569 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 23, "for" => 47];
        $filters = ["escape" => 1, "raw" => 55, "striptags" => 55];
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
        echo "<div class=\"step\">Step 10 of ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["n"] ?? null)), "html", null, true);
        echo "</div>

<div class=\"form-header\">
<h2>You'll need to take <big>";
        // line 4
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["subject"] ?? null)), "html", null, true);
        echo "</big> before you graduate.</h2></div>


<fieldset class=\"form-container js-form-item form-item js-form-wrapper form-group col-auto\" data-drupal-selector=\"edit-prefs\" id=\"edit-prefs\">
      <legend>
    <span class=\"fieldset-legend form-instructions\" id=\"select-one\"> <h4>
    💪 Select a <span class=\"name\">";
        // line 10
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["subject"] ?? null)), "html", null, true);
        echo "</span> course or one of the other options:</span></h4>
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
        // line 23
        if (((($context["grade"] ?? null) + 1) < 12)) {
            echo " 
  
  <tr>
    <td>
    <div class=\"js-form-item js-form-type-radio radio form-check js-form-item-health form-item-health\">
                <input data-drupal-selector=\"edit-health\" type=\"radio\" id=\"edit-health\" name=\"health\" value=\"0\" class=\"form-radio form-check-input\"> 
</div></td>
    <td><b>I'd like to take this class another year.</b></td>
    <td>N/A  </td>
    <td> N/A </td></tr>
  
  ";
        }
        // line 35
        echo "
";
        // line 36
        if (((($context["grade"] ?? null) + 1) > 9)) {
            echo " 
  <tr>
    <td>
    <div class=\"js-form-item js-form-type-radio radio form-check js-form-item-health form-item-health\">
                <input data-drupal-selector=\"edit-health\" type=\"radio\" id=\"edit-health\" name=\"health\" value=\"0\" class=\"form-radio form-check-input\"> 
</div></td>
    <td><b>Health requirement already met</b></td>
    <td>N/A  </td>
    <td> N/A </td></tr>
 ";
        }
        // line 45
        echo "   

";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["results"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
            // line 48
            echo "   ";
            if ((((($context["isELD"] ?? null) && !twig_in_filter("Fundamentals", $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["result"], "field_other_attributes", []), 0, [], "array"), "entity", []), "label", []))) || (($context["isFund"] ?? null) && twig_in_filter("Fundamentals", $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["result"], "field_other_attributes", []), 0, [], "array"), "entity", []), "label", [])))) || ((($context["isAP"] ?? null) && !twig_in_filter("Fundamentals", $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["result"], "field_other_attributes", []), 0, [], "array"), "entity", []), "label", []))) && !twig_in_filter("Bilingual", $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["result"], "field_other_attributes", []), 0, [], "array"), "entity", []), "label", []))))) {
                // line 49
                echo "    <tr>
    <td>
    <div class=\"js-form-item js-form-type-radio radio form-check js-form-item-health form-item-health\">
                <input data-drupal-selector=\"edit-health\" type=\"radio\" id=\"edit-health\" name=\"health\" value=\"";
                // line 52
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($context["result"], "field_course_number", []), 0, [], "array"), "value", [])), "html", null, true);
                echo "\" class=\"form-radio form-check-input\"> 
</div></td>
    <td>";
                // line 54
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($context["result"], "title", []), 0, [], "array"), "value", [])), "html", null, true);
                echo " (";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($context["result"], "field_course_number", []), 0, [], "array"), "value", [])), "html", null, true);
                echo ")</td>
    <td>";
                // line 55
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(strip_tags($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($context["result"], "body", []), 0, [], "array"), "value", []))));
                echo "  </td>
    <td>
    ";
                // line 57
                if ( !(null === $this->getAttribute($this->getAttribute($context["result"], "field_a_g", []), 0, [], "array"))) {
                    // line 58
                    echo "       
    ";
                    // line 59
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["result"], "field_a_g", []), 0, [], "array"), "entity", []), "label", [])), "html", null, true);
                    echo " </td>
    ";
                } else {
                    // line 61
                    echo "    Does not fulfill A-G requirements
    ";
                }
                // line 63
                echo "  </tr>


  ";
            } elseif (((((( !            // line 66
($context["isAP"] ?? null) &&  !($context["isELD"] ?? null)) &&  !($context["isFund"] ?? null)) && !twig_in_filter("Fundamentals", $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["result"], "field_other_attributes", []), 0, [], "array"), "entity", []), "label", []))) && !twig_in_filter("Bilingual", $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["result"], "field_other_attributes", []), 0, [], "array"), "entity", []), "label", []))) && !twig_in_filter("Advanced Placement", $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["result"], "field_other_attributes", []), 0, [], "array"), "entity", []), "label", [])))) {
                // line 67
                echo "  <tr>
    <td>
    <div class=\"js-form-item js-form-type-radio radio form-check js-form-item-health form-item-health\">
                <input data-drupal-selector=\"edit-health\" type=\"radio\" id=\"edit-health\" name=\"health\" value=\"";
                // line 70
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($context["result"], "field_course_number", []), 0, [], "array"), "value", [])), "html", null, true);
                echo "\" class=\"form-radio form-check-input\"> 
</div></td>
    <td>";
                // line 72
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($context["result"], "title", []), 0, [], "array"), "value", [])), "html", null, true);
                echo " (";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($context["result"], "field_course_number", []), 0, [], "array"), "value", [])), "html", null, true);
                echo ")</td>
    <td>";
                // line 73
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(strip_tags($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($context["result"], "body", []), 0, [], "array"), "value", []))));
                echo "  </td>
    <td>
    ";
                // line 75
                if ( !(null === $this->getAttribute($this->getAttribute($context["result"], "field_a_g", []), 0, [], "array"))) {
                    // line 76
                    echo "    ";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["result"], "field_a_g", []), 0, [], "array"), "entity", []), "label", [])), "html", null, true);
                    echo "

    ";
                } else {
                    // line 79
                    echo "    Does not fulfill A-G requirements
    ";
                }
                // line 81
                echo "  </tr>
  ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        echo "</table>


";
    }

    public function getTemplateName()
    {
        return "modules/custom/multistep/templates/course-list-health.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  213 => 84,  205 => 81,  201 => 79,  194 => 76,  192 => 75,  187 => 73,  181 => 72,  176 => 70,  171 => 67,  169 => 66,  164 => 63,  160 => 61,  155 => 59,  152 => 58,  150 => 57,  145 => 55,  139 => 54,  134 => 52,  129 => 49,  126 => 48,  122 => 47,  118 => 45,  105 => 36,  102 => 35,  87 => 23,  71 => 10,  62 => 4,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"step\">Step 10 of {{n}}</div>

<div class=\"form-header\">
<h2>You'll need to take <big>{{ subject }}</big> before you graduate.</h2></div>


<fieldset class=\"form-container js-form-item form-item js-form-wrapper form-group col-auto\" data-drupal-selector=\"edit-prefs\" id=\"edit-prefs\">
      <legend>
    <span class=\"fieldset-legend form-instructions\" id=\"select-one\"> <h4>
    💪 Select a <span class=\"name\">{{ subject }}</span> course or one of the other options:</span></h4>
  </legend>
  <div class=\"fieldset-wrapper\">
<table style=\"width:80%\" class=\"table\">

<tr>
    <th></th>
    <th>Course title</th>
    <th>Description</th>
    <th>A-G</th>
  </tr>
  
  
  {% if ( (grade+1) < 12) %} 
  
  <tr>
    <td>
    <div class=\"js-form-item js-form-type-radio radio form-check js-form-item-health form-item-health\">
                <input data-drupal-selector=\"edit-health\" type=\"radio\" id=\"edit-health\" name=\"health\" value=\"0\" class=\"form-radio form-check-input\"> 
</div></td>
    <td><b>I'd like to take this class another year.</b></td>
    <td>N/A  </td>
    <td> N/A </td></tr>
  
  {% endif %}

{% if ( (grade+1) > 9) %} 
  <tr>
    <td>
    <div class=\"js-form-item js-form-type-radio radio form-check js-form-item-health form-item-health\">
                <input data-drupal-selector=\"edit-health\" type=\"radio\" id=\"edit-health\" name=\"health\" value=\"0\" class=\"form-radio form-check-input\"> 
</div></td>
    <td><b>Health requirement already met</b></td>
    <td>N/A  </td>
    <td> N/A </td></tr>
 {% endif %}   

{% for result in results %}
   {% if (isELD  and \"Fundamentals\" not in result.field_other_attributes[0].entity.label ) or (isFund and \"Fundamentals\" in result.field_other_attributes[0].entity.label ) or (isAP and \"Fundamentals\" not in result.field_other_attributes[0].entity.label  and \"Bilingual\" not in result.field_other_attributes[0].entity.label)  %}
    <tr>
    <td>
    <div class=\"js-form-item js-form-type-radio radio form-check js-form-item-health form-item-health\">
                <input data-drupal-selector=\"edit-health\" type=\"radio\" id=\"edit-health\" name=\"health\" value=\"{{result.field_course_number[0].value}}\" class=\"form-radio form-check-input\"> 
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
  <tr>
    <td>
    <div class=\"js-form-item js-form-type-radio radio form-check js-form-item-health form-item-health\">
                <input data-drupal-selector=\"edit-health\" type=\"radio\" id=\"edit-health\" name=\"health\" value=\"{{result.field_course_number[0].value}}\" class=\"form-radio form-check-input\"> 
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


", "modules/custom/multistep/templates/course-list-health.html.twig", "/home/sarkaz/kazemicode.org/suhi/modules/custom/multistep/templates/course-list-health.html.twig");
    }
}
