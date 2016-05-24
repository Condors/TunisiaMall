<?php

/* CondorsTnMallBundle::Responsable/navMenu.html.twig */
class __TwigTemplate_7963207c3885f67bb0812bf45a994312f4d70b6f7c8366489963ff0ded426505 extends Twig_Template
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
        $__internal_b8f597bbccd563e28d981f4ec6b834d8dda8c4d3d2724ef4a5859267b84bb65a = $this->env->getExtension("native_profiler");
        $__internal_b8f597bbccd563e28d981f4ec6b834d8dda8c4d3d2724ef4a5859267b84bb65a->enter($__internal_b8f597bbccd563e28d981f4ec6b834d8dda8c4d3d2724ef4a5859267b84bb65a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CondorsTnMallBundle::Responsable/navMenu.html.twig"));

        // line 1
        echo "<nav class=\"\" role=\"navigation\">
    <div class=\"nav toggle\">
        <a id=\"menu_toggle\"><i class=\"fa fa-bars\"></i></a>
    </div>

    <ul class=\"nav navbar-nav navbar-right\">
        <li class=\"\">
            <a href=\"javascript:;\" class=\"user-profile dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                <img src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "image", array()), "html", null, true);
        echo "\" alt=\"\">";
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "prenom", array())), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "nom", array())), "html", null, true);
        echo "

                <span class=\" fa fa-angle-down\"></span>
            </a>
            <ul class=\"dropdown-menu dropdown-usermenu animated fadeInDown pull-right\">
                <li><a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("condors_tn_mall_profile");
        echo "\"> <i class=\"fa fa-user\" aria-hidden=\"true\"></i>  &nbsp;&nbsp; Profile</a>
                </li>
                <li>
                    <a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("condors_tn_mall_homepageNewProd");
        echo "\">
                          <i class=\"fa fa-map-signs\" aria-hidden=\"true\"></i> &nbsp;&nbsp; Visite Mall

                    </a>
                </li>
                <li>
                    <a href=\"javascript:;\"><i class=\"fa fa-question-circle\" aria-hidden=\"true\"></i> &nbsp;&nbsp; Help</a>
                </li>
                <li><a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
        echo "\"><i class=\"fa fa-sign-out pull-right\"></i> Log Out</a>
                </li>
            </ul>
        </li>

        <li role=\"presentation\" class=\"dropdown\">

            <ul id=\"menu1\" class=\"dropdown-menu list-unstyled msg_list animated fadeInDown\" role=\"menu\">

            </ul>
        </li>

    </ul>
</nav>";
        
        $__internal_b8f597bbccd563e28d981f4ec6b834d8dda8c4d3d2724ef4a5859267b84bb65a->leave($__internal_b8f597bbccd563e28d981f4ec6b834d8dda8c4d3d2724ef4a5859267b84bb65a_prof);

    }

    public function getTemplateName()
    {
        return "CondorsTnMallBundle::Responsable/navMenu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 25,  50 => 17,  44 => 14,  32 => 9,  22 => 1,);
    }
}
/* <nav class="" role="navigation">*/
/*     <div class="nav toggle">*/
/*         <a id="menu_toggle"><i class="fa fa-bars"></i></a>*/
/*     </div>*/
/* */
/*     <ul class="nav navbar-nav navbar-right">*/
/*         <li class="">*/
/*             <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">*/
/*                 <img src="{{ user.image}}" alt="">{{ user.prenom | capitalize}} {{ user.nom | capitalize}}*/
/* */
/*                 <span class=" fa fa-angle-down"></span>*/
/*             </a>*/
/*             <ul class="dropdown-menu dropdown-usermenu animated fadeInDown pull-right">*/
/*                 <li><a href="{{ path('condors_tn_mall_profile') }}"> <i class="fa fa-user" aria-hidden="true"></i>  &nbsp;&nbsp; Profile</a>*/
/*                 </li>*/
/*                 <li>*/
/*                     <a href="{{ path('condors_tn_mall_homepageNewProd') }}">*/
/*                           <i class="fa fa-map-signs" aria-hidden="true"></i> &nbsp;&nbsp; Visite Mall*/
/* */
/*                     </a>*/
/*                 </li>*/
/*                 <li>*/
/*                     <a href="javascript:;"><i class="fa fa-question-circle" aria-hidden="true"></i> &nbsp;&nbsp; Help</a>*/
/*                 </li>*/
/*                 <li><a href="{{path('fos_user_security_logout')}}"><i class="fa fa-sign-out pull-right"></i> Log Out</a>*/
/*                 </li>*/
/*             </ul>*/
/*         </li>*/
/* */
/*         <li role="presentation" class="dropdown">*/
/* */
/*             <ul id="menu1" class="dropdown-menu list-unstyled msg_list animated fadeInDown" role="menu">*/
/* */
/*             </ul>*/
/*         </li>*/
/* */
/*     </ul>*/
/* </nav>*/
