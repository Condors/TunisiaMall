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
            'otherScript' => array($this, 'block_otherScript'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CondorsTnMallBundle::ResponsableLayouts/Layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c9271701ebdbf71ca9863d6a4ed240b6ce10c20b9c42d59948841b0d4238f8a7 = $this->env->getExtension("native_profiler");
        $__internal_c9271701ebdbf71ca9863d6a4ed240b6ce10c20b9c42d59948841b0d4238f8a7->enter($__internal_c9271701ebdbf71ca9863d6a4ed240b6ce10c20b9c42d59948841b0d4238f8a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CondorsTnMall/Responsable/GestionProduit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c9271701ebdbf71ca9863d6a4ed240b6ce10c20b9c42d59948841b0d4238f8a7->leave($__internal_c9271701ebdbf71ca9863d6a4ed240b6ce10c20b9c42d59948841b0d4238f8a7_prof);

    }

    // line 7
    public function block_quickProfile($context, array $blocks = array())
    {
        $__internal_8de291953a9ba9d9991dde67796a738ef324d2a3f651eb6ea18c072e544aff7f = $this->env->getExtension("native_profiler");
        $__internal_8de291953a9ba9d9991dde67796a738ef324d2a3f651eb6ea18c072e544aff7f->enter($__internal_8de291953a9ba9d9991dde67796a738ef324d2a3f651eb6ea18c072e544aff7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "quickProfile"));

        // line 8
        echo "    ";
        echo twig_include($this->env, $context, "CondorsTnMallBundle::Responsable/quickProfile.html.twig");
        echo " 
";
        
        $__internal_8de291953a9ba9d9991dde67796a738ef324d2a3f651eb6ea18c072e544aff7f->leave($__internal_8de291953a9ba9d9991dde67796a738ef324d2a3f651eb6ea18c072e544aff7f_prof);

    }

    // line 13
    public function block_nav_menu($context, array $blocks = array())
    {
        $__internal_3dbbd02814a072fb7e5428acbe3fbe52f82715ef3a3832d9bfd42cf9d629a833 = $this->env->getExtension("native_profiler");
        $__internal_3dbbd02814a072fb7e5428acbe3fbe52f82715ef3a3832d9bfd42cf9d629a833->enter($__internal_3dbbd02814a072fb7e5428acbe3fbe52f82715ef3a3832d9bfd42cf9d629a833_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav_menu"));

        // line 14
        echo "
    ";
        // line 15
        echo twig_include($this->env, $context, "CondorsTnMallBundle::Responsable/navMenu.html.twig");
        echo " 

";
        
        $__internal_3dbbd02814a072fb7e5428acbe3fbe52f82715ef3a3832d9bfd42cf9d629a833->leave($__internal_3dbbd02814a072fb7e5428acbe3fbe52f82715ef3a3832d9bfd42cf9d629a833_prof);

    }

    // line 22
    public function block_Content($context, array $blocks = array())
    {
        $__internal_c1434e804a2369aff1b16e833c50b2155ef97b82b5b39f0221e0238944d328e3 = $this->env->getExtension("native_profiler");
        $__internal_c1434e804a2369aff1b16e833c50b2155ef97b82b5b39f0221e0238944d328e3->enter($__internal_c1434e804a2369aff1b16e833c50b2155ef97b82b5b39f0221e0238944d328e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

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
                            <form class=\"form-horizontal form-label-left\">
                                <div id=\"step-1\">


                                    <div class=\"form-group\">
                                        <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Product Name <span class=\"required\">*</span>
                                        </label>
                                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                            ";
        // line 114
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "libelleProduit", array()), 'widget', array("attr" => array("class" => "form-control col-md-7 col-xs-12")));
        echo "
                                        </div>
                                    </div>
                                    <div class=\"form-group\">
                                        <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"last-name\">Product Category <span class=\"required\">*</span>
                                        </label>
                                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                            ";
        // line 121
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "categorieProduit", array()), 'widget', array("attr" => array("class" => "form-control col-md-7 col-xs-12")));
        echo "
                                        </div>
                                    </div>
                                    <div class=\"form-group\">
                                        <label for=\"middle-name\" class=\"control-label col-md-3 col-sm-3 col-xs-12\">Product Reference</label>
                                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                                            ";
        // line 127
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "refProduit", array()), 'widget', array("attr" => array("class" => "form-control col-md-7 col-xs-12")));
        echo "
                                        </div>
                                    </div>





                                </div>
                                <div id=\"step-2\">
                                    <h2 class=\"StepTitle\">Product Discription</h2>
                                    <div id=\"txtEditor\">


                                        ";
        // line 141
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "descriptionProduit", array()), 'widget', array("attr" => array("class" => "form-control col-md-7 col-xs-12")));
        echo "
                                    </div>
                                </div>
                            </form>
                            <div id=\"step-3\">
                                <h2 class=\"StepTitle\">Step 3 Content</h2>
                                <div class=\"row\">
                                    <div class=\"col-md-12 col-sm-12 col-xs-12\">
                                        <div class=\"x_panel\">
                                            <div class=\"x_title\">
                                                <h2>Dropzone multiple file uploader</h2>
                                                <ul class=\"nav navbar-right panel_toolbox\">
                                                    <li><a class=\"collapse-link\"><i class=\"fa fa-chevron-up\"></i></a>
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
                                                    <li><a class=\"close-link\"><i class=\"fa fa-close\"></i></a>
                                                    </li>
                                                </ul>
                                                <div class=\"clearfix\"></div>
                                            </div>
                                            <div class=\"x_content\">

                                                <p>Drag multiple files to the box below for multi upload or click to select files. This is for demonstration purposes only, the files are not uploaded to any server.</p>
                                                <form action=\"choices/form_upload.html\" class=\"dropzone\" style=\"border: 1px solid #e5e5e5; height: 300px; \"></form>

                                             
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id=\"step-4\">
                                <h2 class=\"StepTitle\">Step 4 Content</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                </p>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                                    in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                </p>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                                    in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                </p>
                            </div>

                        </div>
                        <!-- End SmartWizard Content -->

                    ";
        
        $__internal_c1434e804a2369aff1b16e833c50b2155ef97b82b5b39f0221e0238944d328e3->leave($__internal_c1434e804a2369aff1b16e833c50b2155ef97b82b5b39f0221e0238944d328e3_prof);

    }

    // line 207
    public function block_otherScript($context, array $blocks = array())
    {
        $__internal_99dd0567243d5ab62070111806b7c5a1f0c4e0a692e3b6a7a031411ba8c3ae97 = $this->env->getExtension("native_profiler");
        $__internal_99dd0567243d5ab62070111806b7c5a1f0c4e0a692e3b6a7a031411ba8c3ae97->enter($__internal_99dd0567243d5ab62070111806b7c5a1f0c4e0a692e3b6a7a031411ba8c3ae97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "otherScript"));

        // line 208
        echo "
                        <div id=\"custom_notifications\" class=\"custom-notifications dsp_none\">
                            <ul class=\"list-unstyled notifications clearfix\" data-tabbed_notifications=\"notif-group\">
                            </ul>
                            <div class=\"clearfix\"></div>
                            <div id=\"notif-group\" class=\"tabbed_notifications\"></div>
                        </div>



                        <!-- bootstrap progress js -->
                        <script src=\"";
        // line 219
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("responsable/js/progressbar/bootstrap-progressbar.min.js"), "html", null, true);
        echo "\"></script>
                        <script src=\"";
        // line 220
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("responsable/js/nicescroll/jquery.nicescroll.min.js"), "html", null, true);
        echo "\"></script>
                        <!-- icheck -->
                        <script src=\"";
        // line 222
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("responsable/js/icheck/icheck.min.js"), "html", null, true);
        echo "\"></script>

                        <script src=\"";
        // line 224
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("responsable/js/custom.js"), "html", null, true);
        echo "\"></script>

                        <!-- form wizard -->
                        <script type=\"text/javascript\" src=\"";
        // line 227
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("responsable/js/wizard/jquery.smartWizard.js"), "html", null, true);
        echo "\"></script>
                        <!-- pace -->
                        <script src=\"";
        // line 229
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("responsable/js/pace/pace.min.js"), "html", null, true);
        echo "\"></script>
                        <script type=\"text/javascript\">
                            \$(document).ready(function () {
                                // Smart Wizard
                                \$('#wizard').smartWizard();

                                function onFinishCallback() {
                                    \$('#wizard').smartWizard('showMessage', 'Finish Clicked');
                                    //alert('Finish Clicked');
                                }
                            });

                            \$(document).ready(function () {
                                // Smart Wizard
                                \$('#wizard_verticle').smartWizard({
                                    transitionEffect: 'slide'
                                });
                            });

                        </script>


                        <!-- Editor Zone -->
                        <script src=\"";
        // line 252
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("responsable/editor.js"), "html", null, true);
        echo "\"></script>

                        <script type=\"text/javascript\">
                            \$(document).ready(function () {
                                \$(\"#txtEditor\").Editor();
                            });
                        </script>

                        <!-- dropzone -->
                        <script src=\"";
        // line 261
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("responsable/js/dropzone/dropzone.js"), "html", null, true);
        echo "\"></script> 
                    ";
        
        $__internal_99dd0567243d5ab62070111806b7c5a1f0c4e0a692e3b6a7a031411ba8c3ae97->leave($__internal_99dd0567243d5ab62070111806b7c5a1f0c4e0a692e3b6a7a031411ba8c3ae97_prof);

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
        return array (  354 => 261,  342 => 252,  316 => 229,  311 => 227,  305 => 224,  300 => 222,  295 => 220,  291 => 219,  278 => 208,  272 => 207,  207 => 141,  190 => 127,  181 => 121,  171 => 114,  78 => 23,  72 => 22,  62 => 15,  59 => 14,  53 => 13,  43 => 8,  37 => 7,  11 => 1,);
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
/*                             <form class="form-horizontal form-label-left">*/
/*                                 <div id="step-1">*/
/* */
/* */
/*                                     <div class="form-group">*/
/*                                         <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Product Name <span class="required">*</span>*/
/*                                         </label>*/
/*                                         <div class="col-md-6 col-sm-6 col-xs-12">*/
/*                                             {{ form_widget(form.libelleProduit , { 'attr': {'class': 'form-control col-md-7 col-xs-12'} } ) }}*/
/*                                         </div>*/
/*                                     </div>*/
/*                                     <div class="form-group">*/
/*                                         <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Product Category <span class="required">*</span>*/
/*                                         </label>*/
/*                                         <div class="col-md-6 col-sm-6 col-xs-12">*/
/*                                             {{ form_widget(form.categorieProduit , { 'attr': {'class': 'form-control col-md-7 col-xs-12'} } ) }}*/
/*                                         </div>*/
/*                                     </div>*/
/*                                     <div class="form-group">*/
/*                                         <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Product Reference</label>*/
/*                                         <div class="col-md-6 col-sm-6 col-xs-12">*/
/*                                             {{ form_widget(form.refProduit , { 'attr': {'class': 'form-control col-md-7 col-xs-12'} } ) }}*/
/*                                         </div>*/
/*                                     </div>*/
/* */
/* */
/* */
/* */
/* */
/*                                 </div>*/
/*                                 <div id="step-2">*/
/*                                     <h2 class="StepTitle">Product Discription</h2>*/
/*                                     <div id="txtEditor">*/
/* */
/* */
/*                                         {{ form_widget(form.descriptionProduit , { 'attr': {'class': 'form-control col-md-7 col-xs-12'} } ) }}*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </form>*/
/*                             <div id="step-3">*/
/*                                 <h2 class="StepTitle">Step 3 Content</h2>*/
/*                                 <div class="row">*/
/*                                     <div class="col-md-12 col-sm-12 col-xs-12">*/
/*                                         <div class="x_panel">*/
/*                                             <div class="x_title">*/
/*                                                 <h2>Dropzone multiple file uploader</h2>*/
/*                                                 <ul class="nav navbar-right panel_toolbox">*/
/*                                                     <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>*/
/*                                                     </li>*/
/*                                                     <li class="dropdown">*/
/*                                                         <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>*/
/*                                                         <ul class="dropdown-menu" role="menu">*/
/*                                                             <li><a href="#">Settings 1</a>*/
/*                                                             </li>*/
/*                                                             <li><a href="#">Settings 2</a>*/
/*                                                             </li>*/
/*                                                         </ul>*/
/*                                                     </li>*/
/*                                                     <li><a class="close-link"><i class="fa fa-close"></i></a>*/
/*                                                     </li>*/
/*                                                 </ul>*/
/*                                                 <div class="clearfix"></div>*/
/*                                             </div>*/
/*                                             <div class="x_content">*/
/* */
/*                                                 <p>Drag multiple files to the box below for multi upload or click to select files. This is for demonstration purposes only, the files are not uploaded to any server.</p>*/
/*                                                 <form action="choices/form_upload.html" class="dropzone" style="border: 1px solid #e5e5e5; height: 300px; "></form>*/
/* */
/*                                              */
/*                                             </div>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div id="step-4">*/
/*                                 <h2 class="StepTitle">Step 4 Content</h2>*/
/*                                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.*/
/*                                     Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.*/
/*                                 </p>*/
/*                                 <p>*/
/*                                     Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor*/
/*                                     in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.*/
/*                                 </p>*/
/*                                 <p>*/
/*                                     Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor*/
/*                                     in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.*/
/*                                 </p>*/
/*                             </div>*/
/* */
/*                         </div>*/
/*                         <!-- End SmartWizard Content -->*/
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
/*                                 // Smart Wizard*/
/*                                 $('#wizard').smartWizard();*/
/* */
/*                                 function onFinishCallback() {*/
/*                                     $('#wizard').smartWizard('showMessage', 'Finish Clicked');*/
/*                                     //alert('Finish Clicked');*/
/*                                 }*/
/*                             });*/
/* */
/*                             $(document).ready(function () {*/
/*                                 // Smart Wizard*/
/*                                 $('#wizard_verticle').smartWizard({*/
/*                                     transitionEffect: 'slide'*/
/*                                 });*/
/*                             });*/
/* */
/*                         </script>*/
/* */
/* */
/*                         <!-- Editor Zone -->*/
/*                         <script src="{{ asset('responsable/editor.js')}}"></script>*/
/* */
/*                         <script type="text/javascript">*/
/*                             $(document).ready(function () {*/
/*                                 $("#txtEditor").Editor();*/
/*                             });*/
/*                         </script>*/
/* */
/*                         <!-- dropzone -->*/
/*                         <script src="{{ asset('responsable/js/dropzone/dropzone.js')}}"></script> */
/*                     {% endblock otherScript%}*/
/* */
/* */
