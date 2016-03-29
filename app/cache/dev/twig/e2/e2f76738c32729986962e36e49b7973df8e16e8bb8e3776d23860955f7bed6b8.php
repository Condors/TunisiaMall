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
        $__internal_e7aca62eb08f735f916dbf8ffcd0cdb729dac03962bed074105c482f8b17b955 = $this->env->getExtension("native_profiler");
        $__internal_e7aca62eb08f735f916dbf8ffcd0cdb729dac03962bed074105c482f8b17b955->enter($__internal_e7aca62eb08f735f916dbf8ffcd0cdb729dac03962bed074105c482f8b17b955_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e7aca62eb08f735f916dbf8ffcd0cdb729dac03962bed074105c482f8b17b955->leave($__internal_e7aca62eb08f735f916dbf8ffcd0cdb729dac03962bed074105c482f8b17b955_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_06018b4f6f54b20f6d9787e6a9a9591378fc5258244f6c2f2bb264fc80889f6a = $this->env->getExtension("native_profiler");
        $__internal_06018b4f6f54b20f6d9787e6a9a9591378fc5258244f6c2f2bb264fc80889f6a->enter($__internal_06018b4f6f54b20f6d9787e6a9a9591378fc5258244f6c2f2bb264fc80889f6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_06018b4f6f54b20f6d9787e6a9a9591378fc5258244f6c2f2bb264fc80889f6a->leave($__internal_06018b4f6f54b20f6d9787e6a9a9591378fc5258244f6c2f2bb264fc80889f6a_prof);

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
