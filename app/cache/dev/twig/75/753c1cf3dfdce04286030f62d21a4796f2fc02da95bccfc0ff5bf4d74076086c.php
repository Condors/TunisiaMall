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
        $__internal_c4ac0a9a4cc05dfc19776491b4da098c079323700eeae2494f9abbce9743592a = $this->env->getExtension("native_profiler");
        $__internal_c4ac0a9a4cc05dfc19776491b4da098c079323700eeae2494f9abbce9743592a->enter($__internal_c4ac0a9a4cc05dfc19776491b4da098c079323700eeae2494f9abbce9743592a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_c4ac0a9a4cc05dfc19776491b4da098c079323700eeae2494f9abbce9743592a->leave($__internal_c4ac0a9a4cc05dfc19776491b4da098c079323700eeae2494f9abbce9743592a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_5cdf6a3c67a23b7830ca9465d3013029bf07578cadf0d8f7cbdd8ca9a0bd9cea = $this->env->getExtension("native_profiler");
        $__internal_5cdf6a3c67a23b7830ca9465d3013029bf07578cadf0d8f7cbdd8ca9a0bd9cea->enter($__internal_5cdf6a3c67a23b7830ca9465d3013029bf07578cadf0d8f7cbdd8ca9a0bd9cea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_5cdf6a3c67a23b7830ca9465d3013029bf07578cadf0d8f7cbdd8ca9a0bd9cea->leave($__internal_5cdf6a3c67a23b7830ca9465d3013029bf07578cadf0d8f7cbdd8ca9a0bd9cea_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b6420d86ab74efb8f052557a0a7e2386a2f74b98fb0e3745602c211e284c6c65 = $this->env->getExtension("native_profiler");
        $__internal_b6420d86ab74efb8f052557a0a7e2386a2f74b98fb0e3745602c211e284c6c65->enter($__internal_b6420d86ab74efb8f052557a0a7e2386a2f74b98fb0e3745602c211e284c6c65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_b6420d86ab74efb8f052557a0a7e2386a2f74b98fb0e3745602c211e284c6c65->leave($__internal_b6420d86ab74efb8f052557a0a7e2386a2f74b98fb0e3745602c211e284c6c65_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_d40905e29cc5b8d1eb46ca2af028b14e61cd39a4e4206e46f6cac9f3e0f79f6d = $this->env->getExtension("native_profiler");
        $__internal_d40905e29cc5b8d1eb46ca2af028b14e61cd39a4e4206e46f6cac9f3e0f79f6d->enter($__internal_d40905e29cc5b8d1eb46ca2af028b14e61cd39a4e4206e46f6cac9f3e0f79f6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d40905e29cc5b8d1eb46ca2af028b14e61cd39a4e4206e46f6cac9f3e0f79f6d->leave($__internal_d40905e29cc5b8d1eb46ca2af028b14e61cd39a4e4206e46f6cac9f3e0f79f6d_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1383f23f0ce396197198f34cc02e2ab03358c735517f6c0c2a293e26ad9c914a = $this->env->getExtension("native_profiler");
        $__internal_1383f23f0ce396197198f34cc02e2ab03358c735517f6c0c2a293e26ad9c914a->enter($__internal_1383f23f0ce396197198f34cc02e2ab03358c735517f6c0c2a293e26ad9c914a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_1383f23f0ce396197198f34cc02e2ab03358c735517f6c0c2a293e26ad9c914a->leave($__internal_1383f23f0ce396197198f34cc02e2ab03358c735517f6c0c2a293e26ad9c914a_prof);

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
