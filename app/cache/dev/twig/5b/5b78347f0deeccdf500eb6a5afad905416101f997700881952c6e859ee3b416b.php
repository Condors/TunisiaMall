<?php

/* CondorsTnMallBundle:Responsable:GestionProduit.html.twig */
class __TwigTemplate_2aea06569697d9f6dd81d29575868edabd6e0fd4a4d37210105804cce990cc1f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CondorsTnMallBundle::ResponsableLayouts/Layout.html.twig", "CondorsTnMallBundle:Responsable:GestionProduit.html.twig", 1);
        $this->blocks = array(
            'quickProfile' => array($this, 'block_quickProfile'),
            'nav_menu' => array($this, 'block_nav_menu'),
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
        $__internal_b03bed4430eb9238735acd019244647ee1c356d31d4fbab2e87e36f40c552f5b = $this->env->getExtension("native_profiler");
        $__internal_b03bed4430eb9238735acd019244647ee1c356d31d4fbab2e87e36f40c552f5b->enter($__internal_b03bed4430eb9238735acd019244647ee1c356d31d4fbab2e87e36f40c552f5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CondorsTnMallBundle:Responsable:GestionProduit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b03bed4430eb9238735acd019244647ee1c356d31d4fbab2e87e36f40c552f5b->leave($__internal_b03bed4430eb9238735acd019244647ee1c356d31d4fbab2e87e36f40c552f5b_prof);

    }

    // line 7
    public function block_quickProfile($context, array $blocks = array())
    {
        $__internal_a51616cc5b33c6b6db0ca1d3edb357c6d244eefdbc53fa8e295a91ca61609e33 = $this->env->getExtension("native_profiler");
        $__internal_a51616cc5b33c6b6db0ca1d3edb357c6d244eefdbc53fa8e295a91ca61609e33->enter($__internal_a51616cc5b33c6b6db0ca1d3edb357c6d244eefdbc53fa8e295a91ca61609e33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "quickProfile"));

        // line 8
        echo "    ";
        echo twig_include($this->env, $context, "CondorsTnMallBundle::Responsable/quickProfile.html.twig");
        echo " 
";
        
        $__internal_a51616cc5b33c6b6db0ca1d3edb357c6d244eefdbc53fa8e295a91ca61609e33->leave($__internal_a51616cc5b33c6b6db0ca1d3edb357c6d244eefdbc53fa8e295a91ca61609e33_prof);

    }

    // line 13
    public function block_nav_menu($context, array $blocks = array())
    {
        $__internal_f0281a9a2f537d110f0e4d18db0fab45070fb0284fb57cab274b724054ff251c = $this->env->getExtension("native_profiler");
        $__internal_f0281a9a2f537d110f0e4d18db0fab45070fb0284fb57cab274b724054ff251c->enter($__internal_f0281a9a2f537d110f0e4d18db0fab45070fb0284fb57cab274b724054ff251c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav_menu"));

        // line 14
        echo "
    ";
        // line 15
        echo twig_include($this->env, $context, "CondorsTnMallBundle::Responsable/navMenu.html.twig");
        echo " 

";
        
        $__internal_f0281a9a2f537d110f0e4d18db0fab45070fb0284fb57cab274b724054ff251c->leave($__internal_f0281a9a2f537d110f0e4d18db0fab45070fb0284fb57cab274b724054ff251c_prof);

    }

    // line 22
    public function block_Content($context, array $blocks = array())
    {
        $__internal_b3a3a34009395e5b7b59db649e37f5e91daad9db52ba93c03a0ad7590d75e3ee = $this->env->getExtension("native_profiler");
        $__internal_b3a3a34009395e5b7b59db649e37f5e91daad9db52ba93c03a0ad7590d75e3ee->enter($__internal_b3a3a34009395e5b7b59db649e37f5e91daad9db52ba93c03a0ad7590d75e3ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        // line 23
        echo "

    <div class=\"\">
        <div class=\"page-title\">
            <div class=\"title_left\">
                <h3>Product Management</h3>
            </div>

            <div class=\"title_right\">
                <div class=\"col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search\">
                    <div class=\"input-group\">
                        <input type=\"text\" class=\"form-control\" placeholder=\"Search for...\">
                        <span class=\"input-group-btn\">
                            <button class=\"btn btn-default\" type=\"button\">Go!</button>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"clearfix\"></div>

        <div class=\"row\">

            <div class=\"col-md-12 col-sm-12 col-xs-12\">
                <div class=\"x_panel\">
                    <div class=\"x_title\">
                        <h2>Add Products <small></small></h2>
                        <ul class=\"nav navbar-right panel_toolbox\">
                            <li><a class=\"collapse-link\"><i class=\"fa fa-chevron-up\"></i></a>
                            </li>
                            <li class=\"dropdown\">
                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\"><i class=\"fa fa-wrench\"></i></a>

                            </li>
                            <li><a class=\"close-link\"><i class=\"fa fa-close\"></i></a>
                            </li>
                        </ul>
                        <div class=\"clearfix\"></div>
                    </div>
                    <div class=\"x_content\">


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
        // line 106
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal form-label-left")));
        echo "
                            <div id=\"step-1\">


                                <div class=\"form-group\">
                                    <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Product Name <span class=\"required\">*</span>
                                    </label>
                                    <div class=\"col-md-6 col-sm-6 col-xs-12\">

                                        ";
        // line 115
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "libelleProduit", array()), 'widget', array("attr" => array("class" => "form-control col-md-7 col-xs-12")));
        echo " 
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"last-name\">Product Category <span class=\"required\">*</span>
                                    </label>
                                    <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                        ";
        // line 122
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "categorieProduit", array()), 'widget', array("attr" => array("class" => "form-control col-md-7 col-xs-12")));
        echo " 
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <label for=\"middle-name\" class=\"control-label col-md-3 col-sm-3 col-xs-12\">Product REF<span class=\"required\">*</span></label>
                                    <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                        ";
        // line 128
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "refProduit", array()), 'widget', array("attr" => array("class" => "form-control col-md-7 col-xs-12")));
        echo " 
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"control-label col-md-3 col-sm-3 col-xs-12\">Product V.A.T<span class=\"required\">*</span></label>
                                    <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                        ";
        // line 134
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tvaProduit", array()), 'widget', array("attr" => array("class" => "form-control col-md-7 col-xs-12")));
        echo " 
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"control-label col-md-3 col-sm-3 col-xs-12\">Product Price <span class=\"required\">*</span>
                                    </label>
                                    <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                        ";
        // line 141
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prixProduit", array()), 'widget', array("attr" => array("class" => "form-control col-md-7 col-xs-12")));
        echo " 
                                    </div>
                                </div>


                            </div>
                            <div id=\"step-2\">
                                <h2 class=\"StepTitle\">Desciption</h2>
                                <p id=\"txtEditor\">
                                    ";
        // line 150
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "descriptionProduit", array()), 'widget', array("attr" => array("class" => "form-control col-md-7 col-xs-12")));
        echo " 
                                </p>

                            </div>
                            <div id=\"step-3\">
                                <h2 class=\"StepTitle\">Step 3 Content</h2>
                                <p>
                                    ";
        // line 157
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fileFront", array()), 'widget', array("attr" => array("class" => "form-control col-md-7 col-xs-12")));
        echo " 
                                    ";
        // line 158
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fileBack", array()), 'widget', array("attr" => array("class" => "form-control col-md-7 col-xs-12")));
        echo " 
                                    ";
        // line 159
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
        // line 172
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "submit", array()), 'widget');
        echo "
                        ";
        // line 173
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "





                        <!-- table View -->

                        <div class=\"col-md-12 col-sm-12 col-xs-12\">
                            <div class=\"x_panel\">
                                <div class=\"x_title\">
                                    <h2>View Products <small>Sessions</small></h2>
                                    <ul class=\"nav navbar-right panel_toolbox\">
                                        <li><a href=\"#\"><i class=\"fa fa-chevron-up\"></i></a>
                                        </li>
                                        <li class=\"dropdown\">
                                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\"><i class=\"fa fa-wrench\"></i></a>
                                            <ul class=\"dropdown-menu\" role=\"menu\">
                                                <li><a href=\"#\">Settings 1</a>
                                                </li>
                                                <li><a href=\"#\">Settings 2</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href=\"#\"><i class=\"fa fa-close\"></i></a>
                                        </li>
                                    </ul>
                                    <div class=\"clearfix\"></div>
                                </div>
                                <div class=\"x_content\">
                                    <table id=\"example\" class=\"table table-striped responsive-utilities jambo_table\">
                                        <thead>
                                            <tr class=\"headings\">
                                                <th>
                                                    <input type=\"checkbox\" class=\"tableflat\">
                                                </th>
                                                <th> Reference </th>
                                                <th>Picture </th>
                                                <th>Order </th>
                                                <th>Bill to Name </th>
                                                <th>Status </th>
                                                <th>Amount </th>
                                                <th class=\" no-link last\"><span class=\"nobr\">Action</span>
                                                </th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            
                                            ";
        // line 222
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["allprods"]) ? $context["allprods"] : $this->getContext($context, "allprods")));
        foreach ($context['_seq'] as $context["_key"] => $context["prods"]) {
            // line 223
            echo "                                            <tr class=\"even pointer\">
                                                <td class=\"a-center \">
                                                    <input type=\"checkbox\" class=\"tableflat\">
                                                </td>
                                                <td class=\" \">";
            // line 227
            echo twig_escape_filter($this->env, $this->getAttribute($context["prods"], "refProduit", array()), "html", null, true);
            echo "</td>
                                                <td class=\" \"><img width=\"30\" heigth=\"30\" src=\"";
            // line 228
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("uploads/pictures/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($context["prods"], "imageprodreel", array()), "html", null, true);
            echo "\" </td>
                                                <td class=\" \">121000210 <i class=\"success fa fa-long-arrow-up\"></i>
                                                </td>
                                                <td class=\" \">John Blank L</td>
                                                <td class=\" \">Paid</td>
                                                <td class=\"a-right a-right \">\$7.45</td>
                                                <td class=\" last\"><a href=\"#\">View</a>
                                                </td>
                                            </tr>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prods'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 238
        echo "                                            

                                        </tbody>

                                    </table>
                                </div>
                            </div>
                        </div>


                        <!-- End Table View -->



                    ";
        
        $__internal_b3a3a34009395e5b7b59db649e37f5e91daad9db52ba93c03a0ad7590d75e3ee->leave($__internal_b3a3a34009395e5b7b59db649e37f5e91daad9db52ba93c03a0ad7590d75e3ee_prof);

    }

    // line 261
    public function block_otherScript($context, array $blocks = array())
    {
        $__internal_ce1f26ebb8c920f9b321cc0f51427696249d3f89a6576db4fa6f3c9b5cbbc73f = $this->env->getExtension("native_profiler");
        $__internal_ce1f26ebb8c920f9b321cc0f51427696249d3f89a6576db4fa6f3c9b5cbbc73f->enter($__internal_ce1f26ebb8c920f9b321cc0f51427696249d3f89a6576db4fa6f3c9b5cbbc73f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "otherScript"));

        // line 262
        echo "
                        <div id=\"custom_notifications\" class=\"custom-notifications dsp_none\">
                            <ul class=\"list-unstyled notifications clearfix\" data-tabbed_notifications=\"notif-group\">
                            </ul>
                            <div class=\"clearfix\"></div>
                            <div id=\"notif-group\" class=\"tabbed_notifications\"></div>
                        </div>



                        <!-- bootstrap progress js -->
                        <script src=\"";
        // line 273
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("responsable/js/progressbar/bootstrap-progressbar.min.js"), "html", null, true);
        echo "\"></script>
                        <script src=\"";
        // line 274
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("responsable/js/nicescroll/jquery.nicescroll.min.js"), "html", null, true);
        echo "\"></script>
                        <!-- icheck -->
                        <script src=\"";
        // line 276
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("responsable/js/icheck/icheck.min.js"), "html", null, true);
        echo "\"></script>

                        <script src=\"";
        // line 278
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("responsable/js/custom.js"), "html", null, true);
        echo "\"></script>

                        <!-- form wizard -->
                        <script type=\"text/javascript\" src=\"";
        // line 281
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("responsable/js/wizard/jquery.smartWizard.js"), "html", null, true);
        echo "\"></script>
                        <!-- pace -->
                        <script src=\"";
        // line 283
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
        // line 318
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("responsable/js/ckeditor/ckeditor.js"), "html", null, true);
        echo "\"></script>

                        <script type=\"text/javascript\">

                            // Replace the <textarea id=\"editor1\"> with a CKEditor
                            // instance, using default configuration.
                            CKEDITOR.replace('produit_descriptionProduit');

                        </script>

                        <!-- dropzone -->
                        <script src=\"";
        // line 329
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
                    ";
        
        $__internal_ce1f26ebb8c920f9b321cc0f51427696249d3f89a6576db4fa6f3c9b5cbbc73f->leave($__internal_ce1f26ebb8c920f9b321cc0f51427696249d3f89a6576db4fa6f3c9b5cbbc73f_prof);

    }

    public function getTemplateName()
    {
        return "CondorsTnMallBundle:Responsable:GestionProduit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  463 => 329,  449 => 318,  411 => 283,  406 => 281,  400 => 278,  395 => 276,  390 => 274,  386 => 273,  373 => 262,  367 => 261,  346 => 238,  329 => 228,  325 => 227,  319 => 223,  315 => 222,  263 => 173,  259 => 172,  243 => 159,  239 => 158,  235 => 157,  225 => 150,  213 => 141,  203 => 134,  194 => 128,  185 => 122,  175 => 115,  163 => 106,  78 => 23,  72 => 22,  62 => 15,  59 => 14,  53 => 13,  43 => 8,  37 => 7,  11 => 1,);
    }
}
/* {% extends "CondorsTnMallBundle::ResponsableLayouts/Layout.html.twig" %}*/
/* */
/* */
/* */
/* */
/* */
/* {%block quickProfile %}*/
/*     {{ include('CondorsTnMallBundle::Responsable/quickProfile.html.twig') }} */
/* {%endblock quickProfile %}*/
/* */
/* */
/* */
/* {% block nav_menu %}*/
/* */
/*     {{ include('CondorsTnMallBundle::Responsable/navMenu.html.twig') }} */
/* */
/* {%endblock nav_menu%}*/
/* */
/* */
/* */
/* */
/* {% block Content %}*/
/* */
/* */
/*     <div class="">*/
/*         <div class="page-title">*/
/*             <div class="title_left">*/
/*                 <h3>Product Management</h3>*/
/*             </div>*/
/* */
/*             <div class="title_right">*/
/*                 <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">*/
/*                     <div class="input-group">*/
/*                         <input type="text" class="form-control" placeholder="Search for...">*/
/*                         <span class="input-group-btn">*/
/*                             <button class="btn btn-default" type="button">Go!</button>*/
/*                         </span>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="clearfix"></div>*/
/* */
/*         <div class="row">*/
/* */
/*             <div class="col-md-12 col-sm-12 col-xs-12">*/
/*                 <div class="x_panel">*/
/*                     <div class="x_title">*/
/*                         <h2>Add Products <small></small></h2>*/
/*                         <ul class="nav navbar-right panel_toolbox">*/
/*                             <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>*/
/*                             </li>*/
/*                             <li class="dropdown">*/
/*                                 <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>*/
/* */
/*                             </li>*/
/*                             <li><a class="close-link"><i class="fa fa-close"></i></a>*/
/*                             </li>*/
/*                         </ul>*/
/*                         <div class="clearfix"></div>*/
/*                     </div>*/
/*                     <div class="x_content">*/
/* */
/* */
/*                         <!-- Smart Wizard -->*/
/* */
/*                         <div id="wizard" class="form_wizard wizard_horizontal">*/
/*                             <ul class="wizard_steps">*/
/*                                 <li>*/
/*                                     <a href="#step-1">*/
/*                                         <span class="step_no">1</span>*/
/*                                         <span class="step_descr">*/
/*                                             Step 1<br />*/
/*                                             <small>General Information</small>*/
/*                                         </span>*/
/*                                     </a>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <a href="#step-2">*/
/*                                         <span class="step_no">2</span>*/
/*                                         <span class="step_descr">*/
/*                                             Step 2<br />*/
/*                                             <small>Description</small>*/
/*                                         </span>*/
/*                                     </a>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <a href="#step-3">*/
/*                                         <span class="step_no">3</span>*/
/*                                         <span class="step_descr">*/
/*                                             Step 3<br />*/
/*                                             <small>Upload Pictures</small>*/
/*                                         </span>*/
/*                                     </a>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <a href="#step-4">*/
/*                                         <span class="step_no">4</span>*/
/*                                         <span class="step_descr">*/
/*                                             Step 4<br />*/
/*                                             <small>Step 4 description</small>*/
/*                                         </span>*/
/*                                     </a>*/
/*                                 </li>*/
/*                             </ul>*/
/*                             {{ form_start(form, {'attr': {'class': 'form-horizontal form-label-left'}}) }}*/
/*                             <div id="step-1">*/
/* */
/* */
/*                                 <div class="form-group">*/
/*                                     <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Product Name <span class="required">*</span>*/
/*                                     </label>*/
/*                                     <div class="col-md-6 col-sm-6 col-xs-12">*/
/* */
/*                                         {{ form_widget(form.libelleProduit , { 'attr': {'class': 'form-control col-md-7 col-xs-12'} } ) }} */
/*                                     </div>*/
/*                                 </div>*/
/*                                 <div class="form-group">*/
/*                                     <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Product Category <span class="required">*</span>*/
/*                                     </label>*/
/*                                     <div class="col-md-6 col-sm-6 col-xs-12">*/
/*                                         {{ form_widget(form.categorieProduit , { 'attr': {'class': 'form-control col-md-7 col-xs-12'} } ) }} */
/*                                     </div>*/
/*                                 </div>*/
/*                                 <div class="form-group">*/
/*                                     <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Product REF<span class="required">*</span></label>*/
/*                                     <div class="col-md-6 col-sm-6 col-xs-12">*/
/*                                         {{ form_widget(form.refProduit , { 'attr': {'class': 'form-control col-md-7 col-xs-12'} } ) }} */
/*                                     </div>*/
/*                                 </div>*/
/*                                 <div class="form-group">*/
/*                                     <label class="control-label col-md-3 col-sm-3 col-xs-12">Product V.A.T<span class="required">*</span></label>*/
/*                                     <div class="col-md-6 col-sm-6 col-xs-12">*/
/*                                         {{ form_widget(form.tvaProduit , { 'attr': {'class': 'form-control col-md-7 col-xs-12'} } ) }} */
/*                                     </div>*/
/*                                 </div>*/
/*                                 <div class="form-group">*/
/*                                     <label class="control-label col-md-3 col-sm-3 col-xs-12">Product Price <span class="required">*</span>*/
/*                                     </label>*/
/*                                     <div class="col-md-6 col-sm-6 col-xs-12">*/
/*                                         {{ form_widget(form.prixProduit , { 'attr': {'class': 'form-control col-md-7 col-xs-12'} } ) }} */
/*                                     </div>*/
/*                                 </div>*/
/* */
/* */
/*                             </div>*/
/*                             <div id="step-2">*/
/*                                 <h2 class="StepTitle">Desciption</h2>*/
/*                                 <p id="txtEditor">*/
/*                                     {{ form_widget(form.descriptionProduit , { 'attr': {'class': 'form-control col-md-7 col-xs-12'} } ) }} */
/*                                 </p>*/
/* */
/*                             </div>*/
/*                             <div id="step-3">*/
/*                                 <h2 class="StepTitle">Step 3 Content</h2>*/
/*                                 <p>*/
/*                                     {{ form_widget(form.fileFront , { 'attr': {'class': 'form-control col-md-7 col-xs-12'} } ) }} */
/*                                     {{ form_widget(form.fileBack , { 'attr': {'class': 'form-control col-md-7 col-xs-12'} } ) }} */
/*                                     {{ form_widget(form.fileReel , { 'attr': {'class': 'form-control col-md-7 col-xs-12'} } ) }} */
/*                                 </p>*/
/* */
/*                             </div>*/
/*                             <div id="step-4">*/
/*                                 <h2 class="StepTitle">Step 4 Content</h2>*/
/*                                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et */
/*                                 </p>*/
/* */
/*                             </div>*/
/* */
/*                         </div>*/
/* */
/*                         {{ form_widget(form.submit) }}*/
/*                         {{ form_end(form)}}*/
/* */
/* */
/* */
/* */
/* */
/*                         <!-- table View -->*/
/* */
/*                         <div class="col-md-12 col-sm-12 col-xs-12">*/
/*                             <div class="x_panel">*/
/*                                 <div class="x_title">*/
/*                                     <h2>View Products <small>Sessions</small></h2>*/
/*                                     <ul class="nav navbar-right panel_toolbox">*/
/*                                         <li><a href="#"><i class="fa fa-chevron-up"></i></a>*/
/*                                         </li>*/
/*                                         <li class="dropdown">*/
/*                                             <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>*/
/*                                             <ul class="dropdown-menu" role="menu">*/
/*                                                 <li><a href="#">Settings 1</a>*/
/*                                                 </li>*/
/*                                                 <li><a href="#">Settings 2</a>*/
/*                                                 </li>*/
/*                                             </ul>*/
/*                                         </li>*/
/*                                         <li><a href="#"><i class="fa fa-close"></i></a>*/
/*                                         </li>*/
/*                                     </ul>*/
/*                                     <div class="clearfix"></div>*/
/*                                 </div>*/
/*                                 <div class="x_content">*/
/*                                     <table id="example" class="table table-striped responsive-utilities jambo_table">*/
/*                                         <thead>*/
/*                                             <tr class="headings">*/
/*                                                 <th>*/
/*                                                     <input type="checkbox" class="tableflat">*/
/*                                                 </th>*/
/*                                                 <th> Reference </th>*/
/*                                                 <th>Picture </th>*/
/*                                                 <th>Order </th>*/
/*                                                 <th>Bill to Name </th>*/
/*                                                 <th>Status </th>*/
/*                                                 <th>Amount </th>*/
/*                                                 <th class=" no-link last"><span class="nobr">Action</span>*/
/*                                                 </th>*/
/*                                             </tr>*/
/*                                         </thead>*/
/* */
/*                                         <tbody>*/
/*                                             */
/*                                             {% for prods in allprods %}*/
/*                                             <tr class="even pointer">*/
/*                                                 <td class="a-center ">*/
/*                                                     <input type="checkbox" class="tableflat">*/
/*                                                 </td>*/
/*                                                 <td class=" ">{{ prods.refProduit }}</td>*/
/*                                                 <td class=" "><img width="30" heigth="30" src="{{ asset('uploads/pictures/')}}{{ prods.imageprodreel }}" </td>*/
/*                                                 <td class=" ">121000210 <i class="success fa fa-long-arrow-up"></i>*/
/*                                                 </td>*/
/*                                                 <td class=" ">John Blank L</td>*/
/*                                                 <td class=" ">Paid</td>*/
/*                                                 <td class="a-right a-right ">$7.45</td>*/
/*                                                 <td class=" last"><a href="#">View</a>*/
/*                                                 </td>*/
/*                                             </tr>*/
/*                                             {% endfor %}*/
/*                                             */
/* */
/*                                         </tbody>*/
/* */
/*                                     </table>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/* */
/* */
/*                         <!-- End Table View -->*/
/* */
/* */
/* */
/*                     {% endblock Content%}*/
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/*                     {% block otherScript  %}*/
/* */
/*                         <div id="custom_notifications" class="custom-notifications dsp_none">*/
/*                             <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">*/
/*                             </ul>*/
/*                             <div class="clearfix"></div>*/
/*                             <div id="notif-group" class="tabbed_notifications"></div>*/
/*                         </div>*/
/* */
/* */
/* */
/*                         <!-- bootstrap progress js -->*/
/*                         <script src="{{ asset('responsable/js/progressbar/bootstrap-progressbar.min.js')}}"></script>*/
/*                         <script src="{{ asset('responsable/js/nicescroll/jquery.nicescroll.min.js')}}"></script>*/
/*                         <!-- icheck -->*/
/*                         <script src="{{ asset('responsable/js/icheck/icheck.min.js')}}"></script>*/
/* */
/*                         <script src="{{ asset('responsable/js/custom.js')}}"></script>*/
/* */
/*                         <!-- form wizard -->*/
/*                         <script type="text/javascript" src="{{ asset('responsable/js/wizard/jquery.smartWizard.js')}}"></script>*/
/*                         <!-- pace -->*/
/*                         <script src="{{ asset('responsable/js/pace/pace.min.js')}}"></script>*/
/*                         <script type="text/javascript">*/
/*                             $(document).ready(function () {*/
/* */
/* */
/*                                 $("#produit_submit").hide();*/
/* */
/*                                 // Smart Wizard*/
/*                                 $('#wizard').smartWizard({*/
/*                                     transitionEffect: 'fade'*/
/*                                 });*/
/* */
/* */
/* */
/*                                 $("#sender").click(function () {*/
/*                                     $("#produit_submit").click();*/
/* */
/*                                     $("textarea").val($("#placeHolder").Editor("getText"));*/
/*                                     return false;*/
/*                                 });*/
/* */
/* */
/*                             });*/
/* */
/*                             $(document).ready(function () {*/
/*                                 // Smart Wizard*/
/*                                 $('#wizard_verticle').smartWizard({*/
/*                                     transitionEffect: 'slideleft'*/
/*                                 });*/
/*                             });*/
/* */
/*                         </script>*/
/* */
/* */
/*                         <!-- Editor Zone -->*/
/*                         <script src="{{ asset('responsable/js/ckeditor/ckeditor.js')}}"></script>*/
/* */
/*                         <script type="text/javascript">*/
/* */
/*                             // Replace the <textarea id="editor1"> with a CKEditor*/
/*                             // instance, using default configuration.*/
/*                             CKEDITOR.replace('produit_descriptionProduit');*/
/* */
/*                         </script>*/
/* */
/*                         <!-- dropzone -->*/
/*                         <script src="{{ asset('responsable/js/dropzone/dropzone.js')}}"></script> */
/* */
/* */
/* */
/*                         <script>*/
/*                             $(document).ready(function () {*/
/*                                 $('input.tableflat').iCheck({*/
/*                                     checkboxClass: 'icheckbox_flat-green',*/
/*                                     radioClass: 'iradio_flat-green'*/
/*                                 });*/
/*                             });*/
/* */
/*                             var asInitVals = new Array();*/
/*                             $(document).ready(function () {*/
/*                                 var oTable = $('#example').dataTable({*/
/*                                     "oLanguage": {*/
/*                                         "sSearch": "Search all columns:"*/
/*                                     },*/
/*                                     "aoColumnDefs": [{*/
/*                                             'bSortable': false,*/
/*                                             'aTargets': [0]*/
/*                                         } //disables sorting for column one*/
/*                                     ],*/
/*                                     'iDisplayLength': 12,*/
/*                                     "sPaginationType": "full_numbers",*/
/*                                     "dom": 'T<"clear">lfrtip',*/
/*                                     "tableTools": {*/
/*                                         "sSwfPath": "js/datatables/tools/swf/copy_csv_xls_pdf.swf"*/
/*                                     }*/
/*                                 });*/
/*                                 $("tfoot input").keyup(function () {*/
/*                                     /* Filter on the column based on the index of this element's parent <th> *//* */
/*                                     oTable.fnFilter(this.value, $("tfoot th").index($(this).parent()));*/
/*                                 });*/
/*                                 $("tfoot input").each(function (i) {*/
/*                                     asInitVals[i] = this.value;*/
/*                                 });*/
/*                                 $("tfoot input").focus(function () {*/
/*                                     if (this.className == "search_init") {*/
/*                                         this.className = "";*/
/*                                         this.value = "";*/
/*                                     }*/
/*                                 });*/
/*                                 $("tfoot input").blur(function (i) {*/
/*                                     if (this.value == "") {*/
/*                                         this.className = "search_init";*/
/*                                         this.value = asInitVals[$("tfoot input").index(this)];*/
/*                                     }*/
/*                                 });*/
/*                             });*/
/*                         </script>*/
/*                     {% endblock otherScript%}*/
/* */
/* */
