<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_31062fb56fc5ef3877b697bae16c2b891bc0a1d50698bba6d9e29ff1445b4231 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/edit.html.twig", 1);
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
        $__internal_b022c9882d3e22d5830b17b84a1d3dfba191d5f00c737063685bba99618b9fd2 = $this->env->getExtension("native_profiler");
        $__internal_b022c9882d3e22d5830b17b84a1d3dfba191d5f00c737063685bba99618b9fd2->enter($__internal_b022c9882d3e22d5830b17b84a1d3dfba191d5f00c737063685bba99618b9fd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b022c9882d3e22d5830b17b84a1d3dfba191d5f00c737063685bba99618b9fd2->leave($__internal_b022c9882d3e22d5830b17b84a1d3dfba191d5f00c737063685bba99618b9fd2_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b458c65add6964b0a376cba1601e2229398f1505e0dff8ce7529a6411d067c3e = $this->env->getExtension("native_profiler");
        $__internal_b458c65add6964b0a376cba1601e2229398f1505e0dff8ce7529a6411d067c3e->enter($__internal_b458c65add6964b0a376cba1601e2229398f1505e0dff8ce7529a6411d067c3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_b458c65add6964b0a376cba1601e2229398f1505e0dff8ce7529a6411d067c3e->leave($__internal_b458c65add6964b0a376cba1601e2229398f1505e0dff8ce7529a6411d067c3e_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit.html.twig";
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
/* {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
