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
        $tags = ["for" => 29, "if" => 30];
        $filters = ["escape" => 2, "striptags" => 37];
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
 <div class=\"step\">Step 7 of ";
        // line 2
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["n"] ?? null)), "html", null, true);
        echo "</div>

<div class=\"form-header\">
<h2>You need at least two years of ";
        // line 5
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["subject"] ?? null)), "html", null, true);
        echo "!</h2></div>

 <div class=\"form-instructions\">
<h4>Select a ";
        // line 8
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["subject"] ?? null)), "html", null, true);
        echo " course or that you've completed the requirement:</h4></div>
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
    <div class=\"js-form-item js-form-type-radio radio form-check js-form-item-pe form-item-pe\">
                <input data-drupal-selector=\"edit-pe\" type=\"radio\" id=\"edit-pe\" name=\"pe\" value=\"0\" class=\"form-radio form-check-input\"> 
</div></td>
    <td>PE requirement already met</td>
    <td>N/A  </td>
    <td> N/A </td></tr>
";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["results"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
            // line 30
            echo "   ";
            if (!twig_in_filter("Adapted", $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["result"], "title", []), 0, [], "array"), "entity", []), "label", []))) {
                // line 31
                echo "    <tr>
    <td>
    <div class=\"js-form-item js-form-type-radio radio form-check js-form-item-pe form-item-pe\">
                <input data-drupal-selector=\"edit-pe\" type=\"radio\" id=\"edit-pe\" name=\"pe\" value=\"";
                // line 34
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($context["result"], "field_course_number", []), 0, [], "array"), "value", [])), "html", null, true);
                echo "\" class=\"form-radio form-check-input\"> 
</div></td>
    <td>";
                // line 36
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($context["result"], "title", []), 0, [], "array"), "value", [])), "html", null, true);
                echo " (";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($context["result"], "field_course_number", []), 0, [], "array"), "value", [])), "html", null, true);
                echo ")</td>
    <td>";
                // line 37
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, strip_tags($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($context["result"], "body", []), 0, [], "array"), "value", []))), "html", null, true);
                echo "  </td>
    <td>
    ";
                // line 39
                if ( !(null === $this->getAttribute($this->getAttribute($context["result"], "field_a_g", []), 0, [], "array"))) {
                    // line 40
                    echo "       
    ";
                    // line 41
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["result"], "field_a_g", []), 0, [], "array"), "entity", []), "label", [])), "html", null, true);
                    echo " </td>
    ";
                } else {
                    // line 43
                    echo "    Does not fulfill A-G requirements
    ";
                }
                // line 45
                echo "  </tr>
  ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
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
        return array (  144 => 48,  136 => 45,  132 => 43,  127 => 41,  124 => 40,  122 => 39,  117 => 37,  111 => 36,  106 => 34,  101 => 31,  98 => 30,  94 => 29,  70 => 8,  64 => 5,  58 => 2,  55 => 1,);
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
<h2>You need at least two years of {{ subject }}!</h2></div>

 <div class=\"form-instructions\">
<h4>Select a {{ subject }} course or that you've completed the requirement:</h4></div>
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
    <div class=\"js-form-item js-form-type-radio radio form-check js-form-item-pe form-item-pe\">
                <input data-drupal-selector=\"edit-pe\" type=\"radio\" id=\"edit-pe\" name=\"pe\" value=\"0\" class=\"form-radio form-check-input\"> 
</div></td>
    <td>PE requirement already met</td>
    <td>N/A  </td>
    <td> N/A </td></tr>
{% for result in results %}
   {% if (\"Adapted\" not in result.title[0].entity.label )  %}
    <tr>
    <td>
    <div class=\"js-form-item js-form-type-radio radio form-check js-form-item-pe form-item-pe\">
                <input data-drupal-selector=\"edit-pe\" type=\"radio\" id=\"edit-pe\" name=\"pe\" value=\"{{result.field_course_number[0].value}}\" class=\"form-radio form-check-input\"> 
</div></td>
    <td>{{ result.title[0].value}} ({{result.field_course_number[0].value}})</td>
    <td>{{ result.body[0].value|striptags}}  </td>
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


", "modules/custom/multistep/templates/course-list-pe.html.twig", "/app/modules/custom/multistep/templates/course-list-pe.html.twig");
    }
}
