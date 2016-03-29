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
        $__internal_dd7aa3b9b59b6c10be906c8d4a47148a9e6bcf109c70fa1386705c6e4f5a92fe = $this->env->getExtension("native_profiler");
        $__internal_dd7aa3b9b59b6c10be906c8d4a47148a9e6bcf109c70fa1386705c6e4f5a92fe->enter($__internal_dd7aa3b9b59b6c10be906c8d4a47148a9e6bcf109c70fa1386705c6e4f5a92fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_dd7aa3b9b59b6c10be906c8d4a47148a9e6bcf109c70fa1386705c6e4f5a92fe->leave($__internal_dd7aa3b9b59b6c10be906c8d4a47148a9e6bcf109c70fa1386705c6e4f5a92fe_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ed5ec404a35bd28ab7b1e17f9d02591b19aa1e1e21a0be150a38aeebddb907cb = $this->env->getExtension("native_profiler");
        $__internal_ed5ec404a35bd28ab7b1e17f9d02591b19aa1e1e21a0be150a38aeebddb907cb->enter($__internal_ed5ec404a35bd28ab7b1e17f9d02591b19aa1e1e21a0be150a38aeebddb907cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_ed5ec404a35bd28ab7b1e17f9d02591b19aa1e1e21a0be150a38aeebddb907cb->leave($__internal_ed5ec404a35bd28ab7b1e17f9d02591b19aa1e1e21a0be150a38aeebddb907cb_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_27cc9b5a303da28e8ae7b171d8fc730f14f57c42986af4f67e388ea08fd62c4e = $this->env->getExtension("native_profiler");
        $__internal_27cc9b5a303da28e8ae7b171d8fc730f14f57c42986af4f67e388ea08fd62c4e->enter($__internal_27cc9b5a303da28e8ae7b171d8fc730f14f57c42986af4f67e388ea08fd62c4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_27cc9b5a303da28e8ae7b171d8fc730f14f57c42986af4f67e388ea08fd62c4e->leave($__internal_27cc9b5a303da28e8ae7b171d8fc730f14f57c42986af4f67e388ea08fd62c4e_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_538eb3eeb104849aaf6d1509a381a6bad55e6039bb1d8c22d4b7ae20aa730b18 = $this->env->getExtension("native_profiler");
        $__internal_538eb3eeb104849aaf6d1509a381a6bad55e6039bb1d8c22d4b7ae20aa730b18->enter($__internal_538eb3eeb104849aaf6d1509a381a6bad55e6039bb1d8c22d4b7ae20aa730b18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_538eb3eeb104849aaf6d1509a381a6bad55e6039bb1d8c22d4b7ae20aa730b18->leave($__internal_538eb3eeb104849aaf6d1509a381a6bad55e6039bb1d8c22d4b7ae20aa730b18_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1e758a7d1b75d43f3197ecec4147fd9404aea41cecdde5ef7ead14ee09ed4328 = $this->env->getExtension("native_profiler");
        $__internal_1e758a7d1b75d43f3197ecec4147fd9404aea41cecdde5ef7ead14ee09ed4328->enter($__internal_1e758a7d1b75d43f3197ecec4147fd9404aea41cecdde5ef7ead14ee09ed4328_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_1e758a7d1b75d43f3197ecec4147fd9404aea41cecdde5ef7ead14ee09ed4328->leave($__internal_1e758a7d1b75d43f3197ecec4147fd9404aea41cecdde5ef7ead14ee09ed4328_prof);

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
