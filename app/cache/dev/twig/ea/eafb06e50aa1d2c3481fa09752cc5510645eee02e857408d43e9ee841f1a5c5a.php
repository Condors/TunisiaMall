<?php

/* CondorsTnMallBundle:Responsable:GestionProduitModifer.html.twig */
class __TwigTemplate_7f4ef67633e32a46e3c13450afb6e544962248944f4d647155622102896a83b8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CondorsTnMallBundle::ResponsableLayouts/Layout.html.twig", "CondorsTnMallBundle:Responsable:GestionProduitModifer.html.twig", 1);
        $this->blocks = array(
            'Content' => array($this, 'block_Content'),
            'otherScript' => array($this, 'block_otherScript'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CondorsTnMallBundle::ResponsableLayouts/Layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b4d04de513f863f54bb247f38efabb738ebf013e0d5c2f7231c51e28c3f1b072 = $this->env->getExtension("native_profiler");
        $__internal_b4d04de513f863f54bb247f38efabb738ebf013e0d5c2f7231c51e28c3f1b072->enter($__internal_b4d04de513f863f54bb247f38efabb738ebf013e0d5c2f7231c51e28c3f1b072_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CondorsTnMallBundle:Responsable:GestionProduitModifer.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b4d04de513f863f54bb247f38efabb738ebf013e0d5c2f7231c51e28c3f1b072->leave($__internal_b4d04de513f863f54bb247f38efabb738ebf013e0d5c2f7231c51e28c3f1b072_prof);

    }

    // line 12
    public function block_Content($context, array $blocks = array())
    {
        $__internal_414d5948c0e666533a17b5803475861fbf9a2d7410bf8bc64ffb92af445807e3 = $this->env->getExtension("native_profiler");
        $__internal_414d5948c0e666533a17b5803475861fbf9a2d7410bf8bc64ffb92af445807e3->enter($__internal_414d5948c0e666533a17b5803475861fbf9a2d7410bf8bc64ffb92af445807e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        // line 13
        echo "
    <div class=\"page-title\">
        <div class=\"title_left\">
            <h3>Product Management</h3>
        </div>

        <div class=\"title_right\">
            <div class=\"col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search\">

            </div>
        </div>
    </div>

    <div class=\"\" role=\"tabpanel\" data-example-id=\"togglable-tabs\">
        <ul id=\"myTab1\" class=\"nav nav-tabs bar_tabs right\" role=\"tablist\">
            <li role=\"presentation\" class=\"active\"><a href=\"#tab_content11\" id=\"home-tabb\" role=\"tab\" data-toggle=\"tab\" aria-controls=\"home\" aria-expanded=\"true\"><i class=\"fa fa-pencil\"></i></a>
            </li>
            <li role=\"presentation\" class=\"\"><a href=\"#tab_content_view\" id=\"home-tabb\" role=\"tab\" data-toggle=\"tab\" aria-controls=\"home\" aria-expanded=\"true\"><i class=\"fa fa-eye\"></i></a>
            </li>

        </ul>
        <div id=\"myTabContent2\" class=\"tab-content\">
            <div role=\"tabpanel\" class=\"tab-pane fade active in\" id=\"tab_content11\" aria-labelledby=\"home-tab\">
                <!-- Smart Wizard -->

                <div id=\"wizard\" class=\"form_wizard wizard_horizontal\">
                    <ul class=\"wizard_steps\">
                        <li>
                            <a href=\"#step-1\">
                                <span class=\"step_no\">1</span>
                                <span class=\"step_descr\">
                                    Step 1<br />
                                    <small>General Information</small>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href=\"#step-2\">
                                <span class=\"step_no\">2</span>
                                <span class=\"step_descr\">
                                    Step 2<br />
                                    <small>Description</small>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href=\"#step-3\">
                                <span class=\"step_no\">3</span>
                                <span class=\"step_descr\">
                                    Step 3<br />
                                    <small>Upload Pictures</small>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href=\"#step-4\">
                                <span class=\"step_no\">4</span>
                                <span class=\"step_descr\">
                                    Step 4<br />
                                    <small>Step 4 description</small>
                                </span>
                            </a>
                        </li>
                    </ul>
                    ";
        // line 77
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal form-label-left")));
        echo "
                    <div id=\"step-1\">


                        <div class=\"form-group\">
                            <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Product Name <span class=\"required\">*</span>
                            </label>
                            <div class=\"col-md-6 col-sm-6 col-xs-12\">

                                ";
        // line 86
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "libelleProduit", array()), 'widget', array("attr" => array("class" => "form-control col-md-7 col-xs-12")));
        echo " 
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"last-name\">Product Category <span class=\"required\">*</span>
                            </label>
                            <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                ";
        // line 93
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "categorieProduit", array()), 'widget', array("attr" => array("class" => "form-control col-md-7 col-xs-12")));
        echo " 
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label for=\"middle-name\" class=\"control-label col-md-3 col-sm-3 col-xs-12\">Product REF<span class=\"required\">*</span></label>
                            <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                ";
        // line 99
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "refProduit", array()), 'widget', array("attr" => array("class" => "form-control col-md-7 col-xs-12")));
        echo " 
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label class=\"control-label col-md-3 col-sm-3 col-xs-12\">Product V.A.T<span class=\"required\">*</span></label>
                            <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                ";
        // line 105
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tvaProduit", array()), 'widget', array("attr" => array("class" => "form-control col-md-7 col-xs-12")));
        echo " 
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label class=\"control-label col-md-3 col-sm-3 col-xs-12\">Product Price <span class=\"required\">*</span>
                            </label>
                            <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                ";
        // line 112
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prixProduit", array()), 'widget', array("attr" => array("class" => "form-control col-md-7 col-xs-12")));
        echo " 
                            </div>
                        </div>


                    </div>
                    <div id=\"step-2\">
                        <h2 class=\"StepTitle\">Desciption</h2>
                        <p id=\"txtEditor\">
                            ";
        // line 121
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "descriptionProduit", array()), 'widget', array("attr" => array("class" => "form-control col-md-7 col-xs-12")));
        echo " 
                        </p>

                    </div>
                    <div id=\"step-3\">
                        <h2 class=\"StepTitle\">Step 3 Content</h2>
                        <p>
                            ";
        // line 128
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fileFront", array()), 'widget', array("attr" => array("class" => "form-control col-md-7 col-xs-12")));
        echo " 
                            ";
        // line 129
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fileBack", array()), 'widget', array("attr" => array("class" => "form-control col-md-7 col-xs-12")));
        echo " 
                            ";
        // line 130
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fileReel", array()), 'widget', array("attr" => array("class" => "form-control col-md-7 col-xs-12")));
        echo " 
                        </p>

                    </div>
                    <div id=\"step-4\">
                        <h2 class=\"StepTitle\">Step 4 Content</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et 
                        </p>

                    </div>

                </div>

                ";
        // line 143
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "submit", array()), 'widget');
        echo "
                ";
        // line 144
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
            </div>

            <div role=\"tabpanel\" class=\"tab-pane fade\" id=\"tab_content_view\" aria-labelledby=\"home-tab\">


                <!-- Veiw Product -->

                <div class=\"x_content\">

                    <div class=\"col-md-7 col-sm-7 col-xs-12\">
                        <div class=\"product-image\">
                            <img src=\"";
        // line 156
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("uploads/pictures/"), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["prods"]) ? $context["prods"] : $this->getContext($context, "prods")), "imageprodreel", array()), "html", null, true);
        echo "\" alt=\"...\" />
                        </div>
                        <div class=\"product_gallery\">
                            <a>
                                <img src=\"";
        // line 160
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("uploads/pictures/"), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["prods"]) ? $context["prods"] : $this->getContext($context, "prods")), "imageprodfront", array()), "html", null, true);
        echo "\" alt=\"...\" />
                            </a>
                            <a>
                                <img src=\"";
        // line 163
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("uploads/pictures/"), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["prods"]) ? $context["prods"] : $this->getContext($context, "prods")), "imageprodback", array()), "html", null, true);
        echo "\" alt=\"...\" />
                            </a>

                        </div>
                    </div>

                    <div class=\"col-md-5 col-sm-5 col-xs-12\" style=\"border:0px solid #e5e5e5;\">

                        <h3 class=\"prod_title\">  ";
        // line 171
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["prods"]) ? $context["prods"] : $this->getContext($context, "prods")), "libelleProduit", array()), "html", null, true);
        echo " </h3>

                        <p>

                            ";
        // line 175
        echo $this->getAttribute((isset($context["prods"]) ? $context["prods"] : $this->getContext($context, "prods")), "descriptionProduit", array());
        echo "



                        </p>
                        <br />


                        <br />

                        <div class=\"\">
                            <h3 class=\"prod_title\">Category <small></small></h3>


                            <ul class=\"list-inline prod_size\">
                                <li>
                                    <button  type=\"button\" class=\"btn btn-default btn\">";
        // line 191
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["prods"]) ? $context["prods"] : $this->getContext($context, "prods")), "categorieProduit", array()), "html", null, true);
        echo "</button>
                                </li>

                            </ul>

                        </div>
                        <br />

                        <div class=\"\">
                            <h3 class=\"prod_title\">Price & Tax <small></small></h3>
                            <div class=\"product_price\">
                                ";
        // line 202
        $context["fprice"] = ((($this->getAttribute((isset($context["prods"]) ? $context["prods"] : $this->getContext($context, "prods")), "tvaProduit", array()) * $this->getAttribute((isset($context["prods"]) ? $context["prods"] : $this->getContext($context, "prods")), "prixProduit", array())) / 100) + $this->getAttribute((isset($context["prods"]) ? $context["prods"] : $this->getContext($context, "prods")), "prixProduit", array()));
        echo " 
                                <h1  style=\"text-align:right;\"  class=\"price\">";
        // line 203
        echo twig_escape_filter($this->env, (isset($context["fprice"]) ? $context["fprice"] : $this->getContext($context, "fprice")), "html", null, true);
        echo " D.T</h1>
                                <span  class=\"price-tax\"> V.A.T  : &nbsp; ";
        // line 204
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["prods"]) ? $context["prods"] : $this->getContext($context, "prods")), "tvaProduit", array()), "html", null, true);
        echo "%</span>
                                <br>
                                <span   class=\"price-tax\">H.T  : &nbsp; ";
        // line 206
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["prods"]) ? $context["prods"] : $this->getContext($context, "prods")), "prixProduit", array()), "html", null, true);
        echo " D.T</span>
                                <br>
                            </div>
                        </div>
                                 
                                <div class=\"\">
                            <h3 class=\"prod_title\">Reference <small></small></h3>
                              <small> <div  style=\"text-align:right;\" class=\"btn btn-default btn-xs\">[ ";
        // line 213
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["prods"]) ? $context["prods"] : $this->getContext($context, "prods")), "refProduit", array()), "html", null, true);
        echo " ]</div></small>
                        </div>
                            
                               


                        <div class=\"product_social\">
                            <h3 class=\"prod_title\">Share <small></small></h3>
                            <ul class=\"list-inline\">
                                <li><a target=\"popup\" onclick=\"window.open('https://www.facebook.com/sharer/sharer.php?u=http%3A//localhost/TunisiaMall/web/app_dev.php/shop-Detail/";
        // line 222
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["prods"]) ? $context["prods"] : $this->getContext($context, "prods")), "idProduit", array()), "html", null, true);
        echo "','name','width=600,height=400')\"  href=\"https://www.facebook.com/sharer/sharer.php?u=http%3A//localhost/TunisiaMall/web/app_dev.php/shop-Detail/";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["prods"]) ? $context["prods"] : $this->getContext($context, "prods")), "idProduit", array()), "html", null, true);
        echo "\"><i class=\"fa fa-facebook-square\"></i></a>
                                </li>
                                <li><a href=\"#\"><i class=\"fa fa-twitter-square\"></i></a>
                                </li>
                                <li><a href=\"#\"><i class=\"fa fa-envelope-square\"></i></a>
                                </li>
                                <li><a href=\"#\"><i class=\"fa fa-rss-square\"></i></a>
                                </li>
                            </ul>
                        </div>

                    </div>


                    <div class=\"col-md-12\">



                    </div>
                </div>

                <!-- End View Product -->







            </div>


        </div>



    </div>
</div>




<div class=\"\">

    <div class=\"clearfix\"></div>

    <div class=\"row\">








        <br> <br>
    ";
        
        $__internal_414d5948c0e666533a17b5803475861fbf9a2d7410bf8bc64ffb92af445807e3->leave($__internal_414d5948c0e666533a17b5803475861fbf9a2d7410bf8bc64ffb92af445807e3_prof);

    }

    // line 287
    public function block_otherScript($context, array $blocks = array())
    {
        $__internal_84980eafa6f4fa54b49e850c5f7257d62eefcab1d22709333a3493a7190ba906 = $this->env->getExtension("native_profiler");
        $__internal_84980eafa6f4fa54b49e850c5f7257d62eefcab1d22709333a3493a7190ba906->enter($__internal_84980eafa6f4fa54b49e850c5f7257d62eefcab1d22709333a3493a7190ba906_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "otherScript"));

        // line 288
        echo "
        <div id=\"custom_notifications\" class=\"custom-notifications dsp_none\">
            <ul class=\"list-unstyled notifications clearfix\" data-tabbed_notifications=\"notif-group\">
            </ul>
            <div class=\"clearfix\"></div>
            <div id=\"notif-group\" class=\"tabbed_notifications\"></div>
        </div>



        <!-- bootstrap progress js -->
        <script src=\"";
        // line 299
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("responsable/js/progressbar/bootstrap-progressbar.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 300
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("responsable/js/nicescroll/jquery.nicescroll.min.js"), "html", null, true);
        echo "\"></script>
        <!-- icheck -->
        <script src=\"";
        // line 302
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("responsable/js/icheck/icheck.min.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 304
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("responsable/js/custom.js"), "html", null, true);
        echo "\"></script>

        <!-- form wizard -->
        <script type=\"text/javascript\" src=\"";
        // line 307
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("responsable/js/wizard/jquery.smartWizard.js"), "html", null, true);
        echo "\"></script>
        <!-- pace -->
        <script src=\"";
        // line 309
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("responsable/js/pace/pace.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\">
            \$(document).ready(function () {


                \$(\"#produit_submit\").hide();

                // Smart Wizard
                \$('#wizard').smartWizard({
                    transitionEffect: 'fade'
                });



                \$(\"#sender\").click(function () {
                    \$(\"#produit_submit\").click();
                    \$(\"#produit_submit\").click(new PNotify({
                                title: 'Sticky Success',
                                text: 'You Update this Product Successfully.',
                                type: 'success',
                                hide: false
                            }));

                    \$(\"textarea\").val(\$(\"#placeHolder\").Editor(\"getText\"));
                    
                    
                    return false;
                });


            });

            \$(document).ready(function () {
                // Smart Wizard
                \$('#wizard_verticle').smartWizard({
                    transitionEffect: 'slideleft'
                });
            });

        </script>


        <!-- Editor Zone -->
        <script src=\"";
        // line 352
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("responsable/js/ckeditor/ckeditor.js"), "html", null, true);
        echo "\"></script>

        <script type=\"text/javascript\">

            // Replace the <textarea id=\"editor1\"> with a CKEditor
            // instance, using default configuration.
            CKEDITOR.replace('produit_descriptionProduit');

        </script>

        <!-- dropzone -->
        <script src=\"";
        // line 363
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("responsable/js/dropzone/dropzone.js"), "html", null, true);
        echo "\"></script> 



        <script>
            \$(document).ready(function () {
                \$('input.tableflat').iCheck({
                    checkboxClass: 'icheckbox_flat-green',
                    radioClass: 'iradio_flat-green'
                });
            });

            var asInitVals = new Array();
            \$(document).ready(function () {
                var oTable = \$('#example').dataTable({
                    \"oLanguage\": {
                        \"sSearch\": \"Search all columns:\"
                    },
                    \"aoColumnDefs\": [{
                            'bSortable': false,
                            'aTargets': [0]
                        } //disables sorting for column one
                    ],
                    'iDisplayLength': 12,
                    \"sPaginationType\": \"full_numbers\",
                    \"dom\": 'T<\"clear\">lfrtip',
                    \"tableTools\": {
                        \"sSwfPath\": \"js/datatables/tools/swf/copy_csv_xls_pdf.swf\"
                    }
                });
                \$(\"tfoot input\").keyup(function () {
                    /* Filter on the column based on the index of this element's parent <th> */
                    oTable.fnFilter(this.value, \$(\"tfoot th\").index(\$(this).parent()));
                });
                \$(\"tfoot input\").each(function (i) {
                    asInitVals[i] = this.value;
                });
                \$(\"tfoot input\").focus(function () {
                    if (this.className == \"search_init\") {
                        this.className = \"\";
                        this.value = \"\";
                    }
                });
                \$(\"tfoot input\").blur(function (i) {
                    if (this.value == \"\") {
                        this.className = \"search_init\";
                        this.value = asInitVals[\$(\"tfoot input\").index(this)];
                    }
                });
            });
        </script>
        
        
        <!---->
        <!-- PNotify -->
  <script type=\"text/javascript\" src=\"";
        // line 418
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("responsable/js/notify/pnotify.core.js"), "html", null, true);
        echo "\"></script>
  <script type=\"text/javascript\" src=\"";
        // line 419
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("responsable/js/notify/pnotify.buttons.js"), "html", null, true);
        echo "\"></script>
  <script type=\"text/javascript\" src=\"";
        // line 420
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("responsable/js/notify/pnotify.nonblock.js"), "html", null, true);
        echo "\"></script>


    ";
        
        $__internal_84980eafa6f4fa54b49e850c5f7257d62eefcab1d22709333a3493a7190ba906->leave($__internal_84980eafa6f4fa54b49e850c5f7257d62eefcab1d22709333a3493a7190ba906_prof);

    }

    public function getTemplateName()
    {
        return "CondorsTnMallBundle:Responsable:GestionProduitModifer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  560 => 420,  556 => 419,  552 => 418,  494 => 363,  480 => 352,  434 => 309,  429 => 307,  423 => 304,  418 => 302,  413 => 300,  409 => 299,  396 => 288,  390 => 287,  324 => 222,  312 => 213,  302 => 206,  297 => 204,  293 => 203,  289 => 202,  275 => 191,  256 => 175,  249 => 171,  237 => 163,  230 => 160,  222 => 156,  207 => 144,  203 => 143,  187 => 130,  183 => 129,  179 => 128,  169 => 121,  157 => 112,  147 => 105,  138 => 99,  129 => 93,  119 => 86,  107 => 77,  41 => 13,  35 => 12,  11 => 1,);
    }
}
/* {% extends "CondorsTnMallBundle::ResponsableLayouts/Layout.html.twig" %}*/
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* {% block Content %}*/
/* */
/*     <div class="page-title">*/
/*         <div class="title_left">*/
/*             <h3>Product Management</h3>*/
/*         </div>*/
/* */
/*         <div class="title_right">*/
/*             <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">*/
/* */
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/*     <div class="" role="tabpanel" data-example-id="togglable-tabs">*/
/*         <ul id="myTab1" class="nav nav-tabs bar_tabs right" role="tablist">*/
/*             <li role="presentation" class="active"><a href="#tab_content11" id="home-tabb" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true"><i class="fa fa-pencil"></i></a>*/
/*             </li>*/
/*             <li role="presentation" class=""><a href="#tab_content_view" id="home-tabb" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true"><i class="fa fa-eye"></i></a>*/
/*             </li>*/
/* */
/*         </ul>*/
/*         <div id="myTabContent2" class="tab-content">*/
/*             <div role="tabpanel" class="tab-pane fade active in" id="tab_content11" aria-labelledby="home-tab">*/
/*                 <!-- Smart Wizard -->*/
/* */
/*                 <div id="wizard" class="form_wizard wizard_horizontal">*/
/*                     <ul class="wizard_steps">*/
/*                         <li>*/
/*                             <a href="#step-1">*/
/*                                 <span class="step_no">1</span>*/
/*                                 <span class="step_descr">*/
/*                                     Step 1<br />*/
/*                                     <small>General Information</small>*/
/*                                 </span>*/
/*                             </a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="#step-2">*/
/*                                 <span class="step_no">2</span>*/
/*                                 <span class="step_descr">*/
/*                                     Step 2<br />*/
/*                                     <small>Description</small>*/
/*                                 </span>*/
/*                             </a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="#step-3">*/
/*                                 <span class="step_no">3</span>*/
/*                                 <span class="step_descr">*/
/*                                     Step 3<br />*/
/*                                     <small>Upload Pictures</small>*/
/*                                 </span>*/
/*                             </a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="#step-4">*/
/*                                 <span class="step_no">4</span>*/
/*                                 <span class="step_descr">*/
/*                                     Step 4<br />*/
/*                                     <small>Step 4 description</small>*/
/*                                 </span>*/
/*                             </a>*/
/*                         </li>*/
/*                     </ul>*/
/*                     {{ form_start(form, {'attr': {'class': 'form-horizontal form-label-left'}}) }}*/
/*                     <div id="step-1">*/
/* */
/* */
/*                         <div class="form-group">*/
/*                             <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Product Name <span class="required">*</span>*/
/*                             </label>*/
/*                             <div class="col-md-6 col-sm-6 col-xs-12">*/
/* */
/*                                 {{ form_widget(form.libelleProduit , { 'attr': {'class': 'form-control col-md-7 col-xs-12'} } ) }} */
/*                             </div>*/
/*                         </div>*/
/*                         <div class="form-group">*/
/*                             <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Product Category <span class="required">*</span>*/
/*                             </label>*/
/*                             <div class="col-md-6 col-sm-6 col-xs-12">*/
/*                                 {{ form_widget(form.categorieProduit , { 'attr': {'class': 'form-control col-md-7 col-xs-12'} } ) }} */
/*                             </div>*/
/*                         </div>*/
/*                         <div class="form-group">*/
/*                             <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Product REF<span class="required">*</span></label>*/
/*                             <div class="col-md-6 col-sm-6 col-xs-12">*/
/*                                 {{ form_widget(form.refProduit , { 'attr': {'class': 'form-control col-md-7 col-xs-12'} } ) }} */
/*                             </div>*/
/*                         </div>*/
/*                         <div class="form-group">*/
/*                             <label class="control-label col-md-3 col-sm-3 col-xs-12">Product V.A.T<span class="required">*</span></label>*/
/*                             <div class="col-md-6 col-sm-6 col-xs-12">*/
/*                                 {{ form_widget(form.tvaProduit , { 'attr': {'class': 'form-control col-md-7 col-xs-12'} } ) }} */
/*                             </div>*/
/*                         </div>*/
/*                         <div class="form-group">*/
/*                             <label class="control-label col-md-3 col-sm-3 col-xs-12">Product Price <span class="required">*</span>*/
/*                             </label>*/
/*                             <div class="col-md-6 col-sm-6 col-xs-12">*/
/*                                 {{ form_widget(form.prixProduit , { 'attr': {'class': 'form-control col-md-7 col-xs-12'} } ) }} */
/*                             </div>*/
/*                         </div>*/
/* */
/* */
/*                     </div>*/
/*                     <div id="step-2">*/
/*                         <h2 class="StepTitle">Desciption</h2>*/
/*                         <p id="txtEditor">*/
/*                             {{ form_widget(form.descriptionProduit , { 'attr': {'class': 'form-control col-md-7 col-xs-12'} } ) }} */
/*                         </p>*/
/* */
/*                     </div>*/
/*                     <div id="step-3">*/
/*                         <h2 class="StepTitle">Step 3 Content</h2>*/
/*                         <p>*/
/*                             {{ form_widget(form.fileFront , { 'attr': {'class': 'form-control col-md-7 col-xs-12'} } ) }} */
/*                             {{ form_widget(form.fileBack , { 'attr': {'class': 'form-control col-md-7 col-xs-12'} } ) }} */
/*                             {{ form_widget(form.fileReel , { 'attr': {'class': 'form-control col-md-7 col-xs-12'} } ) }} */
/*                         </p>*/
/* */
/*                     </div>*/
/*                     <div id="step-4">*/
/*                         <h2 class="StepTitle">Step 4 Content</h2>*/
/*                         <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et */
/*                         </p>*/
/* */
/*                     </div>*/
/* */
/*                 </div>*/
/* */
/*                 {{ form_widget(form.submit) }}*/
/*                 {{ form_end(form)}}*/
/*             </div>*/
/* */
/*             <div role="tabpanel" class="tab-pane fade" id="tab_content_view" aria-labelledby="home-tab">*/
/* */
/* */
/*                 <!-- Veiw Product -->*/
/* */
/*                 <div class="x_content">*/
/* */
/*                     <div class="col-md-7 col-sm-7 col-xs-12">*/
/*                         <div class="product-image">*/
/*                             <img src="{{ asset('uploads/pictures/')}}{{ prods.imageprodreel}}" alt="..." />*/
/*                         </div>*/
/*                         <div class="product_gallery">*/
/*                             <a>*/
/*                                 <img src="{{ asset('uploads/pictures/')}}{{ prods.imageprodfront}}" alt="..." />*/
/*                             </a>*/
/*                             <a>*/
/*                                 <img src="{{ asset('uploads/pictures/')}}{{ prods.imageprodback}}" alt="..." />*/
/*                             </a>*/
/* */
/*                         </div>*/
/*                     </div>*/
/* */
/*                     <div class="col-md-5 col-sm-5 col-xs-12" style="border:0px solid #e5e5e5;">*/
/* */
/*                         <h3 class="prod_title">  {{ prods.libelleProduit }} </h3>*/
/* */
/*                         <p>*/
/* */
/*                             {{ prods.descriptionProduit|raw  }}*/
/* */
/* */
/* */
/*                         </p>*/
/*                         <br />*/
/* */
/* */
/*                         <br />*/
/* */
/*                         <div class="">*/
/*                             <h3 class="prod_title">Category <small></small></h3>*/
/* */
/* */
/*                             <ul class="list-inline prod_size">*/
/*                                 <li>*/
/*                                     <button  type="button" class="btn btn-default btn">{{ prods.categorieProduit }}</button>*/
/*                                 </li>*/
/* */
/*                             </ul>*/
/* */
/*                         </div>*/
/*                         <br />*/
/* */
/*                         <div class="">*/
/*                             <h3 class="prod_title">Price & Tax <small></small></h3>*/
/*                             <div class="product_price">*/
/*                                 {% set fprice =(( prods.tvaProduit* prods.prixProduit )/100)+prods.prixProduit %} */
/*                                 <h1  style="text-align:right;"  class="price">{{ fprice }} D.T</h1>*/
/*                                 <span  class="price-tax"> V.A.T  : &nbsp; {{ prods.tvaProduit }}%</span>*/
/*                                 <br>*/
/*                                 <span   class="price-tax">H.T  : &nbsp; {{ prods.prixProduit }} D.T</span>*/
/*                                 <br>*/
/*                             </div>*/
/*                         </div>*/
/*                                  */
/*                                 <div class="">*/
/*                             <h3 class="prod_title">Reference <small></small></h3>*/
/*                               <small> <div  style="text-align:right;" class="btn btn-default btn-xs">[ {{ prods.refProduit }} ]</div></small>*/
/*                         </div>*/
/*                             */
/*                                */
/* */
/* */
/*                         <div class="product_social">*/
/*                             <h3 class="prod_title">Share <small></small></h3>*/
/*                             <ul class="list-inline">*/
/*                                 <li><a target="popup" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u=http%3A//localhost/TunisiaMall/web/app_dev.php/shop-Detail/{{ prods.idProduit }}','name','width=600,height=400')"  href="https://www.facebook.com/sharer/sharer.php?u=http%3A//localhost/TunisiaMall/web/app_dev.php/shop-Detail/{{ prods.idProduit }}"><i class="fa fa-facebook-square"></i></a>*/
/*                                 </li>*/
/*                                 <li><a href="#"><i class="fa fa-twitter-square"></i></a>*/
/*                                 </li>*/
/*                                 <li><a href="#"><i class="fa fa-envelope-square"></i></a>*/
/*                                 </li>*/
/*                                 <li><a href="#"><i class="fa fa-rss-square"></i></a>*/
/*                                 </li>*/
/*                             </ul>*/
/*                         </div>*/
/* */
/*                     </div>*/
/* */
/* */
/*                     <div class="col-md-12">*/
/* */
/* */
/* */
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <!-- End View Product -->*/
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/*             </div>*/
/* */
/* */
/*         </div>*/
/* */
/* */
/* */
/*     </div>*/
/* </div>*/
/* */
/* */
/* */
/* */
/* <div class="">*/
/* */
/*     <div class="clearfix"></div>*/
/* */
/*     <div class="row">*/
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/*         <br> <br>*/
/*     {% endblock Content%}*/
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/*     {% block otherScript  %}*/
/* */
/*         <div id="custom_notifications" class="custom-notifications dsp_none">*/
/*             <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">*/
/*             </ul>*/
/*             <div class="clearfix"></div>*/
/*             <div id="notif-group" class="tabbed_notifications"></div>*/
/*         </div>*/
/* */
/* */
/* */
/*         <!-- bootstrap progress js -->*/
/*         <script src="{{ asset('responsable/js/progressbar/bootstrap-progressbar.min.js')}}"></script>*/
/*         <script src="{{ asset('responsable/js/nicescroll/jquery.nicescroll.min.js')}}"></script>*/
/*         <!-- icheck -->*/
/*         <script src="{{ asset('responsable/js/icheck/icheck.min.js')}}"></script>*/
/* */
/*         <script src="{{ asset('responsable/js/custom.js')}}"></script>*/
/* */
/*         <!-- form wizard -->*/
/*         <script type="text/javascript" src="{{ asset('responsable/js/wizard/jquery.smartWizard.js')}}"></script>*/
/*         <!-- pace -->*/
/*         <script src="{{ asset('responsable/js/pace/pace.min.js')}}"></script>*/
/*         <script type="text/javascript">*/
/*             $(document).ready(function () {*/
/* */
/* */
/*                 $("#produit_submit").hide();*/
/* */
/*                 // Smart Wizard*/
/*                 $('#wizard').smartWizard({*/
/*                     transitionEffect: 'fade'*/
/*                 });*/
/* */
/* */
/* */
/*                 $("#sender").click(function () {*/
/*                     $("#produit_submit").click();*/
/*                     $("#produit_submit").click(new PNotify({*/
/*                                 title: 'Sticky Success',*/
/*                                 text: 'You Update this Product Successfully.',*/
/*                                 type: 'success',*/
/*                                 hide: false*/
/*                             }));*/
/* */
/*                     $("textarea").val($("#placeHolder").Editor("getText"));*/
/*                     */
/*                     */
/*                     return false;*/
/*                 });*/
/* */
/* */
/*             });*/
/* */
/*             $(document).ready(function () {*/
/*                 // Smart Wizard*/
/*                 $('#wizard_verticle').smartWizard({*/
/*                     transitionEffect: 'slideleft'*/
/*                 });*/
/*             });*/
/* */
/*         </script>*/
/* */
/* */
/*         <!-- Editor Zone -->*/
/*         <script src="{{ asset('responsable/js/ckeditor/ckeditor.js')}}"></script>*/
/* */
/*         <script type="text/javascript">*/
/* */
/*             // Replace the <textarea id="editor1"> with a CKEditor*/
/*             // instance, using default configuration.*/
/*             CKEDITOR.replace('produit_descriptionProduit');*/
/* */
/*         </script>*/
/* */
/*         <!-- dropzone -->*/
/*         <script src="{{ asset('responsable/js/dropzone/dropzone.js')}}"></script> */
/* */
/* */
/* */
/*         <script>*/
/*             $(document).ready(function () {*/
/*                 $('input.tableflat').iCheck({*/
/*                     checkboxClass: 'icheckbox_flat-green',*/
/*                     radioClass: 'iradio_flat-green'*/
/*                 });*/
/*             });*/
/* */
/*             var asInitVals = new Array();*/
/*             $(document).ready(function () {*/
/*                 var oTable = $('#example').dataTable({*/
/*                     "oLanguage": {*/
/*                         "sSearch": "Search all columns:"*/
/*                     },*/
/*                     "aoColumnDefs": [{*/
/*                             'bSortable': false,*/
/*                             'aTargets': [0]*/
/*                         } //disables sorting for column one*/
/*                     ],*/
/*                     'iDisplayLength': 12,*/
/*                     "sPaginationType": "full_numbers",*/
/*                     "dom": 'T<"clear">lfrtip',*/
/*                     "tableTools": {*/
/*                         "sSwfPath": "js/datatables/tools/swf/copy_csv_xls_pdf.swf"*/
/*                     }*/
/*                 });*/
/*                 $("tfoot input").keyup(function () {*/
/*                     /* Filter on the column based on the index of this element's parent <th> *//* */
/*                     oTable.fnFilter(this.value, $("tfoot th").index($(this).parent()));*/
/*                 });*/
/*                 $("tfoot input").each(function (i) {*/
/*                     asInitVals[i] = this.value;*/
/*                 });*/
/*                 $("tfoot input").focus(function () {*/
/*                     if (this.className == "search_init") {*/
/*                         this.className = "";*/
/*                         this.value = "";*/
/*                     }*/
/*                 });*/
/*                 $("tfoot input").blur(function (i) {*/
/*                     if (this.value == "") {*/
/*                         this.className = "search_init";*/
/*                         this.value = asInitVals[$("tfoot input").index(this)];*/
/*                     }*/
/*                 });*/
/*             });*/
/*         </script>*/
/*         */
/*         */
/*         <!---->*/
/*         <!-- PNotify -->*/
/*   <script type="text/javascript" src="{{ asset('responsable/js/notify/pnotify.core.js')}}"></script>*/
/*   <script type="text/javascript" src="{{ asset('responsable/js/notify/pnotify.buttons.js')}}"></script>*/
/*   <script type="text/javascript" src="{{ asset('responsable/js/notify/pnotify.nonblock.js')}}"></script>*/
/* */
/* */
/*     {% endblock otherScript%}*/
/* */
/* */
