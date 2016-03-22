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
        $__internal_1c97fe6a4c3296ad7732a19ad544f3487d7d8b6fc0c089ae49fea3c25d473707 = $this->env->getExtension("native_profiler");
        $__internal_1c97fe6a4c3296ad7732a19ad544f3487d7d8b6fc0c089ae49fea3c25d473707->enter($__internal_1c97fe6a4c3296ad7732a19ad544f3487d7d8b6fc0c089ae49fea3c25d473707_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_1c97fe6a4c3296ad7732a19ad544f3487d7d8b6fc0c089ae49fea3c25d473707->leave($__internal_1c97fe6a4c3296ad7732a19ad544f3487d7d8b6fc0c089ae49fea3c25d473707_prof);

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
