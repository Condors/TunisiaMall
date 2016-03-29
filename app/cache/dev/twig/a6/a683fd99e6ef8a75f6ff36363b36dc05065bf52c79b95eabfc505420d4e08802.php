<?php

/* @FOSUser/Group/edit.html.twig */
class __TwigTemplate_615d022b0413094de65ab85796791c3fdcc4d3b4fe4b3384d4f2f90367e327d7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/edit.html.twig", 1);
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
        $__internal_6397c2f3fbd570b15f5d605221cef0164a0ecb5b4e9730626c355361b35f6598 = $this->env->getExtension("native_profiler");
        $__internal_6397c2f3fbd570b15f5d605221cef0164a0ecb5b4e9730626c355361b35f6598->enter($__internal_6397c2f3fbd570b15f5d605221cef0164a0ecb5b4e9730626c355361b35f6598_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6397c2f3fbd570b15f5d605221cef0164a0ecb5b4e9730626c355361b35f6598->leave($__internal_6397c2f3fbd570b15f5d605221cef0164a0ecb5b4e9730626c355361b35f6598_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_cf06af429f2577454e8c18d494b22aa9e31a83b94eb729e488800ab8d913811e = $this->env->getExtension("native_profiler");
        $__internal_cf06af429f2577454e8c18d494b22aa9e31a83b94eb729e488800ab8d913811e->enter($__internal_cf06af429f2577454e8c18d494b22aa9e31a83b94eb729e488800ab8d913811e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "@FOSUser/Group/edit.html.twig", 4)->display($context);
        
        $__internal_cf06af429f2577454e8c18d494b22aa9e31a83b94eb729e488800ab8d913811e->leave($__internal_cf06af429f2577454e8c18d494b22aa9e31a83b94eb729e488800ab8d913811e_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/edit.html.twig";
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
/* {% include "FOSUserBundle:Group:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
