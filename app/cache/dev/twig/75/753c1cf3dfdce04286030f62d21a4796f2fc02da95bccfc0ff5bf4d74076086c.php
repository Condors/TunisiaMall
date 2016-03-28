<?php

/* base.html.twig */
class __TwigTemplate_aecfa3cedfee541ceb202080a90bc35933a46d734d89909c613c4bcfb7a41fd8 extends Twig_Template
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
        $__internal_8edc2cd2cdf0d77d153573d30f680c274637d1e4747631571f7c01e3332a9e3f = $this->env->getExtension("native_profiler");
        $__internal_8edc2cd2cdf0d77d153573d30f680c274637d1e4747631571f7c01e3332a9e3f->enter($__internal_8edc2cd2cdf0d77d153573d30f680c274637d1e4747631571f7c01e3332a9e3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_8edc2cd2cdf0d77d153573d30f680c274637d1e4747631571f7c01e3332a9e3f->leave($__internal_8edc2cd2cdf0d77d153573d30f680c274637d1e4747631571f7c01e3332a9e3f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_83678ab80cf88461ebd239933eea8a309b8832364a56fba179b29fa8b4ca4658 = $this->env->getExtension("native_profiler");
        $__internal_83678ab80cf88461ebd239933eea8a309b8832364a56fba179b29fa8b4ca4658->enter($__internal_83678ab80cf88461ebd239933eea8a309b8832364a56fba179b29fa8b4ca4658_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_83678ab80cf88461ebd239933eea8a309b8832364a56fba179b29fa8b4ca4658->leave($__internal_83678ab80cf88461ebd239933eea8a309b8832364a56fba179b29fa8b4ca4658_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a35b628f2da7b06ef097de0663e493d8c8d0bee822c85b830b3476bb68791296 = $this->env->getExtension("native_profiler");
        $__internal_a35b628f2da7b06ef097de0663e493d8c8d0bee822c85b830b3476bb68791296->enter($__internal_a35b628f2da7b06ef097de0663e493d8c8d0bee822c85b830b3476bb68791296_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_a35b628f2da7b06ef097de0663e493d8c8d0bee822c85b830b3476bb68791296->leave($__internal_a35b628f2da7b06ef097de0663e493d8c8d0bee822c85b830b3476bb68791296_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_456b9e897afe406213900d3e37adbfc2032072f82556d133d0718536ffe01439 = $this->env->getExtension("native_profiler");
        $__internal_456b9e897afe406213900d3e37adbfc2032072f82556d133d0718536ffe01439->enter($__internal_456b9e897afe406213900d3e37adbfc2032072f82556d133d0718536ffe01439_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_456b9e897afe406213900d3e37adbfc2032072f82556d133d0718536ffe01439->leave($__internal_456b9e897afe406213900d3e37adbfc2032072f82556d133d0718536ffe01439_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8830c9b896cb9bd7dae46e8e5b7700a7730815e36c171ea175a9c5cebcc2463d = $this->env->getExtension("native_profiler");
        $__internal_8830c9b896cb9bd7dae46e8e5b7700a7730815e36c171ea175a9c5cebcc2463d->enter($__internal_8830c9b896cb9bd7dae46e8e5b7700a7730815e36c171ea175a9c5cebcc2463d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_8830c9b896cb9bd7dae46e8e5b7700a7730815e36c171ea175a9c5cebcc2463d->leave($__internal_8830c9b896cb9bd7dae46e8e5b7700a7730815e36c171ea175a9c5cebcc2463d_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
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
