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

/* themes/contrib/bootstrap_barrio/templates/ds/layout--ds-card-header-footer.html.twig */
class __TwigTemplate_59d7c110444f0b2b49c15ebb1cfedafa21a797db2b6bb060aa60921862720c40 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = [];
        $filters = ["escape" => 20];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape'],
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
        // line 20
        echo "<";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["outer_wrapper"] ?? null)), "html", null, true);
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => "card", 1 => "clearfix"], "method")), "html", null, true);
        echo ">

  ";
        // line 22
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["title_suffix"] ?? null), "contextual_links", [])), "html", null, true);
        echo "


  <";
        // line 25
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["first_wrapper"] ?? null)), "html", null, true);
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["first_attributes"] ?? null), "addClass", [0 => "card-header"], "method")), "html", null, true);
        echo ">
    ";
        // line 26
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["first"] ?? null)), "html", null, true);
        echo "
  </";
        // line 27
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["first_wrapper"] ?? null)), "html", null, true);
        echo ">

  <";
        // line 29
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["second_wrapper"] ?? null)), "html", null, true);
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["second_attributes"] ?? null), "addClass", [0 => "card-block"], "method")), "html", null, true);
        echo ">
    ";
        // line 30
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["second"] ?? null)), "html", null, true);
        echo "
  </";
        // line 31
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["second_wrapper"] ?? null)), "html", null, true);
        echo ">

  <";
        // line 33
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["third_wrapper"] ?? null)), "html", null, true);
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["third_attributes"] ?? null), "addClass", [0 => "card-footer"], "method")), "html", null, true);
        echo ">
    ";
        // line 34
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["third"] ?? null)), "html", null, true);
        echo "
  </";
        // line 35
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["third_wrapper"] ?? null)), "html", null, true);
        echo ">

</";
        // line 37
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["outer_wrapper"] ?? null)), "html", null, true);
        echo ">
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/bootstrap_barrio/templates/ds/layout--ds-card-header-footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 37,  105 => 35,  101 => 34,  96 => 33,  91 => 31,  87 => 30,  82 => 29,  77 => 27,  73 => 26,  68 => 25,  62 => 22,  55 => 20,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Display Suite card header footer template.
 *
 * Available variables:
 * - outer_wrapper: outer wrapper element
 * - first_wrapper: wrapper element around first region
 * - second_wrapper: wrapper element around second region
 * - third_wrapper: wrapper element around third region
 * - attributes: layout attributes
 * - first_attributes: attributes for first region
 * - second_attributes: attributes for second region
 * - third_attributes: attributes for third region
 * - first: content of first region
 * - second: content of second region
 * - third: content of third region
 */
#}
<{{ outer_wrapper }}{{ attributes.addClass('card', 'clearfix') }}>

  {{ title_suffix.contextual_links }}


  <{{ first_wrapper }}{{ first_attributes.addClass('card-header') }}>
    {{ first }}
  </{{ first_wrapper }}>

  <{{ second_wrapper }}{{ second_attributes.addClass('card-block') }}>
    {{ second }}
  </{{ second_wrapper }}>

  <{{ third_wrapper }}{{ third_attributes.addClass('card-footer') }}>
    {{ third }}
  </{{ third_wrapper }}>

</{{ outer_wrapper }}>
", "themes/contrib/bootstrap_barrio/templates/ds/layout--ds-card-header-footer.html.twig", "/app/themes/contrib/bootstrap_barrio/templates/ds/layout--ds-card-header-footer.html.twig");
    }
}
