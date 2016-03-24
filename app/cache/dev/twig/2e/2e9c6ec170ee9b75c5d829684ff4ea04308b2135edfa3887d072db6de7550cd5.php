<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_797a088c8e853330f381279563bd2cfb65231fdd984f9761f3ce86b46da2baaa extends Twig_Template
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
        $__internal_48275c2cb80510954307363fd488dcbeba821a184f59ad3fd3ec5d679ab8e6cc = $this->env->getExtension("native_profiler");
        $__internal_48275c2cb80510954307363fd488dcbeba821a184f59ad3fd3ec5d679ab8e6cc->enter($__internal_48275c2cb80510954307363fd488dcbeba821a184f59ad3fd3ec5d679ab8e6cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_48275c2cb80510954307363fd488dcbeba821a184f59ad3fd3ec5d679ab8e6cc->leave($__internal_48275c2cb80510954307363fd488dcbeba821a184f59ad3fd3ec5d679ab8e6cc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
