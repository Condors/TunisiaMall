<?php

/* @CondorsTnMall/Registration/checkEmail.html.twig */
class __TwigTemplate_f63804d06cb54a318ab7caeafdbdfa2de452834454c6d8fd393c2eafab224500 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@CondorsTnMall/Registration/checkEmail.html.twig", 1);
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
        $__internal_ff54c7a35d86fee7b5561d7fe4a53bd30716f0f11472d8a40d9873b17358bf8b = $this->env->getExtension("native_profiler");
        $__internal_ff54c7a35d86fee7b5561d7fe4a53bd30716f0f11472d8a40d9873b17358bf8b->enter($__internal_ff54c7a35d86fee7b5561d7fe4a53bd30716f0f11472d8a40d9873b17358bf8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CondorsTnMall/Registration/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ff54c7a35d86fee7b5561d7fe4a53bd30716f0f11472d8a40d9873b17358bf8b->leave($__internal_ff54c7a35d86fee7b5561d7fe4a53bd30716f0f11472d8a40d9873b17358bf8b_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0d5d8f729ecb9ee6cbf3630ed6ec8865d2e50933acea2b984662e7b24eb67734 = $this->env->getExtension("native_profiler");
        $__internal_0d5d8f729ecb9ee6cbf3630ed6ec8865d2e50933acea2b984662e7b24eb67734->enter($__internal_0d5d8f729ecb9ee6cbf3630ed6ec8865d2e50933acea2b984662e7b24eb67734_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_0d5d8f729ecb9ee6cbf3630ed6ec8865d2e50933acea2b984662e7b24eb67734->leave($__internal_0d5d8f729ecb9ee6cbf3630ed6ec8865d2e50933acea2b984662e7b24eb67734_prof);

    }

    public function getTemplateName()
    {
        return "@CondorsTnMall/Registration/checkEmail.html.twig";
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
