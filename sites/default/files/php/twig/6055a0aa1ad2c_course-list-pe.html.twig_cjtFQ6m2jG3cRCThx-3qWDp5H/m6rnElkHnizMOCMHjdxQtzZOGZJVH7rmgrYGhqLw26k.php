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

/* modules/custom/multistep/templates/course-list-pe.html.twig */
class __TwigTemplate_150fd7b2bfb2e8bdc9708e477e98fc25447d051ba3b6ed7f68c5b3aefc153901 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 11, "for" => 35];
        $filters = ["escape" => 2, "raw" => 43, "striptags" => 43];
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
 <div class=\"step\">Step 7 of ";
        // line 2
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["n"] ?? null)), "html", null, true);
        echo "</div>

<div class=\"form-header\">
<h2>You need at least two years of <big>";
        // line 5
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["subject"] ?? null)), "html", null, true);
        echo "</big>!</h2></div>


<fieldset class=\"form-container js-form-item form-item js-form-wrapper form-group col-auto\" data-drupal-selector=\"edit-prefs\" id=\"edit-prefs\">
      <legend>
    <span class=\"fieldset-legend form-instructions\" id=\"select-one\">
    <h4>👟 Select a <span class=\"name\">";
        // line 11
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["subject"] ?? null)), "html", null, true);
        echo "</span> course ";
        if (((($context["grade"] ?? null) + 1) > 10)) {
            echo " OR that you've completed the requirement:
<i>(PE requirement is met with passing grades in 9th and 10th grade PE along with passing the PE Fitness Test)</i>";
        }
        // line 12
        echo "</h4></span>
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
        if (((($context["grade"] ?? null) + 1) > 10)) {
            // line 24
            echo "   <tr>
      <td>
      <div class=\"js-form-item js-form-type-radio radio form-check js-form-item-pe form-item-pe\">
                  <input data-drupal-selector=\"edit-pe\" type=\"radio\" id=\"edit-pe\" name=\"pe\" value=\"0\" class=\"form-radio form-check-input\"> 
      </div>
     </td>
      <td><b>PE requirement already met.</b></td>
      <td><b>I have passed 2 years of PE: PE High School Course 1 and PE High School Course 2.</b></td>
      <td> N/A </td></tr>
";
        }
        // line 34
        echo "   
";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["results"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
            // line 36
            echo "   ";
            if (!twig_in_filter("Adapted", $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["result"], "title", []), 0, [], "array"), "entity", []), "label", []))) {
                // line 37
                echo "    <tr>
    <td>
    <div class=\"js-form-item js-form-type-radio radio form-check js-form-item-pe form-item-pe\">
                <input data-drupal-selector=\"edit-pe\" type=\"radio\" id=\"edit-pe\" name=\"pe\" value=\"";
                // line 40
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($context["result"], "field_course_number", []), 0, [], "array"), "value", [])), "html", null, true);
                echo "\" class=\"form-radio form-check-input\"> 
</div></td>
    <td>";
                // line 42
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($context["result"], "title", []), 0, [], "array"), "value", [])), "html", null, true);
                echo " (";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($context["result"], "field_course_number", []), 0, [], "array"), "value", [])), "html", null, true);
                echo ")</td>
    <td>";
                // line 43
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(strip_tags($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($context["result"], "body", []), 0, [], "array"), "value", []))));
                echo "  </td>
    <td>
    ";
                // line 45
                if ( !(null === $this->getAttribute($this->getAttribute($context["result"], "field_a_g", []), 0, [], "array"))) {
                    // line 46
                    echo "       
    ";
                    // line 47
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["result"], "field_a_g", []), 0, [], "array"), "entity", []), "label", [])), "html", null, true);
                    echo " </td>
    ";
                } else {
                    // line 49
                    echo "    Does not fulfill A-G requirements
    ";
                }
                // line 51
                echo "  </tr>
  ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "</table>


";
    }

    public function getTemplateName()
    {
        return "modules/custom/multistep/templates/course-list-pe.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 54,  152 => 51,  148 => 49,  143 => 47,  140 => 46,  138 => 45,  133 => 43,  127 => 42,  122 => 40,  117 => 37,  114 => 36,  110 => 35,  107 => 34,  95 => 24,  93 => 23,  80 => 12,  73 => 11,  64 => 5,  58 => 2,  55 => 1,);
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
 <div class=\"step\">Step 7 of {{n}}</div>

<div class=\"form-header\">
<h2>You need at least two years of <big>{{ subject }}</big>!</h2></div>


<fieldset class=\"form-container js-form-item form-item js-form-wrapper form-group col-auto\" data-drupal-selector=\"edit-prefs\" id=\"edit-prefs\">
      <legend>
    <span class=\"fieldset-legend form-instructions\" id=\"select-one\">
    <h4>👟 Select a <span class=\"name\">{{ subject }}</span> course {% if (grade+1) > 10 %} OR that you've completed the requirement:
<i>(PE requirement is met with passing grades in 9th and 10th grade PE along with passing the PE Fitness Test)</i>{% endif %}</h4></span>
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
      <div class=\"js-form-item js-form-type-radio radio form-check js-form-item-pe form-item-pe\">
                  <input data-drupal-selector=\"edit-pe\" type=\"radio\" id=\"edit-pe\" name=\"pe\" value=\"0\" class=\"form-radio form-check-input\"> 
      </div>
     </td>
      <td><b>PE requirement already met.</b></td>
      <td><b>I have passed 2 years of PE: PE High School Course 1 and PE High School Course 2.</b></td>
      <td> N/A </td></tr>
{% endif %}
   
{% for result in results %}
   {% if (\"Adapted\" not in result.title[0].entity.label ) %}
    <tr>
    <td>
    <div class=\"js-form-item js-form-type-radio radio form-check js-form-item-pe form-item-pe\">
                <input data-drupal-selector=\"edit-pe\" type=\"radio\" id=\"edit-pe\" name=\"pe\" value=\"{{result.field_course_number[0].value}}\" class=\"form-radio form-check-input\"> 
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
  {% endif %}
{% endfor %}
</table>


", "modules/custom/multistep/templates/course-list-pe.html.twig", "/home/sarkaz/kazemicode.org/suhi/modules/custom/multistep/templates/course-list-pe.html.twig");
    }
}
