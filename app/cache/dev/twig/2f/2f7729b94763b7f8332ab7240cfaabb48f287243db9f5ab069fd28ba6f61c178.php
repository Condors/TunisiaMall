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
        $__internal_7c22f02d67dbfbcb879e4c04312148ca2f00aa1f1bca272abea9675f48a44298 = $this->env->getExtension("native_profiler");
        $__internal_7c22f02d67dbfbcb879e4c04312148ca2f00aa1f1bca272abea9675f48a44298->enter($__internal_7c22f02d67dbfbcb879e4c04312148ca2f00aa1f1bca272abea9675f48a44298_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_7c22f02d67dbfbcb879e4c04312148ca2f00aa1f1bca272abea9675f48a44298->leave($__internal_7c22f02d67dbfbcb879e4c04312148ca2f00aa1f1bca272abea9675f48a44298_prof);

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
