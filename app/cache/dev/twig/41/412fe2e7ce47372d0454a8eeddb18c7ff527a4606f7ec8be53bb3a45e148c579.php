<?php

/* @FOSUser/Group/show_content.html.twig */
class __TwigTemplate_47156d85204a72a503796305a25a8575340a4e3e78d704d731d757cf34f298ec extends Twig_Template
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
        $__internal_77f08a48a5a0428a406acf557d18d33c7a002421f390b82887033854d0bf6163 = $this->env->getExtension("native_profiler");
        $__internal_77f08a48a5a0428a406acf557d18d33c7a002421f390b82887033854d0bf6163->enter($__internal_77f08a48a5a0428a406acf557d18d33c7a002421f390b82887033854d0bf6163_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show_content.html.twig"));

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
        
        $__internal_77f08a48a5a0428a406acf557d18d33c7a002421f390b82887033854d0bf6163->leave($__internal_77f08a48a5a0428a406acf557d18d33c7a002421f390b82887033854d0bf6163_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show_content.html.twig";
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
