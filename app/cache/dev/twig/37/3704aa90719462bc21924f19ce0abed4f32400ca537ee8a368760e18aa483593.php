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
        $__internal_aa8a8436b113001622c60a8f6cbe86ebddfa91c63f7f89efa8bb765497ac3925 = $this->env->getExtension("native_profiler");
        $__internal_aa8a8436b113001622c60a8f6cbe86ebddfa91c63f7f89efa8bb765497ac3925->enter($__internal_aa8a8436b113001622c60a8f6cbe86ebddfa91c63f7f89efa8bb765497ac3925_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_aa8a8436b113001622c60a8f6cbe86ebddfa91c63f7f89efa8bb765497ac3925->leave($__internal_aa8a8436b113001622c60a8f6cbe86ebddfa91c63f7f89efa8bb765497ac3925_prof);

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
