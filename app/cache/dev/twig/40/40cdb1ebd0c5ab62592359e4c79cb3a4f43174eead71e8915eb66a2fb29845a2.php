<?php

/* @FOSUser/Resetting/checkEmail.html.twig */
class __TwigTemplate_842698d8bcdefdc11b691650b98485028745dc2a6e352b4cbe8e7a307fd58e2e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/checkEmail.html.twig", 1);
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
        $__internal_5067e25fc1257d80a2cec22e77010b5818e9e9b50a6180e0196a4bf64a695353 = $this->env->getExtension("native_profiler");
        $__internal_5067e25fc1257d80a2cec22e77010b5818e9e9b50a6180e0196a4bf64a695353->enter($__internal_5067e25fc1257d80a2cec22e77010b5818e9e9b50a6180e0196a4bf64a695353_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5067e25fc1257d80a2cec22e77010b5818e9e9b50a6180e0196a4bf64a695353->leave($__internal_5067e25fc1257d80a2cec22e77010b5818e9e9b50a6180e0196a4bf64a695353_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9312dd25bd85cefaddb182cfb198f3de7204df7caec40dec148f78411a4cdb55 = $this->env->getExtension("native_profiler");
        $__internal_9312dd25bd85cefaddb182cfb198f3de7204df7caec40dec148f78411a4cdb55->enter($__internal_9312dd25bd85cefaddb182cfb198f3de7204df7caec40dec148f78411a4cdb55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_9312dd25bd85cefaddb182cfb198f3de7204df7caec40dec148f78411a4cdb55->leave($__internal_9312dd25bd85cefaddb182cfb198f3de7204df7caec40dec148f78411a4cdb55_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/checkEmail.html.twig";
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
