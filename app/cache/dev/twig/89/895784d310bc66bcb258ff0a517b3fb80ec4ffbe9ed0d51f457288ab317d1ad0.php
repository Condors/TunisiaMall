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
        $__internal_91517c34daff76ee47a5770a5e0ab4410e09091529f535ed1a27c095974b1017 = $this->env->getExtension("native_profiler");
        $__internal_91517c34daff76ee47a5770a5e0ab4410e09091529f535ed1a27c095974b1017->enter($__internal_91517c34daff76ee47a5770a5e0ab4410e09091529f535ed1a27c095974b1017_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_91517c34daff76ee47a5770a5e0ab4410e09091529f535ed1a27c095974b1017->leave($__internal_91517c34daff76ee47a5770a5e0ab4410e09091529f535ed1a27c095974b1017_prof);

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
