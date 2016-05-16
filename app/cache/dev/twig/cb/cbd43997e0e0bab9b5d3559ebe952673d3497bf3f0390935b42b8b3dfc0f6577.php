<?php

/* CondorsTnMallBundle:SimpleVisitor:brandsMiniWebSite.html.twig */
class __TwigTemplate_670d339576272fb08079be59d5e9d3e8b056ac7f187f5497176bde94b828f49f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CondorsTnMallBundle::MyAccountTemplate.html.twig", "CondorsTnMallBundle:SimpleVisitor:brandsMiniWebSite.html.twig", 1);
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
        $__internal_e10f4ad75b6213ea49bf252eb84e7825388bd3b673c806e289b5e8dcd6ffa341 = $this->env->getExtension("native_profiler");
        $__internal_e10f4ad75b6213ea49bf252eb84e7825388bd3b673c806e289b5e8dcd6ffa341->enter($__internal_e10f4ad75b6213ea49bf252eb84e7825388bd3b673c806e289b5e8dcd6ffa341_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CondorsTnMallBundle:SimpleVisitor:brandsMiniWebSite.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e10f4ad75b6213ea49bf252eb84e7825388bd3b673c806e289b5e8dcd6ffa341->leave($__internal_e10f4ad75b6213ea49bf252eb84e7825388bd3b673c806e289b5e8dcd6ffa341_prof);

    }

    // line 3
    public function block_pageTitle($context, array $blocks = array())
    {
        $__internal_d4c23e612bae7cfb6c800a2a8b9e8ded92886ff7a99d78a094cc512317b2a068 = $this->env->getExtension("native_profiler");
        $__internal_d4c23e612bae7cfb6c800a2a8b9e8ded92886ff7a99d78a094cc512317b2a068->enter($__internal_d4c23e612bae7cfb6c800a2a8b9e8ded92886ff7a99d78a094cc512317b2a068_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageTitle"));

        // line 4
        echo "    <style>
        .brands-img {
            -webkit-filter: invert(1);
            filter: invert(1);
        }
    </style>
    <h1 class=\"page-title\">
        <a href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("condors_tn_mall_simple_brands_special", array("id" => $this->getAttribute((isset($context["brand"]) ? $context["brand"] : $this->getContext($context, "brand")), "idEnseigne", array()))), "html", null, true);
        echo "\">
            <img class=\"brands-img\" width=\"200\" heigth=\"200\"
                 src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("uploads/pictures/"), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["brand"]) ? $context["brand"] : $this->getContext($context, "brand")), "imageenseigne", array()), "html", null, true);
        echo "\"/>
        </a>
    </h1>
";
        
        $__internal_d4c23e612bae7cfb6c800a2a8b9e8ded92886ff7a99d78a094cc512317b2a068->leave($__internal_d4c23e612bae7cfb6c800a2a8b9e8ded92886ff7a99d78a094cc512317b2a068_prof);

    }

    // line 18
    public function block_titleTop($context, array $blocks = array())
    {
        $__internal_c0be21366ffcec29e16c43efbd747e702d9a1627a0c963b057dcbc00e5333bd4 = $this->env->getExtension("native_profiler");
        $__internal_c0be21366ffcec29e16c43efbd747e702d9a1627a0c963b057dcbc00e5333bd4->enter($__internal_c0be21366ffcec29e16c43efbd747e702d9a1627a0c963b057dcbc00e5333bd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titleTop"));

        echo "<h2 class=\"title-heading\">General Catalog ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["brand"]) ? $context["brand"] : $this->getContext($context, "brand")), "libelleenseigne", array()), "html", null, true);
        echo " <input id=\"currentBrand\" type=\"hidden\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["brand"]) ? $context["brand"] : $this->getContext($context, "brand")), "idEnseigne", array()), "html", null, true);
        echo "\">
    </h2>";
        
        $__internal_c0be21366ffcec29e16c43efbd747e702d9a1627a0c963b057dcbc00e5333bd4->leave($__internal_c0be21366ffcec29e16c43efbd747e702d9a1627a0c963b057dcbc00e5333bd4_prof);

    }

    // line 21
    public function block_secMenu($context, array $blocks = array())
    {
        $__internal_4c501fc08fd9b6d4509c22d52a8b11dc229afa1321b6bb1a619af0ed3078dc85 = $this->env->getExtension("native_profiler");
        $__internal_4c501fc08fd9b6d4509c22d52a8b11dc229afa1321b6bb1a619af0ed3078dc85->enter($__internal_4c501fc08fd9b6d4509c22d52a8b11dc229afa1321b6bb1a619af0ed3078dc85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "secMenu"));

        // line 22
        echo "



";
        
        $__internal_4c501fc08fd9b6d4509c22d52a8b11dc229afa1321b6bb1a619af0ed3078dc85->leave($__internal_4c501fc08fd9b6d4509c22d52a8b11dc229afa1321b6bb1a619af0ed3078dc85_prof);

    }

    // line 28
    public function block_brands($context, array $blocks = array())
    {
        $__internal_f257e02e14f26c932dcff7c9b08f5fe5e3dbcf6427d3d6f0d7ff865c74ad9c12 = $this->env->getExtension("native_profiler");
        $__internal_f257e02e14f26c932dcff7c9b08f5fe5e3dbcf6427d3d6f0d7ff865c74ad9c12->enter($__internal_f257e02e14f26c932dcff7c9b08f5fe5e3dbcf6427d3d6f0d7ff865c74ad9c12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "brands"));

        // line 29
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
                                        <select id=\"orderby\" class=\"orderby\">
                                            <option value=\"\" selected='selected'>Default sorting</option>

                                            <option value=\"2\">Sort by the most expensive Price</option>
                                            <option value=\"1\">Sort by the Cheapest Price</option>
                                        </select>
                                    </form>

                                    <p class=\"commerce-result-count\">
                                        Showing <span class=\"from-to\">1&ndash;12</span> of ";
        // line 53
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["catalogs"]) ? $context["catalogs"] : $this->getContext($context, "catalogs"))), "html", null, true);
        echo " results
                                    </p>
                                </div>
                            </div>
                            <div id=\"prodrow\" class=\"products row\">
                                ";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["catalogs"]) ? $context["catalogs"] : $this->getContext($context, "catalogs")));
        foreach ($context['_seq'] as $context["_key"] => $context["catalog"]) {
            // line 59
            echo "
                                    <div class=\"col-md-4 col-sm-6 col-xs-12 yolo-product-item mb-4\">
                                        <div class=\"yolo-product-inner\">
                                            <div class=\"product-thumbnail\">
                                                <div class=\"yolo-product-thumbnail yolo-product-front-thumbnail\">
                                                    <img width=\"500\" height=\"700\"
                                                         src=\"";
            // line 65
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("uploads/pictures/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($context["catalog"], "imageprodfront", array()), "html", null, true);
            echo "\"
                                                         alt=\"\"/>
                                                </div>
                                                <div class=\"yolo-product-thumbnail yolo-product-back-thumbnail\">
                                                    <img width=\"500\" height=\"700\"
                                                         src=\"";
            // line 70
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("uploads/pictures/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($context["catalog"], "imageprodback", array()), "html", null, true);
            echo "\"
                                                         alt=\"\"/>
                                                </div>
                                                <div class=\"yolo-product-meta\">
                                                    <div class=\"entry-cart-meta\">
                                                        <a href=\"#\"
                                                           class=\"button add_to_cart_button product_type_simple\">Add to
                                                            cart</a>
                                                        <a class=\"shop-loop-quickview\"
                                                           href=\"";
            // line 79
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("condors_tn_mall_shopDetail", array("id" => $this->getAttribute($context["catalog"], "idProduit", array()))), "html", null, true);
            echo "#focus\">Quick
                                                            shop</a>
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
                                                <h3>
                                                    <a href=\"";
            // line 94
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("condors_tn_mall_shopDetail", array("id" => $this->getAttribute($context["catalog"], "idProduit", array()))), "html", null, true);
            echo "#focus\">
                                                        ";
            // line 95
            echo twig_escape_filter($this->env, $this->getAttribute($context["catalog"], "libelleProduit", array()), "html", null, true);
            echo "
                                                    </a></h3>
                                                <div class=\"star-rating\">
                                                    <span style=\"width:10%\"></span>
                                                </div>
                                            <span class=\"price\">
                                                 ";
            // line 101
            $context["fprice"] = ((($this->getAttribute($context["catalog"], "tvaProduit", array()) * $this->getAttribute($context["catalog"], "prixProduit", array())) / 100) + $this->getAttribute($context["catalog"], "prixProduit", array()));
            // line 102
            echo "                                                <span class=\"amount\">&#36;";
            echo twig_escape_filter($this->env, (isset($context["fprice"]) ? $context["fprice"] : $this->getContext($context, "fprice")), "html", null, true);
            echo "</span>
                                            </span>
                                            </div>
                                        </div>
                                    </div>


                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['catalog'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 110
        echo "                            </div>
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
                                        <input type=\"search\" class=\"search-field\" placeholder=\"Search Products&hellip;\"
                                               value=\"\" name=\"s\" title=\"Search for:\"/>
                                        <input type=\"submit\" value=\"Search\"/>
                                    </form>
                                </div>
                                <div class=\"widget commerce widget_shopping_cart\">
                                    <h4 class=\"widget-title\">Cart</h4>

                                </div>
                                <div class=\"widget commerce widget_price_filter\">
                                    <h4 class=\"widget-title\">Filter by price</h4>

                                        <div class=\"price_slider_wrapper\">
                                            <div class=\"price_slider\" style=\"display:none;\"></div>
                                            <div class=\"price_slider_amount\">
                                                <input type=\"text\" id=\"min_price\" name=\"min_price\" value=\"\"
                                                       data-min=\"10\" placeholder=\"Min price\"/>
                                                <input type=\"text\" id=\"max_price\" name=\"max_price\" value=\"\"
                                                       data-max=\"190\" placeholder=\"Max price\"/>
                                                <button id=\"sendPrice\" type=\"submit\" class=\"button\">Filter</button>
                                                <div class=\"price_label\" style=\"display:none;\">
                                                    Price: <span class=\"from\"></span> &mdash; <span class=\"to\"></span>
                                                </div>
                                                <div class=\"clear\"></div>
                                            </div>


                                        </div>

                                </div>
                                <div class=\"widget commerce widget_product_categories\">
                                    <h4 class=\"widget-title\">Product Categories</h4>
                                    <ul class=\"product-categories\">


                                    </ul>
                                </div>
                                <div class=\"widget commerce widget_products\">
                                    <h4 class=\"widget-title\">Products</h4>
                                    <ul class=\"product_list_widget\">
                                        <li>
                                            <a href=\"shop-detail.html\">
                                                <img width=\"100\" height=\"140\" src=\"images/product/thumb/product-7.jpg\"
                                                     alt=\"\"/>
                                                <span class=\"product-title\">Floral Mock Neck Top</span>
                                            </a>
                                            <div class=\"star-rating\">
                                                <span style=\"width:100%\"></span>
                                            </div>
                                            <span class=\"amount\">&#36;99</span>
                                        </li>
                                        <li>
                                            <a href=\"shop-detail.html\">
                                                <img width=\"100\" height=\"140\" src=\"images/product/thumb/product-4.jpg\"
                                                     alt=\"\"/>
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
                                                <img width=\"100\" height=\"140\" src=\"images/product/thumb/product-5.jpg\"
                                                     alt=\"\"/>
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
                                                <img width=\"100\" height=\"140\" src=\"images/product/thumb/product-1.jpg\"
                                                     alt=\"\"/>
                                                <span class=\"product-title\">D Black Jacket - Young</span>
                                            </a>
                                            <div class=\"star-rating\">
                                                <span style=\"width:100%\"></span>
                                            </div>
                                            <span class=\"amount\">&#36;45</span>
                                        </li>
                                        <li>
                                            <a href=\"shop-detail.html\">
                                                <img width=\"100\" height=\"140\" src=\"images/product/thumb/product-3.jpg\"
                                                     alt=\"\"/>
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
                                                <img width=\"100\" height=\"140\" src=\"images/product/thumb/product-6.jpg\"
                                                     alt=\"\"/>
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
    <script src=\"";
        // line 265
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("responsable/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\">
        \$(\"document\").ready(function () {
            \$(\"#orderby\").change(function () {


                \$.ajax({
                    type: 'get',
                    url: 'http://localhost/TunisiaMall/web/app_dev.php/brands/mini-website/' + \$(\"#currentBrand\").val() + '/products/searchProdOrder/' + \$(\"#orderby\").val(),
                    beforeSend: function () {
                        console.log('searching ...');
                    },
                    success: function (data) {


                        var trHTML = '';
                        \$.each(data, function (i, item) {
                            var pr = ((item.tvaProduit * item.prixProduit) / 100) + item.prixProduit;
                            trHTML += \"<div class='col-md-4 col-sm-6 col-xs-12 yolo-product-item mb-4'>\\n                                        <div class='yolo-product-inner'>\\n                                            <div class='product-thumbnail'>\\n                                                <div class='yolo-product-thumbnail yolo-product-front-thumbnail'>\\n                                                    <img width='500' height='700'\\n                                                         src='";
        // line 283
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("uploads/pictures/"), "html", null, true);
        echo "\" + item.imageprodfront + \" '\\n                                                         alt=''/>\\n                                                </div>\\n                                                <div class='yolo-product-thumbnail yolo-product-back-thumbnail'>\\n                                                    <img width='500' height='700'\\n                                                         src='";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("uploads/pictures/"), "html", null, true);
        echo "\" + item.imageprodback + \"'\\n                                                         alt=''/>\\n                                                </div>\\n                                                <div class='yolo-product-meta'>\\n                                                    <div class='entry-cart-meta'>\\n                                                        <a href='#'\\n                                                           class='button add_to_cart_button product_type_simple'>Add to\\n                                                            cart</a>\\n                                                        <a class='shop-loop-quickview'\\n href='";
        echo $this->env->getExtension('routing')->getPath("condors_tn_mall_shopDetail", array("id" => 0));
        echo "#focus'>Quick\\n                                                            shop</a>\\n                                                        <div class='yith-wcwl-add-to-wishlist'>\\n                                                            <div class='yith-wcwl-add-button'>\\n                                                                <a href='#' class='add_to_wishlist'>\\n                                                                    Add to Wishlist\\n                                                                </a>\\n                                                            </div>\\n                                                        </div>\\n                                                        <div class='clear'></div>\\n                                                    </div>\\n                                                </div>\\n                                            </div>\\n                                            <div class='yolo-product-footer clearfix'>\\n                                                <h3>\\n                                                    <a href='";
        echo $this->env->getExtension('routing')->getPath("condors_tn_mall_shopDetail", array("id" => 0));
        echo "#focus'>\\n                                                      \\n\" + item.libelleProduit + \"\\n\\n                                                    </a></h3>\\n                                                <div class='star-rating'>\\n                                                    <span style='width:10%'></span>\\n                                                </div>\\n                                            <span class='price'>\\n                                              \\n                                                <span class='amount'>&#36; \" + pr + \" </span>\\n                                            </span>\\n                                            </div>\\n                                        </div>\\n                                    </div>\";

                        });
                        \$('#prodrow').html(trHTML);
                        console.log('Ok ...');

                    }
                });

            });
        });
    </script>

    <script type=\"text/javascript\">
        \$(\"document\").ready(function () {
            \$(\"#min_price\").keyup(function () {


                \$.ajax({
                    type: 'get',
                    url: 'http://localhost/TunisiaMall/web/app_dev.php/brands/mini-website/' + \$(\"#currentBrand\").val() + '/products/searchProdOrder/' + \$(\"#orderby\").val()+'[Dmin]'+\$(\"#min_price\").val()+'[Fmin]'+'[Dmax]'+\$(\"#max_price\").val()+'[Fmax]',
                    beforeSend: function () {
                        console.log('searching ...');
                    },
                    success: function (data) {


                        var trHTML = '';
                        \$.each(data, function (i, item) {
                            var pr = ((item.tvaProduit * item.prixProduit) / 100) + item.prixProduit;
                            trHTML += \"<div class='col-md-4 col-sm-6 col-xs-12 yolo-product-item mb-4'>\\n                                        <div class='yolo-product-inner'>\\n                                            <div class='product-thumbnail'>\\n                                                <div class='yolo-product-thumbnail yolo-product-front-thumbnail'>\\n                                                    <img width='500' height='700'\\n                                                         src='";
        // line 313
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("uploads/pictures/"), "html", null, true);
        echo "\" + item.imageprodfront + \" '\\n                                                         alt=''/>\\n                                                </div>\\n                                                <div class='yolo-product-thumbnail yolo-product-back-thumbnail'>\\n                                                    <img width='500' height='700'\\n                                                         src='";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("uploads/pictures/"), "html", null, true);
        echo "\" + item.imageprodback + \"'\\n                                                         alt=''/>\\n                                                </div>\\n                                                <div class='yolo-product-meta'>\\n                                                    <div class='entry-cart-meta'>\\n                                                        <a href='#'\\n                                                           class='button add_to_cart_button product_type_simple'>Add to\\n                                                            cart</a>\\n                                                        <a class='shop-loop-quickview'\\n href='";
        echo $this->env->getExtension('routing')->getPath("condors_tn_mall_shopDetail", array("id" => 0));
        echo "#focus'>Quick\\n                                                            shop</a>\\n                                                        <div class='yith-wcwl-add-to-wishlist'>\\n                                                            <div class='yith-wcwl-add-button'>\\n                                                                <a href='#' class='add_to_wishlist'>\\n                                                                    Add to Wishlist\\n                                                                </a>\\n                                                            </div>\\n                                                        </div>\\n                                                        <div class='clear'></div>\\n                                                    </div>\\n                                                </div>\\n                                            </div>\\n                                            <div class='yolo-product-footer clearfix'>\\n                                                <h3>\\n                                                    <a href='";
        echo $this->env->getExtension('routing')->getPath("condors_tn_mall_shopDetail", array("id" => 0));
        echo "#focus'>\\n                                                      \\n\" + item.libelleProduit + \"\\n\\n                                                    </a></h3>\\n                                                <div class='star-rating'>\\n                                                    <span style='width:10%'></span>\\n                                                </div>\\n                                            <span class='price'>\\n                                              \\n                                                <span class='amount'>&#36; \" + pr + \" </span>\\n                                            </span>\\n                                            </div>\\n                                        </div>\\n                                    </div>\";

                        });
                        \$('#prodrow').html(trHTML);
                        console.log('Ok ...');

                    }
                });

            });
        });
    </script>

    <script type=\"text/javascript\">
        \$(\"document\").ready(function () {
            var trHTML = '';

                \$.ajax({
                    type: 'get',
                    url: 'http://localhost/TunisiaMall/web/app_dev.php/categories/search-categories/' + \$(\"#currentBrand\").val(),
                    beforeSend: function () {
                        console.log('searching  to find categorie...');
                    },
                    success: function (data) {



                        \$.each(data, function (i, item) {


                            trHTML += \"<li class='cat-parent'><a href='#'>\"+item.name+\"</a> <span class='count'>(11)</span></li>\"

                        });
                        \$('.product-categories').html(trHTML);
                        console.log('Ok ...');
                        trHTML=\"\";

                    }
                });

            var auto_refresh = setInterval(

                    function ()

                    {
                        \$.ajax({
                            type: 'get',
                            url: 'http://localhost/TunisiaMall/web/app_dev.php/categories/search-categories/' + \$(\"#currentBrand\").val(),
                            beforeSend: function () {
                                console.log('searching  to find categorie...');
                            },
                            success: function (data) {



                                \$.each(data, function (i, item) {


                                    trHTML += \"<li class='cat-parent'><a href='#'>\"+item.name+\"</a> <span class='count'>(11)</span></li>\"

                                });

                                console.log('Ok .. SEC.');

                            }
                        });

                        \$('.product-categories').html(trHTML).fadeIn(\"slow\");
                        trHTML=\"\";

                    }, 3000); // rafraichis toutes les 10000 millisecondes




        });
    </script>






";
        
        $__internal_f257e02e14f26c932dcff7c9b08f5fe5e3dbcf6427d3d6f0d7ff865c74ad9c12->leave($__internal_f257e02e14f26c932dcff7c9b08f5fe5e3dbcf6427d3d6f0d7ff865c74ad9c12_prof);

    }

    public function getTemplateName()
    {
        return "CondorsTnMallBundle:SimpleVisitor:brandsMiniWebSite.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  442 => 313,  403 => 283,  382 => 265,  225 => 110,  210 => 102,  208 => 101,  199 => 95,  195 => 94,  177 => 79,  164 => 70,  155 => 65,  147 => 59,  143 => 58,  135 => 53,  109 => 29,  103 => 28,  92 => 22,  86 => 21,  69 => 18,  57 => 13,  52 => 11,  43 => 4,  37 => 3,  11 => 1,);
    }
}
/* {% extends "CondorsTnMallBundle::MyAccountTemplate.html.twig" %}*/
/* */
/* {% block pageTitle %}*/
/*     <style>*/
/*         .brands-img {*/
/*             -webkit-filter: invert(1);*/
/*             filter: invert(1);*/
/*         }*/
/*     </style>*/
/*     <h1 class="page-title">*/
/*         <a href="{{ path('condors_tn_mall_simple_brands_special' , {'id': brand.idEnseigne}) }}">*/
/*             <img class="brands-img" width="200" heigth="200"*/
/*                  src="{{ asset('uploads/pictures/') }}{{ brand.imageenseigne }}"/>*/
/*         </a>*/
/*     </h1>*/
/* {% endblock pageTitle %}*/
/* */
/* {% block titleTop %}<h2 class="title-heading">General Catalog {{ brand.libelleenseigne }} <input id="currentBrand" type="hidden" value="{{ brand.idEnseigne }}">*/
/*     </h2>{% endblock %}*/
/* */
/* {% block secMenu %}*/
/* */
/* */
/* */
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
/*                                         <select id="orderby" class="orderby">*/
/*                                             <option value="" selected='selected'>Default sorting</option>*/
/* */
/*                                             <option value="2">Sort by the most expensive Price</option>*/
/*                                             <option value="1">Sort by the Cheapest Price</option>*/
/*                                         </select>*/
/*                                     </form>*/
/* */
/*                                     <p class="commerce-result-count">*/
/*                                         Showing <span class="from-to">1&ndash;12</span> of {{ catalogs|length }} results*/
/*                                     </p>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div id="prodrow" class="products row">*/
/*                                 {% for catalog in catalogs %}*/
/* */
/*                                     <div class="col-md-4 col-sm-6 col-xs-12 yolo-product-item mb-4">*/
/*                                         <div class="yolo-product-inner">*/
/*                                             <div class="product-thumbnail">*/
/*                                                 <div class="yolo-product-thumbnail yolo-product-front-thumbnail">*/
/*                                                     <img width="500" height="700"*/
/*                                                          src="{{ asset('uploads/pictures/') }}{{ catalog.imageprodfront }}"*/
/*                                                          alt=""/>*/
/*                                                 </div>*/
/*                                                 <div class="yolo-product-thumbnail yolo-product-back-thumbnail">*/
/*                                                     <img width="500" height="700"*/
/*                                                          src="{{ asset('uploads/pictures/') }}{{ catalog.imageprodback }}"*/
/*                                                          alt=""/>*/
/*                                                 </div>*/
/*                                                 <div class="yolo-product-meta">*/
/*                                                     <div class="entry-cart-meta">*/
/*                                                         <a href="#"*/
/*                                                            class="button add_to_cart_button product_type_simple">Add to*/
/*                                                             cart</a>*/
/*                                                         <a class="shop-loop-quickview"*/
/*                                                            href="{{ path("condors_tn_mall_shopDetail" , { id: catalog.idProduit } ) }}#focus">Quick*/
/*                                                             shop</a>*/
/*                                                         <div class="yith-wcwl-add-to-wishlist">*/
/*                                                             <div class="yith-wcwl-add-button">*/
/*                                                                 <a href="#" class="add_to_wishlist">*/
/*                                                                     Add to Wishlist*/
/*                                                                 </a>*/
/*                                                             </div>*/
/*                                                         </div>*/
/*                                                         <div class="clear"></div>*/
/*                                                     </div>*/
/*                                                 </div>*/
/*                                             </div>*/
/*                                             <div class="yolo-product-footer clearfix">*/
/*                                                 <h3>*/
/*                                                     <a href="{{ path("condors_tn_mall_shopDetail" , { id: catalog.idProduit } ) }}#focus">*/
/*                                                         {{ catalog.libelleProduit }}*/
/*                                                     </a></h3>*/
/*                                                 <div class="star-rating">*/
/*                                                     <span style="width:10%"></span>*/
/*                                                 </div>*/
/*                                             <span class="price">*/
/*                                                  {% set fprice =(( catalog.tvaProduit* catalog.prixProduit )/100)+catalog.prixProduit %}*/
/*                                                 <span class="amount">&#36;{{ fprice }}</span>*/
/*                                             </span>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                     </div>*/
/* */
/* */
/*                                 {% endfor %}*/
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
/*                                         <input type="search" class="search-field" placeholder="Search Products&hellip;"*/
/*                                                value="" name="s" title="Search for:"/>*/
/*                                         <input type="submit" value="Search"/>*/
/*                                     </form>*/
/*                                 </div>*/
/*                                 <div class="widget commerce widget_shopping_cart">*/
/*                                     <h4 class="widget-title">Cart</h4>*/
/* */
/*                                 </div>*/
/*                                 <div class="widget commerce widget_price_filter">*/
/*                                     <h4 class="widget-title">Filter by price</h4>*/
/* */
/*                                         <div class="price_slider_wrapper">*/
/*                                             <div class="price_slider" style="display:none;"></div>*/
/*                                             <div class="price_slider_amount">*/
/*                                                 <input type="text" id="min_price" name="min_price" value=""*/
/*                                                        data-min="10" placeholder="Min price"/>*/
/*                                                 <input type="text" id="max_price" name="max_price" value=""*/
/*                                                        data-max="190" placeholder="Max price"/>*/
/*                                                 <button id="sendPrice" type="submit" class="button">Filter</button>*/
/*                                                 <div class="price_label" style="display:none;">*/
/*                                                     Price: <span class="from"></span> &mdash; <span class="to"></span>*/
/*                                                 </div>*/
/*                                                 <div class="clear"></div>*/
/*                                             </div>*/
/* */
/* */
/*                                         </div>*/
/* */
/*                                 </div>*/
/*                                 <div class="widget commerce widget_product_categories">*/
/*                                     <h4 class="widget-title">Product Categories</h4>*/
/*                                     <ul class="product-categories">*/
/* */
/* */
/*                                     </ul>*/
/*                                 </div>*/
/*                                 <div class="widget commerce widget_products">*/
/*                                     <h4 class="widget-title">Products</h4>*/
/*                                     <ul class="product_list_widget">*/
/*                                         <li>*/
/*                                             <a href="shop-detail.html">*/
/*                                                 <img width="100" height="140" src="images/product/thumb/product-7.jpg"*/
/*                                                      alt=""/>*/
/*                                                 <span class="product-title">Floral Mock Neck Top</span>*/
/*                                             </a>*/
/*                                             <div class="star-rating">*/
/*                                                 <span style="width:100%"></span>*/
/*                                             </div>*/
/*                                             <span class="amount">&#36;99</span>*/
/*                                         </li>*/
/*                                         <li>*/
/*                                             <a href="shop-detail.html">*/
/*                                                 <img width="100" height="140" src="images/product/thumb/product-4.jpg"*/
/*                                                      alt=""/>*/
/*                                                 <span class="product-title">Eyelash Lace Kimono</span>*/
/*                                             </a>*/
/*                                             <div class="star-rating">*/
/*                                                 <span style="width:20%"></span>*/
/*                                             </div>*/
/*                                             <del><span class="amount">&#36;169</span></del>*/
/*                                             <ins><span class="amount">&#36;155</span></ins>*/
/*                                         </li>*/
/*                                         <li>*/
/*                                             <a href="shop-detail.html">*/
/*                                                 <img width="100" height="140" src="images/product/thumb/product-5.jpg"*/
/*                                                      alt=""/>*/
/*                                                 <span class="product-title">BrandMarled Sweater</span>*/
/*                                             </a>*/
/*                                             <div class="star-rating">*/
/*                                                 <span style="width:60%"></span>*/
/*                                             </div>*/
/*                                             <del><span class="amount">&#36;169</span></del>*/
/*                                             <ins><span class="amount">&#36;155</span></ins>*/
/*                                         </li>*/
/*                                     </ul>*/
/*                                 </div>*/
/*                                 <div class="widget commerce widget_top_rated_products">*/
/*                                     <h4 class="widget-title">Top Rated Products</h4>*/
/*                                     <ul class="product_list_widget">*/
/*                                         <li>*/
/*                                             <a href="shop-detail.html">*/
/*                                                 <img width="100" height="140" src="images/product/thumb/product-1.jpg"*/
/*                                                      alt=""/>*/
/*                                                 <span class="product-title">D Black Jacket - Young</span>*/
/*                                             </a>*/
/*                                             <div class="star-rating">*/
/*                                                 <span style="width:100%"></span>*/
/*                                             </div>*/
/*                                             <span class="amount">&#36;45</span>*/
/*                                         </li>*/
/*                                         <li>*/
/*                                             <a href="shop-detail.html">*/
/*                                                 <img width="100" height="140" src="images/product/thumb/product-3.jpg"*/
/*                                                      alt=""/>*/
/*                                                 <span class="product-title">Pink Hat</span>*/
/*                                             </a>*/
/*                                             <div class="star-rating">*/
/*                                                 <span style="width:80%"></span>*/
/*                                             </div>*/
/*                                             <del><span class="amount">&#36;15</span></del>*/
/*                                             <ins><span class="amount">&#36;10</span></ins>*/
/*                                         </li>*/
/*                                         <li>*/
/*                                             <a href="shop-detail.html">*/
/*                                                 <img width="100" height="140" src="images/product/thumb/product-6.jpg"*/
/*                                                      alt=""/>*/
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
/*     <script src="{{ asset('responsable/js/jquery.min.js') }}"></script>*/
/*     <script type="text/javascript">*/
/*         $("document").ready(function () {*/
/*             $("#orderby").change(function () {*/
/* */
/* */
/*                 $.ajax({*/
/*                     type: 'get',*/
/*                     url: 'http://localhost/TunisiaMall/web/app_dev.php/brands/mini-website/' + $("#currentBrand").val() + '/products/searchProdOrder/' + $("#orderby").val(),*/
/*                     beforeSend: function () {*/
/*                         console.log('searching ...');*/
/*                     },*/
/*                     success: function (data) {*/
/* */
/* */
/*                         var trHTML = '';*/
/*                         $.each(data, function (i, item) {*/
/*                             var pr = ((item.tvaProduit * item.prixProduit) / 100) + item.prixProduit;*/
/*                             trHTML += "<div class='col-md-4 col-sm-6 col-xs-12 yolo-product-item mb-4'>\n                                        <div class='yolo-product-inner'>\n                                            <div class='product-thumbnail'>\n                                                <div class='yolo-product-thumbnail yolo-product-front-thumbnail'>\n                                                    <img width='500' height='700'\n                                                         src='{{ asset('uploads/pictures/') }}" + item.imageprodfront + " '\n                                                         alt=''/>\n                                                </div>\n                                                <div class='yolo-product-thumbnail yolo-product-back-thumbnail'>\n                                                    <img width='500' height='700'\n                                                         src='{{ asset('uploads/pictures/') }}" + item.imageprodback + "'\n                                                         alt=''/>\n                                                </div>\n                                                <div class='yolo-product-meta'>\n                                                    <div class='entry-cart-meta'>\n                                                        <a href='#'\n                                                           class='button add_to_cart_button product_type_simple'>Add to\n                                                            cart</a>\n                                                        <a class='shop-loop-quickview'\n href='{{ path('condors_tn_mall_shopDetail' , { id: 0 } ) }}#focus'>Quick\n                                                            shop</a>\n                                                        <div class='yith-wcwl-add-to-wishlist'>\n                                                            <div class='yith-wcwl-add-button'>\n                                                                <a href='#' class='add_to_wishlist'>\n                                                                    Add to Wishlist\n                                                                </a>\n                                                            </div>\n                                                        </div>\n                                                        <div class='clear'></div>\n                                                    </div>\n                                                </div>\n                                            </div>\n                                            <div class='yolo-product-footer clearfix'>\n                                                <h3>\n                                                    <a href='{{ path('condors_tn_mall_shopDetail' , { id: 0} ) }}#focus'>\n                                                      \n" + item.libelleProduit + "\n\n                                                    </a></h3>\n                                                <div class='star-rating'>\n                                                    <span style='width:10%'></span>\n                                                </div>\n                                            <span class='price'>\n                                              \n                                                <span class='amount'>&#36; " + pr + " </span>\n                                            </span>\n                                            </div>\n                                        </div>\n                                    </div>";*/
/* */
/*                         });*/
/*                         $('#prodrow').html(trHTML);*/
/*                         console.log('Ok ...');*/
/* */
/*                     }*/
/*                 });*/
/* */
/*             });*/
/*         });*/
/*     </script>*/
/* */
/*     <script type="text/javascript">*/
/*         $("document").ready(function () {*/
/*             $("#min_price").keyup(function () {*/
/* */
/* */
/*                 $.ajax({*/
/*                     type: 'get',*/
/*                     url: 'http://localhost/TunisiaMall/web/app_dev.php/brands/mini-website/' + $("#currentBrand").val() + '/products/searchProdOrder/' + $("#orderby").val()+'[Dmin]'+$("#min_price").val()+'[Fmin]'+'[Dmax]'+$("#max_price").val()+'[Fmax]',*/
/*                     beforeSend: function () {*/
/*                         console.log('searching ...');*/
/*                     },*/
/*                     success: function (data) {*/
/* */
/* */
/*                         var trHTML = '';*/
/*                         $.each(data, function (i, item) {*/
/*                             var pr = ((item.tvaProduit * item.prixProduit) / 100) + item.prixProduit;*/
/*                             trHTML += "<div class='col-md-4 col-sm-6 col-xs-12 yolo-product-item mb-4'>\n                                        <div class='yolo-product-inner'>\n                                            <div class='product-thumbnail'>\n                                                <div class='yolo-product-thumbnail yolo-product-front-thumbnail'>\n                                                    <img width='500' height='700'\n                                                         src='{{ asset('uploads/pictures/') }}" + item.imageprodfront + " '\n                                                         alt=''/>\n                                                </div>\n                                                <div class='yolo-product-thumbnail yolo-product-back-thumbnail'>\n                                                    <img width='500' height='700'\n                                                         src='{{ asset('uploads/pictures/') }}" + item.imageprodback + "'\n                                                         alt=''/>\n                                                </div>\n                                                <div class='yolo-product-meta'>\n                                                    <div class='entry-cart-meta'>\n                                                        <a href='#'\n                                                           class='button add_to_cart_button product_type_simple'>Add to\n                                                            cart</a>\n                                                        <a class='shop-loop-quickview'\n href='{{ path('condors_tn_mall_shopDetail' , { id: 0 } ) }}#focus'>Quick\n                                                            shop</a>\n                                                        <div class='yith-wcwl-add-to-wishlist'>\n                                                            <div class='yith-wcwl-add-button'>\n                                                                <a href='#' class='add_to_wishlist'>\n                                                                    Add to Wishlist\n                                                                </a>\n                                                            </div>\n                                                        </div>\n                                                        <div class='clear'></div>\n                                                    </div>\n                                                </div>\n                                            </div>\n                                            <div class='yolo-product-footer clearfix'>\n                                                <h3>\n                                                    <a href='{{ path('condors_tn_mall_shopDetail' , { id: 0} ) }}#focus'>\n                                                      \n" + item.libelleProduit + "\n\n                                                    </a></h3>\n                                                <div class='star-rating'>\n                                                    <span style='width:10%'></span>\n                                                </div>\n                                            <span class='price'>\n                                              \n                                                <span class='amount'>&#36; " + pr + " </span>\n                                            </span>\n                                            </div>\n                                        </div>\n                                    </div>";*/
/* */
/*                         });*/
/*                         $('#prodrow').html(trHTML);*/
/*                         console.log('Ok ...');*/
/* */
/*                     }*/
/*                 });*/
/* */
/*             });*/
/*         });*/
/*     </script>*/
/* */
/*     <script type="text/javascript">*/
/*         $("document").ready(function () {*/
/*             var trHTML = '';*/
/* */
/*                 $.ajax({*/
/*                     type: 'get',*/
/*                     url: 'http://localhost/TunisiaMall/web/app_dev.php/categories/search-categories/' + $("#currentBrand").val(),*/
/*                     beforeSend: function () {*/
/*                         console.log('searching  to find categorie...');*/
/*                     },*/
/*                     success: function (data) {*/
/* */
/* */
/* */
/*                         $.each(data, function (i, item) {*/
/* */
/* */
/*                             trHTML += "<li class='cat-parent'><a href='#'>"+item.name+"</a> <span class='count'>(11)</span></li>"*/
/* */
/*                         });*/
/*                         $('.product-categories').html(trHTML);*/
/*                         console.log('Ok ...');*/
/*                         trHTML="";*/
/* */
/*                     }*/
/*                 });*/
/* */
/*             var auto_refresh = setInterval(*/
/* */
/*                     function ()*/
/* */
/*                     {*/
/*                         $.ajax({*/
/*                             type: 'get',*/
/*                             url: 'http://localhost/TunisiaMall/web/app_dev.php/categories/search-categories/' + $("#currentBrand").val(),*/
/*                             beforeSend: function () {*/
/*                                 console.log('searching  to find categorie...');*/
/*                             },*/
/*                             success: function (data) {*/
/* */
/* */
/* */
/*                                 $.each(data, function (i, item) {*/
/* */
/* */
/*                                     trHTML += "<li class='cat-parent'><a href='#'>"+item.name+"</a> <span class='count'>(11)</span></li>"*/
/* */
/*                                 });*/
/* */
/*                                 console.log('Ok .. SEC.');*/
/* */
/*                             }*/
/*                         });*/
/* */
/*                         $('.product-categories').html(trHTML).fadeIn("slow");*/
/*                         trHTML="";*/
/* */
/*                     }, 3000); // rafraichis toutes les 10000 millisecondes*/
/* */
/* */
/* */
/* */
/*         });*/
/*     </script>*/
/* */
/* */
/* */
/* */
/* */
/* */
/* {% endblock brands %}*/
/* */
/* */
/* */
