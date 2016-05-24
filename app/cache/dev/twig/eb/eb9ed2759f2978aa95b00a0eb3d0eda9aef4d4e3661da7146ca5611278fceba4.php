<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_7ba765c6e261a01ce6fca40ec301f19a833049ecd99c8e54339d331651e41e49 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
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
        $__internal_663957c7fa055f2d58c5c47d03b8f568b20a434f6ae274421bc6a9724ccd99ef = $this->env->getExtension("native_profiler");
        $__internal_663957c7fa055f2d58c5c47d03b8f568b20a434f6ae274421bc6a9724ccd99ef->enter($__internal_663957c7fa055f2d58c5c47d03b8f568b20a434f6ae274421bc6a9724ccd99ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_663957c7fa055f2d58c5c47d03b8f568b20a434f6ae274421bc6a9724ccd99ef->leave($__internal_663957c7fa055f2d58c5c47d03b8f568b20a434f6ae274421bc6a9724ccd99ef_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_498631e8f3d85d4c02c01725d7025b335b6ccb405d7fb9682ad66b05df1497a6 = $this->env->getExtension("native_profiler");
        $__internal_498631e8f3d85d4c02c01725d7025b335b6ccb405d7fb9682ad66b05df1497a6->enter($__internal_498631e8f3d85d4c02c01725d7025b335b6ccb405d7fb9682ad66b05df1497a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_498631e8f3d85d4c02c01725d7025b335b6ccb405d7fb9682ad66b05df1497a6->leave($__internal_498631e8f3d85d4c02c01725d7025b335b6ccb405d7fb9682ad66b05df1497a6_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_3a209d7f4e1bd9bbd9aec3c6015287af74f3d4b37f9b0ff4dad3a671510093f5 = $this->env->getExtension("native_profiler");
        $__internal_3a209d7f4e1bd9bbd9aec3c6015287af74f3d4b37f9b0ff4dad3a671510093f5->enter($__internal_3a209d7f4e1bd9bbd9aec3c6015287af74f3d4b37f9b0ff4dad3a671510093f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_3a209d7f4e1bd9bbd9aec3c6015287af74f3d4b37f9b0ff4dad3a671510093f5->leave($__internal_3a209d7f4e1bd9bbd9aec3c6015287af74f3d4b37f9b0ff4dad3a671510093f5_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_2e56093ed30bfb38a582d03ad351275f5a84d336c17a6709d169afb36bf85d30 = $this->env->getExtension("native_profiler");
        $__internal_2e56093ed30bfb38a582d03ad351275f5a84d336c17a6709d169afb36bf85d30->enter($__internal_2e56093ed30bfb38a582d03ad351275f5a84d336c17a6709d169afb36bf85d30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_2e56093ed30bfb38a582d03ad351275f5a84d336c17a6709d169afb36bf85d30->leave($__internal_2e56093ed30bfb38a582d03ad351275f5a84d336c17a6709d169afb36bf85d30_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
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
