<?php

/* @CondorsTnMall/Responsable/navMenu.html.twig */
class __TwigTemplate_da84c297d9701afa0fa498b900f968a5c45cce25c27756475f517f1db243b4a0 extends Twig_Template
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
        $__internal_4f175d44151d7aa6c170c11ae3eedb1dc1fda2488b7703d83d6b7a3f516f1dac = $this->env->getExtension("native_profiler");
        $__internal_4f175d44151d7aa6c170c11ae3eedb1dc1fda2488b7703d83d6b7a3f516f1dac->enter($__internal_4f175d44151d7aa6c170c11ae3eedb1dc1fda2488b7703d83d6b7a3f516f1dac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CondorsTnMall/Responsable/navMenu.html.twig"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("uploads/pictures/"), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "image", array()), "html", null, true);
        echo "\" alt=\"\">";
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "prenom", array())), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "nom", array())), "html", null, true);
        echo "

                <span class=\" fa fa-angle-down\"></span>
            </a>
            <ul class=\"dropdown-menu dropdown-usermenu animated fadeInDown pull-right\">
                <li><a href=\"javascript:;\">  Profile</a>
                </li>
                <li>
                    <a href=\"javascript:;\">
                        <span class=\"badge bg-red pull-right\">50%</span>
                        <span>Settings</span>
                    </a>
                </li>
                <li>
                    <a href=\"javascript:;\">Help</a>
                </li>
                <li><a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
        echo "\"><i class=\"fa fa-sign-out pull-right\"></i> Log Out</a>
                </li>
            </ul>
        </li>

        <li role=\"presentation\" class=\"dropdown\">
            <a href=\"javascript:;\" class=\"dropdown-toggle info-number\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                <i class=\"fa fa-envelope-o\"></i>
                <span class=\"badge bg-green\">0</span>
            </a>
            <ul id=\"menu1\" class=\"dropdown-menu list-unstyled msg_list animated fadeInDown\" role=\"menu\">

            </ul>
        </li>

    </ul>
</nav>";
        
        $__internal_4f175d44151d7aa6c170c11ae3eedb1dc1fda2488b7703d83d6b7a3f516f1dac->leave($__internal_4f175d44151d7aa6c170c11ae3eedb1dc1fda2488b7703d83d6b7a3f516f1dac_prof);

    }

    public function getTemplateName()
    {
        return "@CondorsTnMall/Responsable/navMenu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 25,  32 => 9,  22 => 1,);
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
/*                 <img src="{{ asset('uploads/pictures/')}}{{ user.image}}" alt="">{{ user.prenom | capitalize}} {{ user.nom | capitalize}}*/
/* */
/*                 <span class=" fa fa-angle-down"></span>*/
/*             </a>*/
/*             <ul class="dropdown-menu dropdown-usermenu animated fadeInDown pull-right">*/
/*                 <li><a href="javascript:;">  Profile</a>*/
/*                 </li>*/
/*                 <li>*/
/*                     <a href="javascript:;">*/
/*                         <span class="badge bg-red pull-right">50%</span>*/
/*                         <span>Settings</span>*/
/*                     </a>*/
/*                 </li>*/
/*                 <li>*/
/*                     <a href="javascript:;">Help</a>*/
/*                 </li>*/
/*                 <li><a href="{{path('fos_user_security_logout')}}"><i class="fa fa-sign-out pull-right"></i> Log Out</a>*/
/*                 </li>*/
/*             </ul>*/
/*         </li>*/
/* */
/*         <li role="presentation" class="dropdown">*/
/*             <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">*/
/*                 <i class="fa fa-envelope-o"></i>*/
/*                 <span class="badge bg-green">0</span>*/
/*             </a>*/
/*             <ul id="menu1" class="dropdown-menu list-unstyled msg_list animated fadeInDown" role="menu">*/
/* */
/*             </ul>*/
/*         </li>*/
/* */
/*     </ul>*/
/* </nav>*/
