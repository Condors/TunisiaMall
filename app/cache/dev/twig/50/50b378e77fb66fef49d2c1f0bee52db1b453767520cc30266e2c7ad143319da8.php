<?php

/* FOSUserBundle:Resetting:checkEmail.html.twig */
class __TwigTemplate_2d72e9d57d21c3eb8d25f69f6df2c76c3e2f1694d25cf545955c9b8b76038dd0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:checkEmail.html.twig", 1);
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
        $__internal_e9af214b77b20a516ee8eb5658e6cd1ef8abdd6e7c2307c801faed7287204adb = $this->env->getExtension("native_profiler");
        $__internal_e9af214b77b20a516ee8eb5658e6cd1ef8abdd6e7c2307c801faed7287204adb->enter($__internal_e9af214b77b20a516ee8eb5658e6cd1ef8abdd6e7c2307c801faed7287204adb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e9af214b77b20a516ee8eb5658e6cd1ef8abdd6e7c2307c801faed7287204adb->leave($__internal_e9af214b77b20a516ee8eb5658e6cd1ef8abdd6e7c2307c801faed7287204adb_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_63f95a60a4e83cc77adb67e75738f9de330e4cf0b60a545be7e5784337cb96de = $this->env->getExtension("native_profiler");
        $__internal_63f95a60a4e83cc77adb67e75738f9de330e4cf0b60a545be7e5784337cb96de->enter($__internal_63f95a60a4e83cc77adb67e75738f9de330e4cf0b60a545be7e5784337cb96de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_63f95a60a4e83cc77adb67e75738f9de330e4cf0b60a545be7e5784337cb96de->leave($__internal_63f95a60a4e83cc77adb67e75738f9de330e4cf0b60a545be7e5784337cb96de_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>*/
/* {{ 'resetting.check_email'|trans({'%email%': email}) }}*/
/* </p>*/
/* {% endblock %}*/
/* */
