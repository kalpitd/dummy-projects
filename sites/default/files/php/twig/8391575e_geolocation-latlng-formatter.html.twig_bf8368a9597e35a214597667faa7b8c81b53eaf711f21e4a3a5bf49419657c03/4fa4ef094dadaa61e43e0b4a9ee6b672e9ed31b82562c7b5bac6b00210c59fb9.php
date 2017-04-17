<?php

/* modules/contrib/geolocation/templates/geolocation-latlng-formatter.html.twig */
class __TwigTemplate_4ec39a063b0bd6f46f7129e7f08f636edff0924ae68ceb32c2c9fc0391f045e1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array(),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 15
        echo "<span itemscope itemtype=\"http://schema.org/Place\">
  <span itemprop=\"geo\" itemscope itemtype=\"http://schema.org/GeoCoordinates\">
    <meta itemprop=\"latitude\" content=\"";
        // line 17
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["lat"]) ? $context["lat"] : null), "html", null, true));
        echo "\">
    <meta itemprop=\"longitude\" content=\"";
        // line 18
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["lng"]) ? $context["lng"] : null), "html", null, true));
        echo "\">
  </span>
  <span class=\"geolocation-latlng\">";
        // line 20
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["lat"]) ? $context["lat"] : null), "html", null, true));
        echo ", ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["lng"]) ? $context["lng"] : null), "html", null, true));
        echo "</span>
</span>
";
    }

    public function getTemplateName()
    {
        return "modules/contrib/geolocation/templates/geolocation-latlng-formatter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 20,  51 => 18,  47 => 17,  43 => 15,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default microdata theme implementation for a geolocation with latitude, longitude.*/
/*  **/
/*  * Available variables:*/
/*  * - lat: The latitude value.*/
/*  * - lng: The longitude value.*/
/*  **/
/*  * @see template_preprocess()*/
/*  **/
/*  * @ingroup themeable*/
/*  *//* */
/* #}*/
/* <span itemscope itemtype="http://schema.org/Place">*/
/*   <span itemprop="geo" itemscope itemtype="http://schema.org/GeoCoordinates">*/
/*     <meta itemprop="latitude" content="{{ lat }}">*/
/*     <meta itemprop="longitude" content="{{ lng }}">*/
/*   </span>*/
/*   <span class="geolocation-latlng">{{ lat }}, {{ lng }}</span>*/
/* </span>*/
/* */
