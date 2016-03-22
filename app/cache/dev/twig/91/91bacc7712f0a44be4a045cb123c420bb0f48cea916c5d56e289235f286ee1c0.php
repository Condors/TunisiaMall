<?php

/* @CondorsTnMall/header.html.twig */
class __TwigTemplate_74cc2be8a30a99bc3f7609f5d680e8356a59d1466f59d9c83b3a7051743bce70 extends Twig_Template
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
        $__internal_e805f502890b708cffc9d7211974b35d6b5553469a866fd74722429c39111d3b = $this->env->getExtension("native_profiler");
        $__internal_e805f502890b708cffc9d7211974b35d6b5553469a866fd74722429c39111d3b->enter($__internal_e805f502890b708cffc9d7211974b35d6b5553469a866fd74722429c39111d3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CondorsTnMall/header.html.twig"));

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
                                        <li class=\"menu-item\"><a href=\"about-us.html\">About <span>Us</span></a></li>
                                        <li class=\"menu-item\"><a href=\"contact-us.html\">Contact <span>Us</span></a></li>
                                        <li class=\"menu-item\"><a href=\"faq.html\"><i class=\"fa fa-comments-o\"></i>&nbsp;FAQ</a></li>

                                    </ul>


                                </div>
                                <div class=\"topbar-right pull-right\">
                                    <ul class=\"yolo-top-menu hidden-phone\">
                                        <li class=\"menu-item\"><a href=\"#\"><i class=\"fa fa-language\"></i>&nbsp;Language</a></li>
                                       
                                        <li class=\"menu-item\"><a href=\"wishlist.html\"><i class=\"fa fa-heart-o\"></i>&nbsp;Wishlist</a></li>
                                        <li class=\"menu-item\">
                                            <a class=\"login-url\" href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
        echo "\">
                                                <i class=\"fa fa-sign-in\"></i>&nbsp;Login
                                            </a>
                                        </li>
                                        <li class=\"menu-item\">
                                            <a class=\"register-url\" href=\"my-account.html\">
                                                <i class=\"fa fa-key\"></i>&nbsp;Register
                                            </a>
                                        </li>
                                    </ul>
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
                                <a href=\"index.html\" class=\"navbar-brand\">
                                    <img class=\"yolo-logo-img yolo-logo-normal\" width=\"150\" height=\"150\" src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/logoo.png"), "html", null, true);
        echo "\" alt=\"Logo\">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class=\"yolo-wrap-menu fixed_top\">
                        <div class=\"container\">
                            <div class=\"navbar-header pull-left\">
                                <a href=\"index.html\" class=\"navbar-brand\">
                                    <img class=\"yolo-logo-img yolo-logo-fixed\" width=\"60\" height=\"60\" src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/logo-fixed.png"), "html", null, true);
        echo "\" alt=\"\">
                                </a>
                            </div>
                            <!-- / .nav-header -->
                            <nav class=\"yolo-main-menu\">
                                <ul class=\"nav-collapse navbar-nav\">
                                    <li class=\"menu-item current-menu-item menu-item-has-children\">
                                        <a href=\"";
        // line 64
        echo $this->env->getExtension('routing')->getPath("condors_tn_mall_homepageNewProd");
        echo "\">Home</a>

                                    </li>

                                    <style>
                                        #subWomen {
                                            position: absolute;
                                            top: auto;
                                            left: auto;
                                        }
                                        
                                        #subsub {
                                            position: absolute;
                                            top: auto;
                                            left: auto;
                                        }
                                        
                                        #womenOn {
                                            z-index: auto;
                                            position: absolute;
                                            top: auto;
                                            left: -65px;
                                            min-width: 900%;
                                        }
                                        
                                        #manOn {
                                            z-index: auto;
                                            position: absolute;
                                            top: auto;
                                            left: -312px;
                                            min-width: 1200%;
                                        }
                                        
                                        #AllCategories {
                                            height: 50px;
                                        }
                                        
                                        #AllCategoriesInWommen {
                                            margin: -22px;
                                        }
                                        
                                        #AllCategoriesInMan {
                                            margin: -22px;
                                        }
                                    </style>
                                    <!--                                    Begin Categorie-->
                                    <li class=\"yolo_megamenu mega-col-columns-5 menu-item\">
                                        <a href=\"shop-by-category.html\">Categories</a>
                                        


                                    </li>


                                    <!--                                    End Categorie-->
                                    <li class=\"menu-item menu-item-has-children\">
                                        <a href=\"category.html\">Brands</a>

                                    </li>
                                    <li class=\"yolo_megamenu mega-col-columns-4 menu-item menu-item-has-children\">
                                        <a href=\"shop.html\">Promotions</a>

                                    </li>
                                    <li class=\"menu-item menu-item-has-children\">
                                        <a href=\"blog.html\">Events</a>
                                        <ul class=\"sub-menu\">
                                            <li class=\"menu-item\"><a href=\"blog-list.html\">Shop Events / Specials</a></li>
                                            <li class=\"menu-item\"><a href=\"blog-grid.html\">Mall Events</a></li>

                                            <li class=\"menu-item\"><a href=\"blog-timeline.html\">Kids Events</a></li>

                                        </ul>
                                    </li>
                                    <li class=\"menu-item menu-item-has-children\">
                                        <a href=\"#\">Blog</a>

                                    </li>
                                    <li class=\"menu-item yolo-menu-item-cart minicart\">
                                        <a class=\"cart-button\" href=\"cart.html\">
                                            <span class=\"cart-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-shopping-cart\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                        </a>
                                        <div class=\"yolo-minicart\">
                                            <div class=\"minicart-header\">Your shopping bag is empty.</div>
                                            <div class=\"minicart-footer\">
                                                <div class=\"minicart-actions clearfix\">
                                                    <a class=\"button pull-left\" href=\"shop.html\">
                                                        <span class=\"text\">Go to the shop</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class=\"menu-item yolo-menu-item-search\">
                                        <a class=\"search-button\" href=\"javascript:void(0)\"><i class=\"fa fa-search\"></i></a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class=\"yolo-search searchbar\">
                        <form id=\"form-header\">
                            <div class=\"search-input\">
                                <input type=\"text\" value=\"\" name=\"s\" placeholder=\"Enter keyword to search...\">
                                <input type=\"submit\" value=\"Search\" />
                                <img class=\"search-remove\" src=\"";
        // line 170
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/remove_white.png"), "html", null, true);
        echo "\" alt=\"remove\">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </header>";
        
        $__internal_e805f502890b708cffc9d7211974b35d6b5553469a866fd74722429c39111d3b->leave($__internal_e805f502890b708cffc9d7211974b35d6b5553469a866fd74722429c39111d3b_prof);

    }

    public function getTemplateName()
    {
        return "@CondorsTnMall/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 170,  96 => 64,  86 => 57,  74 => 48,  48 => 25,  22 => 1,);
    }
}
/* <header class="yolo-header header_transparent header-2">*/
/*             <div class="navbar-wrapper">*/
/*                 <div class="navbar navbar-default">*/
/*                     <div class="yolo-topbar">*/
/*                         <div class="topbar-inner container-boxed">*/
/*                             <div class="container">*/
/*                                 <div class="topbar-left pull-left">*/
/*                                     <!--                                    Free Shipping on All Orders Over <span>$49</span>-->*/
/* */
/*                                     <ul class="yolo-top-menu hidden-phone">*/
/*                                         <li class="menu-item"><a href="about-us.html">About <span>Us</span></a></li>*/
/*                                         <li class="menu-item"><a href="contact-us.html">Contact <span>Us</span></a></li>*/
/*                                         <li class="menu-item"><a href="faq.html"><i class="fa fa-comments-o"></i>&nbsp;FAQ</a></li>*/
/* */
/*                                     </ul>*/
/* */
/* */
/*                                 </div>*/
/*                                 <div class="topbar-right pull-right">*/
/*                                     <ul class="yolo-top-menu hidden-phone">*/
/*                                         <li class="menu-item"><a href="#"><i class="fa fa-language"></i>&nbsp;Language</a></li>*/
/*                                        */
/*                                         <li class="menu-item"><a href="wishlist.html"><i class="fa fa-heart-o"></i>&nbsp;Wishlist</a></li>*/
/*                                         <li class="menu-item">*/
/*                                             <a class="login-url" href="{{path('fos_user_security_login')}}">*/
/*                                                 <i class="fa fa-sign-in"></i>&nbsp;Login*/
/*                                             </a>*/
/*                                         </li>*/
/*                                         <li class="menu-item">*/
/*                                             <a class="register-url" href="my-account.html">*/
/*                                                 <i class="fa fa-key"></i>&nbsp;Register*/
/*                                             </a>*/
/*                                         </li>*/
/*                                     </ul>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                         <!-- /.topbar-inner -->*/
/*                     </div>*/
/*                     <!-- /.topbar -->*/
/*                     <div class="site-header">*/
/*                         <div class="container">*/
/*                             <div class="yolo-nav-wrap">*/
/*                                 <button data-target=".nav-collapse" class="btn-navbar yolo_icon_menu" type="button">*/
/*                                     <i class="fa fa-bars"></i>*/
/*                                 </button>*/
/*                                 <a href="index.html" class="navbar-brand">*/
/*                                     <img class="yolo-logo-img yolo-logo-normal" width="150" height="150" src="{{ asset('images/logoo.png')}}" alt="Logo">*/
/*                                 </a>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="yolo-wrap-menu fixed_top">*/
/*                         <div class="container">*/
/*                             <div class="navbar-header pull-left">*/
/*                                 <a href="index.html" class="navbar-brand">*/
/*                                     <img class="yolo-logo-img yolo-logo-fixed" width="60" height="60" src="{{ asset('images/logo-fixed.png')}}" alt="">*/
/*                                 </a>*/
/*                             </div>*/
/*                             <!-- / .nav-header -->*/
/*                             <nav class="yolo-main-menu">*/
/*                                 <ul class="nav-collapse navbar-nav">*/
/*                                     <li class="menu-item current-menu-item menu-item-has-children">*/
/*                                         <a href="{{path('condors_tn_mall_homepageNewProd')}}">Home</a>*/
/* */
/*                                     </li>*/
/* */
/*                                     <style>*/
/*                                         #subWomen {*/
/*                                             position: absolute;*/
/*                                             top: auto;*/
/*                                             left: auto;*/
/*                                         }*/
/*                                         */
/*                                         #subsub {*/
/*                                             position: absolute;*/
/*                                             top: auto;*/
/*                                             left: auto;*/
/*                                         }*/
/*                                         */
/*                                         #womenOn {*/
/*                                             z-index: auto;*/
/*                                             position: absolute;*/
/*                                             top: auto;*/
/*                                             left: -65px;*/
/*                                             min-width: 900%;*/
/*                                         }*/
/*                                         */
/*                                         #manOn {*/
/*                                             z-index: auto;*/
/*                                             position: absolute;*/
/*                                             top: auto;*/
/*                                             left: -312px;*/
/*                                             min-width: 1200%;*/
/*                                         }*/
/*                                         */
/*                                         #AllCategories {*/
/*                                             height: 50px;*/
/*                                         }*/
/*                                         */
/*                                         #AllCategoriesInWommen {*/
/*                                             margin: -22px;*/
/*                                         }*/
/*                                         */
/*                                         #AllCategoriesInMan {*/
/*                                             margin: -22px;*/
/*                                         }*/
/*                                     </style>*/
/*                                     <!--                                    Begin Categorie-->*/
/*                                     <li class="yolo_megamenu mega-col-columns-5 menu-item">*/
/*                                         <a href="shop-by-category.html">Categories</a>*/
/*                                         */
/* */
/* */
/*                                     </li>*/
/* */
/* */
/*                                     <!--                                    End Categorie-->*/
/*                                     <li class="menu-item menu-item-has-children">*/
/*                                         <a href="category.html">Brands</a>*/
/* */
/*                                     </li>*/
/*                                     <li class="yolo_megamenu mega-col-columns-4 menu-item menu-item-has-children">*/
/*                                         <a href="shop.html">Promotions</a>*/
/* */
/*                                     </li>*/
/*                                     <li class="menu-item menu-item-has-children">*/
/*                                         <a href="blog.html">Events</a>*/
/*                                         <ul class="sub-menu">*/
/*                                             <li class="menu-item"><a href="blog-list.html">Shop Events / Specials</a></li>*/
/*                                             <li class="menu-item"><a href="blog-grid.html">Mall Events</a></li>*/
/* */
/*                                             <li class="menu-item"><a href="blog-timeline.html">Kids Events</a></li>*/
/* */
/*                                         </ul>*/
/*                                     </li>*/
/*                                     <li class="menu-item menu-item-has-children">*/
/*                                         <a href="#">Blog</a>*/
/* */
/*                                     </li>*/
/*                                     <li class="menu-item yolo-menu-item-cart minicart">*/
/*                                         <a class="cart-button" href="cart.html">*/
/*                                             <span class="cart-item">*/
/* 													<i class="fa fa-shopping-cart"></i>*/
/* 												</span>*/
/*                                         </a>*/
/*                                         <div class="yolo-minicart">*/
/*                                             <div class="minicart-header">Your shopping bag is empty.</div>*/
/*                                             <div class="minicart-footer">*/
/*                                                 <div class="minicart-actions clearfix">*/
/*                                                     <a class="button pull-left" href="shop.html">*/
/*                                                         <span class="text">Go to the shop</span>*/
/*                                                     </a>*/
/*                                                 </div>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                     </li>*/
/*                                     <li class="menu-item yolo-menu-item-search">*/
/*                                         <a class="search-button" href="javascript:void(0)"><i class="fa fa-search"></i></a>*/
/*                                     </li>*/
/*                                 </ul>*/
/*                             </nav>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="yolo-search searchbar">*/
/*                         <form id="form-header">*/
/*                             <div class="search-input">*/
/*                                 <input type="text" value="" name="s" placeholder="Enter keyword to search...">*/
/*                                 <input type="submit" value="Search" />*/
/*                                 <img class="search-remove" src="{{ asset('images/remove_white.png')}}" alt="remove">*/
/*                             </div>*/
/*                         </form>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </header>*/
