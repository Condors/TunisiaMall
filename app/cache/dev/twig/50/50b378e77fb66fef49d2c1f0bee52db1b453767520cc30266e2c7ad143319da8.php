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
        $__internal_509e84aeaf055e85addf0f43946d71e002a0c219fe1516796ef0dca9870d9fce = $this->env->getExtension("native_profiler");
        $__internal_509e84aeaf055e85addf0f43946d71e002a0c219fe1516796ef0dca9870d9fce->enter($__internal_509e84aeaf055e85addf0f43946d71e002a0c219fe1516796ef0dca9870d9fce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_509e84aeaf055e85addf0f43946d71e002a0c219fe1516796ef0dca9870d9fce->leave($__internal_509e84aeaf055e85addf0f43946d71e002a0c219fe1516796ef0dca9870d9fce_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d28db2e96a10d5b69abc3b23f3f85d2c68939ae412fa64283bbd86fa620bbcca = $this->env->getExtension("native_profiler");
        $__internal_d28db2e96a10d5b69abc3b23f3f85d2c68939ae412fa64283bbd86fa620bbcca->enter($__internal_d28db2e96a10d5b69abc3b23f3f85d2c68939ae412fa64283bbd86fa620bbcca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_d28db2e96a10d5b69abc3b23f3f85d2c68939ae412fa64283bbd86fa620bbcca->leave($__internal_d28db2e96a10d5b69abc3b23f3f85d2c68939ae412fa64283bbd86fa620bbcca_prof);

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
