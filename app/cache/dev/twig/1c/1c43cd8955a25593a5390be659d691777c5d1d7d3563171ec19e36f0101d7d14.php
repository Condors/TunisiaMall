<?php

/* @CondorsTnMall/Responsable/GestionBrands.html.twig */
class __TwigTemplate_030a4bcf63a4514cf223c40bad2f984e5bf248a655249d89a97a47c8c8d4d110 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CondorsTnMallBundle::ResponsableLayouts/Layout.html.twig", "@CondorsTnMall/Responsable/GestionBrands.html.twig", 1);
        $this->blocks = array(
            'quickProfile' => array($this, 'block_quickProfile'),
            'nav_menu' => array($this, 'block_nav_menu'),
            'Content' => array($this, 'block_Content'),
            'footer' => array($this, 'block_footer'),
            'otherScript' => array($this, 'block_otherScript'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CondorsTnMallBundle::ResponsableLayouts/Layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5196d23378fdf5893e39bfb88db6cbe5f52a09d776b955558ffb72446c07c33b = $this->env->getExtension("native_profiler");
        $__internal_5196d23378fdf5893e39bfb88db6cbe5f52a09d776b955558ffb72446c07c33b->enter($__internal_5196d23378fdf5893e39bfb88db6cbe5f52a09d776b955558ffb72446c07c33b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CondorsTnMall/Responsable/GestionBrands.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5196d23378fdf5893e39bfb88db6cbe5f52a09d776b955558ffb72446c07c33b->leave($__internal_5196d23378fdf5893e39bfb88db6cbe5f52a09d776b955558ffb72446c07c33b_prof);

    }

    // line 7
    public function block_quickProfile($context, array $blocks = array())
    {
        $__internal_e690d8d3ad072245cfff0d2485271343067b926ab79a68289c264e24a3d9e04a = $this->env->getExtension("native_profiler");
        $__internal_e690d8d3ad072245cfff0d2485271343067b926ab79a68289c264e24a3d9e04a->enter($__internal_e690d8d3ad072245cfff0d2485271343067b926ab79a68289c264e24a3d9e04a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "quickProfile"));

        // line 8
        echo "    ";
        echo twig_include($this->env, $context, "CondorsTnMallBundle::Responsable/quickProfile.html.twig");
        echo " 
";
        
        $__internal_e690d8d3ad072245cfff0d2485271343067b926ab79a68289c264e24a3d9e04a->leave($__internal_e690d8d3ad072245cfff0d2485271343067b926ab79a68289c264e24a3d9e04a_prof);

    }

    // line 13
    public function block_nav_menu($context, array $blocks = array())
    {
        $__internal_993c71e30555d5566fba910ceb766d9f70fafcc2dce304e1cb57dcb4cd2d482f = $this->env->getExtension("native_profiler");
        $__internal_993c71e30555d5566fba910ceb766d9f70fafcc2dce304e1cb57dcb4cd2d482f->enter($__internal_993c71e30555d5566fba910ceb766d9f70fafcc2dce304e1cb57dcb4cd2d482f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav_menu"));

        // line 14
        echo "
    ";
        // line 15
        echo twig_include($this->env, $context, "CondorsTnMallBundle::Responsable/navMenu.html.twig");
        echo " 

";
        
        $__internal_993c71e30555d5566fba910ceb766d9f70fafcc2dce304e1cb57dcb4cd2d482f->leave($__internal_993c71e30555d5566fba910ceb766d9f70fafcc2dce304e1cb57dcb4cd2d482f_prof);

    }

    // line 22
    public function block_Content($context, array $blocks = array())
    {
        $__internal_74d9cea39cedf7e57bc3d8229f1e9ac36cb41067b8a52b024b97305b1a6885e5 = $this->env->getExtension("native_profiler");
        $__internal_74d9cea39cedf7e57bc3d8229f1e9ac36cb41067b8a52b024b97305b1a6885e5->enter($__internal_74d9cea39cedf7e57bc3d8229f1e9ac36cb41067b8a52b024b97305b1a6885e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        // line 23
        echo "
    <div class=\"page-title\">
        <div class=\"title_left\">
            <h3>Brands Management</h3>
        </div>


        <div class=\"title_right\">
            <div class=\"col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search\">
                <input id=\"prodsearch\" type=\"text\" class=\"form-control\" placeholder=\"Search for...\">
            </div>
        </div>
    </div>

    <div class=\"\" role=\"tabpanel\" data-example-id=\"togglable-tabs\">
        <ul id=\"myTab1\" class=\"nav nav-tabs bar_tabs right\" role=\"tablist\">
            <li role=\"presentation\" class=\"\"><a href=\"#tab_content11\" id=\"home-tabb\" role=\"tab\" data-toggle=\"tab\" aria-controls=\"home\" aria-expanded=\"true\"><i class=\"fa fa-plus-square\"></i></a>
            </li>
            <li role=\"presentation\" class=\"active\"><a href=\"#tab_content22\" role=\"tab\" id=\"profile-tabb\" data-toggle=\"tab\" aria-controls=\"profile\" aria-expanded=\"false\"><i class=\"fa fa-file-text\"></i></a>
            </li>

        </ul>
        <div id=\"myTabContent2\" class=\"tab-content\">
            <div role=\"tabpanel\" class=\"tab-pane fade\" id=\"tab_content11\" aria-labelledby=\"home-tab\">
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
        // line 88
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal form-label-left")));
        echo "
                    <div id=\"step-1\">


                        <div class=\"form-group\">
                            <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Brand Name <span class=\"required\">*</span>
                            </label>
                            <div class=\"col-md-6 col-sm-6 col-xs-12\">

                                ";
        // line 97
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "libelleenseigne", array()), 'widget', array("attr" => array("class" => "form-control col-md-7 col-xs-12")));
        echo " 
                            </div>
                        </div>

                    </div>
                    <div id=\"step-2\">
                        <h2 class=\"StepTitle\">Desciption</h2>
                        <p id=\"txtEditor\">
                            ";
        // line 105
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "descriptionenseigne", array()), 'widget', array("attr" => array("class" => "form-control col-md-7 col-xs-12")));
        echo " 
                        </p>

                    </div>
                    <div id=\"step-3\">
                        <h2 class=\"StepTitle\">Step 3 Content</h2>
                        <p>
                            ";
        // line 112
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file", array()), 'widget', array("attr" => array("class" => "form-control col-md-7 col-xs-12")));
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
        // line 126
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "submit", array()), 'widget');
        echo "
                ";
        // line 127
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
            </div>
            <div role=\"tabpanel\" class=\"tab-pane fade active in\" id=\"tab_content22\" aria-labelledby=\"profile-tab\">
                <!-- table View -->

                <div class=\"col-md-12 col-sm-12 col-xs-12\">
                    <div class=\"x_panel\">

                        <div class=\"x_content\">
                            <table id=\"example\" class=\"table table-striped responsive-utilities jambo_table\">
                                <thead>
                                    <tr class=\"headings\">

                                        <th> Name </th>
                                        <th>Picture </th>
                                        <th>Description </th>

                                        <th class=\" no-link last\"><span class=\"nobr\">Action</span>
                                        </th>
                                    </tr>
                                </thead>

                                <tbody id=\"records_table\">

                                    ";
        // line 151
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["allbrands"]) ? $context["allbrands"] : $this->getContext($context, "allbrands")));
        foreach ($context['_seq'] as $context["_key"] => $context["brands"]) {
            // line 152
            echo "                                        <tr class=\"even pointer\">

                                            <td class=\" \">";
            // line 154
            echo twig_escape_filter($this->env, $this->getAttribute($context["brands"], "libelleenseigne", array()), "html", null, true);
            echo "</td>
                                            <td class=\" \"><img width=\"30\" heigth=\"30\" src=\"";
            // line 155
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("uploads/pictures/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($context["brands"], "imageenseigne", array()), "html", null, true);
            echo "\"/> </td>
                                            <td class=\"nameProd\"> ";
            // line 156
            echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute($context["brands"], "descriptionenseigne", array()), 0, 10), "html", null, true);
            echo " ...
                                            </td>

                                            <td class=\" last\"><a data-toggle=\"modal\" data-target=\".bs-example";
            // line 159
            echo twig_escape_filter($this->env, $this->getAttribute($context["brands"], "idEnseigne", array()), "html", null, true);
            echo "-modal-lg\" href=\"#\"><i style=\"font-size:22px;\" class=\"fa fa-cog\"></i></a>
                                                &nbsp;&nbsp;  <a href=\"";
            // line 160
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("condors_tn_mall_responsable_produit_delete", array("id" => $this->getAttribute($context["brands"], "idEnseigne", array()))), "html", null, true);
            echo "\" ><i style=\"font-size:22px;\" class=\"fa fa-trash\"></i></a>

                                            </td>
                                        </tr>

                                    <div class=\"modal fade bs-example";
            // line 165
            echo twig_escape_filter($this->env, $this->getAttribute($context["brands"], "idEnseigne", array()), "html", null, true);
            echo "-modal-lg\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
                                        <div class=\"modal-dialog modal-lg\">
                                            <div class=\"modal-content\">

                                                <div class=\"modal-header\">
                                                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\"><span aria-hidden=\"true\">×</span>
                                                    </button>
                                                    <h4 class=\"modal-title\" id=\"myModalLabel\"> <i class=\"fa fa-cog\"></i> &nbsp; Product : ";
            // line 172
            echo twig_escape_filter($this->env, $this->getAttribute($context["brands"], "libelleenseigne", array()), "html", null, true);
            echo " </h4>
                                                </div>
                                                <div class=\"modal-body\">
                                                    <iframe  id=\"form-iframe\" frameborder=\"0\" scrolling=\"auto\"  style=\"height: 750px; width: 100%\" src=\"";
            // line 175
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("condors_tn_mall_responsable_produit_midifier", array("id" => $this->getAttribute($context["brands"], "idEnseigne", array()))), "html", null, true);
            echo "\"></iframe>
                                                </div>
                                                <div class=\"modal-footer\">

                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['brands'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 186
        echo "






                                </tbody>

                            </table>

                        </div>
                    </div>
                </div>


                <!-- End Table View -->
            </div>

        </div>
    </div>




    <div class=\"\">

        <div class=\"clearfix\"></div>

        <div class=\"row\">









        ";
        
        $__internal_74d9cea39cedf7e57bc3d8229f1e9ac36cb41067b8a52b024b97305b1a6885e5->leave($__internal_74d9cea39cedf7e57bc3d8229f1e9ac36cb41067b8a52b024b97305b1a6885e5_prof);

    }

    // line 228
    public function block_footer($context, array $blocks = array())
    {
        $__internal_82101ede0942c6ae979378f53decc24e15bbd54fa372078b7256fdfd6ab2c51e = $this->env->getExtension("native_profiler");
        $__internal_82101ede0942c6ae979378f53decc24e15bbd54fa372078b7256fdfd6ab2c51e->enter($__internal_82101ede0942c6ae979378f53decc24e15bbd54fa372078b7256fdfd6ab2c51e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 229
        echo "            ";
        echo twig_include($this->env, $context, "CondorsTnMallBundle::Responsable/footer.html.twig");
        echo " 
        ";
        
        $__internal_82101ede0942c6ae979378f53decc24e15bbd54fa372078b7256fdfd6ab2c51e->leave($__internal_82101ede0942c6ae979378f53decc24e15bbd54fa372078b7256fdfd6ab2c51e_prof);

    }

    // line 240
    public function block_otherScript($context, array $blocks = array())
    {
        $__internal_3c7c762a662aa6f6d6f01eb1155c75256bd98922018aab47c2c2ac7fc9d30125 = $this->env->getExtension("native_profiler");
        $__internal_3c7c762a662aa6f6d6f01eb1155c75256bd98922018aab47c2c2ac7fc9d30125->enter($__internal_3c7c762a662aa6f6d6f01eb1155c75256bd98922018aab47c2c2ac7fc9d30125_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "otherScript"));

        // line 241
        echo "
            <div id=\"custom_notifications\" class=\"custom-notifications dsp_none\">
                <ul class=\"list-unstyled notifications clearfix\" data-tabbed_notifications=\"notif-group\">
                </ul>
                <div class=\"clearfix\"></div>
                <div id=\"notif-group\" class=\"tabbed_notifications\"></div>
            </div>



            <!-- bootstrap progress js -->
            <script src=\"";
        // line 252
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("responsable/js/progressbar/bootstrap-progressbar.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 253
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("responsable/js/nicescroll/jquery.nicescroll.min.js"), "html", null, true);
        echo "\"></script>
            <!-- icheck -->
            <script src=\"";
        // line 255
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("responsable/js/icheck/icheck.min.js"), "html", null, true);
        echo "\"></script>

            <script src=\"";
        // line 257
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("responsable/js/custom.js"), "html", null, true);
        echo "\"></script>

            <!-- form wizard -->
            <script type=\"text/javascript\" src=\"";
        // line 260
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("responsable/js/wizard/jquery.smartWizard.js"), "html", null, true);
        echo "\"></script>
            <!-- pace -->
            <script src=\"";
        // line 262
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("responsable/js/pace/pace.min.js"), "html", null, true);
        echo "\"></script>

            <script type=\"text/javascript\">
                \$(\"document\").ready(function () {
                    \$(\"#prodsearch\").keydown(function () {

                        \$.ajax({
                            type: 'get',
                            url: 'http://localhost/TunisiaMall/web/app_dev.php/user-responsable/products/searchProd/' + \$(\"#prodsearch\").val(),
                            beforeSend: function () {
                                console.log('searching ...');
                            },
                            success: function (data) {


                                var trHTML = '';
                                \$.each(data, function (i, item) {
                                    var pr = ((item.tvaProduit * item.prixProduit) / 100) + item.prixProduit;

                                    trHTML += \"<tr class='even pointer'><td>\" + item.refProduit + \"</td><td><img width='30' heigth='30' src='";
        // line 281
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("uploads/pictures/"), "html", null, true);
        echo "\" + item.imageprodreel + \" ' </td><td>\" + item.libelleProduit + \"</td><td>\" + item.categorieProduit + \"</td><td>\" + item.prixProduit + \" D.T </td><td>\" + item.tvaProduit + \"%</td><td>\" + pr + \" D.T</td>\\n\\
                            <td class='last'><a data-toggle='modal' data-target='.bs-example\" + item.idProduit + \"-modal-lg' 'href='#'><i style='font-size:22px;' class='fa fa-cog'></i></a> &nbsp;&nbsp; <a href=\\n\\
                                'http://localhost/TunisiaMall/web/app_dev.php/user-responsable/products/delete/\" + item.idProduit + \"'><i style='font-size:22px;' class='fa fa-trash'></i></a></tr>\";
                                });
                                \$('#records_table').html(trHTML);
                                console.log('Ok ...');

                            }
                        });

                    });
                });
            </script>

            <script type=\"text/javascript\" >
                \$(document).ready(function () {


                    \$(\"#enseigne_submit\").hide();

                    // Smart Wizard
                    \$('#wizard').smartWizard({
                        transitionEffect: 'fade'
                    });



                    \$(\"#sender\").click(function () {
                        \$(\"#enseigne_submit\").click();

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
        // line 329
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("responsable/js/ckeditor/ckeditor.js"), "html", null, true);
        echo "\"></script>

            <script type=\"text/javascript\">

                // Replace the <textarea id=\"editor1\"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace('enseigne_descriptionenseigne');

            </script>

            <!-- dropzone -->
            <script src=\"";
        // line 340
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
        
        $__internal_3c7c762a662aa6f6d6f01eb1155c75256bd98922018aab47c2c2ac7fc9d30125->leave($__internal_3c7c762a662aa6f6d6f01eb1155c75256bd98922018aab47c2c2ac7fc9d30125_prof);

    }

    public function getTemplateName()
    {
        return "@CondorsTnMall/Responsable/GestionBrands.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  488 => 340,  474 => 329,  423 => 281,  401 => 262,  396 => 260,  390 => 257,  385 => 255,  380 => 253,  376 => 252,  363 => 241,  357 => 240,  347 => 229,  341 => 228,  295 => 186,  278 => 175,  272 => 172,  262 => 165,  254 => 160,  250 => 159,  244 => 156,  239 => 155,  235 => 154,  231 => 152,  227 => 151,  200 => 127,  196 => 126,  179 => 112,  169 => 105,  158 => 97,  146 => 88,  79 => 23,  73 => 22,  63 => 15,  60 => 14,  54 => 13,  44 => 8,  38 => 7,  11 => 1,);
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
/*     <div class="page-title">*/
/*         <div class="title_left">*/
/*             <h3>Brands Management</h3>*/
/*         </div>*/
/* */
/* */
/*         <div class="title_right">*/
/*             <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">*/
/*                 <input id="prodsearch" type="text" class="form-control" placeholder="Search for...">*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/*     <div class="" role="tabpanel" data-example-id="togglable-tabs">*/
/*         <ul id="myTab1" class="nav nav-tabs bar_tabs right" role="tablist">*/
/*             <li role="presentation" class=""><a href="#tab_content11" id="home-tabb" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true"><i class="fa fa-plus-square"></i></a>*/
/*             </li>*/
/*             <li role="presentation" class="active"><a href="#tab_content22" role="tab" id="profile-tabb" data-toggle="tab" aria-controls="profile" aria-expanded="false"><i class="fa fa-file-text"></i></a>*/
/*             </li>*/
/* */
/*         </ul>*/
/*         <div id="myTabContent2" class="tab-content">*/
/*             <div role="tabpanel" class="tab-pane fade" id="tab_content11" aria-labelledby="home-tab">*/
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
/*                             <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Brand Name <span class="required">*</span>*/
/*                             </label>*/
/*                             <div class="col-md-6 col-sm-6 col-xs-12">*/
/* */
/*                                 {{ form_widget(form.libelleenseigne , { 'attr': {'class': 'form-control col-md-7 col-xs-12'} } ) }} */
/*                             </div>*/
/*                         </div>*/
/* */
/*                     </div>*/
/*                     <div id="step-2">*/
/*                         <h2 class="StepTitle">Desciption</h2>*/
/*                         <p id="txtEditor">*/
/*                             {{ form_widget(form.descriptionenseigne , { 'attr': {'class': 'form-control col-md-7 col-xs-12'} } ) }} */
/*                         </p>*/
/* */
/*                     </div>*/
/*                     <div id="step-3">*/
/*                         <h2 class="StepTitle">Step 3 Content</h2>*/
/*                         <p>*/
/*                             {{ form_widget(form.file , { 'attr': {'class': 'form-control col-md-7 col-xs-12'} } ) }} */
/* */
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
/*             <div role="tabpanel" class="tab-pane fade active in" id="tab_content22" aria-labelledby="profile-tab">*/
/*                 <!-- table View -->*/
/* */
/*                 <div class="col-md-12 col-sm-12 col-xs-12">*/
/*                     <div class="x_panel">*/
/* */
/*                         <div class="x_content">*/
/*                             <table id="example" class="table table-striped responsive-utilities jambo_table">*/
/*                                 <thead>*/
/*                                     <tr class="headings">*/
/* */
/*                                         <th> Name </th>*/
/*                                         <th>Picture </th>*/
/*                                         <th>Description </th>*/
/* */
/*                                         <th class=" no-link last"><span class="nobr">Action</span>*/
/*                                         </th>*/
/*                                     </tr>*/
/*                                 </thead>*/
/* */
/*                                 <tbody id="records_table">*/
/* */
/*                                     {% for brands in allbrands %}*/
/*                                         <tr class="even pointer">*/
/* */
/*                                             <td class=" ">{{ brands.libelleenseigne }}</td>*/
/*                                             <td class=" "><img width="30" heigth="30" src="{{ asset('uploads/pictures/')}}{{ brands.imageenseigne }}"/> </td>*/
/*                                             <td class="nameProd"> {{ brands.descriptionenseigne[:10]  }} ...*/
/*                                             </td>*/
/* */
/*                                             <td class=" last"><a data-toggle="modal" data-target=".bs-example{{ brands.idEnseigne }}-modal-lg" href="#"><i style="font-size:22px;" class="fa fa-cog"></i></a>*/
/*                                                 &nbsp;&nbsp;  <a href="{{ path('condors_tn_mall_responsable_produit_delete', {'id': brands.idEnseigne}) }}" ><i style="font-size:22px;" class="fa fa-trash"></i></a>*/
/* */
/*                                             </td>*/
/*                                         </tr>*/
/* */
/*                                     <div class="modal fade bs-example{{ brands.idEnseigne }}-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">*/
/*                                         <div class="modal-dialog modal-lg">*/
/*                                             <div class="modal-content">*/
/* */
/*                                                 <div class="modal-header">*/
/*                                                     <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>*/
/*                                                     </button>*/
/*                                                     <h4 class="modal-title" id="myModalLabel"> <i class="fa fa-cog"></i> &nbsp; Product : {{ brands.libelleenseigne }} </h4>*/
/*                                                 </div>*/
/*                                                 <div class="modal-body">*/
/*                                                     <iframe  id="form-iframe" frameborder="0" scrolling="auto"  style="height: 750px; width: 100%" src="{{ path('condors_tn_mall_responsable_produit_midifier', {'id': brands.idEnseigne}) }}"></iframe>*/
/*                                                 </div>*/
/*                                                 <div class="modal-footer">*/
/* */
/*                                                 </div>*/
/* */
/*                                             </div>*/
/*                                         </div>*/
/*                                     </div>*/
/* */
/*                                 {% endfor %}*/
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/*                                 </tbody>*/
/* */
/*                             </table>*/
/* */
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/* */
/* */
/*                 <!-- End Table View -->*/
/*             </div>*/
/* */
/*         </div>*/
/*     </div>*/
/* */
/* */
/* */
/* */
/*     <div class="">*/
/* */
/*         <div class="clearfix"></div>*/
/* */
/*         <div class="row">*/
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/*         {% endblock Content%}*/
/* */
/* */
/*         {% block footer %}*/
/*             {{ include('CondorsTnMallBundle::Responsable/footer.html.twig') }} */
/*         {% endblock footer %}*/
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/*         {% block otherScript  %}*/
/* */
/*             <div id="custom_notifications" class="custom-notifications dsp_none">*/
/*                 <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">*/
/*                 </ul>*/
/*                 <div class="clearfix"></div>*/
/*                 <div id="notif-group" class="tabbed_notifications"></div>*/
/*             </div>*/
/* */
/* */
/* */
/*             <!-- bootstrap progress js -->*/
/*             <script src="{{ asset('responsable/js/progressbar/bootstrap-progressbar.min.js')}}"></script>*/
/*             <script src="{{ asset('responsable/js/nicescroll/jquery.nicescroll.min.js')}}"></script>*/
/*             <!-- icheck -->*/
/*             <script src="{{ asset('responsable/js/icheck/icheck.min.js')}}"></script>*/
/* */
/*             <script src="{{ asset('responsable/js/custom.js')}}"></script>*/
/* */
/*             <!-- form wizard -->*/
/*             <script type="text/javascript" src="{{ asset('responsable/js/wizard/jquery.smartWizard.js')}}"></script>*/
/*             <!-- pace -->*/
/*             <script src="{{ asset('responsable/js/pace/pace.min.js')}}"></script>*/
/* */
/*             <script type="text/javascript">*/
/*                 $("document").ready(function () {*/
/*                     $("#prodsearch").keydown(function () {*/
/* */
/*                         $.ajax({*/
/*                             type: 'get',*/
/*                             url: 'http://localhost/TunisiaMall/web/app_dev.php/user-responsable/products/searchProd/' + $("#prodsearch").val(),*/
/*                             beforeSend: function () {*/
/*                                 console.log('searching ...');*/
/*                             },*/
/*                             success: function (data) {*/
/* */
/* */
/*                                 var trHTML = '';*/
/*                                 $.each(data, function (i, item) {*/
/*                                     var pr = ((item.tvaProduit * item.prixProduit) / 100) + item.prixProduit;*/
/* */
/*                                     trHTML += "<tr class='even pointer'><td>" + item.refProduit + "</td><td><img width='30' heigth='30' src='{{ asset('uploads/pictures/')}}" + item.imageprodreel + " ' </td><td>" + item.libelleProduit + "</td><td>" + item.categorieProduit + "</td><td>" + item.prixProduit + " D.T </td><td>" + item.tvaProduit + "%</td><td>" + pr + " D.T</td>\n\*/
/*                             <td class='last'><a data-toggle='modal' data-target='.bs-example" + item.idProduit + "-modal-lg' 'href='#'><i style='font-size:22px;' class='fa fa-cog'></i></a> &nbsp;&nbsp; <a href=\n\*/
/*                                 'http://localhost/TunisiaMall/web/app_dev.php/user-responsable/products/delete/" + item.idProduit + "'><i style='font-size:22px;' class='fa fa-trash'></i></a></tr>";*/
/*                                 });*/
/*                                 $('#records_table').html(trHTML);*/
/*                                 console.log('Ok ...');*/
/* */
/*                             }*/
/*                         });*/
/* */
/*                     });*/
/*                 });*/
/*             </script>*/
/* */
/*             <script type="text/javascript" >*/
/*                 $(document).ready(function () {*/
/* */
/* */
/*                     $("#enseigne_submit").hide();*/
/* */
/*                     // Smart Wizard*/
/*                     $('#wizard').smartWizard({*/
/*                         transitionEffect: 'fade'*/
/*                     });*/
/* */
/* */
/* */
/*                     $("#sender").click(function () {*/
/*                         $("#enseigne_submit").click();*/
/* */
/*                         $("textarea").val($("#placeHolder").Editor("getText"));*/
/*                         return false;*/
/*                     });*/
/* */
/* */
/*                 });*/
/* */
/*                 $(document).ready(function () {*/
/*                     // Smart Wizard*/
/*                     $('#wizard_verticle').smartWizard({*/
/*                         transitionEffect: 'slideleft'*/
/*                     });*/
/*                 });*/
/* */
/*             </script>*/
/* */
/* */
/*             <!-- Editor Zone -->*/
/*             <script src="{{ asset('responsable/js/ckeditor/ckeditor.js')}}"></script>*/
/* */
/*             <script type="text/javascript">*/
/* */
/*                 // Replace the <textarea id="editor1"> with a CKEditor*/
/*                 // instance, using default configuration.*/
/*                 CKEDITOR.replace('enseigne_descriptionenseigne');*/
/* */
/*             </script>*/
/* */
/*             <!-- dropzone -->*/
/*             <script src="{{ asset('responsable/js/dropzone/dropzone.js')}}"></script> */
/* */
/* */
/* */
/*             <script>*/
/*                 $(document).ready(function () {*/
/*                     $('input.tableflat').iCheck({*/
/*                         checkboxClass: 'icheckbox_flat-green',*/
/*                         radioClass: 'iradio_flat-green'*/
/*                     });*/
/*                 });*/
/* */
/*                 var asInitVals = new Array();*/
/*                 $(document).ready(function () {*/
/*                     var oTable = $('#example').dataTable({*/
/*                         "oLanguage": {*/
/*                             "sSearch": "Search all columns:"*/
/*                         },*/
/*                         "aoColumnDefs": [{*/
/*                                 'bSortable': false,*/
/*                                 'aTargets': [0]*/
/*                             } //disables sorting for column one*/
/*                         ],*/
/*                         'iDisplayLength': 12,*/
/*                         "sPaginationType": "full_numbers",*/
/*                         "dom": 'T<"clear">lfrtip',*/
/*                         "tableTools": {*/
/*                             "sSwfPath": "js/datatables/tools/swf/copy_csv_xls_pdf.swf"*/
/*                         }*/
/*                     });*/
/*                     $("tfoot input").keyup(function () {*/
/*                         /* Filter on the column based on the index of this element's parent <th> *//* */
/*                         oTable.fnFilter(this.value, $("tfoot th").index($(this).parent()));*/
/*                     });*/
/*                     $("tfoot input").each(function (i) {*/
/*                         asInitVals[i] = this.value;*/
/*                     });*/
/*                     $("tfoot input").focus(function () {*/
/*                         if (this.className == "search_init") {*/
/*                             this.className = "";*/
/*                             this.value = "";*/
/*                         }*/
/*                     });*/
/*                     $("tfoot input").blur(function (i) {*/
/*                         if (this.value == "") {*/
/*                             this.className = "search_init";*/
/*                             this.value = asInitVals[$("tfoot input").index(this)];*/
/*                         }*/
/*                     });*/
/*                 });*/
/*             </script>*/
/* */
/* */
/* */
/*         {% endblock otherScript%}*/
/* */
/* */
