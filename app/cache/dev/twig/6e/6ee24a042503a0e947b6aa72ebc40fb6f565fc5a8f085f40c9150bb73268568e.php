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
        $__internal_1d4853a5831145377f06876428839064e2f48327b9e19d699ec8c0e5ae1d3b39 = $this->env->getExtension("native_profiler");
        $__internal_1d4853a5831145377f06876428839064e2f48327b9e19d699ec8c0e5ae1d3b39->enter($__internal_1d4853a5831145377f06876428839064e2f48327b9e19d699ec8c0e5ae1d3b39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_1d4853a5831145377f06876428839064e2f48327b9e19d699ec8c0e5ae1d3b39->leave($__internal_1d4853a5831145377f06876428839064e2f48327b9e19d699ec8c0e5ae1d3b39_prof);

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
