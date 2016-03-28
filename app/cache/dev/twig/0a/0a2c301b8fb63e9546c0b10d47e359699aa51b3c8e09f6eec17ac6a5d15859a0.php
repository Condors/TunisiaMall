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
        $__internal_0bf03880a16e5c08ed34aa2ce549c85dddb8a1131a620241bb1efbc88885b204 = $this->env->getExtension("native_profiler");
        $__internal_0bf03880a16e5c08ed34aa2ce549c85dddb8a1131a620241bb1efbc88885b204->enter($__internal_0bf03880a16e5c08ed34aa2ce549c85dddb8a1131a620241bb1efbc88885b204_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0bf03880a16e5c08ed34aa2ce549c85dddb8a1131a620241bb1efbc88885b204->leave($__internal_0bf03880a16e5c08ed34aa2ce549c85dddb8a1131a620241bb1efbc88885b204_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_55342ac89f54f810fdc9b3ad83ceb9cc4fd5d9e623cf61c988069f0adb5bc6ef = $this->env->getExtension("native_profiler");
        $__internal_55342ac89f54f810fdc9b3ad83ceb9cc4fd5d9e623cf61c988069f0adb5bc6ef->enter($__internal_55342ac89f54f810fdc9b3ad83ceb9cc4fd5d9e623cf61c988069f0adb5bc6ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_55342ac89f54f810fdc9b3ad83ceb9cc4fd5d9e623cf61c988069f0adb5bc6ef->leave($__internal_55342ac89f54f810fdc9b3ad83ceb9cc4fd5d9e623cf61c988069f0adb5bc6ef_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_b452b0a8a9fa9d0322332d5cb67f183c5be302d7e7a213b327829ef290a16bcd = $this->env->getExtension("native_profiler");
        $__internal_b452b0a8a9fa9d0322332d5cb67f183c5be302d7e7a213b327829ef290a16bcd->enter($__internal_b452b0a8a9fa9d0322332d5cb67f183c5be302d7e7a213b327829ef290a16bcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_b452b0a8a9fa9d0322332d5cb67f183c5be302d7e7a213b327829ef290a16bcd->leave($__internal_b452b0a8a9fa9d0322332d5cb67f183c5be302d7e7a213b327829ef290a16bcd_prof);

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
