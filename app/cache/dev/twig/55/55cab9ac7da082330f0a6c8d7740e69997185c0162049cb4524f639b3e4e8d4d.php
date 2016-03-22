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
        $__internal_5d4d1f3bbc45fcf43a1d46ebaa298adc8645a682a2596df7be0bfa685e03ba85 = $this->env->getExtension("native_profiler");
        $__internal_5d4d1f3bbc45fcf43a1d46ebaa298adc8645a682a2596df7be0bfa685e03ba85->enter($__internal_5d4d1f3bbc45fcf43a1d46ebaa298adc8645a682a2596df7be0bfa685e03ba85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5d4d1f3bbc45fcf43a1d46ebaa298adc8645a682a2596df7be0bfa685e03ba85->leave($__internal_5d4d1f3bbc45fcf43a1d46ebaa298adc8645a682a2596df7be0bfa685e03ba85_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d56432390da881026ab4d4a5a033b1056a365cf4e83edd8cc2fcd010c1d04468 = $this->env->getExtension("native_profiler");
        $__internal_d56432390da881026ab4d4a5a033b1056a365cf4e83edd8cc2fcd010c1d04468->enter($__internal_d56432390da881026ab4d4a5a033b1056a365cf4e83edd8cc2fcd010c1d04468_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_d56432390da881026ab4d4a5a033b1056a365cf4e83edd8cc2fcd010c1d04468->leave($__internal_d56432390da881026ab4d4a5a033b1056a365cf4e83edd8cc2fcd010c1d04468_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_822990b3ef054e1e0c14d25f2eadcfaf14eb9e72792e319c9c3eeebefd872f73 = $this->env->getExtension("native_profiler");
        $__internal_822990b3ef054e1e0c14d25f2eadcfaf14eb9e72792e319c9c3eeebefd872f73->enter($__internal_822990b3ef054e1e0c14d25f2eadcfaf14eb9e72792e319c9c3eeebefd872f73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_822990b3ef054e1e0c14d25f2eadcfaf14eb9e72792e319c9c3eeebefd872f73->leave($__internal_822990b3ef054e1e0c14d25f2eadcfaf14eb9e72792e319c9c3eeebefd872f73_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_a15bade189533fa1cc2225286b572e7b93a9d1cbe3a0a5f8c8fa23340d04af34 = $this->env->getExtension("native_profiler");
        $__internal_a15bade189533fa1cc2225286b572e7b93a9d1cbe3a0a5f8c8fa23340d04af34->enter($__internal_a15bade189533fa1cc2225286b572e7b93a9d1cbe3a0a5f8c8fa23340d04af34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_a15bade189533fa1cc2225286b572e7b93a9d1cbe3a0a5f8c8fa23340d04af34->leave($__internal_a15bade189533fa1cc2225286b572e7b93a9d1cbe3a0a5f8c8fa23340d04af34_prof);

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
