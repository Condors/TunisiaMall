<?php

/* @CondorsTnMall/ResponsableLayouts/Layout.html.twig */
class __TwigTemplate_0837788557cc6cc112e7e9a4cc85ad5b45ca886449018d9a7f10b61c5dee228b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'quickProfile' => array($this, 'block_quickProfile'),
            'nav_menu' => array($this, 'block_nav_menu'),
            'Content' => array($this, 'block_Content'),
            'footer' => array($this, 'block_footer'),
            'otherScript' => array($this, 'block_otherScript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d78de006d9316ea09eaa680fc277d743df7c9074538735b15d7c2e26696259e2 = $this->env->getExtension("native_profiler");
        $__internal_d78de006d9316ea09eaa680fc277d743df7c9074538735b15d7c2e26696259e2->enter($__internal_d78de006d9316ea09eaa680fc277d743df7c9074538735b15d7c2e26696259e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CondorsTnMall/ResponsableLayouts/Layout.html.twig"));

        // line 1
        echo "
<!DOCTYPE html>
<html lang=\"en\">


<head>
  <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset=\"utf-8\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

  <title>Tunisia Mall  | Responsable </title>

  <!-- Bootstrap core CSS -->

  <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("responsable/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
 <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("responsable/editor.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\"/>
  <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("responsable/fonts/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("responsable/css/animate.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

  <!-- Custom styling plus plugins -->
  <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("responsable/css/custom.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("responsable/css/maps/jquery-jvectormap-2.0.3.css"), "html", null, true);
        echo "\" />
  <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("responsable/css/icheck/flat/green.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
  <link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("responsable/css/floatexamples.css\" rel=\"stylesheet\" type=\"text/css"), "html", null, true);
        echo "\" />

  <script src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("responsable/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("responsable/js/nprogress.js"), "html", null, true);
        echo "\"></script>

  <!--[if lt IE 9]>
  <script src=\"../assets/js/ie8-responsive-file-warning.js\"></script>
  <![endif]-->

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
  <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
  <![endif]-->

</head>


<body class=\"nav-md\">

  <div class=\"container body\">


    <div class=\"main_container\">

      <div class=\"col-md-3 left_col\">
        <div class=\"left_col scroll-view\">

          <div class=\"navbar nav_title\" style=\"border: 0;\">
              <a href=\"";
        // line 55
        echo $this->env->getExtension('routing')->getPath("condors_tn_mall_responsable_index");
        echo "\" class=\"site_title\"> <img width=\"40\"  height=\"40\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/logo.png"), "html", null, true);
        echo "\" /> <span>Tunisia Mall</span></a>
          </div>
          <div class=\"clearfix\"></div>

          <!-- menu prile quick info -->
          ";
        // line 60
        $this->displayBlock('quickProfile', $context, $blocks);
        // line 63
        echo "          <!-- /menu prile quick info -->

          <br />

          <!-- sidebar menu -->
          <div id=\"sidebar-menu\" class=\"main_menu_side hidden-print main_menu\">

            <div class=\"menu_section\">
              <h3>&nbsp;</h3>
              <ul class=\"nav side-menu\">
                <li><a href=\"";
        // line 73
        echo $this->env->getExtension('routing')->getPath("condors_tn_mall_responsable_index");
        echo "\"><i class=\"fa fa-home\"></i> Dashboard </a>
                  
                </li>
                <li><a><i class=\"fa fa-book\"></i> Catalog <span class=\"fa fa-chevron-down\"></span></a>
                  <ul class=\"nav child_menu\" style=\"display: none\">
                    <li></i><a href=\"";
        // line 78
        echo $this->env->getExtension('routing')->getPath("condors_tn_mall_responsable_produit");
        echo "\">Products</a>
                    </li>
                    
                    
                   
                  </ul>
                </li>
                
              </ul>
            </div>

          </div>
          <!-- /sidebar menu -->

          <!-- /menu footer buttons -->
          <div class=\"sidebar-footer hidden-small\">
            <a data-toggle=\"tooltip\" data-placement=\"top\" title=\"Settings\">
              <span class=\"glyphicon glyphicon-cog\" aria-hidden=\"true\"></span>
            </a>
            <a data-toggle=\"tooltip\" data-placement=\"top\" title=\"FullScreen\">
              <span class=\"glyphicon glyphicon-fullscreen\" aria-hidden=\"true\"></span>
            </a>
            <a data-toggle=\"tooltip\" data-placement=\"top\" title=\"Lock\">
              <span class=\"glyphicon glyphicon-eye-close\" aria-hidden=\"true\"></span>
            </a>
            <a data-toggle=\"tooltip\" data-placement=\"top\" title=\"Logout\">
              <span class=\"glyphicon glyphicon-off\" aria-hidden=\"true\"></span>
            </a>
          </div>
          <!-- /menu footer buttons -->
        </div>
      </div>

      <!-- top navigation -->
      <div class=\"top_nav\">

        <div class=\"nav_menu\">
              ";
        // line 115
        $this->displayBlock('nav_menu', $context, $blocks);
        // line 118
        echo "         
        </div>

      </div>
      <!-- /top navigation -->


      <!-- page content -->

     <div class=\"right_col\" role=\"main\">

        <div class=\"row\">
          <div class=\"col-md-12 col-sm-12 col-xs-12\">
              
              ";
        // line 132
        $this->displayBlock('Content', $context, $blocks);
        // line 135
        echo "            
          </div>

        </div>
        <br />

        <!-- footer content -->

        ";
        // line 143
        $this->displayBlock('footer', $context, $blocks);
        // line 146
        echo "        <!-- /footer content -->
      </div>
      <!-- /page content -->

    </div>

  </div>

  <div id=\"custom_notifications\" class=\"custom-notifications dsp_none\">
    <ul class=\"list-unstyled notifications clearfix\" data-tabbed_notifications=\"notif-group\">
    </ul>
    <div class=\"clearfix\"></div>
    <div id=\"notif-group\" class=\"tabbed_notifications\"></div>
  </div>

  <script src=\"";
        // line 161
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("responsable/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

  <!-- gauge js -->
  <script type=\"text/javascript\" src=\"";
        // line 164
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("responsable/js/gauge/gauge.min.js"), "html", null, true);
        echo "\"></script>
  <script type=\"text/javascript\" src=\"";
        // line 165
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("responsable/js/gauge/gauge_demo.js"), "html", null, true);
        echo "\"></script>
  <!-- chart js -->
  <script src=\"";
        // line 167
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("responsable/js/chartjs/chart.min.js"), "html", null, true);
        echo "\"></script>
  <!-- bootstrap progress js -->
  <script src=\"";
        // line 169
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("responsable/js/progressbar/bootstrap-progressbar.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 170
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("responsable/js/nicescroll/jquery.nicescroll.min.js"), "html", null, true);
        echo "\"></script>
  <!-- icheck -->
  <script src=\"";
        // line 172
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("responsable/js/icheck/icheck.min.js"), "html", null, true);
        echo "\"></script>
  <!-- daterangepicker -->
  <script type=\"text/javascript\" src=\"";
        // line 174
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("responsable/js/moment/moment.min.js"), "html", null, true);
        echo "\"></script>
  <script type=\"text/javascript\" src=\"";
        // line 175
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("responsable/js/datepicker/daterangepicker.js"), "html", null, true);
        echo "\"></script>

  <script src=\"";
        // line 177
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("responsable/js/custom.js"), "html", null, true);
        echo "\"></script>

  <!-- flot js -->
  <!--[if lte IE 8]><script type=\"text/javascript\" src=\"js/excanvas.min.js\"></script><![endif]-->
  <script type=\"text/javascript\" src=\"";
        // line 181
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("responsable/js/flot/jquery.flot.js"), "html", null, true);
        echo "\"></script>
  <script type=\"text/javascript\" src=\"";
        // line 182
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("responsable/js/flot/jquery.flot.pie.js"), "html", null, true);
        echo "\"></script>
  <script type=\"text/javascript\" src=\"";
        // line 183
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("responsable/js/flot/jquery.flot.orderBars.js"), "html", null, true);
        echo "\"></script>
  <script type=\"text/javascript\" src=\"";
        // line 184
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("responsable/js/flot/jquery.flot.time.min.js"), "html", null, true);
        echo "\"></script>
  <script type=\"text/javascript\" src=\"";
        // line 185
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("responsable/js/flot/date.js"), "html", null, true);
        echo "\"></script>
  <script type=\"text/javascript\" src=\"";
        // line 186
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("responsable/js/flot/jquery.flot.spline.js"), "html", null, true);
        echo "\"></script>
  <script type=\"text/javascript\" src=\"";
        // line 187
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("responsable/js/flot/jquery.flot.stack.js"), "html", null, true);
        echo "\"></script>
  <script type=\"text/javascript\" src=\"";
        // line 188
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("responsable/js/flot/curvedLines.js"), "html", null, true);
        echo "\"></script>
  <script type=\"text/javascript\" src=\"";
        // line 189
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("responsable/js/flot/jquery.flot.resize.js"), "html", null, true);
        echo "\"></script>
  <script>
    \$(document).ready(function() {
      // [17, 74, 6, 39, 20, 85, 7]
      //[82, 23, 66, 9, 99, 6, 2]
      var data1 = [
        [gd(2012, 1, 1), 17],
        [gd(2012, 1, 2), 74],
        [gd(2012, 1, 3), 6],
        [gd(2012, 1, 4), 39],
        [gd(2012, 1, 5), 20],
        [gd(2012, 1, 6), 85],
        [gd(2012, 1, 7), 7]
      ];

      var data2 = [
        [gd(2012, 1, 1), 82],
        [gd(2012, 1, 2), 23],
        [gd(2012, 1, 3), 66],
        [gd(2012, 1, 4), 9],
        [gd(2012, 1, 5), 119],
        [gd(2012, 1, 6), 6],
        [gd(2012, 1, 7), 9]
      ];
      \$(\"#canvas_dahs\").length && \$.plot(\$(\"#canvas_dahs\"), [
        data1, data2
      ], {
        series: {
          lines: {
            show: false,
            fill: true
          },
          splines: {
            show: true,
            tension: 0.4,
            lineWidth: 1,
            fill: 0.4
          },
          points: {
            radius: 0,
            show: true
          },
          shadowSize: 2
        },
        grid: {
          verticalLines: true,
          hoverable: true,
          clickable: true,
          tickColor: \"#d5d5d5\",
          borderWidth: 1,
          color: '#fff'
        },
        colors: [\"rgba(38, 185, 154, 0.38)\", \"rgba(3, 88, 106, 0.38)\"],
        xaxis: {
          tickColor: \"rgba(51, 51, 51, 0.06)\",
          mode: \"time\",
          tickSize: [1, \"day\"],
          //tickLength: 10,
          axisLabel: \"Date\",
          axisLabelUseCanvas: true,
          axisLabelFontSizePixels: 12,
          axisLabelFontFamily: 'Verdana, Arial',
          axisLabelPadding: 10
            //mode: \"time\", timeformat: \"%m/%d/%y\", minTickSize: [1, \"day\"]
        },
        yaxis: {
          ticks: 8,
          tickColor: \"rgba(51, 51, 51, 0.06)\",
        },
        tooltip: false
      });

      function gd(year, month, day) {
        return new Date(year, month - 1, day).getTime();
      }
    });
  </script>

  <!-- worldmap -->
  <script type=\"text/javascript\" src=\"";
        // line 268
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("responsable/js/maps/jquery-jvectormap-2.0.3.min.js"), "html", null, true);
        echo "\"></script>
  <script type=\"text/javascript\" src=\"";
        // line 269
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("responsable/js/maps/gdp-data.js"), "html", null, true);
        echo "\"></script>
  <script type=\"text/javascript\" src=\"";
        // line 270
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("responsable/js/maps/jquery-jvectormap-world-mill-en.js"), "html", null, true);
        echo "\"></script>
  <script type=\"text/javascript\" src=\"";
        // line 271
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("responsable/js/maps/jquery-jvectormap-us-aea-en.js"), "html", null, true);
        echo "\"></script>
  <!-- pace -->
  <script src=\"";
        // line 273
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("responsable/js/pace/pace.min.js"), "html", null, true);
        echo "\"></script>
  <script>
    \$(function() {
      \$('#world-map-gdp').vectorMap({
        map: 'world_mill_en',
        backgroundColor: 'transparent',
        zoomOnScroll: false,
        series: {
          regions: [{
            values: gdpData,
            scale: ['#E6F2F0', '#149B7E'],
            normalizeFunction: 'polynomial'
          }]
        },
        onRegionTipShow: function(e, el, code) {
          el.html(el.html() + ' (GDP - ' + gdpData[code] + ')');
        }
      });
    });
  </script>
  <!-- skycons -->
  <script src=\"";
        // line 294
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("responsable/js/skycons/skycons.min.js"), "html", null, true);
        echo "\"></script>
  <script>
    var icons = new Skycons({
        \"color\": \"#73879C\"
      }),
      list = [
        \"clear-day\", \"clear-night\", \"partly-cloudy-day\",
        \"partly-cloudy-night\", \"cloudy\", \"rain\", \"sleet\", \"snow\", \"wind\",
        \"fog\"
      ],
      i;

    for (i = list.length; i--;)
      icons.set(list[i], list[i]);

    icons.play();
  </script>

  <!-- dashbord linegraph -->
  <script>
    var doughnutData = [{
      value: 30,
      color: \"#455C73\"
    }, {
      value: 30,
      color: \"#9B59B6\"
    }, {
      value: 60,
      color: \"#BDC3C7\"
    }, {
      value: 100,
      color: \"#26B99A\"
    }, {
      value: 120,
      color: \"#3498DB\"
    }];
    var myDoughnut = new Chart(document.getElementById(\"canvas1\").getContext(\"2d\")).Doughnut(doughnutData);
  </script>
  <!-- /dashbord linegraph -->
  <!-- datepicker -->
  <script type=\"text/javascript\">
    \$(document).ready(function() {

      var cb = function(start, end, label) {
        console.log(start.toISOString(), end.toISOString(), label);
        \$('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        //alert(\"Callback has fired: [\" + start.format('MMMM D, YYYY') + \" to \" + end.format('MMMM D, YYYY') + \", label = \" + label + \"]\");
      }

      var optionSet1 = {
        startDate: moment().subtract(29, 'days'),
        endDate: moment(),
        minDate: '01/01/2012',
        maxDate: '12/31/2015',
        dateLimit: {
          days: 60
        },
        showDropdowns: true,
        showWeekNumbers: true,
        timePicker: false,
        timePickerIncrement: 1,
        timePicker12Hour: true,
        ranges: {
          'Today': [moment(), moment()],
          'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days': [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month': [moment().startOf('month'), moment().endOf('month')],
          'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        opens: 'left',
        buttonClasses: ['btn btn-default'],
        applyClass: 'btn-small btn-primary',
        cancelClass: 'btn-small',
        format: 'MM/DD/YYYY',
        separator: ' to ',
        locale: {
          applyLabel: 'Submit',
          cancelLabel: 'Clear',
          fromLabel: 'From',
          toLabel: 'To',
          customRangeLabel: 'Custom',
          daysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
          monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
          firstDay: 1
        }
      };
      \$('#reportrange span').html(moment().subtract(29, 'days').format('MMMM D, YYYY') + ' - ' + moment().format('MMMM D, YYYY'));
      \$('#reportrange').daterangepicker(optionSet1, cb);
      \$('#reportrange').on('show.daterangepicker', function() {
        console.log(\"show event fired\");
      });
      \$('#reportrange').on('hide.daterangepicker', function() {
        console.log(\"hide event fired\");
      });
      \$('#reportrange').on('apply.daterangepicker', function(ev, picker) {
        console.log(\"apply event fired, start/end dates are \" + picker.startDate.format('MMMM D, YYYY') + \" to \" + picker.endDate.format('MMMM D, YYYY'));
      });
      \$('#reportrange').on('cancel.daterangepicker', function(ev, picker) {
        console.log(\"cancel event fired\");
      });
      \$('#options1').click(function() {
        \$('#reportrange').data('daterangepicker').setOptions(optionSet1, cb);
      });
      \$('#options2').click(function() {
        \$('#reportrange').data('daterangepicker').setOptions(optionSet2, cb);
      });
      \$('#destroy').click(function() {
        \$('#reportrange').data('daterangepicker').remove();
      });
    });
  </script>
  <script>
    NProgress.done();
  </script>
  
  ";
        // line 410
        $this->displayBlock('otherScript', $context, $blocks);
        // line 412
        echo "  <!-- /datepicker -->
  <!-- /footer content -->
</body>

</html>
";
        
        $__internal_d78de006d9316ea09eaa680fc277d743df7c9074538735b15d7c2e26696259e2->leave($__internal_d78de006d9316ea09eaa680fc277d743df7c9074538735b15d7c2e26696259e2_prof);

    }

    // line 60
    public function block_quickProfile($context, array $blocks = array())
    {
        $__internal_848ec7eee7862c62880d48b68e996f8028d5297534266f8627dee78eabda091c = $this->env->getExtension("native_profiler");
        $__internal_848ec7eee7862c62880d48b68e996f8028d5297534266f8627dee78eabda091c->enter($__internal_848ec7eee7862c62880d48b68e996f8028d5297534266f8627dee78eabda091c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "quickProfile"));

        // line 61
        echo "          
          ";
        
        $__internal_848ec7eee7862c62880d48b68e996f8028d5297534266f8627dee78eabda091c->leave($__internal_848ec7eee7862c62880d48b68e996f8028d5297534266f8627dee78eabda091c_prof);

    }

    // line 115
    public function block_nav_menu($context, array $blocks = array())
    {
        $__internal_4581f4a070415e8425af0485328fa1481a32abea8246cee33a91ed99f6355190 = $this->env->getExtension("native_profiler");
        $__internal_4581f4a070415e8425af0485328fa1481a32abea8246cee33a91ed99f6355190->enter($__internal_4581f4a070415e8425af0485328fa1481a32abea8246cee33a91ed99f6355190_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav_menu"));

        // line 116
        echo "          
                ";
        
        $__internal_4581f4a070415e8425af0485328fa1481a32abea8246cee33a91ed99f6355190->leave($__internal_4581f4a070415e8425af0485328fa1481a32abea8246cee33a91ed99f6355190_prof);

    }

    // line 132
    public function block_Content($context, array $blocks = array())
    {
        $__internal_2d419e2ae2017414d417bd40a82f21ab06e06d595bbed6410a909344b5565ea7 = $this->env->getExtension("native_profiler");
        $__internal_2d419e2ae2017414d417bd40a82f21ab06e06d595bbed6410a909344b5565ea7->enter($__internal_2d419e2ae2017414d417bd40a82f21ab06e06d595bbed6410a909344b5565ea7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        // line 133
        echo "                  
              ";
        
        $__internal_2d419e2ae2017414d417bd40a82f21ab06e06d595bbed6410a909344b5565ea7->leave($__internal_2d419e2ae2017414d417bd40a82f21ab06e06d595bbed6410a909344b5565ea7_prof);

    }

    // line 143
    public function block_footer($context, array $blocks = array())
    {
        $__internal_00a5edf9e390d0f04de84f0dbd78325f863201c1b84b034ec9f9b713995686bb = $this->env->getExtension("native_profiler");
        $__internal_00a5edf9e390d0f04de84f0dbd78325f863201c1b84b034ec9f9b713995686bb->enter($__internal_00a5edf9e390d0f04de84f0dbd78325f863201c1b84b034ec9f9b713995686bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 144
        echo "            
         ";
        
        $__internal_00a5edf9e390d0f04de84f0dbd78325f863201c1b84b034ec9f9b713995686bb->leave($__internal_00a5edf9e390d0f04de84f0dbd78325f863201c1b84b034ec9f9b713995686bb_prof);

    }

    // line 410
    public function block_otherScript($context, array $blocks = array())
    {
        $__internal_6a1e6344105f3c3053d0742f9e1de513bbce91637ace4d9c4dea55dfeb0dd6b1 = $this->env->getExtension("native_profiler");
        $__internal_6a1e6344105f3c3053d0742f9e1de513bbce91637ace4d9c4dea55dfeb0dd6b1->enter($__internal_6a1e6344105f3c3053d0742f9e1de513bbce91637ace4d9c4dea55dfeb0dd6b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "otherScript"));

        // line 411
        echo "  ";
        
        $__internal_6a1e6344105f3c3053d0742f9e1de513bbce91637ace4d9c4dea55dfeb0dd6b1->leave($__internal_6a1e6344105f3c3053d0742f9e1de513bbce91637ace4d9c4dea55dfeb0dd6b1_prof);

    }

    public function getTemplateName()
    {
        return "@CondorsTnMall/ResponsableLayouts/Layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  634 => 411,  628 => 410,  620 => 144,  614 => 143,  606 => 133,  600 => 132,  592 => 116,  586 => 115,  578 => 61,  572 => 60,  560 => 412,  558 => 410,  439 => 294,  415 => 273,  410 => 271,  406 => 270,  402 => 269,  398 => 268,  316 => 189,  312 => 188,  308 => 187,  304 => 186,  300 => 185,  296 => 184,  292 => 183,  288 => 182,  284 => 181,  277 => 177,  272 => 175,  268 => 174,  263 => 172,  258 => 170,  254 => 169,  249 => 167,  244 => 165,  240 => 164,  234 => 161,  217 => 146,  215 => 143,  205 => 135,  203 => 132,  187 => 118,  185 => 115,  145 => 78,  137 => 73,  125 => 63,  123 => 60,  113 => 55,  84 => 29,  80 => 28,  75 => 26,  71 => 25,  67 => 24,  63 => 23,  57 => 20,  53 => 19,  49 => 18,  45 => 17,  27 => 1,);
    }
}
/* */
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* */
/* */
/* <head>*/
/*   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">*/
/*   <!-- Meta, title, CSS, favicons, etc. -->*/
/*   <meta charset="utf-8">*/
/*   <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*   <meta name="viewport" content="width=device-width, initial-scale=1">*/
/* */
/*   <title>Tunisia Mall  | Responsable </title>*/
/* */
/*   <!-- Bootstrap core CSS -->*/
/* */
/*   <link href="{{ asset('responsable/css/bootstrap.min.css')}}" rel="stylesheet">*/
/*  <link href="{{ asset('responsable/editor.css')}}" type="text/css" rel="stylesheet"/>*/
/*   <link href="{{ asset('responsable/fonts/css/font-awesome.min.css')}}" rel="stylesheet">*/
/*   <link href="{{ asset('responsable/css/animate.min.css')}}" rel="stylesheet">*/
/* */
/*   <!-- Custom styling plus plugins -->*/
/*   <link href="{{ asset('responsable/css/custom.css')}}" rel="stylesheet">*/
/*   <link rel="stylesheet" type="text/css" href="{{ asset('responsable/css/maps/jquery-jvectormap-2.0.3.css')}}" />*/
/*   <link href="{{ asset('responsable/css/icheck/flat/green.css')}}" rel="stylesheet" />*/
/*   <link href="{{ asset('responsable/css/floatexamples.css" rel="stylesheet" type="text/css')}}" />*/
/* */
/*   <script src="{{ asset('responsable/js/jquery.min.js')}}"></script>*/
/*   <script src="{{ asset('responsable/js/nprogress.js')}}"></script>*/
/* */
/*   <!--[if lt IE 9]>*/
/*   <script src="../assets/js/ie8-responsive-file-warning.js"></script>*/
/*   <![endif]-->*/
/* */
/*   <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->*/
/*   <!--[if lt IE 9]>*/
/*   <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>*/
/*   <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>*/
/*   <![endif]-->*/
/* */
/* </head>*/
/* */
/* */
/* <body class="nav-md">*/
/* */
/*   <div class="container body">*/
/* */
/* */
/*     <div class="main_container">*/
/* */
/*       <div class="col-md-3 left_col">*/
/*         <div class="left_col scroll-view">*/
/* */
/*           <div class="navbar nav_title" style="border: 0;">*/
/*               <a href="{{ path('condors_tn_mall_responsable_index') }}" class="site_title"> <img width="40"  height="40" src="{{ asset('images/logo.png')}}" /> <span>Tunisia Mall</span></a>*/
/*           </div>*/
/*           <div class="clearfix"></div>*/
/* */
/*           <!-- menu prile quick info -->*/
/*           {% block quickProfile %}*/
/*           */
/*           {%endblock quickProfile%}*/
/*           <!-- /menu prile quick info -->*/
/* */
/*           <br />*/
/* */
/*           <!-- sidebar menu -->*/
/*           <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">*/
/* */
/*             <div class="menu_section">*/
/*               <h3>&nbsp;</h3>*/
/*               <ul class="nav side-menu">*/
/*                 <li><a href="{{ path('condors_tn_mall_responsable_index') }}"><i class="fa fa-home"></i> Dashboard </a>*/
/*                   */
/*                 </li>*/
/*                 <li><a><i class="fa fa-book"></i> Catalog <span class="fa fa-chevron-down"></span></a>*/
/*                   <ul class="nav child_menu" style="display: none">*/
/*                     <li></i><a href="{{ path('condors_tn_mall_responsable_produit') }}">Products</a>*/
/*                     </li>*/
/*                     */
/*                     */
/*                    */
/*                   </ul>*/
/*                 </li>*/
/*                 */
/*               </ul>*/
/*             </div>*/
/* */
/*           </div>*/
/*           <!-- /sidebar menu -->*/
/* */
/*           <!-- /menu footer buttons -->*/
/*           <div class="sidebar-footer hidden-small">*/
/*             <a data-toggle="tooltip" data-placement="top" title="Settings">*/
/*               <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>*/
/*             </a>*/
/*             <a data-toggle="tooltip" data-placement="top" title="FullScreen">*/
/*               <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>*/
/*             </a>*/
/*             <a data-toggle="tooltip" data-placement="top" title="Lock">*/
/*               <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>*/
/*             </a>*/
/*             <a data-toggle="tooltip" data-placement="top" title="Logout">*/
/*               <span class="glyphicon glyphicon-off" aria-hidden="true"></span>*/
/*             </a>*/
/*           </div>*/
/*           <!-- /menu footer buttons -->*/
/*         </div>*/
/*       </div>*/
/* */
/*       <!-- top navigation -->*/
/*       <div class="top_nav">*/
/* */
/*         <div class="nav_menu">*/
/*               {% block nav_menu %}*/
/*           */
/*                 {%endblock nav_menu%}*/
/*          */
/*         </div>*/
/* */
/*       </div>*/
/*       <!-- /top navigation -->*/
/* */
/* */
/*       <!-- page content -->*/
/* */
/*      <div class="right_col" role="main">*/
/* */
/*         <div class="row">*/
/*           <div class="col-md-12 col-sm-12 col-xs-12">*/
/*               */
/*               {% block Content %}*/
/*                   */
/*               {%endblock Content%}*/
/*             */
/*           </div>*/
/* */
/*         </div>*/
/*         <br />*/
/* */
/*         <!-- footer content -->*/
/* */
/*         {% block footer %}*/
/*             */
/*          {% endblock footer %}*/
/*         <!-- /footer content -->*/
/*       </div>*/
/*       <!-- /page content -->*/
/* */
/*     </div>*/
/* */
/*   </div>*/
/* */
/*   <div id="custom_notifications" class="custom-notifications dsp_none">*/
/*     <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">*/
/*     </ul>*/
/*     <div class="clearfix"></div>*/
/*     <div id="notif-group" class="tabbed_notifications"></div>*/
/*   </div>*/
/* */
/*   <script src="{{ asset('responsable/js/bootstrap.min.js')}}"></script>*/
/* */
/*   <!-- gauge js -->*/
/*   <script type="text/javascript" src="{{ asset('responsable/js/gauge/gauge.min.js')}}"></script>*/
/*   <script type="text/javascript" src="{{ asset('responsable/js/gauge/gauge_demo.js')}}"></script>*/
/*   <!-- chart js -->*/
/*   <script src="{{ asset('responsable/js/chartjs/chart.min.js')}}"></script>*/
/*   <!-- bootstrap progress js -->*/
/*   <script src="{{ asset('responsable/js/progressbar/bootstrap-progressbar.min.js')}}"></script>*/
/*   <script src="{{ asset('responsable/js/nicescroll/jquery.nicescroll.min.js')}}"></script>*/
/*   <!-- icheck -->*/
/*   <script src="{{ asset('responsable/js/icheck/icheck.min.js')}}"></script>*/
/*   <!-- daterangepicker -->*/
/*   <script type="text/javascript" src="{{ asset('responsable/js/moment/moment.min.js')}}"></script>*/
/*   <script type="text/javascript" src="{{ asset('responsable/js/datepicker/daterangepicker.js')}}"></script>*/
/* */
/*   <script src="{{ asset('responsable/js/custom.js')}}"></script>*/
/* */
/*   <!-- flot js -->*/
/*   <!--[if lte IE 8]><script type="text/javascript" src="js/excanvas.min.js"></script><![endif]-->*/
/*   <script type="text/javascript" src="{{ asset('responsable/js/flot/jquery.flot.js')}}"></script>*/
/*   <script type="text/javascript" src="{{ asset('responsable/js/flot/jquery.flot.pie.js')}}"></script>*/
/*   <script type="text/javascript" src="{{ asset('responsable/js/flot/jquery.flot.orderBars.js')}}"></script>*/
/*   <script type="text/javascript" src="{{ asset('responsable/js/flot/jquery.flot.time.min.js')}}"></script>*/
/*   <script type="text/javascript" src="{{ asset('responsable/js/flot/date.js')}}"></script>*/
/*   <script type="text/javascript" src="{{ asset('responsable/js/flot/jquery.flot.spline.js')}}"></script>*/
/*   <script type="text/javascript" src="{{ asset('responsable/js/flot/jquery.flot.stack.js')}}"></script>*/
/*   <script type="text/javascript" src="{{ asset('responsable/js/flot/curvedLines.js')}}"></script>*/
/*   <script type="text/javascript" src="{{ asset('responsable/js/flot/jquery.flot.resize.js')}}"></script>*/
/*   <script>*/
/*     $(document).ready(function() {*/
/*       // [17, 74, 6, 39, 20, 85, 7]*/
/*       //[82, 23, 66, 9, 99, 6, 2]*/
/*       var data1 = [*/
/*         [gd(2012, 1, 1), 17],*/
/*         [gd(2012, 1, 2), 74],*/
/*         [gd(2012, 1, 3), 6],*/
/*         [gd(2012, 1, 4), 39],*/
/*         [gd(2012, 1, 5), 20],*/
/*         [gd(2012, 1, 6), 85],*/
/*         [gd(2012, 1, 7), 7]*/
/*       ];*/
/* */
/*       var data2 = [*/
/*         [gd(2012, 1, 1), 82],*/
/*         [gd(2012, 1, 2), 23],*/
/*         [gd(2012, 1, 3), 66],*/
/*         [gd(2012, 1, 4), 9],*/
/*         [gd(2012, 1, 5), 119],*/
/*         [gd(2012, 1, 6), 6],*/
/*         [gd(2012, 1, 7), 9]*/
/*       ];*/
/*       $("#canvas_dahs").length && $.plot($("#canvas_dahs"), [*/
/*         data1, data2*/
/*       ], {*/
/*         series: {*/
/*           lines: {*/
/*             show: false,*/
/*             fill: true*/
/*           },*/
/*           splines: {*/
/*             show: true,*/
/*             tension: 0.4,*/
/*             lineWidth: 1,*/
/*             fill: 0.4*/
/*           },*/
/*           points: {*/
/*             radius: 0,*/
/*             show: true*/
/*           },*/
/*           shadowSize: 2*/
/*         },*/
/*         grid: {*/
/*           verticalLines: true,*/
/*           hoverable: true,*/
/*           clickable: true,*/
/*           tickColor: "#d5d5d5",*/
/*           borderWidth: 1,*/
/*           color: '#fff'*/
/*         },*/
/*         colors: ["rgba(38, 185, 154, 0.38)", "rgba(3, 88, 106, 0.38)"],*/
/*         xaxis: {*/
/*           tickColor: "rgba(51, 51, 51, 0.06)",*/
/*           mode: "time",*/
/*           tickSize: [1, "day"],*/
/*           //tickLength: 10,*/
/*           axisLabel: "Date",*/
/*           axisLabelUseCanvas: true,*/
/*           axisLabelFontSizePixels: 12,*/
/*           axisLabelFontFamily: 'Verdana, Arial',*/
/*           axisLabelPadding: 10*/
/*             //mode: "time", timeformat: "%m/%d/%y", minTickSize: [1, "day"]*/
/*         },*/
/*         yaxis: {*/
/*           ticks: 8,*/
/*           tickColor: "rgba(51, 51, 51, 0.06)",*/
/*         },*/
/*         tooltip: false*/
/*       });*/
/* */
/*       function gd(year, month, day) {*/
/*         return new Date(year, month - 1, day).getTime();*/
/*       }*/
/*     });*/
/*   </script>*/
/* */
/*   <!-- worldmap -->*/
/*   <script type="text/javascript" src="{{ asset('responsable/js/maps/jquery-jvectormap-2.0.3.min.js')}}"></script>*/
/*   <script type="text/javascript" src="{{ asset('responsable/js/maps/gdp-data.js')}}"></script>*/
/*   <script type="text/javascript" src="{{ asset('responsable/js/maps/jquery-jvectormap-world-mill-en.js')}}"></script>*/
/*   <script type="text/javascript" src="{{ asset('responsable/js/maps/jquery-jvectormap-us-aea-en.js')}}"></script>*/
/*   <!-- pace -->*/
/*   <script src="{{ asset('responsable/js/pace/pace.min.js')}}"></script>*/
/*   <script>*/
/*     $(function() {*/
/*       $('#world-map-gdp').vectorMap({*/
/*         map: 'world_mill_en',*/
/*         backgroundColor: 'transparent',*/
/*         zoomOnScroll: false,*/
/*         series: {*/
/*           regions: [{*/
/*             values: gdpData,*/
/*             scale: ['#E6F2F0', '#149B7E'],*/
/*             normalizeFunction: 'polynomial'*/
/*           }]*/
/*         },*/
/*         onRegionTipShow: function(e, el, code) {*/
/*           el.html(el.html() + ' (GDP - ' + gdpData[code] + ')');*/
/*         }*/
/*       });*/
/*     });*/
/*   </script>*/
/*   <!-- skycons -->*/
/*   <script src="{{ asset('responsable/js/skycons/skycons.min.js')}}"></script>*/
/*   <script>*/
/*     var icons = new Skycons({*/
/*         "color": "#73879C"*/
/*       }),*/
/*       list = [*/
/*         "clear-day", "clear-night", "partly-cloudy-day",*/
/*         "partly-cloudy-night", "cloudy", "rain", "sleet", "snow", "wind",*/
/*         "fog"*/
/*       ],*/
/*       i;*/
/* */
/*     for (i = list.length; i--;)*/
/*       icons.set(list[i], list[i]);*/
/* */
/*     icons.play();*/
/*   </script>*/
/* */
/*   <!-- dashbord linegraph -->*/
/*   <script>*/
/*     var doughnutData = [{*/
/*       value: 30,*/
/*       color: "#455C73"*/
/*     }, {*/
/*       value: 30,*/
/*       color: "#9B59B6"*/
/*     }, {*/
/*       value: 60,*/
/*       color: "#BDC3C7"*/
/*     }, {*/
/*       value: 100,*/
/*       color: "#26B99A"*/
/*     }, {*/
/*       value: 120,*/
/*       color: "#3498DB"*/
/*     }];*/
/*     var myDoughnut = new Chart(document.getElementById("canvas1").getContext("2d")).Doughnut(doughnutData);*/
/*   </script>*/
/*   <!-- /dashbord linegraph -->*/
/*   <!-- datepicker -->*/
/*   <script type="text/javascript">*/
/*     $(document).ready(function() {*/
/* */
/*       var cb = function(start, end, label) {*/
/*         console.log(start.toISOString(), end.toISOString(), label);*/
/*         $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));*/
/*         //alert("Callback has fired: [" + start.format('MMMM D, YYYY') + " to " + end.format('MMMM D, YYYY') + ", label = " + label + "]");*/
/*       }*/
/* */
/*       var optionSet1 = {*/
/*         startDate: moment().subtract(29, 'days'),*/
/*         endDate: moment(),*/
/*         minDate: '01/01/2012',*/
/*         maxDate: '12/31/2015',*/
/*         dateLimit: {*/
/*           days: 60*/
/*         },*/
/*         showDropdowns: true,*/
/*         showWeekNumbers: true,*/
/*         timePicker: false,*/
/*         timePickerIncrement: 1,*/
/*         timePicker12Hour: true,*/
/*         ranges: {*/
/*           'Today': [moment(), moment()],*/
/*           'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],*/
/*           'Last 7 Days': [moment().subtract(6, 'days'), moment()],*/
/*           'Last 30 Days': [moment().subtract(29, 'days'), moment()],*/
/*           'This Month': [moment().startOf('month'), moment().endOf('month')],*/
/*           'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]*/
/*         },*/
/*         opens: 'left',*/
/*         buttonClasses: ['btn btn-default'],*/
/*         applyClass: 'btn-small btn-primary',*/
/*         cancelClass: 'btn-small',*/
/*         format: 'MM/DD/YYYY',*/
/*         separator: ' to ',*/
/*         locale: {*/
/*           applyLabel: 'Submit',*/
/*           cancelLabel: 'Clear',*/
/*           fromLabel: 'From',*/
/*           toLabel: 'To',*/
/*           customRangeLabel: 'Custom',*/
/*           daysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],*/
/*           monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],*/
/*           firstDay: 1*/
/*         }*/
/*       };*/
/*       $('#reportrange span').html(moment().subtract(29, 'days').format('MMMM D, YYYY') + ' - ' + moment().format('MMMM D, YYYY'));*/
/*       $('#reportrange').daterangepicker(optionSet1, cb);*/
/*       $('#reportrange').on('show.daterangepicker', function() {*/
/*         console.log("show event fired");*/
/*       });*/
/*       $('#reportrange').on('hide.daterangepicker', function() {*/
/*         console.log("hide event fired");*/
/*       });*/
/*       $('#reportrange').on('apply.daterangepicker', function(ev, picker) {*/
/*         console.log("apply event fired, start/end dates are " + picker.startDate.format('MMMM D, YYYY') + " to " + picker.endDate.format('MMMM D, YYYY'));*/
/*       });*/
/*       $('#reportrange').on('cancel.daterangepicker', function(ev, picker) {*/
/*         console.log("cancel event fired");*/
/*       });*/
/*       $('#options1').click(function() {*/
/*         $('#reportrange').data('daterangepicker').setOptions(optionSet1, cb);*/
/*       });*/
/*       $('#options2').click(function() {*/
/*         $('#reportrange').data('daterangepicker').setOptions(optionSet2, cb);*/
/*       });*/
/*       $('#destroy').click(function() {*/
/*         $('#reportrange').data('daterangepicker').remove();*/
/*       });*/
/*     });*/
/*   </script>*/
/*   <script>*/
/*     NProgress.done();*/
/*   </script>*/
/*   */
/*   {% block otherScript  %}*/
/*   {% endblock otherScript%}*/
/*   <!-- /datepicker -->*/
/*   <!-- /footer content -->*/
/* </body>*/
/* */
/* </html>*/
/* */
