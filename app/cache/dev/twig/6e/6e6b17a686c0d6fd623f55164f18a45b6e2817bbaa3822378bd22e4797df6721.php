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
        $__internal_1c6fe737327bfa82269d891092cfa8e90641e18a1f40be6c9dd5be5ba7b1f418 = $this->env->getExtension("native_profiler");
        $__internal_1c6fe737327bfa82269d891092cfa8e90641e18a1f40be6c9dd5be5ba7b1f418->enter($__internal_1c6fe737327bfa82269d891092cfa8e90641e18a1f40be6c9dd5be5ba7b1f418_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1c6fe737327bfa82269d891092cfa8e90641e18a1f40be6c9dd5be5ba7b1f418->leave($__internal_1c6fe737327bfa82269d891092cfa8e90641e18a1f40be6c9dd5be5ba7b1f418_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_eb44a44a15de703852183065066f2457fa13085fe0905deff2d68da1d94bcccc = $this->env->getExtension("native_profiler");
        $__internal_eb44a44a15de703852183065066f2457fa13085fe0905deff2d68da1d94bcccc->enter($__internal_eb44a44a15de703852183065066f2457fa13085fe0905deff2d68da1d94bcccc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_eb44a44a15de703852183065066f2457fa13085fe0905deff2d68da1d94bcccc->leave($__internal_eb44a44a15de703852183065066f2457fa13085fe0905deff2d68da1d94bcccc_prof);

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
