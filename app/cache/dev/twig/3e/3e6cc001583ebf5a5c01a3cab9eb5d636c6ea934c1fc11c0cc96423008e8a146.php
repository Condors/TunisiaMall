<?php

/* CondorsTnMallBundle:SimpleVisitor/parts:nav.html.twig */
class __TwigTemplate_12089a3f0e853f91667d68df21fc51c49f026a3e146d587033dcd2849c267998 extends Twig_Template
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
        $__internal_092f80536e321cb3a34eb27d7a5d806a4a820b0d5cc45333f9a616caec66f666 = $this->env->getExtension("native_profiler");
        $__internal_092f80536e321cb3a34eb27d7a5d806a4a820b0d5cc45333f9a616caec66f666->enter($__internal_092f80536e321cb3a34eb27d7a5d806a4a820b0d5cc45333f9a616caec66f666_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CondorsTnMallBundle:SimpleVisitor/parts:nav.html.twig"));

        // line 1
        echo "
<nav class=\"yolo-main-menu\">
    <ul class=\"nav-collapse navbar-nav\">
        <li class=\"menu-item current-menu-item menu-item-has-children\">
            <a href=\"#\">Home</a>

        </li>

        <!--                                    Begin Categorie-->
        <li class=\"yolo_megamenu mega-col-columns-5 menu-item\">
            <a href=\"shop-by-category.html\">Categories</a>



        </li>


        <!--                                    End Categorie-->
        <li class=\"menu-item menu-item-has-children\">
            <a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("condors_tn_mall_simple_brands");
        echo "\">Brands</a>

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
                    <i class=\"fa fa-shopping-cart\"></i>
                </span>
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
</nav>";
        
        $__internal_092f80536e321cb3a34eb27d7a5d806a4a820b0d5cc45333f9a616caec66f666->leave($__internal_092f80536e321cb3a34eb27d7a5d806a4a820b0d5cc45333f9a616caec66f666_prof);

    }

    public function getTemplateName()
    {
        return "CondorsTnMallBundle:SimpleVisitor/parts:nav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 20,  22 => 1,);
    }
}
/* */
/* <nav class="yolo-main-menu">*/
/*     <ul class="nav-collapse navbar-nav">*/
/*         <li class="menu-item current-menu-item menu-item-has-children">*/
/*             <a href="#">Home</a>*/
/* */
/*         </li>*/
/* */
/*         <!--                                    Begin Categorie-->*/
/*         <li class="yolo_megamenu mega-col-columns-5 menu-item">*/
/*             <a href="shop-by-category.html">Categories</a>*/
/* */
/* */
/* */
/*         </li>*/
/* */
/* */
/*         <!--                                    End Categorie-->*/
/*         <li class="menu-item menu-item-has-children">*/
/*             <a href="{{path('condors_tn_mall_simple_brands')}}">Brands</a>*/
/* */
/*         </li>*/
/*         <li class="yolo_megamenu mega-col-columns-4 menu-item menu-item-has-children">*/
/*             <a href="shop.html">Promotions</a>*/
/*         </li>*/
/*         <li class="menu-item menu-item-has-children">*/
/*             <a href="blog.html">Events</a>*/
/*             <ul class="sub-menu">*/
/*                 <li class="menu-item"><a href="blog-list.html">Shop Events / Specials</a></li>*/
/*                 <li class="menu-item"><a href="blog-grid.html">Mall Events</a></li>*/
/* */
/*                 <li class="menu-item"><a href="blog-timeline.html">Kids Events</a></li>*/
/* */
/*             </ul>*/
/*         </li>*/
/*         <li class="menu-item menu-item-has-children">*/
/*             <a href="#">Blog</a>*/
/* */
/*         </li>*/
/*         <li class="menu-item yolo-menu-item-cart minicart">*/
/*             <a class="cart-button" href="cart.html">*/
/*                 <span class="cart-item">*/
/*                     <i class="fa fa-shopping-cart"></i>*/
/*                 </span>*/
/*             </a>*/
/*             <div class="yolo-minicart">*/
/*                 <div class="minicart-header">Your shopping bag is empty.</div>*/
/*                 <div class="minicart-footer">*/
/*                     <div class="minicart-actions clearfix">*/
/*                         <a class="button pull-left" href="shop.html">*/
/*                             <span class="text">Go to the shop</span>*/
/*                         </a>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </li>*/
/*         <li class="menu-item yolo-menu-item-search">*/
/*             <a class="search-button" href="javascript:void(0)"><i class="fa fa-search"></i></a>*/
/*         </li>*/
/*     </ul>*/
/* </nav>*/
