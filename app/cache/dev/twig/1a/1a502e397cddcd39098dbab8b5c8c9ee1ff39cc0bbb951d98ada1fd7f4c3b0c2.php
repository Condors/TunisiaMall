<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_66d8af3e2877b34d5945d5daaa969ee104c6a636f2bc7cae6f551690249c8274 extends Twig_Template
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
        $__internal_3b8552d3e3872793030546fe4c5aac22e13605239652cb36bfd53f6eb36d5ef7 = $this->env->getExtension("native_profiler");
        $__internal_3b8552d3e3872793030546fe4c5aac22e13605239652cb36bfd53f6eb36d5ef7->enter($__internal_3b8552d3e3872793030546fe4c5aac22e13605239652cb36bfd53f6eb36d5ef7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_3b8552d3e3872793030546fe4c5aac22e13605239652cb36bfd53f6eb36d5ef7->leave($__internal_3b8552d3e3872793030546fe4c5aac22e13605239652cb36bfd53f6eb36d5ef7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
