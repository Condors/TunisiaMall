<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_00f01d8fdad217873ce2ee3e04a08d12e74397dc2972f178d7135b2f18aaf8ff extends Twig_Template
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
        $__internal_ea74b86715b88e3b43e051a8161f0725839db8674c75689e028ce395556ecfaa = $this->env->getExtension("native_profiler");
        $__internal_ea74b86715b88e3b43e051a8161f0725839db8674c75689e028ce395556ecfaa->enter($__internal_ea74b86715b88e3b43e051a8161f0725839db8674c75689e028ce395556ecfaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_ea74b86715b88e3b43e051a8161f0725839db8674c75689e028ce395556ecfaa->leave($__internal_ea74b86715b88e3b43e051a8161f0725839db8674c75689e028ce395556ecfaa_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
