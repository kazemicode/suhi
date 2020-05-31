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

/* modules/custom/multistep/templates/course-list-cpe.html.twig */
class __TwigTemplate_187160fa66bc88435281ffe900053e869d568fa5b431a4f337eeea3a5545c04e extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["for" => 22, "if" => 23];
        $filters = ["escape" => 2, "striptags" => 31];
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
 <div class=\"step\">Step 11 of ";
        // line 2
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["n"] ?? null)), "html", null, true);
        echo "</div>

<div class=\"form-header\">
<h2>You'll need to take at least one College Prep ";
        // line 5
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["subject"] ?? null)), "html", null, true);
        echo " before you graduate.</h2></div>

 <div class=\"form-instructions\">
<h4>Select a College Prep ";
        // line 8
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["subject"] ?? null)), "html", null, true);
        echo " course or one of the other options:</h4></div>
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

";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["results"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
            // line 23
            echo "   ";
            if ( !(null === $this->getAttribute($this->getAttribute($context["result"], "field_a_g", []), 0, [], "array"))) {
                // line 24
                echo "   
    <tr>
    <td>
    <div class=\"js-form-item js-form-type-radio radio form-check js-form-item-cpe form-item-cpe\">
                <input data-drupal-selector=\"edit-cpe\" type=\"radio\" id=\"edit-cpe\" name=\"cpe\" value=\"";
                // line 28
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($context["result"], "field_course_number", []), 0, [], "array"), "value", [])), "html", null, true);
                echo "\" class=\"form-radio form-check-input\"> 
</div></td>
    <td>";
                // line 30
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($context["result"], "title", []), 0, [], "array"), "value", [])), "html", null, true);
                echo " (";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($context["result"], "field_course_number", []), 0, [], "array"), "value", [])), "html", null, true);
                echo ")</td>
    <td>";
                // line 31
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, strip_tags($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($context["result"], "body", []), 0, [], "array"), "value", []))), "html", null, true);
                echo "  </td>
    <td>

       
    ";
                // line 35
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["result"], "field_a_g", []), 0, [], "array"), "entity", []), "label", [])), "html", null, true);
                echo " </td>


  </tr>


  ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "</table>


";
    }

    public function getTemplateName()
    {
        return "modules/custom/multistep/templates/course-list-cpe.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 43,  118 => 35,  111 => 31,  105 => 30,  100 => 28,  94 => 24,  91 => 23,  87 => 22,  70 => 8,  64 => 5,  58 => 2,  55 => 1,);
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
 <div class=\"step\">Step 11 of {{n}}</div>

<div class=\"form-header\">
<h2>You'll need to take at least one College Prep {{ subject }} before you graduate.</h2></div>

 <div class=\"form-instructions\">
<h4>Select a College Prep {{ subject }} course or one of the other options:</h4></div>
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

{% for result in results %}
   {% if result.field_a_g[0] is not null %}
   
    <tr>
    <td>
    <div class=\"js-form-item js-form-type-radio radio form-check js-form-item-cpe form-item-cpe\">
                <input data-drupal-selector=\"edit-cpe\" type=\"radio\" id=\"edit-cpe\" name=\"cpe\" value=\"{{result.field_course_number[0].value}}\" class=\"form-radio form-check-input\"> 
</div></td>
    <td>{{ result.title[0].value}} ({{result.field_course_number[0].value}})</td>
    <td>{{ result.body[0].value|striptags}}  </td>
    <td>

       
    {{ result.field_a_g[0].entity.label }} </td>


  </tr>


  {% endif %}
{% endfor %}
</table>


", "modules/custom/multistep/templates/course-list-cpe.html.twig", "/app/modules/custom/multistep/templates/course-list-cpe.html.twig");
    }
}
