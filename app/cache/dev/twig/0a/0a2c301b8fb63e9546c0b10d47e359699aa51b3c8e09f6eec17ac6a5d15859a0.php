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
        $__internal_d093c6e0452612139ace57e8e83ec29d8465dd0781239bcc8037430d3a079de7 = $this->env->getExtension("native_profiler");
        $__internal_d093c6e0452612139ace57e8e83ec29d8465dd0781239bcc8037430d3a079de7->enter($__internal_d093c6e0452612139ace57e8e83ec29d8465dd0781239bcc8037430d3a079de7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d093c6e0452612139ace57e8e83ec29d8465dd0781239bcc8037430d3a079de7->leave($__internal_d093c6e0452612139ace57e8e83ec29d8465dd0781239bcc8037430d3a079de7_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_381f841947c1bba53a98a31a706be29ca14981c2fcfc75d505fc0725169b1708 = $this->env->getExtension("native_profiler");
        $__internal_381f841947c1bba53a98a31a706be29ca14981c2fcfc75d505fc0725169b1708->enter($__internal_381f841947c1bba53a98a31a706be29ca14981c2fcfc75d505fc0725169b1708_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_381f841947c1bba53a98a31a706be29ca14981c2fcfc75d505fc0725169b1708->leave($__internal_381f841947c1bba53a98a31a706be29ca14981c2fcfc75d505fc0725169b1708_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_716c65fccd7afd42eab05d92abfd57ac7ae520ce13a4b3d2c8410b3e2e36a8a6 = $this->env->getExtension("native_profiler");
        $__internal_716c65fccd7afd42eab05d92abfd57ac7ae520ce13a4b3d2c8410b3e2e36a8a6->enter($__internal_716c65fccd7afd42eab05d92abfd57ac7ae520ce13a4b3d2c8410b3e2e36a8a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_716c65fccd7afd42eab05d92abfd57ac7ae520ce13a4b3d2c8410b3e2e36a8a6->leave($__internal_716c65fccd7afd42eab05d92abfd57ac7ae520ce13a4b3d2c8410b3e2e36a8a6_prof);

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
