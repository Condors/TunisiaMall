<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_5fe77133f4e733a10617a0bb0bf1ccf38ba4e6ce81f07f8ee598c63befd01423 extends Twig_Template
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
        $__internal_b376363a725e839bb99b89b791cad90cce2447bd860c74851e69f884b9753987 = $this->env->getExtension("native_profiler");
        $__internal_b376363a725e839bb99b89b791cad90cce2447bd860c74851e69f884b9753987->enter($__internal_b376363a725e839bb99b89b791cad90cce2447bd860c74851e69f884b9753987_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_b376363a725e839bb99b89b791cad90cce2447bd860c74851e69f884b9753987->leave($__internal_b376363a725e839bb99b89b791cad90cce2447bd860c74851e69f884b9753987_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
