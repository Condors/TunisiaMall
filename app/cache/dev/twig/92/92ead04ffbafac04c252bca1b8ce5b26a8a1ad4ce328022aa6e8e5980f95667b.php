<?php

/* FOSUserBundle:Registration:checkEmail.html.twig */
class __TwigTemplate_654b0a7ce600c4f8f32165ff04eb096af884d5fa98ba332c8c64dacb4714b3a5 extends Twig_Template
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
        $__internal_ccda864a707d19349b03078e1f8b87e802e002de26eab3a449563760132eb2ee = $this->env->getExtension("native_profiler");
        $__internal_ccda864a707d19349b03078e1f8b87e802e002de26eab3a449563760132eb2ee->enter($__internal_ccda864a707d19349b03078e1f8b87e802e002de26eab3a449563760132eb2ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ccda864a707d19349b03078e1f8b87e802e002de26eab3a449563760132eb2ee->leave($__internal_ccda864a707d19349b03078e1f8b87e802e002de26eab3a449563760132eb2ee_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b9d48aa8f3d4ee9c05d51b00c7fd93093866a41bc22e1b6d9b8219aa8449320e = $this->env->getExtension("native_profiler");
        $__internal_b9d48aa8f3d4ee9c05d51b00c7fd93093866a41bc22e1b6d9b8219aa8449320e->enter($__internal_b9d48aa8f3d4ee9c05d51b00c7fd93093866a41bc22e1b6d9b8219aa8449320e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_b9d48aa8f3d4ee9c05d51b00c7fd93093866a41bc22e1b6d9b8219aa8449320e->leave($__internal_b9d48aa8f3d4ee9c05d51b00c7fd93093866a41bc22e1b6d9b8219aa8449320e_prof);

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
