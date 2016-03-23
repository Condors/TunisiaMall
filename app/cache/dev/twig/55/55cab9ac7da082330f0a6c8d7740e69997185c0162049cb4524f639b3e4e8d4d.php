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
        $__internal_504861a155d014716e83d3e1399c1650efeb713edc6739d9e5353a79d093d1ef = $this->env->getExtension("native_profiler");
        $__internal_504861a155d014716e83d3e1399c1650efeb713edc6739d9e5353a79d093d1ef->enter($__internal_504861a155d014716e83d3e1399c1650efeb713edc6739d9e5353a79d093d1ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_504861a155d014716e83d3e1399c1650efeb713edc6739d9e5353a79d093d1ef->leave($__internal_504861a155d014716e83d3e1399c1650efeb713edc6739d9e5353a79d093d1ef_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_637ddbd0d04378ba49ac452637009bfc30feadc3262d6a7114f89f965710c55e = $this->env->getExtension("native_profiler");
        $__internal_637ddbd0d04378ba49ac452637009bfc30feadc3262d6a7114f89f965710c55e->enter($__internal_637ddbd0d04378ba49ac452637009bfc30feadc3262d6a7114f89f965710c55e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_637ddbd0d04378ba49ac452637009bfc30feadc3262d6a7114f89f965710c55e->leave($__internal_637ddbd0d04378ba49ac452637009bfc30feadc3262d6a7114f89f965710c55e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_cd15f756e60eacf20081c4da32a46cf249b4ecbb32fce66e68a39241b8425a30 = $this->env->getExtension("native_profiler");
        $__internal_cd15f756e60eacf20081c4da32a46cf249b4ecbb32fce66e68a39241b8425a30->enter($__internal_cd15f756e60eacf20081c4da32a46cf249b4ecbb32fce66e68a39241b8425a30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_cd15f756e60eacf20081c4da32a46cf249b4ecbb32fce66e68a39241b8425a30->leave($__internal_cd15f756e60eacf20081c4da32a46cf249b4ecbb32fce66e68a39241b8425a30_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_5fbe786d2ddca8c16dccb6fde83490d40e651fdfcf9021c12937ebf641b69432 = $this->env->getExtension("native_profiler");
        $__internal_5fbe786d2ddca8c16dccb6fde83490d40e651fdfcf9021c12937ebf641b69432->enter($__internal_5fbe786d2ddca8c16dccb6fde83490d40e651fdfcf9021c12937ebf641b69432_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_5fbe786d2ddca8c16dccb6fde83490d40e651fdfcf9021c12937ebf641b69432->leave($__internal_5fbe786d2ddca8c16dccb6fde83490d40e651fdfcf9021c12937ebf641b69432_prof);

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
