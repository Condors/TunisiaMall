<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_f1809768244d81dc796d0973e112240ef23092867625bdbb736ea7bee034d0d7 extends Twig_Template
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
        $__internal_07d20b69b475680cc36e265d622c4e38b303fcdd3f5bda66e1bb5ad0ec5833dc = $this->env->getExtension("native_profiler");
        $__internal_07d20b69b475680cc36e265d622c4e38b303fcdd3f5bda66e1bb5ad0ec5833dc->enter($__internal_07d20b69b475680cc36e265d622c4e38b303fcdd3f5bda66e1bb5ad0ec5833dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_07d20b69b475680cc36e265d622c4e38b303fcdd3f5bda66e1bb5ad0ec5833dc->leave($__internal_07d20b69b475680cc36e265d622c4e38b303fcdd3f5bda66e1bb5ad0ec5833dc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
