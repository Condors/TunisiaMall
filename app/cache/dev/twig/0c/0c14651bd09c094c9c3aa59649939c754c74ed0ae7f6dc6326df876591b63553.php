<?php

/* @CondorsTnMall/Responsable/GestionProduit.html.twig */
class __TwigTemplate_b3361dd32a138d0cdadb1be739bd2cf8d855e4cdb8fdd9f9bf1a0235c332695f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CondorsTnMallBundle::ResponsableLayouts/Layout.html.twig", "@CondorsTnMall/Responsable/GestionProduit.html.twig", 1);
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
        $__internal_5cfba374680d7adbf88b986ccb60376a9aef04b3d18b70c5c96afa45890308e0 = $this->env->getExtension("native_profiler");
        $__internal_5cfba374680d7adbf88b986ccb60376a9aef04b3d18b70c5c96afa45890308e0->enter($__internal_5cfba374680d7adbf88b986ccb60376a9aef04b3d18b70c5c96afa45890308e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CondorsTnMall/Responsable/GestionProduit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5cfba374680d7adbf88b986ccb60376a9aef04b3d18b70c5c96afa45890308e0->leave($__internal_5cfba374680d7adbf88b986ccb60376a9aef04b3d18b70c5c96afa45890308e0_prof);

    }

    // line 7
    public function block_quickProfile($context, array $blocks = array())
    {
        $__internal_38c8165c85d412190b21cd8aec49511c91ae92b5f470b3088b6885de91b6a725 = $this->env->getExtension("native_profiler");
        $__internal_38c8165c85d412190b21cd8aec49511c91ae92b5f470b3088b6885de91b6a725->enter($__internal_38c8165c85d412190b21cd8aec49511c91ae92b5f470b3088b6885de91b6a725_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "quickProfile"));

        // line 8
        echo "    ";
        echo twig_include($this->env, $context, "CondorsTnMallBundle::Responsable/quickProfile.html.twig");
        echo " 
";
        
        $__internal_38c8165c85d412190b21cd8aec49511c91ae92b5f470b3088b6885de91b6a725->leave($__internal_38c8165c85d412190b21cd8aec49511c91ae92b5f470b3088b6885de91b6a725_prof);

    }

    // line 13
    public function block_nav_menu($context, array $blocks = array())
    {
        $__internal_d733070b357decfee18a05d5b24557a2f7a258ebb4db36f30061be71b5c1f348 = $this->env->getExtension("native_profiler");
        $__internal_d733070b357decfee18a05d5b24557a2f7a258ebb4db36f30061be71b5c1f348->enter($__internal_d733070b357decfee18a05d5b24557a2f7a258ebb4db36f30061be71b5c1f348_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav_menu"));

        // line 14
        echo "
    ";
        // line 15
        echo twig_include($this->env, $context, "CondorsTnMallBundle::Responsable/navMenu.html.twig");
        echo " 

";
        
        $__internal_d733070b357decfee18a05d5b24557a2f7a258ebb4db36f30061be71b5c1f348->leave($__internal_d733070b357decfee18a05d5b24557a2f7a258ebb4db36f30061be71b5c1f348_prof);

    }

    // line 22
    public function block_Content($context, array $blocks = array())
    {
        $__internal_423742251462d262bb8efe11368a23785b5e1d7aa1a473e75fb47c9e553e0f32 = $this->env->getExtension("native_profiler");
        $__internal_423742251462d262bb8efe11368a23785b5e1d7aa1a473e75fb47c9e553e0f32->enter($__internal_423742251462d262bb8efe11368a23785b5e1d7aa1a473e75fb47c9e553e0f32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        // line 23
        echo "
    <div class=\"page-title\">
        <div class=\"title_left\">
            <h3>Product Management</h3>
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
                            <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Product Name <span class=\"required\">*</span>
                            </label>
                            <div class=\"col-md-6 col-sm-6 col-xs-12\">

                                ";
        // line 97
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "libelleProduit", array()), 'widget', array("attr" => array("class" => "form-control col-md-7 col-xs-12")));
        echo " 
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"last-name\">Product Category <span class=\"required\">*</span>
                            </label>
                            <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                ";
        // line 104
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "categorieProduit", array()), 'widget', array("attr" => array("class" => "form-control col-md-7 col-xs-12")));
        echo " 
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label for=\"middle-name\" class=\"control-label col-md-3 col-sm-3 col-xs-12\">Product REF<span class=\"required\">*</span></label>
                            <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                ";
        // line 110
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "refProduit", array()), 'widget', array("attr" => array("class" => "form-control col-md-7 col-xs-12")));
        echo " 
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label class=\"control-label col-md-3 col-sm-3 col-xs-12\">Product V.A.T<span class=\"required\">*</span></label>
                            <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                ";
        // line 116
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tvaProduit", array()), 'widget', array("attr" => array("class" => "form-control col-md-7 col-xs-12")));
        echo " 
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label class=\"control-label col-md-3 col-sm-3 col-xs-12\">Product Price <span class=\"required\">*</span>
                            </label>
                            <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                ";
        // line 123
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prixProduit", array()), 'widget', array("attr" => array("class" => "form-control col-md-7 col-xs-12")));
        echo " 
                            </div>
                        </div>


                    </div>
                    <div id=\"step-2\">
                        <h2 class=\"StepTitle\">Desciption</h2>
                        <p id=\"txtEditor\">
                            ";
        // line 132
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "descriptionProduit", array()), 'widget', array("attr" => array("class" => "form-control col-md-7 col-xs-12")));
        echo " 
                        </p>

                    </div>
                    <div id=\"step-3\">
                        <h2 class=\"StepTitle\">Step 3 Content</h2>
                        <p>
                            ";
        // line 139
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fileFront", array()), 'widget', array("attr" => array("class" => "form-control col-md-7 col-xs-12")));
        echo " 
                            ";
        // line 140
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fileBack", array()), 'widget', array("attr" => array("class" => "form-control col-md-7 col-xs-12")));
        echo " 
                            ";
        // line 141
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
        // line 154
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "submit", array()), 'widget');
        echo "
                ";
        // line 155
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

                                        <th> Reference </th>
                                        <th>Picture </th>
                                        <th>Name </th>
                                        <th> Category </th>
                                        <th>Price  &nbsp;(H.T)</th>
                                        <th>V.A.T </th>
                                        <th>Price &nbsp; (T.T.C)</th>
                                        <th class=\" no-link last\"><span class=\"nobr\">Action</span>
                                        </th>
                                    </tr>
                                </thead>

                                <tbody id=\"records_table\">

                                    ";
        // line 182
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["allprods"]) ? $context["allprods"] : $this->getContext($context, "allprods")));
        foreach ($context['_seq'] as $context["_key"] => $context["prods"]) {
            // line 183
            echo "                                        <tr class=\"even pointer\">

                                            <td class=\" \">";
            // line 185
            echo twig_escape_filter($this->env, $this->getAttribute($context["prods"], "refProduit", array()), "html", null, true);
            echo "</td>
                                            <td class=\" \"><img width=\"30\" heigth=\"30\" src=\"";
            // line 186
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("uploads/pictures/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($context["prods"], "imageprodreel", array()), "html", null, true);
            echo "\" </td>
                                            <td class=\"nameProd\"> ";
            // line 187
            echo twig_escape_filter($this->env, $this->getAttribute($context["prods"], "libelleProduit", array()), "html", null, true);
            echo "
                                            </td>
                                            <td class=\" \">";
            // line 189
            echo twig_escape_filter($this->env, $this->getAttribute($context["prods"], "categorieProduit", array()), "html", null, true);
            echo "</td>
                                            <td class=\" \">";
            // line 190
            echo twig_escape_filter($this->env, $this->getAttribute($context["prods"], "prixProduit", array()), "html", null, true);
            echo " D.T  </td>
                                            <td class=\"a-right a-right \">";
            // line 191
            echo twig_escape_filter($this->env, $this->getAttribute($context["prods"], "tvaProduit", array()), "html", null, true);
            echo "%</td>
                                            <td class=\"a-right a-right \">
                                                ";
            // line 193
            $context["fprice"] = ((($this->getAttribute($context["prods"], "tvaProduit", array()) * $this->getAttribute($context["prods"], "prixProduit", array())) / 100) + $this->getAttribute($context["prods"], "prixProduit", array()));
            echo " 

                                                ";
            // line 195
            echo twig_escape_filter($this->env, (isset($context["fprice"]) ? $context["fprice"] : $this->getContext($context, "fprice")), "html", null, true);
            echo " D.T</td>
                                            <td class=\" last\"><a data-toggle=\"modal\" data-target=\".bs-example";
            // line 196
            echo twig_escape_filter($this->env, $this->getAttribute($context["prods"], "idProduit", array()), "html", null, true);
            echo "-modal-lg\" href=\"#\"><i style=\"font-size:22px;\" class=\"fa fa-cog\"></i></a>
                                                &nbsp;&nbsp;  <a href=\"";
            // line 197
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("condors_tn_mall_responsable_produit_delete", array("id" => $this->getAttribute($context["prods"], "idProduit", array()))), "html", null, true);
            echo "\" ><i style=\"font-size:22px;\" class=\"fa fa-trash\"></i></a>

                                            </td>
                                        </tr>

                                    <div class=\"modal fade bs-example";
            // line 202
            echo twig_escape_filter($this->env, $this->getAttribute($context["prods"], "idProduit", array()), "html", null, true);
            echo "-modal-lg\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
                                        <div class=\"modal-dialog modal-lg\">
                                            <div class=\"modal-content\">

                                                <div class=\"modal-header\">
                                                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\"><span aria-hidden=\"true\">×</span>
                                                    </button>
                                                    <h4 class=\"modal-title\" id=\"myModalLabel\"> <i class=\"fa fa-cog\"></i> &nbsp; Product : ";
            // line 209
            echo twig_escape_filter($this->env, $this->getAttribute($context["prods"], "libelleProduit", array()), "html", null, true);
            echo " </h4>
                                                </div>
                                                <div class=\"modal-body\">
                                                    <iframe  id=\"form-iframe\" frameborder=\"0\" scrolling=\"auto\"  style=\"height: 750px; width: 100%\" src=\"";
            // line 212
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("condors_tn_mall_responsable_produit_midifier", array("id" => $this->getAttribute($context["prods"], "idProduit", array()))), "html", null, true);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prods'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 223
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
        
        $__internal_423742251462d262bb8efe11368a23785b5e1d7aa1a473e75fb47c9e553e0f32->leave($__internal_423742251462d262bb8efe11368a23785b5e1d7aa1a473e75fb47c9e553e0f32_prof);

    }

    // line 265
    public function block_footer($context, array $blocks = array())
    {
        $__internal_c5d8c87d7b3a3025bcb68a339ef07de8f8025f737aabfe30e88e69477a2bafed = $this->env->getExtension("native_profiler");
        $__internal_c5d8c87d7b3a3025bcb68a339ef07de8f8025f737aabfe30e88e69477a2bafed->enter($__internal_c5d8c87d7b3a3025bcb68a339ef07de8f8025f737aabfe30e88e69477a2bafed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 266
        echo "            ";
        echo twig_include($this->env, $context, "CondorsTnMallBundle::Responsable/footer.html.twig");
        echo " 
        ";
        
        $__internal_c5d8c87d7b3a3025bcb68a339ef07de8f8025f737aabfe30e88e69477a2bafed->leave($__internal_c5d8c87d7b3a3025bcb68a339ef07de8f8025f737aabfe30e88e69477a2bafed_prof);

    }

    // line 277
    public function block_otherScript($context, array $blocks = array())
    {
        $__internal_59f900a821280985b78354d9da6b41d943f2325507489047d455ab17236c8662 = $this->env->getExtension("native_profiler");
        $__internal_59f900a821280985b78354d9da6b41d943f2325507489047d455ab17236c8662->enter($__internal_59f900a821280985b78354d9da6b41d943f2325507489047d455ab17236c8662_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "otherScript"));

        // line 278
        echo "
            <div id=\"custom_notifications\" class=\"custom-notifications dsp_none\">
                <ul class=\"list-unstyled notifications clearfix\" data-tabbed_notifications=\"notif-group\">
                </ul>
                <div class=\"clearfix\"></div>
                <div id=\"notif-group\" class=\"tabbed_notifications\"></div>
            </div>



            <!-- bootstrap progress js -->
            <script src=\"";
        // line 289
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("responsable/js/progressbar/bootstrap-progressbar.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 290
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("responsable/js/nicescroll/jquery.nicescroll.min.js"), "html", null, true);
        echo "\"></script>
            <!-- icheck -->
            <script src=\"";
        // line 292
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("responsable/js/icheck/icheck.min.js"), "html", null, true);
        echo "\"></script>

            <script src=\"";
        // line 294
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("responsable/js/custom.js"), "html", null, true);
        echo "\"></script>

            <!-- form wizard -->
            <script type=\"text/javascript\" src=\"";
        // line 297
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("responsable/js/wizard/jquery.smartWizard.js"), "html", null, true);
        echo "\"></script>
            <!-- pace -->
            <script src=\"";
        // line 299
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
        // line 318
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("uploads/pictures/"), "html", null, true);
        echo "\" + item.imageprodreel + \" ' </td><td>\" + item.libelleProduit + \"</td><td>\" + item.categorieProduit + \"</td><td>\" + item.prixProduit + \" D.T </td><td>\" + item.tvaProduit + \"%</td><td>\" + pr + \" D.T</td>\\n\\
                            <td class='last'><a data-toggle='modal' data-target='.bs-example\" + item.idProduit +\"-modal-lg' 'href='#'><i style='font-size:22px;' class='fa fa-cog'></i></a> &nbsp;&nbsp; <a href=\\n\\
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
        // line 366
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("responsable/js/ckeditor/ckeditor.js"), "html", null, true);
        echo "\"></script>

            <script type=\"text/javascript\">

                // Replace the <textarea id=\"editor1\"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace('produit_descriptionProduit');

            </script>

            <!-- dropzone -->
            <script src=\"";
        // line 377
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
        
        $__internal_59f900a821280985b78354d9da6b41d943f2325507489047d455ab17236c8662->leave($__internal_59f900a821280985b78354d9da6b41d943f2325507489047d455ab17236c8662_prof);

    }

    public function getTemplateName()
    {
        return "@CondorsTnMall/Responsable/GestionProduit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  558 => 377,  544 => 366,  493 => 318,  471 => 299,  466 => 297,  460 => 294,  455 => 292,  450 => 290,  446 => 289,  433 => 278,  427 => 277,  417 => 266,  411 => 265,  365 => 223,  348 => 212,  342 => 209,  332 => 202,  324 => 197,  320 => 196,  316 => 195,  311 => 193,  306 => 191,  302 => 190,  298 => 189,  293 => 187,  288 => 186,  284 => 185,  280 => 183,  276 => 182,  246 => 155,  242 => 154,  226 => 141,  222 => 140,  218 => 139,  208 => 132,  196 => 123,  186 => 116,  177 => 110,  168 => 104,  158 => 97,  146 => 88,  79 => 23,  73 => 22,  63 => 15,  60 => 14,  54 => 13,  44 => 8,  38 => 7,  11 => 1,);
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
/*             <h3>Product Management</h3>*/
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
/*                                         <th> Reference </th>*/
/*                                         <th>Picture </th>*/
/*                                         <th>Name </th>*/
/*                                         <th> Category </th>*/
/*                                         <th>Price  &nbsp;(H.T)</th>*/
/*                                         <th>V.A.T </th>*/
/*                                         <th>Price &nbsp; (T.T.C)</th>*/
/*                                         <th class=" no-link last"><span class="nobr">Action</span>*/
/*                                         </th>*/
/*                                     </tr>*/
/*                                 </thead>*/
/* */
/*                                 <tbody id="records_table">*/
/* */
/*                                     {% for prods in allprods %}*/
/*                                         <tr class="even pointer">*/
/* */
/*                                             <td class=" ">{{ prods.refProduit }}</td>*/
/*                                             <td class=" "><img width="30" heigth="30" src="{{ asset('uploads/pictures/')}}{{ prods.imageprodreel }}" </td>*/
/*                                             <td class="nameProd"> {{ prods.libelleProduit }}*/
/*                                             </td>*/
/*                                             <td class=" ">{{ prods.categorieProduit }}</td>*/
/*                                             <td class=" ">{{ prods.prixProduit }} D.T  </td>*/
/*                                             <td class="a-right a-right ">{{ prods.tvaProduit }}%</td>*/
/*                                             <td class="a-right a-right ">*/
/*                                                 {% set fprice =(( prods.tvaProduit* prods.prixProduit )/100)+prods.prixProduit %} */
/* */
/*                                                 {{ fprice }} D.T</td>*/
/*                                             <td class=" last"><a data-toggle="modal" data-target=".bs-example{{ prods.idProduit }}-modal-lg" href="#"><i style="font-size:22px;" class="fa fa-cog"></i></a>*/
/*                                                 &nbsp;&nbsp;  <a href="{{ path('condors_tn_mall_responsable_produit_delete', {'id': prods.idProduit}) }}" ><i style="font-size:22px;" class="fa fa-trash"></i></a>*/
/* */
/*                                             </td>*/
/*                                         </tr>*/
/* */
/*                                     <div class="modal fade bs-example{{ prods.idProduit }}-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">*/
/*                                         <div class="modal-dialog modal-lg">*/
/*                                             <div class="modal-content">*/
/* */
/*                                                 <div class="modal-header">*/
/*                                                     <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>*/
/*                                                     </button>*/
/*                                                     <h4 class="modal-title" id="myModalLabel"> <i class="fa fa-cog"></i> &nbsp; Product : {{ prods.libelleProduit }} </h4>*/
/*                                                 </div>*/
/*                                                 <div class="modal-body">*/
/*                                                     <iframe  id="form-iframe" frameborder="0" scrolling="auto"  style="height: 750px; width: 100%" src="{{ path('condors_tn_mall_responsable_produit_midifier', {'id': prods.idProduit}) }}"></iframe>*/
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
/*                             <td class='last'><a data-toggle='modal' data-target='.bs-example" + item.idProduit +"-modal-lg' 'href='#'><i style='font-size:22px;' class='fa fa-cog'></i></a> &nbsp;&nbsp; <a href=\n\*/
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
/*                     $("#produit_submit").hide();*/
/* */
/*                     // Smart Wizard*/
/*                     $('#wizard').smartWizard({*/
/*                         transitionEffect: 'fade'*/
/*                     });*/
/* */
/* */
/* */
/*                     $("#sender").click(function () {*/
/*                         $("#produit_submit").click();*/
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
/*                 CKEDITOR.replace('produit_descriptionProduit');*/
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
