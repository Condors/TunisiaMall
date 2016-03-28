<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_a0afe5be1aa10dac41b5758652b97b0029d6be4e732ded3b13ce1111646cf408 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_58e160c4162bed9e79405eaebcef53826d1723d69fc7eb59b3e6d55fdf348d92 = $this->env->getExtension("native_profiler");
        $__internal_58e160c4162bed9e79405eaebcef53826d1723d69fc7eb59b3e6d55fdf348d92->enter($__internal_58e160c4162bed9e79405eaebcef53826d1723d69fc7eb59b3e6d55fdf348d92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_58e160c4162bed9e79405eaebcef53826d1723d69fc7eb59b3e6d55fdf348d92->leave($__internal_58e160c4162bed9e79405eaebcef53826d1723d69fc7eb59b3e6d55fdf348d92_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c18086c6fd077f3540d7b15b597082e8f853603c0563d9c5448eda94e5f9156f = $this->env->getExtension("native_profiler");
        $__internal_c18086c6fd077f3540d7b15b597082e8f853603c0563d9c5448eda94e5f9156f->enter($__internal_c18086c6fd077f3540d7b15b597082e8f853603c0563d9c5448eda94e5f9156f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_c18086c6fd077f3540d7b15b597082e8f853603c0563d9c5448eda94e5f9156f->leave($__internal_c18086c6fd077f3540d7b15b597082e8f853603c0563d9c5448eda94e5f9156f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e9fe5f462e918d883d0c19315d1e96dd00dcbb6079333b28ad6e852d1735efb2 = $this->env->getExtension("native_profiler");
        $__internal_e9fe5f462e918d883d0c19315d1e96dd00dcbb6079333b28ad6e852d1735efb2->enter($__internal_e9fe5f462e918d883d0c19315d1e96dd00dcbb6079333b28ad6e852d1735efb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_e9fe5f462e918d883d0c19315d1e96dd00dcbb6079333b28ad6e852d1735efb2->leave($__internal_e9fe5f462e918d883d0c19315d1e96dd00dcbb6079333b28ad6e852d1735efb2_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_b31aa1893944f7dc3cce73d036c018b03854ac33174fa159f36dedddcafcc178 = $this->env->getExtension("native_profiler");
        $__internal_b31aa1893944f7dc3cce73d036c018b03854ac33174fa159f36dedddcafcc178->enter($__internal_b31aa1893944f7dc3cce73d036c018b03854ac33174fa159f36dedddcafcc178_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_b31aa1893944f7dc3cce73d036c018b03854ac33174fa159f36dedddcafcc178->leave($__internal_b31aa1893944f7dc3cce73d036c018b03854ac33174fa159f36dedddcafcc178_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
