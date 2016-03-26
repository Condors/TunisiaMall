<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_c1e393e00d8c49d9e21718798688083f8b788a748fadccece95793de81917828 extends Twig_Template
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
        $__internal_14c47c080ec61fd9a514103a548993461ab6b3de52a96b690f6c633d879f3220 = $this->env->getExtension("native_profiler");
        $__internal_14c47c080ec61fd9a514103a548993461ab6b3de52a96b690f6c633d879f3220->enter($__internal_14c47c080ec61fd9a514103a548993461ab6b3de52a96b690f6c633d879f3220_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_14c47c080ec61fd9a514103a548993461ab6b3de52a96b690f6c633d879f3220->leave($__internal_14c47c080ec61fd9a514103a548993461ab6b3de52a96b690f6c633d879f3220_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
