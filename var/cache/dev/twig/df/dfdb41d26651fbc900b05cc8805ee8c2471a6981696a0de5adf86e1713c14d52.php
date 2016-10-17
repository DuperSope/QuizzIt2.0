<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_ed4a9b577b6e5d79666ad6a0be7b0364026c269d0df2d3550905e850bcc224c5 extends Twig_Template
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
        $__internal_68e2437184577bc8d332255295fd6ad33c0e19e58a8a45718c342c86e4f036c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68e2437184577bc8d332255295fd6ad33c0e19e58a8a45718c342c86e4f036c9->enter($__internal_68e2437184577bc8d332255295fd6ad33c0e19e58a8a45718c342c86e4f036c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_68e2437184577bc8d332255295fd6ad33c0e19e58a8a45718c342c86e4f036c9->leave($__internal_68e2437184577bc8d332255295fd6ad33c0e19e58a8a45718c342c86e4f036c9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
    }
}
