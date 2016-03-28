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
        $__internal_cc0a2f6909f100be5012fefbed60ee4b13785eca5ec379ae437f6fd1021cf507 = $this->env->getExtension("native_profiler");
        $__internal_cc0a2f6909f100be5012fefbed60ee4b13785eca5ec379ae437f6fd1021cf507->enter($__internal_cc0a2f6909f100be5012fefbed60ee4b13785eca5ec379ae437f6fd1021cf507_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_cc0a2f6909f100be5012fefbed60ee4b13785eca5ec379ae437f6fd1021cf507->leave($__internal_cc0a2f6909f100be5012fefbed60ee4b13785eca5ec379ae437f6fd1021cf507_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_9d169947e3dc2119ecda46d15fed5ebeac9b1d186149fe904cb13297f948e253 = $this->env->getExtension("native_profiler");
        $__internal_9d169947e3dc2119ecda46d15fed5ebeac9b1d186149fe904cb13297f948e253->enter($__internal_9d169947e3dc2119ecda46d15fed5ebeac9b1d186149fe904cb13297f948e253_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_9d169947e3dc2119ecda46d15fed5ebeac9b1d186149fe904cb13297f948e253->leave($__internal_9d169947e3dc2119ecda46d15fed5ebeac9b1d186149fe904cb13297f948e253_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_65393f3ca4b0e2b1161f015a1bddd70a6e1e8360e2f5fa22a9d990fe86cf8105 = $this->env->getExtension("native_profiler");
        $__internal_65393f3ca4b0e2b1161f015a1bddd70a6e1e8360e2f5fa22a9d990fe86cf8105->enter($__internal_65393f3ca4b0e2b1161f015a1bddd70a6e1e8360e2f5fa22a9d990fe86cf8105_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_65393f3ca4b0e2b1161f015a1bddd70a6e1e8360e2f5fa22a9d990fe86cf8105->leave($__internal_65393f3ca4b0e2b1161f015a1bddd70a6e1e8360e2f5fa22a9d990fe86cf8105_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_367a333584e3b6740512ff5a165632e3162103944e7af10c04315b386b8238bb = $this->env->getExtension("native_profiler");
        $__internal_367a333584e3b6740512ff5a165632e3162103944e7af10c04315b386b8238bb->enter($__internal_367a333584e3b6740512ff5a165632e3162103944e7af10c04315b386b8238bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_367a333584e3b6740512ff5a165632e3162103944e7af10c04315b386b8238bb->leave($__internal_367a333584e3b6740512ff5a165632e3162103944e7af10c04315b386b8238bb_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b056c93f0e76c96aa5519ca032edeab1789052ca6bd7cb83ec5a9941de811a63 = $this->env->getExtension("native_profiler");
        $__internal_b056c93f0e76c96aa5519ca032edeab1789052ca6bd7cb83ec5a9941de811a63->enter($__internal_b056c93f0e76c96aa5519ca032edeab1789052ca6bd7cb83ec5a9941de811a63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_b056c93f0e76c96aa5519ca032edeab1789052ca6bd7cb83ec5a9941de811a63->leave($__internal_b056c93f0e76c96aa5519ca032edeab1789052ca6bd7cb83ec5a9941de811a63_prof);

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
