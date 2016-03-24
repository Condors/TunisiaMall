<?php

/* CondorsTnMallBundle::MyAccountTemplate.html.twig */
class __TwigTemplate_87f9822286a1e3a5bd5710aba2916fcb852cd16f06723d68791db1d0d0d44b67 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'titleTop' => array($this, 'block_titleTop'),
            'login' => array($this, 'block_login'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
            'registerUser' => array($this, 'block_registerUser'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7ec5bdcc05e0967b8f72d9ed6c92f4326a613bf78b50cfefdbd190bd308ca2f0 = $this->env->getExtension("native_profiler");
        $__internal_7ec5bdcc05e0967b8f72d9ed6c92f4326a613bf78b50cfefdbd190bd308ca2f0->enter($__internal_7ec5bdcc05e0967b8f72d9ed6c92f4326a613bf78b50cfefdbd190bd308ca2f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CondorsTnMallBundle::MyAccountTemplate.html.twig"));

        // line 1
        echo "<!doctype html>
<html lang=\"en-US\">

<!-- Mirrored from tk-themes.net/html-canifa/contact-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 13 Mar 2016 16:23:08 GMT -->

<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0\" />
    <link rel=\"shortcut icon\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/favicon.png"), "html", null, true);
        echo "\" />
    <title>Tunisia Mall | Contact Us </title>

    <link rel='stylesheet' href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" type='text/css' media='all' />
    <link rel='stylesheet' href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/prettyPhoto.css"), "html", null, true);
        echo "\" type='text/css ' media='all ' />
    <link rel='stylesheet ' href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/jquery.selectBox.css"), "html", null, true);
        echo "\" type='text/css' media='all' />
    <link rel='stylesheet' href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/font-awesome.min.css"), "html", null, true);
        echo "\" type='text/css ' media='all ' />
    <link rel='stylesheet ' href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/owl.carousel.css"), "html", null, true);
        echo "\" type='text/css' media='all' />
    <link rel='stylesheet' href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/owl.theme.css"), "html", null, true);
        echo "\" type='text/css ' media='all ' />
    <link rel='stylesheet ' href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("http://fonts.googleapis.com/css?family=Open+Sans:100,300,400,700,900,300italic,400italic,700italic,900italic "), "html", null, true);
        echo "\" type='text/css' media='all' />
    <link rel='stylesheet' href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("http://fonts.googleapis.com/css?family=Playfair+Display:100,300,400,700,900,300italic,400italic,700italic,900italic"), "html", null, true);
        echo "\" type='text/css ' media='all ' />
    <link rel='stylesheet ' href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" type='text/css' media='all' />
    <link rel='stylesheet' href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/animsition.css"), "html", null, true);
        echo "\" type='text/css' media='all' />
    <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/magnific-popup.css"), "html", null, true);
        echo "\" type='text/css' media='all' />
    <link rel='stylesheet' href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/custom.css"), "html", null, true);
        echo "\" type='text/css' media='all' />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
            <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
            <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
        <![endif]-->
</head>

<body>
    <div class=\"site animsition\">
        <header class=\"yolo-header header_transparent header-2\">
            <div class=\"navbar-wrapper\">
                <div class=\"navbar navbar-default\">
                    <div class=\"yolo-topbar\">
                        <div class=\"topbar-inner container-boxed\">
                            <div class=\"container\">
                                <div class=\"topbar-left pull-left\">
                                    <!--                                    Free Shipping on All Orders Over <span>\$49</span>-->

                                    <ul class=\"yolo-top-menu hidden-phone\">
                                        <li class=\"menu-item\"><a href=\"#\">About <span>Us</span></a></li>
                                        <li class=\"menu-item\"><a href=\"#\">Contact <span>Us</span></a></li>
                                        <li class=\"menu-item\"><a href=\"#\"><i class=\"fa fa-comments-o\"></i>&nbsp;FAQ</a></li>

                                    </ul>


                                </div>
                                <div class=\"topbar-right pull-right\">
                                    <ul class=\"yolo-top-menu hidden-phone\">
                                        <li class=\"menu-item\"><a href=\"#\"><i class=\"fa fa-language\"></i>&nbsp;Language</a></li>
                                       
                                        <li class=\"menu-item\"><a href=\"wishlist.html\"><i class=\"fa fa-heart-o\"></i>&nbsp;Wishlist</a></li>
                                        <li class=\"menu-item\">
                                            <a class=\"login-url\" href=\"#\">
                                                <i class=\"fa fa-sign-in\"></i>&nbsp;Login
                                            </a>
                                        </li>
                                        <li class=\"menu-item\">
                                            <a class=\"register-url\" href=\"#\">
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
        // line 82
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
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/logo-fixed.png"), "html", null, true);
        echo "\" alt=\"\">
                                </a>
                            </div>
                            <!-- / .nav-header -->
                            <nav class=\"yolo-main-menu\">
                                <ul class=\"nav-collapse navbar-nav\">
                                    <li class=\"menu-item current-menu-item menu-item-has-children\">
                                        <a href=\"#\">Home</a>

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
                                        
                                        #kidsOn {
                                            z-index: auto;
                                            position: absolute;
                                            top: auto;
                                            left: -550px;
                                            min-width: 1200%;
                                        }
                                        
                                        #beautyOn {
                                            z-index: auto;
                                            position: absolute;
                                            top: auto;
                                            left: -770px;
                                            min-width: 900%;
                                        }
                                        
                                        #houseOn {
                                            z-index: auto;
                                            position: absolute;
                                            top: auto;
                                            left: -1010px;
                                            min-width: 900%;
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
        // line 227
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/remove_white.png"), "html", null, true);
        echo "\" alt=\"remove\">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </header>
        <section class=\"yolo-page-heading heading-contact header_transparent header-2\">
            <section class=\"parallax-bg-2 section-parallax\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-sm-12\">
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <h1 class=\"page-title\">My Account</h1>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                        </div>
                    </div>
                </div>
            </section>


            <div class=\"yolo-page-breadcrumb container\">
                <div class=\"breadcrumb-wrap\">
                    <ul class=\"breadcrumb\">
                        <li><a href=\"index.html\"><i class=\"yoloicon-home\"></i>Home</a></li>
                        <li class=\"active\"><span>My Account</span></li>
                    </ul>
                </div>
            </div>
        </section>
        <div class=\"content-area\">
            <div class=\"content-area\">
                <div class=\"commerce-account\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"container-fluid\">
                                <div class=\"row row-fluid\">
                                    <div class=\"col-sm-12\">
                                        <div class=\"yolo-title title-center\">
                                            ";
        // line 284
        $this->displayBlock('titleTop', $context, $blocks);
        // line 285
        echo "

                                            <div class=\"arrow-down\"></div>
                                        </div>
                                        <div class=\"commerce pt-5 pb-5\">
                                            <div class=\"col2-set\" id=\"customer_login\">
                                                <div class=\"col-1\">
                                                    ";
        // line 292
        $this->displayBlock('login', $context, $blocks);
        // line 311
        echo "                                                    
                                                  
   

                                            ";
        // line 315
        $this->displayBlock('registerUser', $context, $blocks);
        // line 323
        echo "                                                </div>


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
            <footer class=\"wrap-footer\">
                <!--Start footer widget-->
                <div class=\"colophon wigetized footer-top\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"col-md-3 col-sm-6\">
                                <div class=\"widget\">
                                    <h4 class=\"widget-title\">Contact Us</h4>
                                    <div class=\"textwidget\">
                                        <ul>
                                            <li>Canifa Shop</li>
                                            <li>54/29 West 21st Street, New York, USA </li>
                                            <li><a href=\"mailto:email@domain.com\">email@domain.com</a></li>
                                            <li><a href=\"#\">http://canifa.com</a></li>
                                            <li>Tell: <span>1-100-294-6888</span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-md-3 col-sm-6\">
                                <div class=\"widget widget_nav_menu\">
                                    <h4 class=\"widget-title\">Quick Links</h4>
                                    <div class=\"menu-quick-links-container\">
                                        <ul class=\"menu\">
                                            <li><a href=\"#\">Cart</a></li>
                                            <li><a href=\"#\">Checkout</a></li>
                                            <li><a href=\"#\">My Account</a></li>
                                            <li><a href=\"#\">Wishlist</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-md-3 col-sm-6\">
                                <div class=\"widget widget_nav_menu\">
                                    <h4 class=\"widget-title\">Customer Care</h4>
                                    <div class=\"menu-customer-care-container\">
                                        <ul class=\"menu\">
                                            <li><a href=\"#\">Customer service</a></li>
                                            <li><a href=\"#\">Track my order</a></li>
                                            <li><a href=\"#\">Shipping &#038; delivery</a></li>
                                            <li><a href=\"#\">Contact us</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-md-3 col-sm-6\">
                                <div class=\"widget mailchimp-widget\">
                                    <h4 class=\"widget-title\">Newsletter Signup</h4>
                                    <form class=\"mc-subscribe-form\">
                                        <label for=\"m_email\">Subscribe to stay get update from Canifa</label>
                                        <input type=\"email\" id=\"m_email\" name=\"mc_email\" class=\"mc-email\" value=\"\" placeholder=\"Email\" />
                                        <button><i class=\"fa fa-long-arrow-right\">&nbsp;</i></button>
                                    </form>
                                </div>
                            </div>
                            <div class=\"col-md-12 clear\">
                                <div class=\"footer-social\">
                                    <div class=\"yolo-social social-icons\">
                                        <a href=\"#\" title=\"Facebook\" target=\"_blank\">
                                            <i class=\"fa fa-facebook\"></i>
                                        </a>
                                        <a href=\"#\" title=\"Twitter\" target=\"_blank\">
                                            <i class=\"fa fa-twitter\"></i>
                                        </a>
                                        <a href=\"#\" title=\"Google+\" target=\"_blank\">
                                            <i class=\"fa fa-google-plus\"></i>
                                        </a>
                                        <a href=\"#\" title=\"Pinterest\" target=\"_blank\">
                                            <i class=\"fa fa-pinterest\"></i>
                                        </a>
                                        <a href=\"#\" title=\"LinkedIn\" target=\"_blank\">
                                            <i class=\"fa fa-linkedin\"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End footer widget-->

                <div class=\"yolo-bottom-bar-content\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"col-md-7 col-sm-6 col-xs-12\">
                                <div class=\"yolo-bottom-bar content-left\">
                                    © 2016 Tunisia Mall
                                </div>
                            </div>
                            <div class=\"col-md-5 col-sm-6 col-xs-12\">
                                <div class=\"yolo-bottom-bar content-right\">
                                    <a target=\"_blank\" href=\"#\" title=\"Visacard\">
                                        <i class=\"fa fa-cc-visa\"></i>
                                    </a>
                                    <a target=\"_blank\" href=\"#\" title=\"Discovercard\">
                                        <i class=\"fa fa-cc-discover\"></i>
                                    </a>
                                    <a target=\"_blank\" href=\"#\" title=\"Mastercard\">
                                        <i class=\"fa fa-cc-mastercard\"></i>
                                    </a>
                                    <a target=\"_blank\" href=\"#\" title=\"Americanexpress\">
                                        <i class=\"fa fa-cc-amex\"></i>
                                    </a>
                                    <a target=\"_blank\" href=\"#\" title=\"Paypal\">
                                        <i class=\"fa fa-cc-paypal\"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <!--End .site -->

        <a href=\"#\" class=\"go-to-top hidden-print\"><i class=\"fa fa-angle-up\"></i></a>


        <script type='text/javascript' src=\"";
        // line 454
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
        <script type='text/javascript ' src=\"";
        // line 455
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery-migrate.min.js"), "html", null, true);
        echo "\"></script>
        <script type='text/javascript' src=\"";
        // line 456
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/modernizr-2.7.1.min.js"), "html", null, true);
        echo "\"></script>
        <script type='text/javascript ' src=\"";
        // line 457
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.prettyPhoto.js"), "html", null, true);
        echo "\"></script>
        <script type='text/javascript' src=\"";
        // line 458
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.prettyPhoto.init.min.js"), "html", null, true);
        echo "\"></script>
        <script type='text/javascript ' src=\"";
        // line 459
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.selectBox.min.js"), "html", null, true);
        echo " \"></script>
        <script type='text/javascript' src=\"";
        // line 460
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/smooth-scroll.js"), "html", null, true);
        echo "\"></script>
        <script type='text/javascript' src=\"";
        // line 461
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/off-cavnas.js"), "html", null, true);
        echo "\"></script>
        <script type='text/javascript ' src=\"";
        // line 462
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/animsition.js"), "html", null, true);
        echo " \"></script>
        <script type='text/javascript' src=\"";
        // line 463
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/script.js"), "html", null, true);
        echo "\"></script>
        <script type='text/javascript' src=\"";
        // line 464
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script type='text/javascript ' src=\"";
        // line 465
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/imagesloaded.pkgd.min.js"), "html", null, true);
        echo " \"></script>
        <script type='text/javascript' src=\"";
        // line 466
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
        <script type='text/javascript' src=\"";
        // line 467
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.fitvids.js"), "html", null, true);
        echo "\"></script>
        <script type='text/javascript ' src=\"";
        // line 468
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.magnific-popup.js"), "html", null, true);
        echo " \"></script>
</body>

<!-- Mirrored from tk-themes.net/html-canifa/contact-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 13 Mar 2016 16:23:08 GMT -->

</html>";
        
        $__internal_7ec5bdcc05e0967b8f72d9ed6c92f4326a613bf78b50cfefdbd190bd308ca2f0->leave($__internal_7ec5bdcc05e0967b8f72d9ed6c92f4326a613bf78b50cfefdbd190bd308ca2f0_prof);

    }

    // line 284
    public function block_titleTop($context, array $blocks = array())
    {
        $__internal_d9789030a16abc80d93d10b1fafd7ee721cecafd9bff51afc5aa377ee401beef = $this->env->getExtension("native_profiler");
        $__internal_d9789030a16abc80d93d10b1fafd7ee721cecafd9bff51afc5aa377ee401beef->enter($__internal_d9789030a16abc80d93d10b1fafd7ee721cecafd9bff51afc5aa377ee401beef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titleTop"));

        
        $__internal_d9789030a16abc80d93d10b1fafd7ee721cecafd9bff51afc5aa377ee401beef->leave($__internal_d9789030a16abc80d93d10b1fafd7ee721cecafd9bff51afc5aa377ee401beef_prof);

    }

    // line 292
    public function block_login($context, array $blocks = array())
    {
        $__internal_907585f0cfb557da78e85e1d90053d7c698e5ce0c4abd202fdcbbb8d46325e0f = $this->env->getExtension("native_profiler");
        $__internal_907585f0cfb557da78e85e1d90053d7c698e5ce0c4abd202fdcbbb8d46325e0f->enter($__internal_907585f0cfb557da78e85e1d90053d7c698e5ce0c4abd202fdcbbb8d46325e0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "login"));

        // line 293
        echo "


                                                    <div class=\"loginMall\">


                                                        ";
        // line 299
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "hasPreviousSession", array())) {
            echo " ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                echo " ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 300
                    echo "                                                        <div class=\"flash-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
                                                            ";
                    // line 301
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
                                                        </div>
                                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 303
                echo " ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " ";
        }
        // line 304
        echo "
                                                        <div>
                                                            ";
        // line 306
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 307
        echo "                                                        </div>
                                                    </div>

                                                    ";
        
        $__internal_907585f0cfb557da78e85e1d90053d7c698e5ce0c4abd202fdcbbb8d46325e0f->leave($__internal_907585f0cfb557da78e85e1d90053d7c698e5ce0c4abd202fdcbbb8d46325e0f_prof);

    }

    // line 306
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c29f624a60afb6dcf272a1a1834edeaa6a8358a0c6ea7d8e86da1279787262cc = $this->env->getExtension("native_profiler");
        $__internal_c29f624a60afb6dcf272a1a1834edeaa6a8358a0c6ea7d8e86da1279787262cc->enter($__internal_c29f624a60afb6dcf272a1a1834edeaa6a8358a0c6ea7d8e86da1279787262cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        echo " ";
        
        $__internal_c29f624a60afb6dcf272a1a1834edeaa6a8358a0c6ea7d8e86da1279787262cc->leave($__internal_c29f624a60afb6dcf272a1a1834edeaa6a8358a0c6ea7d8e86da1279787262cc_prof);

    }

    // line 315
    public function block_registerUser($context, array $blocks = array())
    {
        $__internal_a39c7241998727c4d7df2c1ef0c87ea50b522d11af1cc5e2673a04693657c9e1 = $this->env->getExtension("native_profiler");
        $__internal_a39c7241998727c4d7df2c1ef0c87ea50b522d11af1cc5e2673a04693657c9e1->enter($__internal_a39c7241998727c4d7df2c1ef0c87ea50b522d11af1cc5e2673a04693657c9e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "registerUser"));

        // line 316
        echo "
                                                        
                                                    <div class=\"RegisterMall\">
                                                    </div>


                                                    ";
        
        $__internal_a39c7241998727c4d7df2c1ef0c87ea50b522d11af1cc5e2673a04693657c9e1->leave($__internal_a39c7241998727c4d7df2c1ef0c87ea50b522d11af1cc5e2673a04693657c9e1_prof);

    }

    public function getTemplateName()
    {
        return "CondorsTnMallBundle::MyAccountTemplate.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  673 => 316,  667 => 315,  655 => 306,  645 => 307,  643 => 306,  639 => 304,  631 => 303,  622 => 301,  617 => 300,  607 => 299,  599 => 293,  593 => 292,  582 => 284,  569 => 468,  565 => 467,  561 => 466,  557 => 465,  553 => 464,  549 => 463,  545 => 462,  541 => 461,  537 => 460,  533 => 459,  529 => 458,  525 => 457,  521 => 456,  517 => 455,  513 => 454,  380 => 323,  378 => 315,  372 => 311,  370 => 292,  361 => 285,  359 => 284,  299 => 227,  160 => 91,  148 => 82,  86 => 23,  82 => 22,  78 => 21,  74 => 20,  70 => 19,  66 => 18,  62 => 17,  58 => 16,  54 => 15,  50 => 14,  46 => 13,  42 => 12,  36 => 9,  26 => 1,);
    }
}
/* <!doctype html>*/
/* <html lang="en-US">*/
/* */
/* <!-- Mirrored from tk-themes.net/html-canifa/contact-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 13 Mar 2016 16:23:08 GMT -->*/
/* */
/* <head>*/
/*     <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />*/
/*     <link rel="shortcut icon" href="{{ asset('images/favicon.png')}}" />*/
/*     <title>Tunisia Mall | Contact Us </title>*/
/* */
/*     <link rel='stylesheet' href="{{ asset('css/bootstrap.min.css') }}" type='text/css' media='all' />*/
/*     <link rel='stylesheet' href="{{ asset('css/prettyPhoto.css') }}" type='text/css ' media='all ' />*/
/*     <link rel='stylesheet ' href="{{ asset('css/jquery.selectBox.css') }}" type='text/css' media='all' />*/
/*     <link rel='stylesheet' href="{{ asset('css/font-awesome.min.css') }}" type='text/css ' media='all ' />*/
/*     <link rel='stylesheet ' href="{{ asset('css/owl.carousel.css') }}" type='text/css' media='all' />*/
/*     <link rel='stylesheet' href="{{ asset('css/owl.theme.css') }}" type='text/css ' media='all ' />*/
/*     <link rel='stylesheet ' href="{{ asset('http://fonts.googleapis.com/css?family=Open+Sans:100,300,400,700,900,300italic,400italic,700italic,900italic ') }}" type='text/css' media='all' />*/
/*     <link rel='stylesheet' href="{{ asset('http://fonts.googleapis.com/css?family=Playfair+Display:100,300,400,700,900,300italic,400italic,700italic,900italic') }}" type='text/css ' media='all ' />*/
/*     <link rel='stylesheet ' href="{{ asset('css/style.css') }}" type='text/css' media='all' />*/
/*     <link rel='stylesheet' href="{{ asset('css/animsition.css') }}" type='text/css' media='all' />*/
/*     <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}" type='text/css' media='all' />*/
/*     <link rel='stylesheet' href="{{ asset('css/custom.css') }}" type='text/css' media='all' />*/
/* */
/*     <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->*/
/*     <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->*/
/*     <!--[if lt IE 9]>*/
/*             <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>*/
/*             <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>*/
/*         <![endif]-->*/
/* </head>*/
/* */
/* <body>*/
/*     <div class="site animsition">*/
/*         <header class="yolo-header header_transparent header-2">*/
/*             <div class="navbar-wrapper">*/
/*                 <div class="navbar navbar-default">*/
/*                     <div class="yolo-topbar">*/
/*                         <div class="topbar-inner container-boxed">*/
/*                             <div class="container">*/
/*                                 <div class="topbar-left pull-left">*/
/*                                     <!--                                    Free Shipping on All Orders Over <span>$49</span>-->*/
/* */
/*                                     <ul class="yolo-top-menu hidden-phone">*/
/*                                         <li class="menu-item"><a href="#">About <span>Us</span></a></li>*/
/*                                         <li class="menu-item"><a href="#">Contact <span>Us</span></a></li>*/
/*                                         <li class="menu-item"><a href="#"><i class="fa fa-comments-o"></i>&nbsp;FAQ</a></li>*/
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
/*                                             <a class="login-url" href="#">*/
/*                                                 <i class="fa fa-sign-in"></i>&nbsp;Login*/
/*                                             </a>*/
/*                                         </li>*/
/*                                         <li class="menu-item">*/
/*                                             <a class="register-url" href="#">*/
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
/*                                         <a href="#">Home</a>*/
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
/*                                         #kidsOn {*/
/*                                             z-index: auto;*/
/*                                             position: absolute;*/
/*                                             top: auto;*/
/*                                             left: -550px;*/
/*                                             min-width: 1200%;*/
/*                                         }*/
/*                                         */
/*                                         #beautyOn {*/
/*                                             z-index: auto;*/
/*                                             position: absolute;*/
/*                                             top: auto;*/
/*                                             left: -770px;*/
/*                                             min-width: 900%;*/
/*                                         }*/
/*                                         */
/*                                         #houseOn {*/
/*                                             z-index: auto;*/
/*                                             position: absolute;*/
/*                                             top: auto;*/
/*                                             left: -1010px;*/
/*                                             min-width: 900%;*/
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
/*         <section class="yolo-page-heading heading-contact header_transparent header-2">*/
/*             <section class="parallax-bg-2 section-parallax">*/
/*                 <div class="container">*/
/*                     <div class="row">*/
/*                         <div class="col-sm-12">*/
/*                             <br>*/
/*                             <br>*/
/*                             <br>*/
/*                             <br>*/
/*                             <br>*/
/*                             <br>*/
/*                             <br>*/
/*                             <br>*/
/*                             <br>*/
/*                             <br>*/
/*                             <br>*/
/*                             <br>*/
/*                             <br>*/
/*                             <br>*/
/*                             <h1 class="page-title">My Account</h1>*/
/*                             <br>*/
/*                             <br>*/
/*                             <br>*/
/*                             <br>*/
/*                             <br>*/
/*                             <br>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </section>*/
/* */
/* */
/*             <div class="yolo-page-breadcrumb container">*/
/*                 <div class="breadcrumb-wrap">*/
/*                     <ul class="breadcrumb">*/
/*                         <li><a href="index.html"><i class="yoloicon-home"></i>Home</a></li>*/
/*                         <li class="active"><span>My Account</span></li>*/
/*                     </ul>*/
/*                 </div>*/
/*             </div>*/
/*         </section>*/
/*         <div class="content-area">*/
/*             <div class="content-area">*/
/*                 <div class="commerce-account">*/
/*                     <div class="container">*/
/*                         <div class="row">*/
/*                             <div class="container-fluid">*/
/*                                 <div class="row row-fluid">*/
/*                                     <div class="col-sm-12">*/
/*                                         <div class="yolo-title title-center">*/
/*                                             {% block titleTop %}{% endblock %}*/
/* */
/* */
/*                                             <div class="arrow-down"></div>*/
/*                                         </div>*/
/*                                         <div class="commerce pt-5 pb-5">*/
/*                                             <div class="col2-set" id="customer_login">*/
/*                                                 <div class="col-1">*/
/*                                                     {% block login %}*/
/* */
/* */
/* */
/*                                                     <div class="loginMall">*/
/* */
/* */
/*                                                         {% if app.request.hasPreviousSession %} {% for type, messages in app.session.flashbag.all() %} {% for message in messages %}*/
/*                                                         <div class="flash-{{ type }}">*/
/*                                                             {{ message }}*/
/*                                                         </div>*/
/*                                                         {% endfor %} {% endfor %} {% endif %}*/
/* */
/*                                                         <div>*/
/*                                                             {% block fos_user_content %} {% endblock fos_user_content %}*/
/*                                                         </div>*/
/*                                                     </div>*/
/* */
/*                                                     {% endblock %}*/
/*                                                     */
/*                                                   */
/*    */
/* */
/*                                             {% block registerUser %}*/
/* */
/*                                                         */
/*                                                     <div class="RegisterMall">*/
/*                                                     </div>*/
/* */
/* */
/*                                                     {% endblock %}*/
/*                                                 </div>*/
/* */
/* */
/*                                             </div>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <!-- /.main -->*/
/*             <footer class="wrap-footer">*/
/*                 <!--Start footer widget-->*/
/*                 <div class="colophon wigetized footer-top">*/
/*                     <div class="container">*/
/*                         <div class="row">*/
/*                             <div class="col-md-3 col-sm-6">*/
/*                                 <div class="widget">*/
/*                                     <h4 class="widget-title">Contact Us</h4>*/
/*                                     <div class="textwidget">*/
/*                                         <ul>*/
/*                                             <li>Canifa Shop</li>*/
/*                                             <li>54/29 West 21st Street, New York, USA </li>*/
/*                                             <li><a href="mailto:email@domain.com">email@domain.com</a></li>*/
/*                                             <li><a href="#">http://canifa.com</a></li>*/
/*                                             <li>Tell: <span>1-100-294-6888</span></li>*/
/*                                         </ul>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="col-md-3 col-sm-6">*/
/*                                 <div class="widget widget_nav_menu">*/
/*                                     <h4 class="widget-title">Quick Links</h4>*/
/*                                     <div class="menu-quick-links-container">*/
/*                                         <ul class="menu">*/
/*                                             <li><a href="#">Cart</a></li>*/
/*                                             <li><a href="#">Checkout</a></li>*/
/*                                             <li><a href="#">My Account</a></li>*/
/*                                             <li><a href="#">Wishlist</a></li>*/
/*                                         </ul>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="col-md-3 col-sm-6">*/
/*                                 <div class="widget widget_nav_menu">*/
/*                                     <h4 class="widget-title">Customer Care</h4>*/
/*                                     <div class="menu-customer-care-container">*/
/*                                         <ul class="menu">*/
/*                                             <li><a href="#">Customer service</a></li>*/
/*                                             <li><a href="#">Track my order</a></li>*/
/*                                             <li><a href="#">Shipping &#038; delivery</a></li>*/
/*                                             <li><a href="#">Contact us</a></li>*/
/*                                         </ul>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="col-md-3 col-sm-6">*/
/*                                 <div class="widget mailchimp-widget">*/
/*                                     <h4 class="widget-title">Newsletter Signup</h4>*/
/*                                     <form class="mc-subscribe-form">*/
/*                                         <label for="m_email">Subscribe to stay get update from Canifa</label>*/
/*                                         <input type="email" id="m_email" name="mc_email" class="mc-email" value="" placeholder="Email" />*/
/*                                         <button><i class="fa fa-long-arrow-right">&nbsp;</i></button>*/
/*                                     </form>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="col-md-12 clear">*/
/*                                 <div class="footer-social">*/
/*                                     <div class="yolo-social social-icons">*/
/*                                         <a href="#" title="Facebook" target="_blank">*/
/*                                             <i class="fa fa-facebook"></i>*/
/*                                         </a>*/
/*                                         <a href="#" title="Twitter" target="_blank">*/
/*                                             <i class="fa fa-twitter"></i>*/
/*                                         </a>*/
/*                                         <a href="#" title="Google+" target="_blank">*/
/*                                             <i class="fa fa-google-plus"></i>*/
/*                                         </a>*/
/*                                         <a href="#" title="Pinterest" target="_blank">*/
/*                                             <i class="fa fa-pinterest"></i>*/
/*                                         </a>*/
/*                                         <a href="#" title="LinkedIn" target="_blank">*/
/*                                             <i class="fa fa-linkedin"></i>*/
/*                                         </a>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*                 <!--End footer widget-->*/
/* */
/*                 <div class="yolo-bottom-bar-content">*/
/*                     <div class="container">*/
/*                         <div class="row">*/
/*                             <div class="col-md-7 col-sm-6 col-xs-12">*/
/*                                 <div class="yolo-bottom-bar content-left">*/
/*                                     © 2016 Tunisia Mall*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="col-md-5 col-sm-6 col-xs-12">*/
/*                                 <div class="yolo-bottom-bar content-right">*/
/*                                     <a target="_blank" href="#" title="Visacard">*/
/*                                         <i class="fa fa-cc-visa"></i>*/
/*                                     </a>*/
/*                                     <a target="_blank" href="#" title="Discovercard">*/
/*                                         <i class="fa fa-cc-discover"></i>*/
/*                                     </a>*/
/*                                     <a target="_blank" href="#" title="Mastercard">*/
/*                                         <i class="fa fa-cc-mastercard"></i>*/
/*                                     </a>*/
/*                                     <a target="_blank" href="#" title="Americanexpress">*/
/*                                         <i class="fa fa-cc-amex"></i>*/
/*                                     </a>*/
/*                                     <a target="_blank" href="#" title="Paypal">*/
/*                                         <i class="fa fa-cc-paypal"></i>*/
/*                                     </a>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </footer>*/
/*         </div>*/
/*         <!--End .site -->*/
/* */
/*         <a href="#" class="go-to-top hidden-print"><i class="fa fa-angle-up"></i></a>*/
/* */
/* */
/*         <script type='text/javascript' src="{{ asset('js/jquery.min.js') }}"></script>*/
/*         <script type='text/javascript ' src="{{ asset('js/jquery-migrate.min.js') }}"></script>*/
/*         <script type='text/javascript' src="{{ asset('js/modernizr-2.7.1.min.js') }}"></script>*/
/*         <script type='text/javascript ' src="{{ asset('js/jquery.prettyPhoto.js') }}"></script>*/
/*         <script type='text/javascript' src="{{ asset('js/jquery.prettyPhoto.init.min.js') }}"></script>*/
/*         <script type='text/javascript ' src="{{ asset('js/jquery.selectBox.min.js') }} "></script>*/
/*         <script type='text/javascript' src="{{ asset('js/smooth-scroll.js') }}"></script>*/
/*         <script type='text/javascript' src="{{ asset('js/off-cavnas.js') }}"></script>*/
/*         <script type='text/javascript ' src="{{ asset('js/animsition.js') }} "></script>*/
/*         <script type='text/javascript' src="{{ asset('js/script.js') }}"></script>*/
/*         <script type='text/javascript' src="{{ asset('js/bootstrap.min.js') }}"></script>*/
/*         <script type='text/javascript ' src="{{ asset('js/imagesloaded.pkgd.min.js') }} "></script>*/
/*         <script type='text/javascript' src="{{ asset('js/owl.carousel.min.js') }}"></script>*/
/*         <script type='text/javascript' src="{{ asset('js/jquery.fitvids.js') }}"></script>*/
/*         <script type='text/javascript ' src="{{ asset('js/jquery.magnific-popup.js') }} "></script>*/
/* </body>*/
/* */
/* <!-- Mirrored from tk-themes.net/html-canifa/contact-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 13 Mar 2016 16:23:08 GMT -->*/
/* */
/* </html>*/
