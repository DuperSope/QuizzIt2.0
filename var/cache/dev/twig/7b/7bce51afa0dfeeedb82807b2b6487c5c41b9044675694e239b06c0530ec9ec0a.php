<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_f60ccb15b73427112c0dbaf989b1b42ec538a2cf6eaed33d581fa03f92748568 extends Twig_Template
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
        $__internal_f0d3a215e758468bd29c6707333eae576be2b9b875933ff090449e4b9f30193d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0d3a215e758468bd29c6707333eae576be2b9b875933ff090449e4b9f30193d->enter($__internal_f0d3a215e758468bd29c6707333eae576be2b9b875933ff090449e4b9f30193d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_f0d3a215e758468bd29c6707333eae576be2b9b875933ff090449e4b9f30193d->leave($__internal_f0d3a215e758468bd29c6707333eae576be2b9b875933ff090449e4b9f30193d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
    }
}
