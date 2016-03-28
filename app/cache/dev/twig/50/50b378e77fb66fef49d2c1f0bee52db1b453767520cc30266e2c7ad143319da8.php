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
        $__internal_6e9e61e2bd4ab7c59add41459a16588fcd5127ff99dcaca6e6a2799826b93fdc = $this->env->getExtension("native_profiler");
        $__internal_6e9e61e2bd4ab7c59add41459a16588fcd5127ff99dcaca6e6a2799826b93fdc->enter($__internal_6e9e61e2bd4ab7c59add41459a16588fcd5127ff99dcaca6e6a2799826b93fdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6e9e61e2bd4ab7c59add41459a16588fcd5127ff99dcaca6e6a2799826b93fdc->leave($__internal_6e9e61e2bd4ab7c59add41459a16588fcd5127ff99dcaca6e6a2799826b93fdc_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fed2a96098ed878fefa2df2cc2cc95bf8b3fed889e3016d263f65d1b9c87ac6c = $this->env->getExtension("native_profiler");
        $__internal_fed2a96098ed878fefa2df2cc2cc95bf8b3fed889e3016d263f65d1b9c87ac6c->enter($__internal_fed2a96098ed878fefa2df2cc2cc95bf8b3fed889e3016d263f65d1b9c87ac6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_fed2a96098ed878fefa2df2cc2cc95bf8b3fed889e3016d263f65d1b9c87ac6c->leave($__internal_fed2a96098ed878fefa2df2cc2cc95bf8b3fed889e3016d263f65d1b9c87ac6c_prof);

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
