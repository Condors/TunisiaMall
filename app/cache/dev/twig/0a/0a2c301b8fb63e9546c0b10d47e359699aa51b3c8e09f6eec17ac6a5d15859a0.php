<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_eb04fa326b412d00fe2892b60316d420116f92e84c6edd2376a914bb2713a408 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
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
        $__internal_a8dbb0b5b858f484bc8b1b9b5a7bf0414e4f325c98440bf47dcae27946be8ffb = $this->env->getExtension("native_profiler");
        $__internal_a8dbb0b5b858f484bc8b1b9b5a7bf0414e4f325c98440bf47dcae27946be8ffb->enter($__internal_a8dbb0b5b858f484bc8b1b9b5a7bf0414e4f325c98440bf47dcae27946be8ffb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a8dbb0b5b858f484bc8b1b9b5a7bf0414e4f325c98440bf47dcae27946be8ffb->leave($__internal_a8dbb0b5b858f484bc8b1b9b5a7bf0414e4f325c98440bf47dcae27946be8ffb_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b13b2f2d7a0886f693cbd816cd6633c59701e9ed9ced225c9b32b43dfe7bcdad = $this->env->getExtension("native_profiler");
        $__internal_b13b2f2d7a0886f693cbd816cd6633c59701e9ed9ced225c9b32b43dfe7bcdad->enter($__internal_b13b2f2d7a0886f693cbd816cd6633c59701e9ed9ced225c9b32b43dfe7bcdad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_b13b2f2d7a0886f693cbd816cd6633c59701e9ed9ced225c9b32b43dfe7bcdad->leave($__internal_b13b2f2d7a0886f693cbd816cd6633c59701e9ed9ced225c9b32b43dfe7bcdad_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_d447be6d6cfdb656e6f030020c6633d5e2a01d1c9ed30e9d32eb3ed5bff2e1e3 = $this->env->getExtension("native_profiler");
        $__internal_d447be6d6cfdb656e6f030020c6633d5e2a01d1c9ed30e9d32eb3ed5bff2e1e3->enter($__internal_d447be6d6cfdb656e6f030020c6633d5e2a01d1c9ed30e9d32eb3ed5bff2e1e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_d447be6d6cfdb656e6f030020c6633d5e2a01d1c9ed30e9d32eb3ed5bff2e1e3->leave($__internal_d447be6d6cfdb656e6f030020c6633d5e2a01d1c9ed30e9d32eb3ed5bff2e1e3_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
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
