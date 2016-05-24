<?php

/* CondorsTnMallBundle::SimpleVisitor/parts/header.html.twig */
class __TwigTemplate_72586b232082e143e0eaec00224faaf2fe0cd799516b19c01db3a580f6baab58 extends Twig_Template
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
        $__internal_7a64a309089cac1104aeb057b122fa8d153941ae5885fd68cd78b840db5f0044 = $this->env->getExtension("native_profiler");
        $__internal_7a64a309089cac1104aeb057b122fa8d153941ae5885fd68cd78b840db5f0044->enter($__internal_7a64a309089cac1104aeb057b122fa8d153941ae5885fd68cd78b840db5f0044_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CondorsTnMallBundle::SimpleVisitor/parts/header.html.twig"));

        // line 1
        echo "<header class=\"yolo-header header_transparent header-2\">
    <div class=\"navbar-wrapper\">
        <div class=\"navbar navbar-default\">
            <div class=\"yolo-topbar\">
                <div class=\"topbar-inner container-boxed\">
                    <div class=\"container\">
                        <div class=\"topbar-left pull-left\">
                            <!--                                    Free Shipping on All Orders Over <span>\$49</span>-->

                            <ul class=\"yolo-top-menu hidden-phone\">
                                <li class=\"menu-item\"><a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("condors_tn_mall_about");
        echo "\">About
                                        <span>Us</span></a></li>
                                <li class=\"menu-item\"><a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("mremi_contact_form");
        echo "\">Contact <span>Us</span></a>
                                </li>
                                <li class=\"menu-item\"><a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("condors_tn_mall_faq");
        echo "\"><i
                                                class=\"fa fa-comments-o\"></i>&nbsp;FAQ</a></li>

                            </ul>


                        </div>
                        <div class=\"topbar-right pull-right\">
                            <ul class=\"yolo-top-menu hidden-phone\">
                                <li class=\"menu-item\"><a href=\"#\"><i class=\"fa fa-language\"></i>&nbsp;Language</a></li>

                                <li class=\"menu-item\"><a href=\"wishlist.html\"><i class=\"fa fa-heart-o\"></i>&nbsp;Wishlist</a>
                                </li>
                                ";
        // line 29
        echo "
                                ";
        // line 30
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 31
            echo "



                                    <li class=\"menu-item\">

                                            <i class=\"fa fa-key\"></i>

                                        ";
            // line 39
            if ($this->env->getExtension('security')->isGranted("ROLE_CLIENT")) {
                // line 40
                echo "                                        <a href=\"#\">  &nbsp; ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
                echo " </a>
                                        ";
            } elseif ($this->env->getExtension('security')->isGranted("ROLE_RESPONSABLE")) {
                // line 42
                echo "                                        <a href=\"";
                echo $this->env->getExtension('routing')->getPath("condors_tn_mall_responsable_index");
                echo "\">  &nbsp; ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
                echo " </a>
                                        ";
            } else {
                // line 44
                echo "                                            <a href=\"";
                echo $this->env->getExtension('routing')->getPath("condors_tn_mall_Admin_index");
                echo "\">  &nbsp; ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
                echo " </a>
                                        ";
            }
            // line 46
            echo "                                    </li>
                                    <li class=\"menu-item\">


                                        &nbsp;&nbsp;  <i class=\"fa fa-sign-in\"></i> <a
                                                    href=\"";
            // line 51
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">


                                        </a>
                                    </li>

                                ";
        } else {
            // line 58
            echo "                                    <li class=\"menu-item\">
                                        <a class=\"login-url\" href=\"";
            // line 59
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "#Log-me\">
                                            <i class=\"fa fa-sign-in\"></i>&nbsp;Login
                                        </a>
                                    </li>
                                    <li class=\"menu-item\">

                                        <a class=\"register-url\" href=\"";
            // line 65
            echo $this->env->getExtension('routing')->getPath("condors_tn_mall_regsitration");
            echo "#Register\">
                                            <i class=\"fa fa-key\"></i>&nbsp;Register

                                        </a>
                                    </li>
                                ";
        }
        // line 71
        echo "

                                ";
        // line 74
        echo "                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /.topbar-inner -->
            </div>
            <!-- /.topbar -->
            <div class=\"site-header\">
                <div class=\"container\">
                    <div class=\"yolo-nav-wrap\">
                        <button data-target=\".nav-collapse\" class=\"btn-navbar yolo_icon_menu\" type=\"button\">
                            <i class=\"fa fa-bars\"></i>
                        </button>
                        <a href=\"";
        // line 87
        echo $this->env->getExtension('routing')->getPath("condors_tn_mall_homepageNewProd");
        echo "\" class=\"navbar-brand\">
                            <img class=\"yolo-logo-img yolo-logo-normal\" width=\"150\" height=\"150\"
                                 src=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/logoo.png"), "html", null, true);
        echo "\" alt=\"Logo\">
                        </a>
                    </div>
                </div>
            </div>
            <div class=\"yolo-wrap-menu fixed_top\">
                <div class=\"container\">
                    <div class=\"navbar-header pull-left\">
                        <a href=\"";
        // line 97
        echo $this->env->getExtension('routing')->getPath("mremi_contact_form");
        echo "\" class=\"navbar-brand\">
                            <img class=\"yolo-logo-img yolo-logo-fixed\" width=\"60\" height=\"60\"
                                 src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/logo-fixed.png"), "html", null, true);
        echo "\" alt=\"\">
                        </a>
                    </div>
                    <!-- / .nav-header -->
                    ";
        // line 103
        echo twig_include($this->env, $context, "CondorsTnMallBundle::SimpleVisitor/parts/nav.html.twig");
        echo "
                </div>
            </div>
            <div class=\"yolo-search searchbar\">
                <form id=\"form-header\">
                    <div class=\"search-input\">
                        <input type=\"text\" value=\"\" name=\"s\" placeholder=\"Enter keyword to search...\">
                        <input type=\"submit\" value=\"Search\"/>
                        <img class=\"search-remove\" src=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/remove_white.png"), "html", null, true);
        echo "\" alt=\"remove\">
                    </div>
                </form>
            </div>
        </div>
    </div>
</header>";
        
        $__internal_7a64a309089cac1104aeb057b122fa8d153941ae5885fd68cd78b840db5f0044->leave($__internal_7a64a309089cac1104aeb057b122fa8d153941ae5885fd68cd78b840db5f0044_prof);

    }

    public function getTemplateName()
    {
        return "CondorsTnMallBundle::SimpleVisitor/parts/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 111,  184 => 103,  177 => 99,  172 => 97,  161 => 89,  156 => 87,  141 => 74,  137 => 71,  128 => 65,  119 => 59,  116 => 58,  106 => 51,  99 => 46,  91 => 44,  83 => 42,  77 => 40,  75 => 39,  65 => 31,  63 => 30,  60 => 29,  44 => 15,  39 => 13,  34 => 11,  22 => 1,);
    }
}
/* <header class="yolo-header header_transparent header-2">*/
/*     <div class="navbar-wrapper">*/
/*         <div class="navbar navbar-default">*/
/*             <div class="yolo-topbar">*/
/*                 <div class="topbar-inner container-boxed">*/
/*                     <div class="container">*/
/*                         <div class="topbar-left pull-left">*/
/*                             <!--                                    Free Shipping on All Orders Over <span>$49</span>-->*/
/* */
/*                             <ul class="yolo-top-menu hidden-phone">*/
/*                                 <li class="menu-item"><a href="{{ path('condors_tn_mall_about') }}">About*/
/*                                         <span>Us</span></a></li>*/
/*                                 <li class="menu-item"><a href="{{ path('mremi_contact_form') }}">Contact <span>Us</span></a>*/
/*                                 </li>*/
/*                                 <li class="menu-item"><a href="{{ path('condors_tn_mall_faq') }}"><i*/
/*                                                 class="fa fa-comments-o"></i>&nbsp;FAQ</a></li>*/
/* */
/*                             </ul>*/
/* */
/* */
/*                         </div>*/
/*                         <div class="topbar-right pull-right">*/
/*                             <ul class="yolo-top-menu hidden-phone">*/
/*                                 <li class="menu-item"><a href="#"><i class="fa fa-language"></i>&nbsp;Language</a></li>*/
/* */
/*                                 <li class="menu-item"><a href="wishlist.html"><i class="fa fa-heart-o"></i>&nbsp;Wishlist</a>*/
/*                                 </li>*/
/*                                 {#Login + Register#}*/
/* */
/*                                 {% if is_granted("IS_AUTHENTICATED_REMEMBERED") %}*/
/* */
/* */
/* */
/* */
/*                                     <li class="menu-item">*/
/* */
/*                                             <i class="fa fa-key"></i>*/
/* */
/*                                         {% if is_granted('ROLE_CLIENT') %}*/
/*                                         <a href="#">  &nbsp; {{app.user.username }} </a>*/
/*                                         {% elseif is_granted('ROLE_RESPONSABLE')  %}*/
/*                                         <a href="{{ path('condors_tn_mall_responsable_index') }}">  &nbsp; {{app.user.username }} </a>*/
/*                                         {% else %}*/
/*                                             <a href="{{ path('condors_tn_mall_Admin_index') }}">  &nbsp; {{app.user.username }} </a>*/
/*                                         {% endif %}*/
/*                                     </li>*/
/*                                     <li class="menu-item">*/
/* */
/* */
/*                                         &nbsp;&nbsp;  <i class="fa fa-sign-in"></i> <a*/
/*                                                     href="{{ path('fos_user_security_logout') }}">*/
/* */
/* */
/*                                         </a>*/
/*                                     </li>*/
/* */
/*                                 {% else %}*/
/*                                     <li class="menu-item">*/
/*                                         <a class="login-url" href="{{ path('fos_user_security_login') }}#Log-me">*/
/*                                             <i class="fa fa-sign-in"></i>&nbsp;Login*/
/*                                         </a>*/
/*                                     </li>*/
/*                                     <li class="menu-item">*/
/* */
/*                                         <a class="register-url" href="{{ path('condors_tn_mall_regsitration') }}#Register">*/
/*                                             <i class="fa fa-key"></i>&nbsp;Register*/
/* */
/*                                         </a>*/
/*                                     </li>*/
/*                                 {% endif %}*/
/* */
/* */
/*                                 {#End Login+register#}*/
/*                             </ul>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*                 <!-- /.topbar-inner -->*/
/*             </div>*/
/*             <!-- /.topbar -->*/
/*             <div class="site-header">*/
/*                 <div class="container">*/
/*                     <div class="yolo-nav-wrap">*/
/*                         <button data-target=".nav-collapse" class="btn-navbar yolo_icon_menu" type="button">*/
/*                             <i class="fa fa-bars"></i>*/
/*                         </button>*/
/*                         <a href="{{ path('condors_tn_mall_homepageNewProd') }}" class="navbar-brand">*/
/*                             <img class="yolo-logo-img yolo-logo-normal" width="150" height="150"*/
/*                                  src="{{ asset('images/logoo.png') }}" alt="Logo">*/
/*                         </a>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="yolo-wrap-menu fixed_top">*/
/*                 <div class="container">*/
/*                     <div class="navbar-header pull-left">*/
/*                         <a href="{{ path('mremi_contact_form') }}" class="navbar-brand">*/
/*                             <img class="yolo-logo-img yolo-logo-fixed" width="60" height="60"*/
/*                                  src="{{ asset('images/logo-fixed.png') }}" alt="">*/
/*                         </a>*/
/*                     </div>*/
/*                     <!-- / .nav-header -->*/
/*                     {{ include('CondorsTnMallBundle::SimpleVisitor/parts/nav.html.twig') }}*/
/*                 </div>*/
/*             </div>*/
/*             <div class="yolo-search searchbar">*/
/*                 <form id="form-header">*/
/*                     <div class="search-input">*/
/*                         <input type="text" value="" name="s" placeholder="Enter keyword to search...">*/
/*                         <input type="submit" value="Search"/>*/
/*                         <img class="search-remove" src="{{ asset('images/remove_white.png') }}" alt="remove">*/
/*                     </div>*/
/*                 </form>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </header>*/
