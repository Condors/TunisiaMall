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
        $__internal_c16828659dc39f0f2357fe08fea0cecc0670a748be2a7bdcea7e4f2f846b27c1 = $this->env->getExtension("native_profiler");
        $__internal_c16828659dc39f0f2357fe08fea0cecc0670a748be2a7bdcea7e4f2f846b27c1->enter($__internal_c16828659dc39f0f2357fe08fea0cecc0670a748be2a7bdcea7e4f2f846b27c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c16828659dc39f0f2357fe08fea0cecc0670a748be2a7bdcea7e4f2f846b27c1->leave($__internal_c16828659dc39f0f2357fe08fea0cecc0670a748be2a7bdcea7e4f2f846b27c1_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0930c71476aa78e920ebb5640b335c074e73948ae21955f8fe9abb41e8047e78 = $this->env->getExtension("native_profiler");
        $__internal_0930c71476aa78e920ebb5640b335c074e73948ae21955f8fe9abb41e8047e78->enter($__internal_0930c71476aa78e920ebb5640b335c074e73948ae21955f8fe9abb41e8047e78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_0930c71476aa78e920ebb5640b335c074e73948ae21955f8fe9abb41e8047e78->leave($__internal_0930c71476aa78e920ebb5640b335c074e73948ae21955f8fe9abb41e8047e78_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_67e0d127295df97f3e8e6d7b746a4241b031c4995c4d9ad2c8bbc8ff8f3de4a5 = $this->env->getExtension("native_profiler");
        $__internal_67e0d127295df97f3e8e6d7b746a4241b031c4995c4d9ad2c8bbc8ff8f3de4a5->enter($__internal_67e0d127295df97f3e8e6d7b746a4241b031c4995c4d9ad2c8bbc8ff8f3de4a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_67e0d127295df97f3e8e6d7b746a4241b031c4995c4d9ad2c8bbc8ff8f3de4a5->leave($__internal_67e0d127295df97f3e8e6d7b746a4241b031c4995c4d9ad2c8bbc8ff8f3de4a5_prof);

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
