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
        $__internal_da4ee0bd2cceecace37e50af9181fbf7de12a8d4d4111787f3aac3b25c8dc537 = $this->env->getExtension("native_profiler");
        $__internal_da4ee0bd2cceecace37e50af9181fbf7de12a8d4d4111787f3aac3b25c8dc537->enter($__internal_da4ee0bd2cceecace37e50af9181fbf7de12a8d4d4111787f3aac3b25c8dc537_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_da4ee0bd2cceecace37e50af9181fbf7de12a8d4d4111787f3aac3b25c8dc537->leave($__internal_da4ee0bd2cceecace37e50af9181fbf7de12a8d4d4111787f3aac3b25c8dc537_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a92c50877ebeb36af476b3927b571d5f19344bfc8c723f2aaf47920287ae76ed = $this->env->getExtension("native_profiler");
        $__internal_a92c50877ebeb36af476b3927b571d5f19344bfc8c723f2aaf47920287ae76ed->enter($__internal_a92c50877ebeb36af476b3927b571d5f19344bfc8c723f2aaf47920287ae76ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_a92c50877ebeb36af476b3927b571d5f19344bfc8c723f2aaf47920287ae76ed->leave($__internal_a92c50877ebeb36af476b3927b571d5f19344bfc8c723f2aaf47920287ae76ed_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_ff6c5fa00efe70a7aab7a39a636b448350e4f3108b9041a916d8cc9647c58261 = $this->env->getExtension("native_profiler");
        $__internal_ff6c5fa00efe70a7aab7a39a636b448350e4f3108b9041a916d8cc9647c58261->enter($__internal_ff6c5fa00efe70a7aab7a39a636b448350e4f3108b9041a916d8cc9647c58261_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_ff6c5fa00efe70a7aab7a39a636b448350e4f3108b9041a916d8cc9647c58261->leave($__internal_ff6c5fa00efe70a7aab7a39a636b448350e4f3108b9041a916d8cc9647c58261_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_9a2f83219d32d9bd1d81aa8f3e326c2518ca5786c18efc5384e2557de92c53cf = $this->env->getExtension("native_profiler");
        $__internal_9a2f83219d32d9bd1d81aa8f3e326c2518ca5786c18efc5384e2557de92c53cf->enter($__internal_9a2f83219d32d9bd1d81aa8f3e326c2518ca5786c18efc5384e2557de92c53cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_9a2f83219d32d9bd1d81aa8f3e326c2518ca5786c18efc5384e2557de92c53cf->leave($__internal_9a2f83219d32d9bd1d81aa8f3e326c2518ca5786c18efc5384e2557de92c53cf_prof);

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
