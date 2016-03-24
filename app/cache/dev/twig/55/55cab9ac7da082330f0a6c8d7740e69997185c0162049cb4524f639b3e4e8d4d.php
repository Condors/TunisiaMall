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
        $__internal_f07639084fe4eedf1cbcd1b96a1fe8b7b76bd1277aaba054cc5faa8124df3f14 = $this->env->getExtension("native_profiler");
        $__internal_f07639084fe4eedf1cbcd1b96a1fe8b7b76bd1277aaba054cc5faa8124df3f14->enter($__internal_f07639084fe4eedf1cbcd1b96a1fe8b7b76bd1277aaba054cc5faa8124df3f14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f07639084fe4eedf1cbcd1b96a1fe8b7b76bd1277aaba054cc5faa8124df3f14->leave($__internal_f07639084fe4eedf1cbcd1b96a1fe8b7b76bd1277aaba054cc5faa8124df3f14_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9bdac756622dc644e63f4032883aa0d762bf1368e39760a0dcfae9a1332bb3ea = $this->env->getExtension("native_profiler");
        $__internal_9bdac756622dc644e63f4032883aa0d762bf1368e39760a0dcfae9a1332bb3ea->enter($__internal_9bdac756622dc644e63f4032883aa0d762bf1368e39760a0dcfae9a1332bb3ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_9bdac756622dc644e63f4032883aa0d762bf1368e39760a0dcfae9a1332bb3ea->leave($__internal_9bdac756622dc644e63f4032883aa0d762bf1368e39760a0dcfae9a1332bb3ea_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_441902131c1191b248a0046ff507881656fa158aaa527cd29686c0eec6504e28 = $this->env->getExtension("native_profiler");
        $__internal_441902131c1191b248a0046ff507881656fa158aaa527cd29686c0eec6504e28->enter($__internal_441902131c1191b248a0046ff507881656fa158aaa527cd29686c0eec6504e28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_441902131c1191b248a0046ff507881656fa158aaa527cd29686c0eec6504e28->leave($__internal_441902131c1191b248a0046ff507881656fa158aaa527cd29686c0eec6504e28_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_074c68bfaeb687856f53ae44969048cf5ae3e672e99209d2a62120ffad080343 = $this->env->getExtension("native_profiler");
        $__internal_074c68bfaeb687856f53ae44969048cf5ae3e672e99209d2a62120ffad080343->enter($__internal_074c68bfaeb687856f53ae44969048cf5ae3e672e99209d2a62120ffad080343_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_074c68bfaeb687856f53ae44969048cf5ae3e672e99209d2a62120ffad080343->leave($__internal_074c68bfaeb687856f53ae44969048cf5ae3e672e99209d2a62120ffad080343_prof);

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
