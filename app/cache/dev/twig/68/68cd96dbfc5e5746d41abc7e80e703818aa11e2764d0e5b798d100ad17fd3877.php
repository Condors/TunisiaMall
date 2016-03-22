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
            'otherScript' => array($this, 'block_otherScript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1a3674d707cfd2d6a2188c98de255eed589de1e2b5224f12992987809027a746 = $this->env->getExtension("native_profiler");
        $__internal_1a3674d707cfd2d6a2188c98de255eed589de1e2b5224f12992987809027a746->enter($__internal_1a3674d707cfd2d6a2188c98de255eed589de1e2b5224f12992987809027a746_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CondorsTnMall/ResponsableLayouts/Layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
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
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("responsable/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
 <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("responsable/editor.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\"/>
  <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("responsable/fonts/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("responsable/css/animate.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

  <!-- Custom styling plus plugins -->
  <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("responsable/css/custom.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("responsable/css/maps/jquery-jvectormap-2.0.3.css"), "html", null, true);
        echo "\" />
  <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("responsable/css/icheck/flat/green.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
  <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("responsable/css/floatexamples.css\" rel=\"stylesheet\" type=\"text/css"), "html", null, true);
        echo "\" />

  <script src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("responsable/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 27
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
            <a href=\"index.html\" class=\"site_title\"><i class=\"fa fa-paw\"></i> <span>Tunisia Mall</span></a>
          </div>
          <div class=\"clearfix\"></div>

          <!-- menu prile quick info -->
          ";
        // line 58
        $this->displayBlock('quickProfile', $context, $blocks);
        // line 61
        echo "          <!-- /menu prile quick info -->

          <br />

          <!-- sidebar menu -->
          <div id=\"sidebar-menu\" class=\"main_menu_side hidden-print main_menu\">

            <div class=\"menu_section\">
              <h3>&nbsp;</h3>
              <ul class=\"nav side-menu\">
                <li><a><i class=\"fa fa-home\"></i> Dashboard </a>
                  
                </li>
                <li><a><i class=\"fa fa-book\"></i> Catalog <span class=\"fa fa-chevron-down\"></span></a>
                  <ul class=\"nav child_menu\" style=\"display: none\">
                    <li></i><a href=\"";
        // line 76
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
        // line 113
        $this->displayBlock('nav_menu', $context, $blocks);
        // line 116
        echo "         
        </div>

      </div>
      <!-- /top navigation -->


      <!-- page content -->

     <div class=\"right_col\" role=\"main\">

        <div class=\"row\">
          <div class=\"col-md-12 col-sm-12 col-xs-12\">
              
              ";
        // line 130
        $this->displayBlock('Content', $context, $blocks);
        // line 133
        echo "            
          </div>

        </div>
        <br />

        <!-- footer content -->

        <footer>
          <div class=\"copyright-info\">
            <p class=\"pull-right\">Tunisia Mall - <a href=\"#\">Condors | Esprit</a>    
            </p>
          </div>
          <div class=\"clearfix\"></div>
        </footer>
        <!-- /footer content -->
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
        // line 163
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("responsable/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

  <!-- gauge js -->
  <script type=\"text/javascript\" src=\"";
        // line 166
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("responsable/js/gauge/gauge.min.js"), "html", null, true);
        echo "\"></script>
  <script type=\"text/javascript\" src=\"";
        // line 167
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("responsable/js/gauge/gauge_demo.js"), "html", null, true);
        echo "\"></script>
  <!-- chart js -->
  <script src=\"";
        // line 169
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("responsable/js/chartjs/chart.min.js"), "html", null, true);
        echo "\"></script>
  <!-- bootstrap progress js -->
  <script src=\"";
        // line 171
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("responsable/js/progressbar/bootstrap-progressbar.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 172
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("responsable/js/nicescroll/jquery.nicescroll.min.js"), "html", null, true);
        echo "\"></script>
  <!-- icheck -->
  <script src=\"";
        // line 174
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("responsable/js/icheck/icheck.min.js"), "html", null, true);
        echo "\"></script>
  <!-- daterangepicker -->
  <script type=\"text/javascript\" src=\"";
        // line 176
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("responsable/js/moment/moment.min.js"), "html", null, true);
        echo "\"></script>
  <script type=\"text/javascript\" src=\"";
        // line 177
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("responsable/js/datepicker/daterangepicker.js"), "html", null, true);
        echo "\"></script>

  <script src=\"";
        // line 179
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("responsable/js/custom.js"), "html", null, true);
        echo "\"></script>

  <!-- flot js -->
  <!--[if lte IE 8]><script type=\"text/javascript\" src=\"js/excanvas.min.js\"></script><![endif]-->
  <script type=\"text/javascript\" src=\"";
        // line 183
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("responsable/js/flot/jquery.flot.js"), "html", null, true);
        echo "\"></script>
  <script type=\"text/javascript\" src=\"";
        // line 184
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("responsable/js/flot/jquery.flot.pie.js"), "html", null, true);
        echo "\"></script>
  <script type=\"text/javascript\" src=\"";
        // line 185
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("responsable/js/flot/jquery.flot.orderBars.js"), "html", null, true);
        echo "\"></script>
  <script type=\"text/javascript\" src=\"";
        // line 186
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("responsable/js/flot/jquery.flot.time.min.js"), "html", null, true);
        echo "\"></script>
  <script type=\"text/javascript\" src=\"";
        // line 187
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("responsable/js/flot/date.js"), "html", null, true);
        echo "\"></script>
  <script type=\"text/javascript\" src=\"";
        // line 188
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("responsable/js/flot/jquery.flot.spline.js"), "html", null, true);
        echo "\"></script>
  <script type=\"text/javascript\" src=\"";
        // line 189
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("responsable/js/flot/jquery.flot.stack.js"), "html", null, true);
        echo "\"></script>
  <script type=\"text/javascript\" src=\"";
        // line 190
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("responsable/js/flot/curvedLines.js"), "html", null, true);
        echo "\"></script>
  <script type=\"text/javascript\" src=\"";
        // line 191
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
        // line 270
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("responsable/js/maps/jquery-jvectormap-2.0.3.min.js"), "html", null, true);
        echo "\"></script>
  <script type=\"text/javascript\" src=\"";
        // line 271
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("responsable/js/maps/gdp-data.js"), "html", null, true);
        echo "\"></script>
  <script type=\"text/javascript\" src=\"";
        // line 272
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("responsable/js/maps/jquery-jvectormap-world-mill-en.js"), "html", null, true);
        echo "\"></script>
  <script type=\"text/javascript\" src=\"";
        // line 273
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("responsable/js/maps/jquery-jvectormap-us-aea-en.js"), "html", null, true);
        echo "\"></script>
  <!-- pace -->
  <script src=\"";
        // line 275
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
        // line 296
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
        // line 412
        $this->displayBlock('otherScript', $context, $blocks);
        // line 414
        echo "  <!-- /datepicker -->
  <!-- /footer content -->
</body>

</html>
";
        
        $__internal_1a3674d707cfd2d6a2188c98de255eed589de1e2b5224f12992987809027a746->leave($__internal_1a3674d707cfd2d6a2188c98de255eed589de1e2b5224f12992987809027a746_prof);

    }

    // line 58
    public function block_quickProfile($context, array $blocks = array())
    {
        $__internal_30a49b904782255b048286bb935f043338b1e7050b86e5d4f544d1164f9d9235 = $this->env->getExtension("native_profiler");
        $__internal_30a49b904782255b048286bb935f043338b1e7050b86e5d4f544d1164f9d9235->enter($__internal_30a49b904782255b048286bb935f043338b1e7050b86e5d4f544d1164f9d9235_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "quickProfile"));

        // line 59
        echo "          
          ";
        
        $__internal_30a49b904782255b048286bb935f043338b1e7050b86e5d4f544d1164f9d9235->leave($__internal_30a49b904782255b048286bb935f043338b1e7050b86e5d4f544d1164f9d9235_prof);

    }

    // line 113
    public function block_nav_menu($context, array $blocks = array())
    {
        $__internal_0386aa9d0670fbcec23acfb67dc032c0c5d1cbee81c665440008b3999a5a9f88 = $this->env->getExtension("native_profiler");
        $__internal_0386aa9d0670fbcec23acfb67dc032c0c5d1cbee81c665440008b3999a5a9f88->enter($__internal_0386aa9d0670fbcec23acfb67dc032c0c5d1cbee81c665440008b3999a5a9f88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav_menu"));

        // line 114
        echo "          
                ";
        
        $__internal_0386aa9d0670fbcec23acfb67dc032c0c5d1cbee81c665440008b3999a5a9f88->leave($__internal_0386aa9d0670fbcec23acfb67dc032c0c5d1cbee81c665440008b3999a5a9f88_prof);

    }

    // line 130
    public function block_Content($context, array $blocks = array())
    {
        $__internal_6c69aa61e79fcfc67875e93eab0f45ea0c6906b5ddff628d0f476cfd5c16bf00 = $this->env->getExtension("native_profiler");
        $__internal_6c69aa61e79fcfc67875e93eab0f45ea0c6906b5ddff628d0f476cfd5c16bf00->enter($__internal_6c69aa61e79fcfc67875e93eab0f45ea0c6906b5ddff628d0f476cfd5c16bf00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        // line 131
        echo "                  
              ";
        
        $__internal_6c69aa61e79fcfc67875e93eab0f45ea0c6906b5ddff628d0f476cfd5c16bf00->leave($__internal_6c69aa61e79fcfc67875e93eab0f45ea0c6906b5ddff628d0f476cfd5c16bf00_prof);

    }

    // line 412
    public function block_otherScript($context, array $blocks = array())
    {
        $__internal_fa043599c580bd18d1beea7a77935943ba7365a634fb4d52f969ab11c84c81c4 = $this->env->getExtension("native_profiler");
        $__internal_fa043599c580bd18d1beea7a77935943ba7365a634fb4d52f969ab11c84c81c4->enter($__internal_fa043599c580bd18d1beea7a77935943ba7365a634fb4d52f969ab11c84c81c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "otherScript"));

        // line 413
        echo "  ";
        
        $__internal_fa043599c580bd18d1beea7a77935943ba7365a634fb4d52f969ab11c84c81c4->leave($__internal_fa043599c580bd18d1beea7a77935943ba7365a634fb4d52f969ab11c84c81c4_prof);

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
        return array (  612 => 413,  606 => 412,  598 => 131,  592 => 130,  584 => 114,  578 => 113,  570 => 59,  564 => 58,  552 => 414,  550 => 412,  431 => 296,  407 => 275,  402 => 273,  398 => 272,  394 => 271,  390 => 270,  308 => 191,  304 => 190,  300 => 189,  296 => 188,  292 => 187,  288 => 186,  284 => 185,  280 => 184,  276 => 183,  269 => 179,  264 => 177,  260 => 176,  255 => 174,  250 => 172,  246 => 171,  241 => 169,  236 => 167,  232 => 166,  226 => 163,  194 => 133,  192 => 130,  176 => 116,  174 => 113,  134 => 76,  117 => 61,  115 => 58,  81 => 27,  77 => 26,  72 => 24,  68 => 23,  64 => 22,  60 => 21,  54 => 18,  50 => 17,  46 => 16,  42 => 15,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
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
/*             <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Tunisia Mall</span></a>*/
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
/*                 <li><a><i class="fa fa-home"></i> Dashboard </a>*/
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
/*         <footer>*/
/*           <div class="copyright-info">*/
/*             <p class="pull-right">Tunisia Mall - <a href="#">Condors | Esprit</a>    */
/*             </p>*/
/*           </div>*/
/*           <div class="clearfix"></div>*/
/*         </footer>*/
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
