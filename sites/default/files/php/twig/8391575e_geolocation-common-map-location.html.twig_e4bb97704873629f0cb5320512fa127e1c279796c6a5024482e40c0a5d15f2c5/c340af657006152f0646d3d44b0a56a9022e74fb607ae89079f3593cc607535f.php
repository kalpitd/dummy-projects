<?php

/* modules/contrib/geolocation/templates/geolocation-common-map-location.html.twig */
class __TwigTemplate_bea60fec69ffcf47af9596e183f4d1003ab8ca3dde6da73484549788bd9ca1a9 extends Twig_Template
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
        $tags = array("if" => 10);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
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

        // line 10
        echo "<div class=\"geolocation\" data-lat=\"";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["position"]) ? $context["position"] : null), "lat", array()), "html", null, true));
        echo "\" data-lng=\"";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["position"]) ? $context["position"] : null), "lng", array()), "html", null, true));
        echo "\" itemscope itemtype=\"http://schema.org/Place\" ";
        if ( !twig_test_empty((isset($context["icon"]) ? $context["icon"] : null))) {
            echo " data-icon=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["icon"]) ? $context["icon"] : null), "html", null, true));
            echo "\" ";
        }
        echo " ";
        if ( !twig_test_empty((isset($context["location_id"]) ? $context["location_id"] : null))) {
            echo " data-location-id=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["location_id"]) ? $context["location_id"] : null), "html", null, true));
            echo "\" ";
        }
        echo " ";
        if ( !twig_test_empty((isset($context["marker_label"]) ? $context["marker_label"] : null))) {
            echo " data-marker-label=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["marker_label"]) ? $context["marker_label"] : null), "html", null, true));
            echo "\" ";
        }
        echo ">
    <span itemprop=\"geo\" itemscope itemtype=\"http://schema.org/GeoCoordinates\">
        <meta itemprop=\"latitude\" content=\"";
        // line 12
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["position"]) ? $context["position"] : null), "lat", array()), "html", null, true));
        echo "\" />
        <meta itemprop=\"longitude\" content=\"";
        // line 13
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["position"]) ? $context["position"] : null), "lng", array()), "html", null, true));
        echo "\" />
    </span>
    <h2 class=\"location-title\" itemprop=\"name\">";
        // line 15
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true));
        echo "</h2>
    <div class=\"location-content\">";
        // line 16
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true));
        echo "</div>
</div>";
    }

    public function getTemplateName()
    {
        return "modules/contrib/geolocation/templates/geolocation-common-map-location.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 16,  78 => 15,  73 => 13,  69 => 12,  43 => 10,);
    }
}
/* {#*/
/*   When overriding this template, make sure to preserve*/
/*   - CSS-classes*/
/*   - parent - children hierarchy*/
/*   - data-lng and data-lat attributes*/
/*   or the attached Geolocation Javascript will fail.*/
/* */
/*   Changing the HTML tags, adding classes or adding content around or within the existing structure is no problem.*/
/* #}*/
/* <div class="geolocation" data-lat="{{ position.lat }}" data-lng="{{ position.lng }}" itemscope itemtype="http://schema.org/Place" {% if icon is not empty %} data-icon="{{ icon }}" {% endif %} {% if location_id is not empty %} data-location-id="{{ location_id }}" {% endif %} {% if marker_label is not empty %} data-marker-label="{{ marker_label }}" {% endif %}>*/
/*     <span itemprop="geo" itemscope itemtype="http://schema.org/GeoCoordinates">*/
/*         <meta itemprop="latitude" content="{{ position.lat }}" />*/
/*         <meta itemprop="longitude" content="{{ position.lng }}" />*/
/*     </span>*/
/*     <h2 class="location-title" itemprop="name">{{ title }}</h2>*/
/*     <div class="location-content">{{ content }}</div>*/
/* </div>*/
