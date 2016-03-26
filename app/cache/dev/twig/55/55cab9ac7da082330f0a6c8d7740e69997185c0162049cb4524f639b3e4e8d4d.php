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
        $__internal_4f4379875f63f2835832bbc1144116e0be006fec80e12d661c0a0ab133302d15 = $this->env->getExtension("native_profiler");
        $__internal_4f4379875f63f2835832bbc1144116e0be006fec80e12d661c0a0ab133302d15->enter($__internal_4f4379875f63f2835832bbc1144116e0be006fec80e12d661c0a0ab133302d15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4f4379875f63f2835832bbc1144116e0be006fec80e12d661c0a0ab133302d15->leave($__internal_4f4379875f63f2835832bbc1144116e0be006fec80e12d661c0a0ab133302d15_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_600af25d4372264524295f77aed6703370b027999821255769586fa997586b43 = $this->env->getExtension("native_profiler");
        $__internal_600af25d4372264524295f77aed6703370b027999821255769586fa997586b43->enter($__internal_600af25d4372264524295f77aed6703370b027999821255769586fa997586b43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_600af25d4372264524295f77aed6703370b027999821255769586fa997586b43->leave($__internal_600af25d4372264524295f77aed6703370b027999821255769586fa997586b43_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b6b8ae630355d2074be6e842c483e3eff86567d69f2c5b024a485b6824c4131c = $this->env->getExtension("native_profiler");
        $__internal_b6b8ae630355d2074be6e842c483e3eff86567d69f2c5b024a485b6824c4131c->enter($__internal_b6b8ae630355d2074be6e842c483e3eff86567d69f2c5b024a485b6824c4131c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_b6b8ae630355d2074be6e842c483e3eff86567d69f2c5b024a485b6824c4131c->leave($__internal_b6b8ae630355d2074be6e842c483e3eff86567d69f2c5b024a485b6824c4131c_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_02c85ba4eab36b306a7bf7c3b017820fb1b360e4729e53f5a79b8e75b97c87c4 = $this->env->getExtension("native_profiler");
        $__internal_02c85ba4eab36b306a7bf7c3b017820fb1b360e4729e53f5a79b8e75b97c87c4->enter($__internal_02c85ba4eab36b306a7bf7c3b017820fb1b360e4729e53f5a79b8e75b97c87c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_02c85ba4eab36b306a7bf7c3b017820fb1b360e4729e53f5a79b8e75b97c87c4->leave($__internal_02c85ba4eab36b306a7bf7c3b017820fb1b360e4729e53f5a79b8e75b97c87c4_prof);

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
