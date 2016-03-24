<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_c88e213540ab62af2f293f79497ef0acdcb1f9d2b3f5b9f21f34dcaddab47c10 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1221aa27201b8a6953778d63fafd63eff5aae8ef7c71680048eaef80ac71e206 = $this->env->getExtension("native_profiler");
        $__internal_1221aa27201b8a6953778d63fafd63eff5aae8ef7c71680048eaef80ac71e206->enter($__internal_1221aa27201b8a6953778d63fafd63eff5aae8ef7c71680048eaef80ac71e206_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_1221aa27201b8a6953778d63fafd63eff5aae8ef7c71680048eaef80ac71e206->leave($__internal_1221aa27201b8a6953778d63fafd63eff5aae8ef7c71680048eaef80ac71e206_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 4,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* <div class="fos_user_group_show">*/
/*     <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>*/
/* </div>*/
/* */
