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
        $__internal_1bc035b8bda3b1922ce67ac08d4c772508b0c1dba47805eaf48f4d6d6f029d40 = $this->env->getExtension("native_profiler");
        $__internal_1bc035b8bda3b1922ce67ac08d4c772508b0c1dba47805eaf48f4d6d6f029d40->enter($__internal_1bc035b8bda3b1922ce67ac08d4c772508b0c1dba47805eaf48f4d6d6f029d40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_1bc035b8bda3b1922ce67ac08d4c772508b0c1dba47805eaf48f4d6d6f029d40->leave($__internal_1bc035b8bda3b1922ce67ac08d4c772508b0c1dba47805eaf48f4d6d6f029d40_prof);

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
