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
        $__internal_3a9c96dd95e440d8d3214c1ab0d833b7268d46a6e6fe7d5d9110ea127dc86b52 = $this->env->getExtension("native_profiler");
        $__internal_3a9c96dd95e440d8d3214c1ab0d833b7268d46a6e6fe7d5d9110ea127dc86b52->enter($__internal_3a9c96dd95e440d8d3214c1ab0d833b7268d46a6e6fe7d5d9110ea127dc86b52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_3a9c96dd95e440d8d3214c1ab0d833b7268d46a6e6fe7d5d9110ea127dc86b52->leave($__internal_3a9c96dd95e440d8d3214c1ab0d833b7268d46a6e6fe7d5d9110ea127dc86b52_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_7658ca5d76e2a348bf364a395b2adb5dee2e4c365b2067d997cfad2b964a068d = $this->env->getExtension("native_profiler");
        $__internal_7658ca5d76e2a348bf364a395b2adb5dee2e4c365b2067d997cfad2b964a068d->enter($__internal_7658ca5d76e2a348bf364a395b2adb5dee2e4c365b2067d997cfad2b964a068d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_7658ca5d76e2a348bf364a395b2adb5dee2e4c365b2067d997cfad2b964a068d->leave($__internal_7658ca5d76e2a348bf364a395b2adb5dee2e4c365b2067d997cfad2b964a068d_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6fcd882bc5b9c7f30d215f9114fb7f3f98ce8ede60689b143a2f83bebd5acba9 = $this->env->getExtension("native_profiler");
        $__internal_6fcd882bc5b9c7f30d215f9114fb7f3f98ce8ede60689b143a2f83bebd5acba9->enter($__internal_6fcd882bc5b9c7f30d215f9114fb7f3f98ce8ede60689b143a2f83bebd5acba9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_6fcd882bc5b9c7f30d215f9114fb7f3f98ce8ede60689b143a2f83bebd5acba9->leave($__internal_6fcd882bc5b9c7f30d215f9114fb7f3f98ce8ede60689b143a2f83bebd5acba9_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_971d905ef23fba7a87bec0d410c9ffb00509e3a1b991c1fef95827897040fbc3 = $this->env->getExtension("native_profiler");
        $__internal_971d905ef23fba7a87bec0d410c9ffb00509e3a1b991c1fef95827897040fbc3->enter($__internal_971d905ef23fba7a87bec0d410c9ffb00509e3a1b991c1fef95827897040fbc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_971d905ef23fba7a87bec0d410c9ffb00509e3a1b991c1fef95827897040fbc3->leave($__internal_971d905ef23fba7a87bec0d410c9ffb00509e3a1b991c1fef95827897040fbc3_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_46711429d53c36032fb00a71f266f79ab71a0bedc8988ede6fe364060395b0cf = $this->env->getExtension("native_profiler");
        $__internal_46711429d53c36032fb00a71f266f79ab71a0bedc8988ede6fe364060395b0cf->enter($__internal_46711429d53c36032fb00a71f266f79ab71a0bedc8988ede6fe364060395b0cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_46711429d53c36032fb00a71f266f79ab71a0bedc8988ede6fe364060395b0cf->leave($__internal_46711429d53c36032fb00a71f266f79ab71a0bedc8988ede6fe364060395b0cf_prof);

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
