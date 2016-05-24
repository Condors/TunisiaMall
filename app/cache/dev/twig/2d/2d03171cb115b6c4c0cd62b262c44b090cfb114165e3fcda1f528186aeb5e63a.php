<?php

/* CondorsTnMallBundle::Responsable/quickProfile.html.twig */
class __TwigTemplate_53aa9a3ba4233579b380108e2f00f609e678e57ca267376d651a016b19bd74f6 extends Twig_Template
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
        $__internal_ffd15d685e93a30459a7c6fced1eeab1398747814e52e239f1c833eeb54a5fb7 = $this->env->getExtension("native_profiler");
        $__internal_ffd15d685e93a30459a7c6fced1eeab1398747814e52e239f1c833eeb54a5fb7->enter($__internal_ffd15d685e93a30459a7c6fced1eeab1398747814e52e239f1c833eeb54a5fb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CondorsTnMallBundle::Responsable/quickProfile.html.twig"));

        // line 1
        echo "<div class=\"profile\">
    <div class=\"profile_pic\">

        <img src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "image", array()), "html", null, true);
        echo "\" alt=\"...\" class=\"img-circle profile_img\">
    </div>
    <div class=\"profile_info\">
        <span>Welcome,</span>
        <h2>";
        // line 8
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "prenom", array())), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "nom", array())), "html", null, true);
        echo "</h2>
    </div>
</div>";
        
        $__internal_ffd15d685e93a30459a7c6fced1eeab1398747814e52e239f1c833eeb54a5fb7->leave($__internal_ffd15d685e93a30459a7c6fced1eeab1398747814e52e239f1c833eeb54a5fb7_prof);

    }

    public function getTemplateName()
    {
        return "CondorsTnMallBundle::Responsable/quickProfile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 8,  27 => 4,  22 => 1,);
    }
}
/* <div class="profile">*/
/*     <div class="profile_pic">*/
/* */
/*         <img src="{{ user.image}}" alt="..." class="img-circle profile_img">*/
/*     </div>*/
/*     <div class="profile_info">*/
/*         <span>Welcome,</span>*/
/*         <h2>{{ user.prenom | capitalize}} {{ user.nom | capitalize}}</h2>*/
/*     </div>*/
/* </div>*/
