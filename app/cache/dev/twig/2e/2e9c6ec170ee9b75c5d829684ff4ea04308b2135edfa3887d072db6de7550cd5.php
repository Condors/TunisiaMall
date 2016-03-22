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
        $__internal_e5c75a8eaeea972d6fae4172bfa8140639a02f23d97c8e51002cf7b6c75f0d8c = $this->env->getExtension("native_profiler");
        $__internal_e5c75a8eaeea972d6fae4172bfa8140639a02f23d97c8e51002cf7b6c75f0d8c->enter($__internal_e5c75a8eaeea972d6fae4172bfa8140639a02f23d97c8e51002cf7b6c75f0d8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_e5c75a8eaeea972d6fae4172bfa8140639a02f23d97c8e51002cf7b6c75f0d8c->leave($__internal_e5c75a8eaeea972d6fae4172bfa8140639a02f23d97c8e51002cf7b6c75f0d8c_prof);

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
