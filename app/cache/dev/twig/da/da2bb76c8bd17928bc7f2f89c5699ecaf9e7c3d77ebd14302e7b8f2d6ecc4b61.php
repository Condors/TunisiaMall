<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_5137524de58c786a187ed3c19f271231c21971706f460bd4ccfe8e226459cbb2 extends Twig_Template
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
        $__internal_c27f9ad78f9433c7a9e66768e38b905c749fc43ac487b86d5ae4e100d13d5b64 = $this->env->getExtension("native_profiler");
        $__internal_c27f9ad78f9433c7a9e66768e38b905c749fc43ac487b86d5ae4e100d13d5b64->enter($__internal_c27f9ad78f9433c7a9e66768e38b905c749fc43ac487b86d5ae4e100d13d5b64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_c27f9ad78f9433c7a9e66768e38b905c749fc43ac487b86d5ae4e100d13d5b64->leave($__internal_c27f9ad78f9433c7a9e66768e38b905c749fc43ac487b86d5ae4e100d13d5b64_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
