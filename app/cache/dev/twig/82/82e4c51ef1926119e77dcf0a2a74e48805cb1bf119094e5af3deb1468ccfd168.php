<?php

/* CondorsTnMallBundle:Responsable:GestionPacks.html.twig */
class __TwigTemplate_7a3396adfb8c3c746f835c4d37acdad4ec3936874b53879e49d63c8eddf4b4dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CondorsTnMallBundle::ResponsableLayouts/Layout.html.twig", "CondorsTnMallBundle:Responsable:GestionPacks.html.twig", 1);
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
        $__internal_81325c9c5f755ae1de9a9ad619de73bc3cc7a6c1ea56cda9f3e92f5d5bb42963 = $this->env->getExtension("native_profiler");
        $__internal_81325c9c5f755ae1de9a9ad619de73bc3cc7a6c1ea56cda9f3e92f5d5bb42963->enter($__internal_81325c9c5f755ae1de9a9ad619de73bc3cc7a6c1ea56cda9f3e92f5d5bb42963_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CondorsTnMallBundle:Responsable:GestionPacks.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_81325c9c5f755ae1de9a9ad619de73bc3cc7a6c1ea56cda9f3e92f5d5bb42963->leave($__internal_81325c9c5f755ae1de9a9ad619de73bc3cc7a6c1ea56cda9f3e92f5d5bb42963_prof);

    }

    // line 7
    public function block_quickProfile($context, array $blocks = array())
    {
        $__internal_005b5708e74de4eacd385ee6c929be417edd4847fb6ac00bf6be5a4fc182c0a2 = $this->env->getExtension("native_profiler");
        $__internal_005b5708e74de4eacd385ee6c929be417edd4847fb6ac00bf6be5a4fc182c0a2->enter($__internal_005b5708e74de4eacd385ee6c929be417edd4847fb6ac00bf6be5a4fc182c0a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "quickProfile"));

        // line 8
        echo "    ";
        echo twig_include($this->env, $context, "CondorsTnMallBundle::Responsable/quickProfile.html.twig");
        echo "
";
        
        $__internal_005b5708e74de4eacd385ee6c929be417edd4847fb6ac00bf6be5a4fc182c0a2->leave($__internal_005b5708e74de4eacd385ee6c929be417edd4847fb6ac00bf6be5a4fc182c0a2_prof);

    }

    // line 13
    public function block_nav_menu($context, array $blocks = array())
    {
        $__internal_b4ff555f6c3a5d2cc8e388a61b73423512011eb64fe8c9df1885a4a06b1a4da7 = $this->env->getExtension("native_profiler");
        $__internal_b4ff555f6c3a5d2cc8e388a61b73423512011eb64fe8c9df1885a4a06b1a4da7->enter($__internal_b4ff555f6c3a5d2cc8e388a61b73423512011eb64fe8c9df1885a4a06b1a4da7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav_menu"));

        // line 14
        echo "
    ";
        // line 15
        echo twig_include($this->env, $context, "CondorsTnMallBundle::Responsable/navMenu.html.twig");
        echo "

";
        
        $__internal_b4ff555f6c3a5d2cc8e388a61b73423512011eb64fe8c9df1885a4a06b1a4da7->leave($__internal_b4ff555f6c3a5d2cc8e388a61b73423512011eb64fe8c9df1885a4a06b1a4da7_prof);

    }

    // line 22
    public function block_Content($context, array $blocks = array())
    {
        $__internal_57f32d09a98f859300f0dac6e1b313f7c55bb58f9364ee4981ea906742c3e45f = $this->env->getExtension("native_profiler");
        $__internal_57f32d09a98f859300f0dac6e1b313f7c55bb58f9364ee4981ea906742c3e45f->enter($__internal_57f32d09a98f859300f0dac6e1b313f7c55bb58f9364ee4981ea906742c3e45f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        // line 23
        echo "
<div class=\"page-title\">
    <div class=\"title_left\">
        <h3>Packs Management</h3>
    </div>


    <div class=\"title_right\">
        <div class=\"col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search\">
            <input id=\"prodsearch\" type=\"text\" class=\"form-control\" placeholder=\"Search for...\">
        </div>
    </div>
</div>


        ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["packs"]) ? $context["packs"] : $this->getContext($context, "packs")));
        foreach ($context['_seq'] as $context["_key"] => $context["pack"]) {
            echo "    
    <div class='animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12'>
        <div class='tile-stats'>

            <div class='pricing'>
                <div class='title'>
                     <h1>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["pack"], "libelle", array()), "html", null, true);
            echo "</h1>
                     <h2>";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["pack"], "description", array()), "html", null, true);
            echo "</h2>                   
                </div>
                <div class='x_content'>
                    <div class=''>
                        <div class='pricing_features'>
                            <ul class='list-unstyled text-left'>
                                <li>";
            // line 51
            if ($this->getAttribute($context["pack"], "zoneA", array())) {
                echo "<i class='fa fa-check text-danger'></i> ";
            } else {
                echo " <i class='fa fa-times text-danger'></i>  ";
            }
            echo "affichage dans la zone A</li>
                                <li>";
            // line 52
            if ($this->getAttribute($context["pack"], "zoneB", array())) {
                echo "<i class='fa fa-check text-danger'></i> ";
            } else {
                echo " <i class='fa fa-times text-danger'></i>  ";
            }
            echo "affichage dans la zone B</li>
                                
                            </ul>
                        </div>
                    </div>
                    <div class='pricing_footer' id=\"pack";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute($context["pack"], "idPack", array()), "html", null, true);
            echo "\">
                        <a href=\"javascript:void(0);\" class=\"btn btn-success btn-block\"  role=\"button\" onclick=\"buy(";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute($context["pack"], "idPack", array()), "html", null, true);
            echo ")\" >Activate<span> now!</span></a>
                    
                    </div>
                </div>
            </div>
        </div>
    </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pack'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "
        ";
        
        $__internal_57f32d09a98f859300f0dac6e1b313f7c55bb58f9364ee4981ea906742c3e45f->leave($__internal_57f32d09a98f859300f0dac6e1b313f7c55bb58f9364ee4981ea906742c3e45f_prof);

    }

    // line 70
    public function block_footer($context, array $blocks = array())
    {
        $__internal_3c4f65917488c722ef87eee43178f6a0be8568f585d6f00da10413b3bf18f828 = $this->env->getExtension("native_profiler");
        $__internal_3c4f65917488c722ef87eee43178f6a0be8568f585d6f00da10413b3bf18f828->enter($__internal_3c4f65917488c722ef87eee43178f6a0be8568f585d6f00da10413b3bf18f828_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 71
        echo "            ";
        echo twig_include($this->env, $context, "CondorsTnMallBundle::Responsable/footer.html.twig");
        echo "
        ";
        
        $__internal_3c4f65917488c722ef87eee43178f6a0be8568f585d6f00da10413b3bf18f828->leave($__internal_3c4f65917488c722ef87eee43178f6a0be8568f585d6f00da10413b3bf18f828_prof);

    }

    // line 82
    public function block_otherScript($context, array $blocks = array())
    {
        $__internal_1f10936c8d52d21a766bd0e43ad5fe758a976e6ef8130aa7c16438891e98bdde = $this->env->getExtension("native_profiler");
        $__internal_1f10936c8d52d21a766bd0e43ad5fe758a976e6ef8130aa7c16438891e98bdde->enter($__internal_1f10936c8d52d21a766bd0e43ad5fe758a976e6ef8130aa7c16438891e98bdde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "otherScript"));

        // line 83
        echo "
            <div id=\"custom_notifications\" class=\"custom-notifications dsp_none\">
                <ul class=\"list-unstyled notifications clearfix\" data-tabbed_notifications=\"notif-group\">
                </ul>
                <div class=\"clearfix\"></div>
                <div id=\"notif-group\" class=\"tabbed_notifications\"></div>
            </div>



            <!-- bootstrap progress js -->
            <script src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("responsable/js/progressbar/bootstrap-progressbar.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("responsable/js/nicescroll/jquery.nicescroll.min.js"), "html", null, true);
        echo "\"></script>
            <!-- icheck -->
            <script src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("responsable/js/icheck/icheck.min.js"), "html", null, true);
        echo "\"></script>

            <script src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("responsable/js/custom.js"), "html", null, true);
        echo "\"></script>

            <!-- form wizard -->
            <script type=\"text/javascript\" src=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("responsable/js/wizard/jquery.smartWizard.js"), "html", null, true);
        echo "\"></script>
            <!-- pace -->
            <script src=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("responsable/js/pace/pace.min.js"), "html", null, true);
        echo "\"></script>

            <script type=\"text/javascript\">
                \$(document).ready(function () {
         
                         
                        \$.ajax({
                            type: 'get',
                            url: 'http://localhost/TunisiaMall1204/web/app_dev.php/user-responsable/displayBoughtPacks',
                            beforeSend: function () {
                                console.log('searching ...');
                            },
                            success: function (data) {


                                var trHTML = '';
                                \$.each(data, function (i, item) {
                                    trHTML = '';
                                    
                                    trHTML +=\"<a class='btn btn-success btn-block' role='button'  disabled>Already bought</a>\" ;
                               var ident = '#pack'+item.idPack ;
                               
                                 \$(ident).html(trHTML);
    
    
    });
                              

                                console.log('Ok ...');
                            }
                        });

          
                });
                
                
           function    buy(id) {

           
                             \$.ajax({
                            type: 'get',
                            url: 'http://localhost/TunisiaMall1204/web/app_dev.php/user-responsable/buyPacks/'+id,
                            beforeSend: function () {
                                console.log(id);
                            },
                            success: function () {
               var trHTML=\"\";
               trHTML +=\"<a href='javascript:void(0);' class='btn btn-success btn-block' role='button'  disabled>Already bought</a>\" ;
               var ident = '#pack'+id ;
               \$(ident).html(trHTML);
                            }
                        });
    
    
    
    }
                
            </script>

            <script type=\"text/javascript\">
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
        // line 196
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("responsable/js/ckeditor/ckeditor.js"), "html", null, true);
        echo "\"></script>

            <script type=\"text/javascript\">

                // Replace the <textarea id=\"editor1\"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace('enseigne_descriptionenseigne');

            </script>

            <!-- dropzone -->
            <script src=\"";
        // line 207
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
        
        $__internal_1f10936c8d52d21a766bd0e43ad5fe758a976e6ef8130aa7c16438891e98bdde->leave($__internal_1f10936c8d52d21a766bd0e43ad5fe758a976e6ef8130aa7c16438891e98bdde_prof);

    }

    public function getTemplateName()
    {
        return "CondorsTnMallBundle:Responsable:GestionPacks.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  335 => 207,  321 => 196,  226 => 104,  221 => 102,  215 => 99,  210 => 97,  205 => 95,  201 => 94,  188 => 83,  182 => 82,  172 => 71,  166 => 70,  158 => 66,  144 => 58,  140 => 57,  128 => 52,  120 => 51,  111 => 45,  107 => 44,  96 => 38,  79 => 23,  73 => 22,  63 => 15,  60 => 14,  54 => 13,  44 => 8,  38 => 7,  11 => 1,);
    }
}
/* {% extends "CondorsTnMallBundle::ResponsableLayouts/Layout.html.twig" %}*/
/* */
/* */
/* */
/* */
/* */
/* {% block quickProfile %}*/
/*     {{ include('CondorsTnMallBundle::Responsable/quickProfile.html.twig') }}*/
/* {% endblock quickProfile %}*/
/* */
/* */
/* */
/* {% block nav_menu %}*/
/* */
/*     {{ include('CondorsTnMallBundle::Responsable/navMenu.html.twig') }}*/
/* */
/* {% endblock nav_menu %}*/
/* */
/* */
/* */
/* */
/* {% block Content %}*/
/* */
/* <div class="page-title">*/
/*     <div class="title_left">*/
/*         <h3>Packs Management</h3>*/
/*     </div>*/
/* */
/* */
/*     <div class="title_right">*/
/*         <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">*/
/*             <input id="prodsearch" type="text" class="form-control" placeholder="Search for...">*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
/* */
/*         {% for pack in packs  %}    */
/*     <div class='animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12'>*/
/*         <div class='tile-stats'>*/
/* */
/*             <div class='pricing'>*/
/*                 <div class='title'>*/
/*                      <h1>{{ pack.libelle }}</h1>*/
/*                      <h2>{{pack.description }}</h2>                   */
/*                 </div>*/
/*                 <div class='x_content'>*/
/*                     <div class=''>*/
/*                         <div class='pricing_features'>*/
/*                             <ul class='list-unstyled text-left'>*/
/*                                 <li>{% if pack.zoneA %}<i class='fa fa-check text-danger'></i> {% else %} <i class='fa fa-times text-danger'></i>  {% endif %}affichage dans la zone A</li>*/
/*                                 <li>{% if pack.zoneB %}<i class='fa fa-check text-danger'></i> {% else %} <i class='fa fa-times text-danger'></i>  {% endif %}affichage dans la zone B</li>*/
/*                                 */
/*                             </ul>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class='pricing_footer' id="pack{{ pack.idPack }}">*/
/*                         <a href="javascript:void(0);" class="btn btn-success btn-block"  role="button" onclick="buy({{ pack.idPack }})" >Activate<span> now!</span></a>*/
/*                     */
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*         {% endfor %}*/
/* */
/*         {% endblock Content %}*/
/* */
/* */
/*         {% block footer %}*/
/*             {{ include('CondorsTnMallBundle::Responsable/footer.html.twig') }}*/
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
/*         {% block otherScript %}*/
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
/*             <script src="{{ asset('responsable/js/progressbar/bootstrap-progressbar.min.js') }}"></script>*/
/*             <script src="{{ asset('responsable/js/nicescroll/jquery.nicescroll.min.js') }}"></script>*/
/*             <!-- icheck -->*/
/*             <script src="{{ asset('responsable/js/icheck/icheck.min.js') }}"></script>*/
/* */
/*             <script src="{{ asset('responsable/js/custom.js') }}"></script>*/
/* */
/*             <!-- form wizard -->*/
/*             <script type="text/javascript" src="{{ asset('responsable/js/wizard/jquery.smartWizard.js') }}"></script>*/
/*             <!-- pace -->*/
/*             <script src="{{ asset('responsable/js/pace/pace.min.js') }}"></script>*/
/* */
/*             <script type="text/javascript">*/
/*                 $(document).ready(function () {*/
/*          */
/*                          */
/*                         $.ajax({*/
/*                             type: 'get',*/
/*                             url: 'http://localhost/TunisiaMall1204/web/app_dev.php/user-responsable/displayBoughtPacks',*/
/*                             beforeSend: function () {*/
/*                                 console.log('searching ...');*/
/*                             },*/
/*                             success: function (data) {*/
/* */
/* */
/*                                 var trHTML = '';*/
/*                                 $.each(data, function (i, item) {*/
/*                                     trHTML = '';*/
/*                                     */
/*                                     trHTML +="<a class='btn btn-success btn-block' role='button'  disabled>Already bought</a>" ;*/
/*                                var ident = '#pack'+item.idPack ;*/
/*                                */
/*                                  $(ident).html(trHTML);*/
/*     */
/*     */
/*     });*/
/*                               */
/* */
/*                                 console.log('Ok ...');*/
/*                             }*/
/*                         });*/
/* */
/*           */
/*                 });*/
/*                 */
/*                 */
/*            function    buy(id) {*/
/* */
/*            */
/*                              $.ajax({*/
/*                             type: 'get',*/
/*                             url: 'http://localhost/TunisiaMall1204/web/app_dev.php/user-responsable/buyPacks/'+id,*/
/*                             beforeSend: function () {*/
/*                                 console.log(id);*/
/*                             },*/
/*                             success: function () {*/
/*                var trHTML="";*/
/*                trHTML +="<a href='javascript:void(0);' class='btn btn-success btn-block' role='button'  disabled>Already bought</a>" ;*/
/*                var ident = '#pack'+id ;*/
/*                $(ident).html(trHTML);*/
/*                             }*/
/*                         });*/
/*     */
/*     */
/*     */
/*     }*/
/*                 */
/*             </script>*/
/* */
/*             <script type="text/javascript">*/
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
/*             <script src="{{ asset('responsable/js/ckeditor/ckeditor.js') }}"></script>*/
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
/*             <script src="{{ asset('responsable/js/dropzone/dropzone.js') }}"></script>*/
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
/*                             'bSortable': false,*/
/*                             'aTargets': [0]*/
/*                         } //disables sorting for column one*/
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
/*         {% endblock otherScript %}*/
/* */
/* */
