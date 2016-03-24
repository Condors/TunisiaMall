<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_bc4075140d293f4bbf551d640d2fd432e45af71edef4cedb217ec1fb29eb664c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_163fc57e1480c379226f14e669143f6188a1ba4b1ec43789b424e00a70e140a8 = $this->env->getExtension("native_profiler");
        $__internal_163fc57e1480c379226f14e669143f6188a1ba4b1ec43789b424e00a70e140a8->enter($__internal_163fc57e1480c379226f14e669143f6188a1ba4b1ec43789b424e00a70e140a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_163fc57e1480c379226f14e669143f6188a1ba4b1ec43789b424e00a70e140a8->leave($__internal_163fc57e1480c379226f14e669143f6188a1ba4b1ec43789b424e00a70e140a8_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_91d928754f2c491801e1463f1d14dadd2467e4a9c6d154ae44ab04f59310c3ed = $this->env->getExtension("native_profiler");
        $__internal_91d928754f2c491801e1463f1d14dadd2467e4a9c6d154ae44ab04f59310c3ed->enter($__internal_91d928754f2c491801e1463f1d14dadd2467e4a9c6d154ae44ab04f59310c3ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_91d928754f2c491801e1463f1d14dadd2467e4a9c6d154ae44ab04f59310c3ed->leave($__internal_91d928754f2c491801e1463f1d14dadd2467e4a9c6d154ae44ab04f59310c3ed_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_09c7202b3e9f72ea7b8b804e93b2f08b906864d86a44f495a491400fd85e05d5 = $this->env->getExtension("native_profiler");
        $__internal_09c7202b3e9f72ea7b8b804e93b2f08b906864d86a44f495a491400fd85e05d5->enter($__internal_09c7202b3e9f72ea7b8b804e93b2f08b906864d86a44f495a491400fd85e05d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_09c7202b3e9f72ea7b8b804e93b2f08b906864d86a44f495a491400fd85e05d5->leave($__internal_09c7202b3e9f72ea7b8b804e93b2f08b906864d86a44f495a491400fd85e05d5_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
