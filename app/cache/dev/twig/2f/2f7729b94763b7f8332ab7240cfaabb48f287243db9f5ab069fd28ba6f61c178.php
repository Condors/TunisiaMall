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
        $__internal_aa1aff7577d00f98b891b78e66996e294d649e95babd09a7026b2e7703d8dd3b = $this->env->getExtension("native_profiler");
        $__internal_aa1aff7577d00f98b891b78e66996e294d649e95babd09a7026b2e7703d8dd3b->enter($__internal_aa1aff7577d00f98b891b78e66996e294d649e95babd09a7026b2e7703d8dd3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_aa1aff7577d00f98b891b78e66996e294d649e95babd09a7026b2e7703d8dd3b->leave($__internal_aa1aff7577d00f98b891b78e66996e294d649e95babd09a7026b2e7703d8dd3b_prof);

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
