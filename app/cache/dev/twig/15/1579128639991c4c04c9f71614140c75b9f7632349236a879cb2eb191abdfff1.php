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
        $__internal_6a63034beb387a7fd39f8294f04fcddc8ac7e6f9fdc39eefb95b8a59339ede71 = $this->env->getExtension("native_profiler");
        $__internal_6a63034beb387a7fd39f8294f04fcddc8ac7e6f9fdc39eefb95b8a59339ede71->enter($__internal_6a63034beb387a7fd39f8294f04fcddc8ac7e6f9fdc39eefb95b8a59339ede71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_6a63034beb387a7fd39f8294f04fcddc8ac7e6f9fdc39eefb95b8a59339ede71->leave($__internal_6a63034beb387a7fd39f8294f04fcddc8ac7e6f9fdc39eefb95b8a59339ede71_prof);

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