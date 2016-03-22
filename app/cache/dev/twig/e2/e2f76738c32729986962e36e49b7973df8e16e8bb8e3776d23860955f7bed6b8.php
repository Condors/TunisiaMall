<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_0530c21eb5f2ed8ee79fa7af766fc3ce4bebaf1136b06c6a07db253c3e6afd5b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_6c1e4bc07a9e6c8bb3438a03f3457f781af97377bc82900ce0c5a6e994938d08 = $this->env->getExtension("native_profiler");
        $__internal_6c1e4bc07a9e6c8bb3438a03f3457f781af97377bc82900ce0c5a6e994938d08->enter($__internal_6c1e4bc07a9e6c8bb3438a03f3457f781af97377bc82900ce0c5a6e994938d08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6c1e4bc07a9e6c8bb3438a03f3457f781af97377bc82900ce0c5a6e994938d08->leave($__internal_6c1e4bc07a9e6c8bb3438a03f3457f781af97377bc82900ce0c5a6e994938d08_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_dc0947359e2bd12d47f55a4344650da1221bf926a000586081051e822fe7270a = $this->env->getExtension("native_profiler");
        $__internal_dc0947359e2bd12d47f55a4344650da1221bf926a000586081051e822fe7270a->enter($__internal_dc0947359e2bd12d47f55a4344650da1221bf926a000586081051e822fe7270a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_dc0947359e2bd12d47f55a4344650da1221bf926a000586081051e822fe7270a->leave($__internal_dc0947359e2bd12d47f55a4344650da1221bf926a000586081051e822fe7270a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
