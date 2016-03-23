<?php

/* @FOSUser/Registration/checkEmail.html.twig */
class __TwigTemplate_82a8060a2a5628d8978e420eb5f2eb4d7c4f2ef8a40136723f1c7c9f17dc0308 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/checkEmail.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fe28af2beb30ec71c9b445cfb4e88268cb9e3b9282e5b093937aca6d9317664a = $this->env->getExtension("native_profiler");
        $__internal_fe28af2beb30ec71c9b445cfb4e88268cb9e3b9282e5b093937aca6d9317664a->enter($__internal_fe28af2beb30ec71c9b445cfb4e88268cb9e3b9282e5b093937aca6d9317664a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fe28af2beb30ec71c9b445cfb4e88268cb9e3b9282e5b093937aca6d9317664a->leave($__internal_fe28af2beb30ec71c9b445cfb4e88268cb9e3b9282e5b093937aca6d9317664a_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_92de087e484c134971d26082665f076608a7f8d9c3d8e13ad5943f6396320e1b = $this->env->getExtension("native_profiler");
        $__internal_92de087e484c134971d26082665f076608a7f8d9c3d8e13ad5943f6396320e1b->enter($__internal_92de087e484c134971d26082665f076608a7f8d9c3d8e13ad5943f6396320e1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_92de087e484c134971d26082665f076608a7f8d9c3d8e13ad5943f6396320e1b->leave($__internal_92de087e484c134971d26082665f076608a7f8d9c3d8e13ad5943f6396320e1b_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
