<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_42e263d2e87c8d270d6b6adfa3d7939dce688978496e901995d51778b8e4f2c7 extends Twig_Template
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
        $__internal_06dddd5aa910391275191f47bf62c5cffdee07b1b0d2d1d4e718b6e7cf0da20b = $this->env->getExtension("native_profiler");
        $__internal_06dddd5aa910391275191f47bf62c5cffdee07b1b0d2d1d4e718b6e7cf0da20b->enter($__internal_06dddd5aa910391275191f47bf62c5cffdee07b1b0d2d1d4e718b6e7cf0da20b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_06dddd5aa910391275191f47bf62c5cffdee07b1b0d2d1d4e718b6e7cf0da20b->leave($__internal_06dddd5aa910391275191f47bf62c5cffdee07b1b0d2d1d4e718b6e7cf0da20b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
