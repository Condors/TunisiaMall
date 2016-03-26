<?php

/* ::base.html.twig */
class __TwigTemplate_25038e0284a003815c9bffee035b85bc8046d3752b2145f0c9bcef840bad48c9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_686ecf14632073729ec10812d46364e562464ca18327d9b79dc1a65c3cb5ec96 = $this->env->getExtension("native_profiler");
        $__internal_686ecf14632073729ec10812d46364e562464ca18327d9b79dc1a65c3cb5ec96->enter($__internal_686ecf14632073729ec10812d46364e562464ca18327d9b79dc1a65c3cb5ec96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_686ecf14632073729ec10812d46364e562464ca18327d9b79dc1a65c3cb5ec96->leave($__internal_686ecf14632073729ec10812d46364e562464ca18327d9b79dc1a65c3cb5ec96_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_84008e8909cb2511eaca9dc5e3139eee28041a4493a3a9bb388c667dc95350c8 = $this->env->getExtension("native_profiler");
        $__internal_84008e8909cb2511eaca9dc5e3139eee28041a4493a3a9bb388c667dc95350c8->enter($__internal_84008e8909cb2511eaca9dc5e3139eee28041a4493a3a9bb388c667dc95350c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_84008e8909cb2511eaca9dc5e3139eee28041a4493a3a9bb388c667dc95350c8->leave($__internal_84008e8909cb2511eaca9dc5e3139eee28041a4493a3a9bb388c667dc95350c8_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c9e9f573506f14792cf4d4cfd0fda20fe7bd987ec37beec9274e7e5cbe577432 = $this->env->getExtension("native_profiler");
        $__internal_c9e9f573506f14792cf4d4cfd0fda20fe7bd987ec37beec9274e7e5cbe577432->enter($__internal_c9e9f573506f14792cf4d4cfd0fda20fe7bd987ec37beec9274e7e5cbe577432_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_c9e9f573506f14792cf4d4cfd0fda20fe7bd987ec37beec9274e7e5cbe577432->leave($__internal_c9e9f573506f14792cf4d4cfd0fda20fe7bd987ec37beec9274e7e5cbe577432_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_4e9c51847b46f9f425673fe147c25f3a5ec458480409a9e678cb6c5294802e20 = $this->env->getExtension("native_profiler");
        $__internal_4e9c51847b46f9f425673fe147c25f3a5ec458480409a9e678cb6c5294802e20->enter($__internal_4e9c51847b46f9f425673fe147c25f3a5ec458480409a9e678cb6c5294802e20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_4e9c51847b46f9f425673fe147c25f3a5ec458480409a9e678cb6c5294802e20->leave($__internal_4e9c51847b46f9f425673fe147c25f3a5ec458480409a9e678cb6c5294802e20_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_532df82f48533a4bd10518f82c6d7fa9a0b394859e5c06ee2fde618690f96ead = $this->env->getExtension("native_profiler");
        $__internal_532df82f48533a4bd10518f82c6d7fa9a0b394859e5c06ee2fde618690f96ead->enter($__internal_532df82f48533a4bd10518f82c6d7fa9a0b394859e5c06ee2fde618690f96ead_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_532df82f48533a4bd10518f82c6d7fa9a0b394859e5c06ee2fde618690f96ead->leave($__internal_532df82f48533a4bd10518f82c6d7fa9a0b394859e5c06ee2fde618690f96ead_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
