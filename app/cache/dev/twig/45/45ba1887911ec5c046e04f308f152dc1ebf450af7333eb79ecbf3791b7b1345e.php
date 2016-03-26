<?php

/* CondorsTnMallBundle:Responsable:quickProfile.html.twig */
class __TwigTemplate_640c472f9e0ce8d15a1b45ce38f52925b6213b68bca7d292ce2fcf2135419895 extends Twig_Template
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
        $__internal_b0970bbc2254a92cd0225eb0930986d53c2b7fa85ebbb51e93eecd53722b8213 = $this->env->getExtension("native_profiler");
        $__internal_b0970bbc2254a92cd0225eb0930986d53c2b7fa85ebbb51e93eecd53722b8213->enter($__internal_b0970bbc2254a92cd0225eb0930986d53c2b7fa85ebbb51e93eecd53722b8213_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CondorsTnMallBundle:Responsable:quickProfile.html.twig"));

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
        
        $__internal_b0970bbc2254a92cd0225eb0930986d53c2b7fa85ebbb51e93eecd53722b8213->leave($__internal_b0970bbc2254a92cd0225eb0930986d53c2b7fa85ebbb51e93eecd53722b8213_prof);

    }

    public function getTemplateName()
    {
        return "CondorsTnMallBundle:Responsable:quickProfile.html.twig";
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
