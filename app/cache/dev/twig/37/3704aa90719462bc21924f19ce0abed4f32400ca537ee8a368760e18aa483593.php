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
        $__internal_646df6e4c5fa9e74259ad4b32abad4f9571f4f8b61f5848bfc6fda3ae4e6258e = $this->env->getExtension("native_profiler");
        $__internal_646df6e4c5fa9e74259ad4b32abad4f9571f4f8b61f5848bfc6fda3ae4e6258e->enter($__internal_646df6e4c5fa9e74259ad4b32abad4f9571f4f8b61f5848bfc6fda3ae4e6258e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_646df6e4c5fa9e74259ad4b32abad4f9571f4f8b61f5848bfc6fda3ae4e6258e->leave($__internal_646df6e4c5fa9e74259ad4b32abad4f9571f4f8b61f5848bfc6fda3ae4e6258e_prof);

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
