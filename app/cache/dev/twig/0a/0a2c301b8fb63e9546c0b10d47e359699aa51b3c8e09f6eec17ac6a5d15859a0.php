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
        $__internal_95e2758a6611bb2960e384e1f091837dd58e48824545161985696ad9c7d71da5 = $this->env->getExtension("native_profiler");
        $__internal_95e2758a6611bb2960e384e1f091837dd58e48824545161985696ad9c7d71da5->enter($__internal_95e2758a6611bb2960e384e1f091837dd58e48824545161985696ad9c7d71da5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_95e2758a6611bb2960e384e1f091837dd58e48824545161985696ad9c7d71da5->leave($__internal_95e2758a6611bb2960e384e1f091837dd58e48824545161985696ad9c7d71da5_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_21d88fe5d43a6d7eb0893fc98ecbf19e2b61c1f8a5f70eb36434063de035ede4 = $this->env->getExtension("native_profiler");
        $__internal_21d88fe5d43a6d7eb0893fc98ecbf19e2b61c1f8a5f70eb36434063de035ede4->enter($__internal_21d88fe5d43a6d7eb0893fc98ecbf19e2b61c1f8a5f70eb36434063de035ede4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_21d88fe5d43a6d7eb0893fc98ecbf19e2b61c1f8a5f70eb36434063de035ede4->leave($__internal_21d88fe5d43a6d7eb0893fc98ecbf19e2b61c1f8a5f70eb36434063de035ede4_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_149a9b36238b22397ac1023cff21edb4f5508487d96b138b5e10400c66354418 = $this->env->getExtension("native_profiler");
        $__internal_149a9b36238b22397ac1023cff21edb4f5508487d96b138b5e10400c66354418->enter($__internal_149a9b36238b22397ac1023cff21edb4f5508487d96b138b5e10400c66354418_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_149a9b36238b22397ac1023cff21edb4f5508487d96b138b5e10400c66354418->leave($__internal_149a9b36238b22397ac1023cff21edb4f5508487d96b138b5e10400c66354418_prof);

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
