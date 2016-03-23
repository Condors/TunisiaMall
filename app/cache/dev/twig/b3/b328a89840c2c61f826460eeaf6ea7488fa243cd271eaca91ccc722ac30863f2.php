<?php

/* @FOSUser/ChangePassword/changePassword.html.twig */
class __TwigTemplate_f22a80977a78a76e28c2736a8ac62023cee0ff5a75a430fc6be19ccfd23138d9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 1);
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
        $__internal_409f8e9697969081c13f3c58f5324ea0e707010d9f4e97df29996200311156ef = $this->env->getExtension("native_profiler");
        $__internal_409f8e9697969081c13f3c58f5324ea0e707010d9f4e97df29996200311156ef->enter($__internal_409f8e9697969081c13f3c58f5324ea0e707010d9f4e97df29996200311156ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_409f8e9697969081c13f3c58f5324ea0e707010d9f4e97df29996200311156ef->leave($__internal_409f8e9697969081c13f3c58f5324ea0e707010d9f4e97df29996200311156ef_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3dbfe13d7d7a8fdc6daa838b5ab17b7d4ffabf982fc7da037fed1460bf731d4e = $this->env->getExtension("native_profiler");
        $__internal_3dbfe13d7d7a8fdc6daa838b5ab17b7d4ffabf982fc7da037fed1460bf731d4e->enter($__internal_3dbfe13d7d7a8fdc6daa838b5ab17b7d4ffabf982fc7da037fed1460bf731d4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 4)->display($context);
        
        $__internal_3dbfe13d7d7a8fdc6daa838b5ab17b7d4ffabf982fc7da037fed1460bf731d4e->leave($__internal_3dbfe13d7d7a8fdc6daa838b5ab17b7d4ffabf982fc7da037fed1460bf731d4e_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/ChangePassword/changePassword.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:ChangePassword:changePassword_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
