<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_303385ee83bc7aa590f10d58469de806b7df547debcf8137d2f689b82799ef70 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4ff7cf3951925cfeae646f70f3e8d81e3239f5e360bdd3fad2ab87be3d24a450 = $this->env->getExtension("native_profiler");
        $__internal_4ff7cf3951925cfeae646f70f3e8d81e3239f5e360bdd3fad2ab87be3d24a450->enter($__internal_4ff7cf3951925cfeae646f70f3e8d81e3239f5e360bdd3fad2ab87be3d24a450_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_4ff7cf3951925cfeae646f70f3e8d81e3239f5e360bdd3fad2ab87be3d24a450->leave($__internal_4ff7cf3951925cfeae646f70f3e8d81e3239f5e360bdd3fad2ab87be3d24a450_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
