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
        $__internal_e63b8c69ebd04263f144a32a95287f76ba948b4eaaa311f5e5b2682c0d3cc531 = $this->env->getExtension("native_profiler");
        $__internal_e63b8c69ebd04263f144a32a95287f76ba948b4eaaa311f5e5b2682c0d3cc531->enter($__internal_e63b8c69ebd04263f144a32a95287f76ba948b4eaaa311f5e5b2682c0d3cc531_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_e63b8c69ebd04263f144a32a95287f76ba948b4eaaa311f5e5b2682c0d3cc531->leave($__internal_e63b8c69ebd04263f144a32a95287f76ba948b4eaaa311f5e5b2682c0d3cc531_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_68e258e991ab3bea44f810df4adbf278872f92b40cc90f40cbb828dbd4f94561 = $this->env->getExtension("native_profiler");
        $__internal_68e258e991ab3bea44f810df4adbf278872f92b40cc90f40cbb828dbd4f94561->enter($__internal_68e258e991ab3bea44f810df4adbf278872f92b40cc90f40cbb828dbd4f94561_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_68e258e991ab3bea44f810df4adbf278872f92b40cc90f40cbb828dbd4f94561->leave($__internal_68e258e991ab3bea44f810df4adbf278872f92b40cc90f40cbb828dbd4f94561_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3de2173c0929170f3b75e69776943256ade528d2be4080b6b3ce31942abb01a7 = $this->env->getExtension("native_profiler");
        $__internal_3de2173c0929170f3b75e69776943256ade528d2be4080b6b3ce31942abb01a7->enter($__internal_3de2173c0929170f3b75e69776943256ade528d2be4080b6b3ce31942abb01a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_3de2173c0929170f3b75e69776943256ade528d2be4080b6b3ce31942abb01a7->leave($__internal_3de2173c0929170f3b75e69776943256ade528d2be4080b6b3ce31942abb01a7_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_24b51a66ad2d450b68209dacdf2d5136d5814fc92fabf9c85690051d61884e86 = $this->env->getExtension("native_profiler");
        $__internal_24b51a66ad2d450b68209dacdf2d5136d5814fc92fabf9c85690051d61884e86->enter($__internal_24b51a66ad2d450b68209dacdf2d5136d5814fc92fabf9c85690051d61884e86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_24b51a66ad2d450b68209dacdf2d5136d5814fc92fabf9c85690051d61884e86->leave($__internal_24b51a66ad2d450b68209dacdf2d5136d5814fc92fabf9c85690051d61884e86_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_047c364df961c32b0dd3ccbba15a15129c92f5cdfec475f9862e6937e1c06639 = $this->env->getExtension("native_profiler");
        $__internal_047c364df961c32b0dd3ccbba15a15129c92f5cdfec475f9862e6937e1c06639->enter($__internal_047c364df961c32b0dd3ccbba15a15129c92f5cdfec475f9862e6937e1c06639_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_047c364df961c32b0dd3ccbba15a15129c92f5cdfec475f9862e6937e1c06639->leave($__internal_047c364df961c32b0dd3ccbba15a15129c92f5cdfec475f9862e6937e1c06639_prof);

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
