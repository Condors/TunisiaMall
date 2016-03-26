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
        $__internal_72d4af89330906dfac62f80c3765d92a8589f1da7c4896a5e0b728c6bce2a872 = $this->env->getExtension("native_profiler");
        $__internal_72d4af89330906dfac62f80c3765d92a8589f1da7c4896a5e0b728c6bce2a872->enter($__internal_72d4af89330906dfac62f80c3765d92a8589f1da7c4896a5e0b728c6bce2a872_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_72d4af89330906dfac62f80c3765d92a8589f1da7c4896a5e0b728c6bce2a872->leave($__internal_72d4af89330906dfac62f80c3765d92a8589f1da7c4896a5e0b728c6bce2a872_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5a44a3cdec8aac6155c2b993c0aa137b9756dcc2baf52a768d9ecef80caca196 = $this->env->getExtension("native_profiler");
        $__internal_5a44a3cdec8aac6155c2b993c0aa137b9756dcc2baf52a768d9ecef80caca196->enter($__internal_5a44a3cdec8aac6155c2b993c0aa137b9756dcc2baf52a768d9ecef80caca196_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_5a44a3cdec8aac6155c2b993c0aa137b9756dcc2baf52a768d9ecef80caca196->leave($__internal_5a44a3cdec8aac6155c2b993c0aa137b9756dcc2baf52a768d9ecef80caca196_prof);

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
