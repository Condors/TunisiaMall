<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_7c9bba2c7b5dd2c108c534ace230a104cccda35757aa16db7720dd7d99ecb581 extends Twig_Template
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
        $__internal_d84a161f7a754411392e396090ac994668e770d08704f03d98d2d721ce4c4630 = $this->env->getExtension("native_profiler");
        $__internal_d84a161f7a754411392e396090ac994668e770d08704f03d98d2d721ce4c4630->enter($__internal_d84a161f7a754411392e396090ac994668e770d08704f03d98d2d721ce4c4630_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_d84a161f7a754411392e396090ac994668e770d08704f03d98d2d721ce4c4630->leave($__internal_d84a161f7a754411392e396090ac994668e770d08704f03d98d2d721ce4c4630_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
