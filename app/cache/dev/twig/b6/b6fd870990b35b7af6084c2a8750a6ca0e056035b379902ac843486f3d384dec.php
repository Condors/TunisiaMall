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
        $__internal_04fb9d79c47731425d0dfb33d4ecde5e743834a9faad70dbca1463d823e88a31 = $this->env->getExtension("native_profiler");
        $__internal_04fb9d79c47731425d0dfb33d4ecde5e743834a9faad70dbca1463d823e88a31->enter($__internal_04fb9d79c47731425d0dfb33d4ecde5e743834a9faad70dbca1463d823e88a31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_04fb9d79c47731425d0dfb33d4ecde5e743834a9faad70dbca1463d823e88a31->leave($__internal_04fb9d79c47731425d0dfb33d4ecde5e743834a9faad70dbca1463d823e88a31_prof);

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
