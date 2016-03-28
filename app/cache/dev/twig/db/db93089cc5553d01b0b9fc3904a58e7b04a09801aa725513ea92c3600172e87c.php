<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_69075bbe6da9bb9a5860166be8f9bbf6ed19dc71c3bf08d06710b7b2ca017d3b extends Twig_Template
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
        $__internal_daa9739836016bd98aa4e7c28c1d71927b881e8bdfef1eece5108bb514fbaddb = $this->env->getExtension("native_profiler");
        $__internal_daa9739836016bd98aa4e7c28c1d71927b881e8bdfef1eece5108bb514fbaddb->enter($__internal_daa9739836016bd98aa4e7c28c1d71927b881e8bdfef1eece5108bb514fbaddb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_daa9739836016bd98aa4e7c28c1d71927b881e8bdfef1eece5108bb514fbaddb->leave($__internal_daa9739836016bd98aa4e7c28c1d71927b881e8bdfef1eece5108bb514fbaddb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
