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
        $__internal_65c2b3b16f324329219279bccd2276af65a19d68255b18aabafbf8f83273efa6 = $this->env->getExtension("native_profiler");
        $__internal_65c2b3b16f324329219279bccd2276af65a19d68255b18aabafbf8f83273efa6->enter($__internal_65c2b3b16f324329219279bccd2276af65a19d68255b18aabafbf8f83273efa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_65c2b3b16f324329219279bccd2276af65a19d68255b18aabafbf8f83273efa6->leave($__internal_65c2b3b16f324329219279bccd2276af65a19d68255b18aabafbf8f83273efa6_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_71d31d477933bba065fd180c1cafd6e337f0f31d248d59e8254780b70205220d = $this->env->getExtension("native_profiler");
        $__internal_71d31d477933bba065fd180c1cafd6e337f0f31d248d59e8254780b70205220d->enter($__internal_71d31d477933bba065fd180c1cafd6e337f0f31d248d59e8254780b70205220d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_71d31d477933bba065fd180c1cafd6e337f0f31d248d59e8254780b70205220d->leave($__internal_71d31d477933bba065fd180c1cafd6e337f0f31d248d59e8254780b70205220d_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_36785c6eee392249d2a7b1dd6d3cac435e604567e1056e3a80060deff7bc5cfd = $this->env->getExtension("native_profiler");
        $__internal_36785c6eee392249d2a7b1dd6d3cac435e604567e1056e3a80060deff7bc5cfd->enter($__internal_36785c6eee392249d2a7b1dd6d3cac435e604567e1056e3a80060deff7bc5cfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_36785c6eee392249d2a7b1dd6d3cac435e604567e1056e3a80060deff7bc5cfd->leave($__internal_36785c6eee392249d2a7b1dd6d3cac435e604567e1056e3a80060deff7bc5cfd_prof);

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
