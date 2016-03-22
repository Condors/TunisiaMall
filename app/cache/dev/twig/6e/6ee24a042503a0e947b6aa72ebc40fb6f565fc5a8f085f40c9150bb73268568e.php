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
        $__internal_a9c0afd10f8b71ee18d99d295d0e20bb39bcd1101dfd60f15438322dc92eeb0d = $this->env->getExtension("native_profiler");
        $__internal_a9c0afd10f8b71ee18d99d295d0e20bb39bcd1101dfd60f15438322dc92eeb0d->enter($__internal_a9c0afd10f8b71ee18d99d295d0e20bb39bcd1101dfd60f15438322dc92eeb0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_a9c0afd10f8b71ee18d99d295d0e20bb39bcd1101dfd60f15438322dc92eeb0d->leave($__internal_a9c0afd10f8b71ee18d99d295d0e20bb39bcd1101dfd60f15438322dc92eeb0d_prof);

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
