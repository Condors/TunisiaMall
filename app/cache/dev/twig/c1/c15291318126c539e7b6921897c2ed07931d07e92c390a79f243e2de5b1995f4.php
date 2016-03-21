<?php

/* FOSUserBundle:Registration:checkEmail.html.twig */
class __TwigTemplate_aa5cca94f63ae289a03a9831126d36a164145a571b964de9eb63948ae5116f86 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:checkEmail.html.twig", 1);
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
        $__internal_201bb7f067e35b6b24e3623c3c5e50a16bcb68d09a1889c84cec797b4422a7ef = $this->env->getExtension("native_profiler");
        $__internal_201bb7f067e35b6b24e3623c3c5e50a16bcb68d09a1889c84cec797b4422a7ef->enter($__internal_201bb7f067e35b6b24e3623c3c5e50a16bcb68d09a1889c84cec797b4422a7ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_201bb7f067e35b6b24e3623c3c5e50a16bcb68d09a1889c84cec797b4422a7ef->leave($__internal_201bb7f067e35b6b24e3623c3c5e50a16bcb68d09a1889c84cec797b4422a7ef_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2d1d2075025c3b490933525e103fe9e84a7bc3b7646878418fbec3802b3739f1 = $this->env->getExtension("native_profiler");
        $__internal_2d1d2075025c3b490933525e103fe9e84a7bc3b7646878418fbec3802b3739f1->enter($__internal_2d1d2075025c3b490933525e103fe9e84a7bc3b7646878418fbec3802b3739f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_2d1d2075025c3b490933525e103fe9e84a7bc3b7646878418fbec3802b3739f1->leave($__internal_2d1d2075025c3b490933525e103fe9e84a7bc3b7646878418fbec3802b3739f1_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:checkEmail.html.twig";
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
