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
        $__internal_c739cc61d3f71ab1090cf4db6d585e8ea825623771055bda70d2696446bf9af1 = $this->env->getExtension("native_profiler");
        $__internal_c739cc61d3f71ab1090cf4db6d585e8ea825623771055bda70d2696446bf9af1->enter($__internal_c739cc61d3f71ab1090cf4db6d585e8ea825623771055bda70d2696446bf9af1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CondorsTnMall/Registration/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c739cc61d3f71ab1090cf4db6d585e8ea825623771055bda70d2696446bf9af1->leave($__internal_c739cc61d3f71ab1090cf4db6d585e8ea825623771055bda70d2696446bf9af1_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7ca9c19330501495148cb95e36f4754cd2bfc7803535f3670d3855f6bd5086db = $this->env->getExtension("native_profiler");
        $__internal_7ca9c19330501495148cb95e36f4754cd2bfc7803535f3670d3855f6bd5086db->enter($__internal_7ca9c19330501495148cb95e36f4754cd2bfc7803535f3670d3855f6bd5086db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_7ca9c19330501495148cb95e36f4754cd2bfc7803535f3670d3855f6bd5086db->leave($__internal_7ca9c19330501495148cb95e36f4754cd2bfc7803535f3670d3855f6bd5086db_prof);

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
