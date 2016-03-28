<?php

/* CondorsTnMallBundle:Registration:checkEmail.html.twig */
class __TwigTemplate_654b0a7ce600c4f8f32165ff04eb096af884d5fa98ba332c8c64dacb4714b3a5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "CondorsTnMallBundle:Registration:checkEmail.html.twig", 1);
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
        $__internal_918656f34287d9c9173e0b1f670f1e15605aab4e45e50dcf676d4b935c5df156 = $this->env->getExtension("native_profiler");
        $__internal_918656f34287d9c9173e0b1f670f1e15605aab4e45e50dcf676d4b935c5df156->enter($__internal_918656f34287d9c9173e0b1f670f1e15605aab4e45e50dcf676d4b935c5df156_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CondorsTnMallBundle:Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_918656f34287d9c9173e0b1f670f1e15605aab4e45e50dcf676d4b935c5df156->leave($__internal_918656f34287d9c9173e0b1f670f1e15605aab4e45e50dcf676d4b935c5df156_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d2eeb2a7eff000282e9538a3c9c5bfd8d59791ceaf5e64a7e64523af05f31c3a = $this->env->getExtension("native_profiler");
        $__internal_d2eeb2a7eff000282e9538a3c9c5bfd8d59791ceaf5e64a7e64523af05f31c3a->enter($__internal_d2eeb2a7eff000282e9538a3c9c5bfd8d59791ceaf5e64a7e64523af05f31c3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_d2eeb2a7eff000282e9538a3c9c5bfd8d59791ceaf5e64a7e64523af05f31c3a->leave($__internal_d2eeb2a7eff000282e9538a3c9c5bfd8d59791ceaf5e64a7e64523af05f31c3a_prof);

    }

    public function getTemplateName()
    {
        return "CondorsTnMallBundle:Registration:checkEmail.html.twig";
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
