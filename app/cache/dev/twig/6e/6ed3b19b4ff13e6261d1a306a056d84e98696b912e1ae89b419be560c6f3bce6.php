<?php

/* @CondorsTnMall/Responsable/quickProfile.html.twig */
class __TwigTemplate_20e43ab97129059dfc7f969355730aa83d23120e9038297a54ac9143d4dd965e extends Twig_Template
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
        $__internal_5ff7d2f83fd217ecf8645ba51eaad3a4425cf1d9296ba343b817ba68f7d79292 = $this->env->getExtension("native_profiler");
        $__internal_5ff7d2f83fd217ecf8645ba51eaad3a4425cf1d9296ba343b817ba68f7d79292->enter($__internal_5ff7d2f83fd217ecf8645ba51eaad3a4425cf1d9296ba343b817ba68f7d79292_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CondorsTnMall/Responsable/quickProfile.html.twig"));

        // line 1
        echo "<div class=\"profile\">
    <div class=\"profile_pic\">
        <img src=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("uploads/pictures/"), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "image", array()), "html", null, true);
        echo "\" alt=\"...\" class=\"img-circle profile_img\">
    </div>
    <div class=\"profile_info\">
        <span>Welcome,</span>
        <h2>";
        // line 7
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "prenom", array())), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "nom", array())), "html", null, true);
        echo "</h2>
    </div>
</div>";
        
        $__internal_5ff7d2f83fd217ecf8645ba51eaad3a4425cf1d9296ba343b817ba68f7d79292->leave($__internal_5ff7d2f83fd217ecf8645ba51eaad3a4425cf1d9296ba343b817ba68f7d79292_prof);

    }

    public function getTemplateName()
    {
        return "@CondorsTnMall/Responsable/quickProfile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 7,  26 => 3,  22 => 1,);
    }
}
/* <div class="profile">*/
/*     <div class="profile_pic">*/
/*         <img src="{{ asset('uploads/pictures/')}}{{ user.image}}" alt="..." class="img-circle profile_img">*/
/*     </div>*/
/*     <div class="profile_info">*/
/*         <span>Welcome,</span>*/
/*         <h2>{{ user.prenom | capitalize}} {{ user.nom | capitalize}}</h2>*/
/*     </div>*/
/* </div>*/
