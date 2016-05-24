<?php

/* CondorsTnMallBundle::SimpleVisitor/parts/nav.html.twig */
class __TwigTemplate_54cdec318a3052030c4ce53c0ea1260f2e1544a6ab6ca27469eccadd3cec1049 extends Twig_Template
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
        $__internal_8007707a4b3548eec6703094ae3281af49eba0029dcfd2e72cafe716e31b0855 = $this->env->getExtension("native_profiler");
        $__internal_8007707a4b3548eec6703094ae3281af49eba0029dcfd2e72cafe716e31b0855->enter($__internal_8007707a4b3548eec6703094ae3281af49eba0029dcfd2e72cafe716e31b0855_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CondorsTnMallBundle::SimpleVisitor/parts/nav.html.twig"));

        // line 1
        echo "<nav class=\"yolo-main-menu\">
    <ul class=\"nav-collapse navbar-nav\">
        <li class=\"menu-item current-menu-item menu-item-has-children\">
            <a href=\"";
        // line 4
        echo $this->env->getExtension('routing')->getPath("condors_tn_mall_homepageNewProd");
        echo "\">Home</a>

        </li>

        <!--                                    Begin Categorie-->
        <li class=\"yolo_megamenu mega-col-columns-5 menu-item\">
            <a href=\"shop-by-category.html\">Categories</a>


        </li>


        <!--                                    End Categorie-->
        <li class=\"menu-item menu-item-has-children\">
            <a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("condors_tn_mall_simple_brands");
        echo "\">Brands</a>

        </li>
        <li class=\"yolo_megamenu mega-col-columns-4 menu-item menu-item-has-children\">
            <a href=\"\">Promotions</a>
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
        <li class=\"menu-item menu-item-has-children\">
            <a href=\"";
        // line 39
        echo $this->env->getExtension('routing')->getPath("condors_tn_mall_storelocator");
        echo "\">Store locator</a>

        </li>
        <li class=\"menu-item yolo-menu-item-cart minicart\">
            <a class=\"cart-button\" href=\"cart.html\">
                <span class=\"cart-item\">
                    <i class=\"fa fa-shopping-cart\"></i>
                    <span>";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "cookies", array()), "get", array(0 => "numProd"), "method"), "html", null, true);
        echo "</span>
                </span>
            </a>
            <div class=\"yolo-minicart\">

                <div class=\"minicart-header\">";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "cookies", array()), "get", array(0 => "numProd"), "method"), "html", null, true);
        echo " items in the shopping cart</div>
                <div class=\"minicart-body\">
                    ";
        // line 53
        $context["fpricePanierTotal"] = 0;
        // line 54
        echo "                    ";
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "cookies", array()), "get", array(0 => "numProd"), "method") > 0)) {
            // line 55
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "cookies", array()), "get", array(0 => "numProd"), "method")));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 56
                echo "

                            <div class=\"cart-product clearfix\">
                                <div class=\"cart-product-image\">
                                    <a class=\"cart-product-img\"
                                       href=\"";
                // line 61
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("condors_tn_mall_shopDetail", array("id" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "cookies", array()), "get", array(0 => ("idProduit_" . $context["i"])), "method"))), "html", null, true);
                echo "#focus\">
                                        <img width=\"100\" height=\"140\"
                                             src=\"";
                // line 63
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("uploads/prods/"), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "cookies", array()), "get", array(0 => ("imageprodreel_" . $context["i"])), "method"), "html", null, true);
                echo "\"
                                             alt=\"\"/>
                                    </a>
                                </div>
                                <div class=\"cart-product-details\">
                                    <div class=\"cart-product-title\">
                                        <a href=\"";
                // line 69
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("condors_tn_mall_shopDetail", array("id" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "cookies", array()), "get", array(0 => ("idProduit_" . $context["i"])), "method"))), "html", null, true);
                echo "#focus\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "cookies", array()), "get", array(0 => ("libelleProduit_" . $context["i"])), "method"), "html", null, true);
                echo " </a>
                                    </div>
                                    <div class=\"cart-product-price\">
                                        ";
                // line 72
                $context["fpricePanier"] = ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "cookies", array()), "get", array(0 => ("tvaProduit_" . $context["i"])), "method") * $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "cookies", array()), "get", array(0 => ("prixProduit_" . $context["i"])), "method")) / 100) + $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "cookies", array()), "get", array(0 => ("prixProduit_" . $context["i"])), "method"));
                // line 73
                echo "                                        Price <span class=\"amount\">";
                echo twig_escape_filter($this->env, (isset($context["fpricePanier"]) ? $context["fpricePanier"] : $this->getContext($context, "fpricePanier")), "html", null, true);
                echo " DT

                                            ";
                // line 75
                $context["fpricePanierTotal"] = ((isset($context["fpricePanierTotal"]) ? $context["fpricePanierTotal"] : $this->getContext($context, "fpricePanierTotal")) + (isset($context["fpricePanier"]) ? $context["fpricePanier"] : $this->getContext($context, "fpricePanier")));
                // line 76
                echo "                                    </div>
                                    <div class=\"cart-product-quantity\">Quantity 1</div>
                                </div>
                                <a href=\"#\" class=\"remove\">&times;</a>
                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 82
            echo "                    ";
        }
        // line 83
        echo "
                </div>


                <div class=\"minicart-footer\">

                    ";
        // line 89
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "cookies", array()), "get", array(0 => "numProd"), "method") > 0)) {
            // line 90
            echo "                        <div class=\"minicart-total\">
                            Cart Subtotal <span class=\"amount\"> ";
            // line 91
            echo twig_escape_filter($this->env, (isset($context["fpricePanierTotal"]) ? $context["fpricePanierTotal"] : $this->getContext($context, "fpricePanierTotal")), "html", null, true);
            echo " D.T </span>
                        </div>
                        <div class=\"minicart-actions clearfix\">
                            <a class=\"viewcart-button button\" href=\"";
            // line 94
            echo $this->env->getExtension('routing')->getPath("condors_tn_mall_show_Panier");
            echo "\">
                                <span class=\"text\">View Cart</span>
                            </a>
                            <a class=\"checkout-button button\" href=\"";
            // line 97
            echo $this->env->getExtension('routing')->getPath("condors_tn_mall_payment");
            echo "\">
                                <span class=\"text\">Checkout</span>
                            </a>
                        </div>
                    ";
        } else {
            // line 102
            echo "                        <div class=\"minicart-actions clearfix\">
                            <a class=\"button pull-left\" href=\"shop.html\">
                                <span class=\"text\">Go to the shop</span>
                            </a>
                        </div>
                    ";
        }
        // line 108
        echo "                </div>
        </li>
        <li class=\"menu-item yolo-menu-item-search\">
            <a class=\"search-button\" href=\"javascript:void(0)\"><i class=\"fa fa-search\"></i></a>
        </li>
    </ul>
</nav>";
        
        $__internal_8007707a4b3548eec6703094ae3281af49eba0029dcfd2e72cafe716e31b0855->leave($__internal_8007707a4b3548eec6703094ae3281af49eba0029dcfd2e72cafe716e31b0855_prof);

    }

    public function getTemplateName()
    {
        return "CondorsTnMallBundle::SimpleVisitor/parts/nav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  196 => 108,  188 => 102,  180 => 97,  174 => 94,  168 => 91,  165 => 90,  163 => 89,  155 => 83,  152 => 82,  141 => 76,  139 => 75,  133 => 73,  131 => 72,  123 => 69,  113 => 63,  108 => 61,  101 => 56,  96 => 55,  93 => 54,  91 => 53,  86 => 51,  78 => 46,  68 => 39,  44 => 18,  27 => 4,  22 => 1,);
    }
}
/* <nav class="yolo-main-menu">*/
/*     <ul class="nav-collapse navbar-nav">*/
/*         <li class="menu-item current-menu-item menu-item-has-children">*/
/*             <a href="{{ path('condors_tn_mall_homepageNewProd') }}">Home</a>*/
/* */
/*         </li>*/
/* */
/*         <!--                                    Begin Categorie-->*/
/*         <li class="yolo_megamenu mega-col-columns-5 menu-item">*/
/*             <a href="shop-by-category.html">Categories</a>*/
/* */
/* */
/*         </li>*/
/* */
/* */
/*         <!--                                    End Categorie-->*/
/*         <li class="menu-item menu-item-has-children">*/
/*             <a href="{{ path('condors_tn_mall_simple_brands') }}">Brands</a>*/
/* */
/*         </li>*/
/*         <li class="yolo_megamenu mega-col-columns-4 menu-item menu-item-has-children">*/
/*             <a href="">Promotions</a>*/
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
/*         <li class="menu-item menu-item-has-children">*/
/*             <a href="{{ path('condors_tn_mall_storelocator') }}">Store locator</a>*/
/* */
/*         </li>*/
/*         <li class="menu-item yolo-menu-item-cart minicart">*/
/*             <a class="cart-button" href="cart.html">*/
/*                 <span class="cart-item">*/
/*                     <i class="fa fa-shopping-cart"></i>*/
/*                     <span>{{ app.request.cookies.get('numProd') }}</span>*/
/*                 </span>*/
/*             </a>*/
/*             <div class="yolo-minicart">*/
/* */
/*                 <div class="minicart-header">{{ app.request.cookies.get('numProd') }} items in the shopping cart</div>*/
/*                 <div class="minicart-body">*/
/*                     {% set fpricePanierTotal = 0 %}*/
/*                     {% if app.request.cookies.get('numProd') > 0 %}*/
/*                         {% for i in 1..app.request.cookies.get('numProd') %}*/
/* */
/* */
/*                             <div class="cart-product clearfix">*/
/*                                 <div class="cart-product-image">*/
/*                                     <a class="cart-product-img"*/
/*                                        href="{{ path("condors_tn_mall_shopDetail" , { id:  app.request.cookies.get('idProduit_'~ i) } ) }}#focus">*/
/*                                         <img width="100" height="140"*/
/*                                              src="{{ asset('uploads/prods/') }}{{ app.request.cookies.get('imageprodreel_'~ i) }}"*/
/*                                              alt=""/>*/
/*                                     </a>*/
/*                                 </div>*/
/*                                 <div class="cart-product-details">*/
/*                                     <div class="cart-product-title">*/
/*                                         <a href="{{ path("condors_tn_mall_shopDetail" , { id:  app.request.cookies.get('idProduit_'~ i) } ) }}#focus">{{ app.request.cookies.get('libelleProduit_'~ i) }} </a>*/
/*                                     </div>*/
/*                                     <div class="cart-product-price">*/
/*                                         {% set fpricePanier =((app.request.cookies.get('tvaProduit_'~ i) * app.request.cookies.get('prixProduit_'~ i) )/100)+app.request.cookies.get('prixProduit_'~ i) %}*/
/*                                         Price <span class="amount">{{ fpricePanier }} DT*/
/* */
/*                                             {% set fpricePanierTotal = fpricePanierTotal+ fpricePanier %}*/
/*                                     </div>*/
/*                                     <div class="cart-product-quantity">Quantity 1</div>*/
/*                                 </div>*/
/*                                 <a href="#" class="remove">&times;</a>*/
/*                             </div>*/
/*                         {% endfor %}*/
/*                     {% endif %}*/
/* */
/*                 </div>*/
/* */
/* */
/*                 <div class="minicart-footer">*/
/* */
/*                     {% if app.request.cookies.get('numProd') > 0 %}*/
/*                         <div class="minicart-total">*/
/*                             Cart Subtotal <span class="amount"> {{ fpricePanierTotal }} D.T </span>*/
/*                         </div>*/
/*                         <div class="minicart-actions clearfix">*/
/*                             <a class="viewcart-button button" href="{{ path('condors_tn_mall_show_Panier') }}">*/
/*                                 <span class="text">View Cart</span>*/
/*                             </a>*/
/*                             <a class="checkout-button button" href="{{ path('condors_tn_mall_payment') }}">*/
/*                                 <span class="text">Checkout</span>*/
/*                             </a>*/
/*                         </div>*/
/*                     {% else %}*/
/*                         <div class="minicart-actions clearfix">*/
/*                             <a class="button pull-left" href="shop.html">*/
/*                                 <span class="text">Go to the shop</span>*/
/*                             </a>*/
/*                         </div>*/
/*                     {% endif %}*/
/*                 </div>*/
/*         </li>*/
/*         <li class="menu-item yolo-menu-item-search">*/
/*             <a class="search-button" href="javascript:void(0)"><i class="fa fa-search"></i></a>*/
/*         </li>*/
/*     </ul>*/
/* </nav>*/
