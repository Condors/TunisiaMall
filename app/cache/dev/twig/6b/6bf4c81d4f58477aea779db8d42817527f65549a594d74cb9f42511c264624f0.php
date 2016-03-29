<?php

/* @CondorsTnMall/SimpleVisitor/brandsMiniWebSite.html.twig */
class __TwigTemplate_6fd737b5508ad42525e0be58f1e51bd2f63ec7ede635b5f591a0caddd9ecea2b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CondorsTnMallBundle::MyAccountTemplate.html.twig", "@CondorsTnMall/SimpleVisitor/brandsMiniWebSite.html.twig", 1);
        $this->blocks = array(
            'pageTitle' => array($this, 'block_pageTitle'),
            'titleTop' => array($this, 'block_titleTop'),
            'secMenu' => array($this, 'block_secMenu'),
            'brands' => array($this, 'block_brands'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CondorsTnMallBundle::MyAccountTemplate.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e475a34ed06c562bbabd39c7950b0c54a57b322bd9e24f188cd6d2b1f0a78036 = $this->env->getExtension("native_profiler");
        $__internal_e475a34ed06c562bbabd39c7950b0c54a57b322bd9e24f188cd6d2b1f0a78036->enter($__internal_e475a34ed06c562bbabd39c7950b0c54a57b322bd9e24f188cd6d2b1f0a78036_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CondorsTnMall/SimpleVisitor/brandsMiniWebSite.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e475a34ed06c562bbabd39c7950b0c54a57b322bd9e24f188cd6d2b1f0a78036->leave($__internal_e475a34ed06c562bbabd39c7950b0c54a57b322bd9e24f188cd6d2b1f0a78036_prof);

    }

    // line 4
    public function block_pageTitle($context, array $blocks = array())
    {
        $__internal_0881d50d6c0ee7604faa0b117766fcb50997322b4877464370baeefae088d023 = $this->env->getExtension("native_profiler");
        $__internal_0881d50d6c0ee7604faa0b117766fcb50997322b4877464370baeefae088d023->enter($__internal_0881d50d6c0ee7604faa0b117766fcb50997322b4877464370baeefae088d023_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageTitle"));

        // line 5
        echo "    <style>

        .brands-img
        {
            -webkit-filter: invert(1);
            filter: invert(1);
        }

    </style>
    <h1 class=\"page-title\"> 
        <a href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("condors_tn_mall_simple_brands_special", array("id" => $this->getAttribute((isset($context["brand"]) ? $context["brand"] : $this->getContext($context, "brand")), "idEnseigne", array()))), "html", null, true);
        echo "\">
            <img class=\"brands-img\" width=\"200\" heigth=\"200\" src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("uploads/pictures/"), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["brand"]) ? $context["brand"] : $this->getContext($context, "brand")), "imageenseigne", array()), "html", null, true);
        echo "\"/> 
        </a>
    </h1>
";
        
        $__internal_0881d50d6c0ee7604faa0b117766fcb50997322b4877464370baeefae088d023->leave($__internal_0881d50d6c0ee7604faa0b117766fcb50997322b4877464370baeefae088d023_prof);

    }

    // line 21
    public function block_titleTop($context, array $blocks = array())
    {
        $__internal_33435071b7101ad89e0ec1d931bc995896f683b81f82c74fe1c42541342166e2 = $this->env->getExtension("native_profiler");
        $__internal_33435071b7101ad89e0ec1d931bc995896f683b81f82c74fe1c42541342166e2->enter($__internal_33435071b7101ad89e0ec1d931bc995896f683b81f82c74fe1c42541342166e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titleTop"));

        echo "<h2 class=\"title-heading\">Brands</h2>";
        
        $__internal_33435071b7101ad89e0ec1d931bc995896f683b81f82c74fe1c42541342166e2->leave($__internal_33435071b7101ad89e0ec1d931bc995896f683b81f82c74fe1c42541342166e2_prof);

    }

    // line 23
    public function block_secMenu($context, array $blocks = array())
    {
        $__internal_d97ac7c1732a15bbb1774b4c20344554912d813bcf3ff061903c16413bb1e7ba = $this->env->getExtension("native_profiler");
        $__internal_d97ac7c1732a15bbb1774b4c20344554912d813bcf3ff061903c16413bb1e7ba->enter($__internal_d97ac7c1732a15bbb1774b4c20344554912d813bcf3ff061903c16413bb1e7ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "secMenu"));

        // line 24
        echo "


    <div class=\"col-centered\">
        <nav class=\"yolo-main-menu\">
            <ul class=\"nav-collapse navbar-nav\">
                <li class=\"menu-item current-menu-item menu-item-has-children\">
                    <a href=\"#\">Home</a>
                </li>
                <!--                                    Begin Categorie-->
                <li class=\"yolo_megamenu mega-col-columns-5 menu-item\">
                    <a href=\"shop-by-category.html\">Promotions</a>
                </li>
                <!--                                    End Categorie-->
                <li class=\"menu-item menu-item-has-children\">
                    <a href=\"";
        // line 39
        echo $this->env->getExtension('routing')->getPath("condors_tn_mall_simple_brands");
        echo "\">Catalogs</a>

                </li>
                <li class=\"yolo_megamenu mega-col-columns-4 menu-item menu-item-has-children\">
                    <a href=\"shop.html\">About Us</a>
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


            </ul>
        </nav>
    </div>

";
        
        $__internal_d97ac7c1732a15bbb1774b4c20344554912d813bcf3ff061903c16413bb1e7ba->leave($__internal_d97ac7c1732a15bbb1774b4c20344554912d813bcf3ff061903c16413bb1e7ba_prof);

    }

    // line 67
    public function block_brands($context, array $blocks = array())
    {
        $__internal_a4a6aa7889ffe8d31c0bc34247c821275304da1e9d45113cc1bba60e8ccbe72f = $this->env->getExtension("native_profiler");
        $__internal_a4a6aa7889ffe8d31c0bc34247c821275304da1e9d45113cc1bba60e8ccbe72f->enter($__internal_a4a6aa7889ffe8d31c0bc34247c821275304da1e9d45113cc1bba60e8ccbe72f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "brands"));

        // line 68
        echo "
    <div class=\"content-area\">
        <div class=\"commerce\">
            <div class=\"shop-container pb-5\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"yolo-main col-md-9 col-sm-12 col-xs-12 pull-right\">
                            <div class=\"yolo-woo-meta clearfix\">
                                <div class=\"list_products_toolbar clearfix\">
                                    <div class=\"products-toolbar\">
                                        <span>View style: </span>
                                        <a class=\"selected\" href=\"shop-grid.html\"><i class=\"fa fa-th-large\"></i></a>
                                        <a href=\"shop-list.html\"><i class=\"fa fa-list\"></i></a>
                                    </div>
                                    <form class=\"commerce-ordering\">
                                        <select class=\"orderby\">
                                            <option value=\"\" selected='selected'>Default sorting</option>
                                            <option value=\"\">Sort by popularity</option>
                                            <option value=\"\">Sort by average rating</option>
                                            <option value=\"\">Sort by newness</option>
                                            <option value=\"\">Sort by price</option>
                                        </select>
                                    </form>
                                    <p class=\"commerce-result-count\">
                                        Showing <span class=\"from-to\">1&ndash;12</span> of 16 results
                                    </p>
                                </div>
                            </div>
                            <div class=\"products row\">
                                <div class=\"col-md-4 col-sm-6 col-xs-12 yolo-product-item mb-4\">
                                    <div class=\"yolo-product-inner\">
                                        <div class=\"product-thumbnail\">
                                            <div class=\"yolo-product-thumbnail yolo-product-front-thumbnail\">
                                                <img width=\"500\" height=\"700\" src=\"images/product/product-10.jpg\" alt=\"\" />
                                            </div>
                                            <div class=\"yolo-product-thumbnail yolo-product-back-thumbnail\">
                                                <img width=\"500\" height=\"700\" src=\"images/product/product-10-alt.jpg\" alt=\"\" />
                                            </div>
                                            <div class=\"yolo-product-meta\">
                                                <div class=\"entry-cart-meta\">
                                                    <a href=\"#\" class=\"button add_to_cart_button product_type_simple\">Add to cart</a>
                                                    <a class=\"shop-loop-quickview\" href=\"shop-detail.html\">Quick shop</a>
                                                    <div class=\"yith-wcwl-add-to-wishlist\">
                                                        <div class=\"yith-wcwl-add-button\">
                                                            <a href=\"#\" class=\"add_to_wishlist\">
                                                                Add to Wishlist
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class=\"clear\"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"yolo-product-footer clearfix\">
                                            <h3><a href=\"shop-detail.html\">fffff</a></h3>
                                            <div class=\"star-rating\">
                                                <span style=\"width:10%\"></span>
                                            </div>
                                            <span class=\"price\">
                                                <span class=\"amount\">&#36;99</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                            <div class=\"pagination list-center\">
                                <span class=\"page-numbers current\">1</span>
                                <a class=\"page-numbers\" href=\"#\">2</a>
                                <a class=\"page-numbers\" href=\"#\">3</a>
                                <a class=\"next page-numbers\" href=\"#\"><i class=\"fa fa-long-arrow-right\"></i></a>
                            </div>
                        </div>
                        <div class=\"yolo-sidebar col-md-3 yolo-sidebar-left pull-left\">
                            <div class=\"yolo-sidebar-wrap\">
                                <div class=\"widget commerce widget_product_search\">
                                    <h4 class=\"widget-title\">Search</h4>
                                    <form class=\"commerce-product-search\">
                                        <label class=\"screen-reader-text\">Search for:</label>
                                        <input type=\"search\" class=\"search-field\" placeholder=\"Search Products&hellip;\" value=\"\" name=\"s\" title=\"Search for:\" />
                                        <input type=\"submit\" value=\"Search\" />
                                    </form>
                                </div>
                                <div class=\"widget commerce widget_shopping_cart\">
                                    <h4 class=\"widget-title\">Cart</h4>
                                    <div class=\"widget_shopping_cart_content\">
                                        <ul class=\"cart_list product_list_widget\">
                                            <li class=\"mini_cart_item\">
                                                <a href=\"#\" class=\"remove\">&times;</a>
                                                <a href=\"shop-detail.html\">
                                                    <img width=\"100\" height=\"140\" src=\"images/product/thumb/product-1.jpg\" alt=\"\">
                                                    A Blue Shirt Top&nbsp;
                                                </a>
                                                <span class=\"quantity\">1 × <span class=\"amount\">\$99</span></span>
                                            </li>
                                        </ul><!-- end product list -->
                                        <p class=\"total\"><strong>Subtotal:</strong> <span class=\"amount\">\$99</span></p>
                                        <p class=\"buttons\">
                                            <a href=\"cart.html\" class=\"button wc-forward\">View Cart</a>
                                            <a href=\"#\" class=\"button checkout wc-forward\">Checkout</a>
                                        </p>
                                    </div>
                                </div>
                                <div class=\"widget commerce widget_price_filter\">
                                    <h4 class=\"widget-title\">Filter by price</h4>
                                    <form>
                                        <div class=\"price_slider_wrapper\">
                                            <div class=\"price_slider\" style=\"display:none;\"></div>
                                            <div class=\"price_slider_amount\">
                                                <input type=\"text\" id=\"min_price\" name=\"min_price\" value=\"\" data-min=\"10\" placeholder=\"Min price\" />
                                                <input type=\"text\" id=\"max_price\" name=\"max_price\" value=\"\" data-max=\"190\" placeholder=\"Max price\" />
                                                <button type=\"submit\" class=\"button\">Filter</button>
                                                <div class=\"price_label\" style=\"display:none;\">
                                                    Price: <span class=\"from\"></span> &mdash; <span class=\"to\"></span>
                                                </div>
                                                <div class=\"clear\"></div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class=\"widget commerce widget_product_categories\">
                                    <h4 class=\"widget-title\">Product Categories</h4>
                                    <ul class=\"product-categories\">
                                        <li><a href=\"#\">Best Selling</a> <span class=\"count\">(11)</span></li>
                                        <li class=\"cat-parent\">
                                            <a href=\"#\">Man</a> <span class=\"count\">(11)</span>
                                            <ul class=\"children\">
                                                <li><a href=\"#\">Accessories</a> <span class=\"count\">(0)</span></li>
                                                <li><a href=\"#\">Coats &amp; Jackets</a> <span class=\"count\">(4)</span></li>
                                                <li><a href=\"#\">Jeans</a> <span class=\"count\">(0)</span></li>
                                                <li><a href=\"#\">New Arrivals</a> <span class=\"count\">(0)</span></li>
                                                <li><a href=\"#\">Suits</a> <span class=\"count\">(0)</span></li>
                                                <li><a href=\"#\">T-Shirts</a> <span class=\"count\">(6)</span></li>
                                            </ul>
                                        </li>
                                        <li><a href=\"#\">New Arrivals</a> <span class=\"count\">(17)</span></li>
                                        <li><a href=\"#\">Sales</a> <span class=\"count\">(10)</span></li>
                                        <li>
                                            <a href=\"#\">Woman</a> <span class=\"count\">(16)</span>
                                            <ul class=\"children\">
                                                <li><a href=\"#\">Accessories</a> <span class=\"count\">(3)</span></li>
                                                <li><a href=\"#\">Coats &amp; Jackets</a> <span class=\"count\">(3)</span></li>
                                                <li><a href=\"#\">Dresses</a> <span class=\"count\">(5)</span></li>
                                                <li><a href=\"#\">Jeans</a> <span class=\"count\">(2)</span></li>
                                                <li><a href=\"#\">Shorts</a> <span class=\"count\">(4)</span></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                                <div class=\"widget commerce widget_products\">
                                    <h4 class=\"widget-title\">Products</h4>
                                    <ul class=\"product_list_widget\">
                                        <li>
                                            <a href=\"shop-detail.html\">
                                                <img width=\"100\" height=\"140\" src=\"images/product/thumb/product-7.jpg\" alt=\"\" />
                                                <span class=\"product-title\">Floral Mock Neck Top</span>
                                            </a>
                                            <div class=\"star-rating\">
                                                <span style=\"width:100%\"></span>
                                            </div>
                                            <span class=\"amount\">&#36;99</span>
                                        </li>
                                        <li>
                                            <a href=\"shop-detail.html\">
                                                <img width=\"100\" height=\"140\" src=\"images/product/thumb/product-4.jpg\" alt=\"\" />
                                                <span class=\"product-title\">Eyelash Lace Kimono</span>
                                            </a>
                                            <div class=\"star-rating\">
                                                <span style=\"width:20%\"></span>
                                            </div>
                                            <del><span class=\"amount\">&#36;169</span></del> 
                                            <ins><span class=\"amount\">&#36;155</span></ins>
                                        </li>
                                        <li>
                                            <a href=\"shop-detail.html\">
                                                <img width=\"100\" height=\"140\" src=\"images/product/thumb/product-5.jpg\" alt=\"\" />
                                                <span class=\"product-title\">BrandMarled Sweater</span>
                                            </a>
                                            <div class=\"star-rating\">
                                                <span style=\"width:60%\"></span>
                                            </div>
                                            <del><span class=\"amount\">&#36;169</span></del> 
                                            <ins><span class=\"amount\">&#36;155</span></ins>
                                        </li>
                                    </ul>
                                </div>
                                <div class=\"widget commerce widget_top_rated_products\">
                                    <h4 class=\"widget-title\">Top Rated Products</h4>
                                    <ul class=\"product_list_widget\">
                                        <li>
                                            <a href=\"shop-detail.html\">
                                                <img width=\"100\" height=\"140\" src=\"images/product/thumb/product-1.jpg\" alt=\"\" />
                                                <span class=\"product-title\">D Black Jacket - Young</span>
                                            </a>
                                            <div class=\"star-rating\">
                                                <span style=\"width:100%\"></span>
                                            </div>
                                            <span class=\"amount\">&#36;45</span>
                                        </li>
                                        <li>
                                            <a href=\"shop-detail.html\">
                                                <img width=\"100\" height=\"140\" src=\"images/product/thumb/product-3.jpg\" alt=\"\" />
                                                <span class=\"product-title\">Pink Hat</span>
                                            </a>
                                            <div class=\"star-rating\">
                                                <span style=\"width:80%\"></span>
                                            </div>
                                            <del><span class=\"amount\">&#36;15</span></del> 
                                            <ins><span class=\"amount\">&#36;10</span></ins>
                                        </li>
                                        <li>
                                            <a href=\"shop-detail.html\">
                                                <img width=\"100\" height=\"140\" src=\"images/product/thumb/product-6.jpg\" alt=\"\" />
                                                <span class=\"product-title\">Gray Jacket</span>
                                            </a>
                                            <div class=\"star-rating\">
                                                <span style=\"width:100%\"></span>
                                            </div>
                                            <span class=\"amount\">&#36;85</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class=\"widget commerce widget_product_tag_cloud\">
                                    <h4 class=\"widget-title\">Product Tags</h4>
                                    <div class=\"tagcloud\">
                                        <a href=\"#\">accessories</a>
                                        <a href=\"#\">converse</a>
                                        <a href=\"#\">dresses</a>
                                        <a href=\"#\">fashion</a>
                                        <a href=\"#\">jacket</a>
                                        <a href=\"#\">men</a>
                                        <a href=\"#\">sales</a>
                                        <a href=\"#\">shoes</a>
                                        <a href=\"#\">shorts</a>
                                        <a href=\"#\">t-shirt</a>
                                        <a href=\"#\">watch</a>
                                        <a href=\"#\">women</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.main -->


";
        
        $__internal_a4a6aa7889ffe8d31c0bc34247c821275304da1e9d45113cc1bba60e8ccbe72f->leave($__internal_a4a6aa7889ffe8d31c0bc34247c821275304da1e9d45113cc1bba60e8ccbe72f_prof);

    }

    public function getTemplateName()
    {
        return "@CondorsTnMall/SimpleVisitor/brandsMiniWebSite.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 68,  140 => 67,  106 => 39,  89 => 24,  83 => 23,  71 => 21,  59 => 16,  55 => 15,  43 => 5,  37 => 4,  11 => 1,);
    }
}
/* {% extends "CondorsTnMallBundle::MyAccountTemplate.html.twig" %}*/
/* */
/* */
/* {% block pageTitle %}*/
/*     <style>*/
/* */
/*         .brands-img*/
/*         {*/
/*             -webkit-filter: invert(1);*/
/*             filter: invert(1);*/
/*         }*/
/* */
/*     </style>*/
/*     <h1 class="page-title"> */
/*         <a href="{{ path('condors_tn_mall_simple_brands_special' , {'id': brand.idEnseigne}) }}">*/
/*             <img class="brands-img" width="200" heigth="200" src="{{ asset('uploads/pictures/')}}{{ brand.imageenseigne }}"/> */
/*         </a>*/
/*     </h1>*/
/* {% endblock pageTitle %}*/
/* */
/* {% block titleTop %}<h2 class="title-heading">Brands</h2>{% endblock %}*/
/* */
/* {% block secMenu %}*/
/* */
/* */
/* */
/*     <div class="col-centered">*/
/*         <nav class="yolo-main-menu">*/
/*             <ul class="nav-collapse navbar-nav">*/
/*                 <li class="menu-item current-menu-item menu-item-has-children">*/
/*                     <a href="#">Home</a>*/
/*                 </li>*/
/*                 <!--                                    Begin Categorie-->*/
/*                 <li class="yolo_megamenu mega-col-columns-5 menu-item">*/
/*                     <a href="shop-by-category.html">Promotions</a>*/
/*                 </li>*/
/*                 <!--                                    End Categorie-->*/
/*                 <li class="menu-item menu-item-has-children">*/
/*                     <a href="{{path('condors_tn_mall_simple_brands')}}">Catalogs</a>*/
/* */
/*                 </li>*/
/*                 <li class="yolo_megamenu mega-col-columns-4 menu-item menu-item-has-children">*/
/*                     <a href="shop.html">About Us</a>*/
/*                 </li>*/
/*                 <li class="menu-item menu-item-has-children">*/
/*                     <a href="blog.html">Events</a>*/
/*                     <ul class="sub-menu">*/
/*                         <li class="menu-item"><a href="blog-list.html">Shop Events / Specials</a></li>*/
/*                         <li class="menu-item"><a href="blog-grid.html">Mall Events</a></li>*/
/* */
/*                         <li class="menu-item"><a href="blog-timeline.html">Kids Events</a></li>*/
/* */
/*                     </ul>*/
/*                 </li>*/
/*                 <li class="menu-item menu-item-has-children">*/
/*                     <a href="#">Blog</a>*/
/* */
/*                 </li>*/
/* */
/* */
/*             </ul>*/
/*         </nav>*/
/*     </div>*/
/* */
/* {% endblock secMenu %}*/
/* */
/* {% block brands %}*/
/* */
/*     <div class="content-area">*/
/*         <div class="commerce">*/
/*             <div class="shop-container pb-5">*/
/*                 <div class="container">*/
/*                     <div class="row">*/
/*                         <div class="yolo-main col-md-9 col-sm-12 col-xs-12 pull-right">*/
/*                             <div class="yolo-woo-meta clearfix">*/
/*                                 <div class="list_products_toolbar clearfix">*/
/*                                     <div class="products-toolbar">*/
/*                                         <span>View style: </span>*/
/*                                         <a class="selected" href="shop-grid.html"><i class="fa fa-th-large"></i></a>*/
/*                                         <a href="shop-list.html"><i class="fa fa-list"></i></a>*/
/*                                     </div>*/
/*                                     <form class="commerce-ordering">*/
/*                                         <select class="orderby">*/
/*                                             <option value="" selected='selected'>Default sorting</option>*/
/*                                             <option value="">Sort by popularity</option>*/
/*                                             <option value="">Sort by average rating</option>*/
/*                                             <option value="">Sort by newness</option>*/
/*                                             <option value="">Sort by price</option>*/
/*                                         </select>*/
/*                                     </form>*/
/*                                     <p class="commerce-result-count">*/
/*                                         Showing <span class="from-to">1&ndash;12</span> of 16 results*/
/*                                     </p>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="products row">*/
/*                                 <div class="col-md-4 col-sm-6 col-xs-12 yolo-product-item mb-4">*/
/*                                     <div class="yolo-product-inner">*/
/*                                         <div class="product-thumbnail">*/
/*                                             <div class="yolo-product-thumbnail yolo-product-front-thumbnail">*/
/*                                                 <img width="500" height="700" src="images/product/product-10.jpg" alt="" />*/
/*                                             </div>*/
/*                                             <div class="yolo-product-thumbnail yolo-product-back-thumbnail">*/
/*                                                 <img width="500" height="700" src="images/product/product-10-alt.jpg" alt="" />*/
/*                                             </div>*/
/*                                             <div class="yolo-product-meta">*/
/*                                                 <div class="entry-cart-meta">*/
/*                                                     <a href="#" class="button add_to_cart_button product_type_simple">Add to cart</a>*/
/*                                                     <a class="shop-loop-quickview" href="shop-detail.html">Quick shop</a>*/
/*                                                     <div class="yith-wcwl-add-to-wishlist">*/
/*                                                         <div class="yith-wcwl-add-button">*/
/*                                                             <a href="#" class="add_to_wishlist">*/
/*                                                                 Add to Wishlist*/
/*                                                             </a>*/
/*                                                         </div>*/
/*                                                     </div>*/
/*                                                     <div class="clear"></div>*/
/*                                                 </div>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                         <div class="yolo-product-footer clearfix">*/
/*                                             <h3><a href="shop-detail.html">fffff</a></h3>*/
/*                                             <div class="star-rating">*/
/*                                                 <span style="width:10%"></span>*/
/*                                             </div>*/
/*                                             <span class="price">*/
/*                                                 <span class="amount">&#36;99</span>*/
/*                                             </span>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 */
/*                             </div>*/
/*                             <div class="pagination list-center">*/
/*                                 <span class="page-numbers current">1</span>*/
/*                                 <a class="page-numbers" href="#">2</a>*/
/*                                 <a class="page-numbers" href="#">3</a>*/
/*                                 <a class="next page-numbers" href="#"><i class="fa fa-long-arrow-right"></i></a>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="yolo-sidebar col-md-3 yolo-sidebar-left pull-left">*/
/*                             <div class="yolo-sidebar-wrap">*/
/*                                 <div class="widget commerce widget_product_search">*/
/*                                     <h4 class="widget-title">Search</h4>*/
/*                                     <form class="commerce-product-search">*/
/*                                         <label class="screen-reader-text">Search for:</label>*/
/*                                         <input type="search" class="search-field" placeholder="Search Products&hellip;" value="" name="s" title="Search for:" />*/
/*                                         <input type="submit" value="Search" />*/
/*                                     </form>*/
/*                                 </div>*/
/*                                 <div class="widget commerce widget_shopping_cart">*/
/*                                     <h4 class="widget-title">Cart</h4>*/
/*                                     <div class="widget_shopping_cart_content">*/
/*                                         <ul class="cart_list product_list_widget">*/
/*                                             <li class="mini_cart_item">*/
/*                                                 <a href="#" class="remove">&times;</a>*/
/*                                                 <a href="shop-detail.html">*/
/*                                                     <img width="100" height="140" src="images/product/thumb/product-1.jpg" alt="">*/
/*                                                     A Blue Shirt Top&nbsp;*/
/*                                                 </a>*/
/*                                                 <span class="quantity">1 × <span class="amount">$99</span></span>*/
/*                                             </li>*/
/*                                         </ul><!-- end product list -->*/
/*                                         <p class="total"><strong>Subtotal:</strong> <span class="amount">$99</span></p>*/
/*                                         <p class="buttons">*/
/*                                             <a href="cart.html" class="button wc-forward">View Cart</a>*/
/*                                             <a href="#" class="button checkout wc-forward">Checkout</a>*/
/*                                         </p>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <div class="widget commerce widget_price_filter">*/
/*                                     <h4 class="widget-title">Filter by price</h4>*/
/*                                     <form>*/
/*                                         <div class="price_slider_wrapper">*/
/*                                             <div class="price_slider" style="display:none;"></div>*/
/*                                             <div class="price_slider_amount">*/
/*                                                 <input type="text" id="min_price" name="min_price" value="" data-min="10" placeholder="Min price" />*/
/*                                                 <input type="text" id="max_price" name="max_price" value="" data-max="190" placeholder="Max price" />*/
/*                                                 <button type="submit" class="button">Filter</button>*/
/*                                                 <div class="price_label" style="display:none;">*/
/*                                                     Price: <span class="from"></span> &mdash; <span class="to"></span>*/
/*                                                 </div>*/
/*                                                 <div class="clear"></div>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                     </form>*/
/*                                 </div>*/
/*                                 <div class="widget commerce widget_product_categories">*/
/*                                     <h4 class="widget-title">Product Categories</h4>*/
/*                                     <ul class="product-categories">*/
/*                                         <li><a href="#">Best Selling</a> <span class="count">(11)</span></li>*/
/*                                         <li class="cat-parent">*/
/*                                             <a href="#">Man</a> <span class="count">(11)</span>*/
/*                                             <ul class="children">*/
/*                                                 <li><a href="#">Accessories</a> <span class="count">(0)</span></li>*/
/*                                                 <li><a href="#">Coats &amp; Jackets</a> <span class="count">(4)</span></li>*/
/*                                                 <li><a href="#">Jeans</a> <span class="count">(0)</span></li>*/
/*                                                 <li><a href="#">New Arrivals</a> <span class="count">(0)</span></li>*/
/*                                                 <li><a href="#">Suits</a> <span class="count">(0)</span></li>*/
/*                                                 <li><a href="#">T-Shirts</a> <span class="count">(6)</span></li>*/
/*                                             </ul>*/
/*                                         </li>*/
/*                                         <li><a href="#">New Arrivals</a> <span class="count">(17)</span></li>*/
/*                                         <li><a href="#">Sales</a> <span class="count">(10)</span></li>*/
/*                                         <li>*/
/*                                             <a href="#">Woman</a> <span class="count">(16)</span>*/
/*                                             <ul class="children">*/
/*                                                 <li><a href="#">Accessories</a> <span class="count">(3)</span></li>*/
/*                                                 <li><a href="#">Coats &amp; Jackets</a> <span class="count">(3)</span></li>*/
/*                                                 <li><a href="#">Dresses</a> <span class="count">(5)</span></li>*/
/*                                                 <li><a href="#">Jeans</a> <span class="count">(2)</span></li>*/
/*                                                 <li><a href="#">Shorts</a> <span class="count">(4)</span></li>*/
/*                                             </ul>*/
/*                                         </li>*/
/*                                     </ul>*/
/*                                 </div>*/
/*                                 <div class="widget commerce widget_products">*/
/*                                     <h4 class="widget-title">Products</h4>*/
/*                                     <ul class="product_list_widget">*/
/*                                         <li>*/
/*                                             <a href="shop-detail.html">*/
/*                                                 <img width="100" height="140" src="images/product/thumb/product-7.jpg" alt="" />*/
/*                                                 <span class="product-title">Floral Mock Neck Top</span>*/
/*                                             </a>*/
/*                                             <div class="star-rating">*/
/*                                                 <span style="width:100%"></span>*/
/*                                             </div>*/
/*                                             <span class="amount">&#36;99</span>*/
/*                                         </li>*/
/*                                         <li>*/
/*                                             <a href="shop-detail.html">*/
/*                                                 <img width="100" height="140" src="images/product/thumb/product-4.jpg" alt="" />*/
/*                                                 <span class="product-title">Eyelash Lace Kimono</span>*/
/*                                             </a>*/
/*                                             <div class="star-rating">*/
/*                                                 <span style="width:20%"></span>*/
/*                                             </div>*/
/*                                             <del><span class="amount">&#36;169</span></del> */
/*                                             <ins><span class="amount">&#36;155</span></ins>*/
/*                                         </li>*/
/*                                         <li>*/
/*                                             <a href="shop-detail.html">*/
/*                                                 <img width="100" height="140" src="images/product/thumb/product-5.jpg" alt="" />*/
/*                                                 <span class="product-title">BrandMarled Sweater</span>*/
/*                                             </a>*/
/*                                             <div class="star-rating">*/
/*                                                 <span style="width:60%"></span>*/
/*                                             </div>*/
/*                                             <del><span class="amount">&#36;169</span></del> */
/*                                             <ins><span class="amount">&#36;155</span></ins>*/
/*                                         </li>*/
/*                                     </ul>*/
/*                                 </div>*/
/*                                 <div class="widget commerce widget_top_rated_products">*/
/*                                     <h4 class="widget-title">Top Rated Products</h4>*/
/*                                     <ul class="product_list_widget">*/
/*                                         <li>*/
/*                                             <a href="shop-detail.html">*/
/*                                                 <img width="100" height="140" src="images/product/thumb/product-1.jpg" alt="" />*/
/*                                                 <span class="product-title">D Black Jacket - Young</span>*/
/*                                             </a>*/
/*                                             <div class="star-rating">*/
/*                                                 <span style="width:100%"></span>*/
/*                                             </div>*/
/*                                             <span class="amount">&#36;45</span>*/
/*                                         </li>*/
/*                                         <li>*/
/*                                             <a href="shop-detail.html">*/
/*                                                 <img width="100" height="140" src="images/product/thumb/product-3.jpg" alt="" />*/
/*                                                 <span class="product-title">Pink Hat</span>*/
/*                                             </a>*/
/*                                             <div class="star-rating">*/
/*                                                 <span style="width:80%"></span>*/
/*                                             </div>*/
/*                                             <del><span class="amount">&#36;15</span></del> */
/*                                             <ins><span class="amount">&#36;10</span></ins>*/
/*                                         </li>*/
/*                                         <li>*/
/*                                             <a href="shop-detail.html">*/
/*                                                 <img width="100" height="140" src="images/product/thumb/product-6.jpg" alt="" />*/
/*                                                 <span class="product-title">Gray Jacket</span>*/
/*                                             </a>*/
/*                                             <div class="star-rating">*/
/*                                                 <span style="width:100%"></span>*/
/*                                             </div>*/
/*                                             <span class="amount">&#36;85</span>*/
/*                                         </li>*/
/*                                     </ul>*/
/*                                 </div>*/
/*                                 <div class="widget commerce widget_product_tag_cloud">*/
/*                                     <h4 class="widget-title">Product Tags</h4>*/
/*                                     <div class="tagcloud">*/
/*                                         <a href="#">accessories</a>*/
/*                                         <a href="#">converse</a>*/
/*                                         <a href="#">dresses</a>*/
/*                                         <a href="#">fashion</a>*/
/*                                         <a href="#">jacket</a>*/
/*                                         <a href="#">men</a>*/
/*                                         <a href="#">sales</a>*/
/*                                         <a href="#">shoes</a>*/
/*                                         <a href="#">shorts</a>*/
/*                                         <a href="#">t-shirt</a>*/
/*                                         <a href="#">watch</a>*/
/*                                         <a href="#">women</a>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     <!-- /.main -->*/
/* */
/* */
/* {% endblock brands %}*/
/* */
/* */
/* */
