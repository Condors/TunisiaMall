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
        $__internal_83b8e60bb2680e81ef12e5c1290884638281f45be63a8229495c1ac3e88be3a6 = $this->env->getExtension("native_profiler");
        $__internal_83b8e60bb2680e81ef12e5c1290884638281f45be63a8229495c1ac3e88be3a6->enter($__internal_83b8e60bb2680e81ef12e5c1290884638281f45be63a8229495c1ac3e88be3a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_83b8e60bb2680e81ef12e5c1290884638281f45be63a8229495c1ac3e88be3a6->leave($__internal_83b8e60bb2680e81ef12e5c1290884638281f45be63a8229495c1ac3e88be3a6_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_35da6aade7e5ce2d7ffc8e7bc56f13338eed096aad19f927d245fdb283c66b98 = $this->env->getExtension("native_profiler");
        $__internal_35da6aade7e5ce2d7ffc8e7bc56f13338eed096aad19f927d245fdb283c66b98->enter($__internal_35da6aade7e5ce2d7ffc8e7bc56f13338eed096aad19f927d245fdb283c66b98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_35da6aade7e5ce2d7ffc8e7bc56f13338eed096aad19f927d245fdb283c66b98->leave($__internal_35da6aade7e5ce2d7ffc8e7bc56f13338eed096aad19f927d245fdb283c66b98_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_10617c8c36f4d6afecba86420c3acbdbd28bb01339eaf312e9d7fb430b98cf64 = $this->env->getExtension("native_profiler");
        $__internal_10617c8c36f4d6afecba86420c3acbdbd28bb01339eaf312e9d7fb430b98cf64->enter($__internal_10617c8c36f4d6afecba86420c3acbdbd28bb01339eaf312e9d7fb430b98cf64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_10617c8c36f4d6afecba86420c3acbdbd28bb01339eaf312e9d7fb430b98cf64->leave($__internal_10617c8c36f4d6afecba86420c3acbdbd28bb01339eaf312e9d7fb430b98cf64_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_7611935ab1b0b97ba31b90a6f63cfc78d506e9e45f6040590126c1d66009aa10 = $this->env->getExtension("native_profiler");
        $__internal_7611935ab1b0b97ba31b90a6f63cfc78d506e9e45f6040590126c1d66009aa10->enter($__internal_7611935ab1b0b97ba31b90a6f63cfc78d506e9e45f6040590126c1d66009aa10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_7611935ab1b0b97ba31b90a6f63cfc78d506e9e45f6040590126c1d66009aa10->leave($__internal_7611935ab1b0b97ba31b90a6f63cfc78d506e9e45f6040590126c1d66009aa10_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_be02eae4d5e8c868f8d1aa0f04d7869d7bf3206145d64d23ea2585b87c3e1777 = $this->env->getExtension("native_profiler");
        $__internal_be02eae4d5e8c868f8d1aa0f04d7869d7bf3206145d64d23ea2585b87c3e1777->enter($__internal_be02eae4d5e8c868f8d1aa0f04d7869d7bf3206145d64d23ea2585b87c3e1777_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_be02eae4d5e8c868f8d1aa0f04d7869d7bf3206145d64d23ea2585b87c3e1777->leave($__internal_be02eae4d5e8c868f8d1aa0f04d7869d7bf3206145d64d23ea2585b87c3e1777_prof);

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
