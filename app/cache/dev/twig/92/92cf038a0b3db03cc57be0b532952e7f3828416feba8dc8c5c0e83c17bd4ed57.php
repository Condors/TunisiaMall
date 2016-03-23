<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_9ac8fd39e70fec6f220b1bf83e8a736075412782f675c1346b7e190f92fc779b extends Twig_Template
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
        $__internal_5262f840ad182a0dc10dc772dcc85303edee2035976de248ac367e37fd637816 = $this->env->getExtension("native_profiler");
        $__internal_5262f840ad182a0dc10dc772dcc85303edee2035976de248ac367e37fd637816->enter($__internal_5262f840ad182a0dc10dc772dcc85303edee2035976de248ac367e37fd637816_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_5262f840ad182a0dc10dc772dcc85303edee2035976de248ac367e37fd637816->leave($__internal_5262f840ad182a0dc10dc772dcc85303edee2035976de248ac367e37fd637816_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
