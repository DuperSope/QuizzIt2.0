<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_99446b56a0fb28be65a18f5b7a466e07f0e8eab3ffe130c7eeb8006e4bedb4fd extends Twig_Template
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
        $__internal_f12d89619eecb3d9b81207238f0cc6e646dae553b5b50ec48be52802bcdbba49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f12d89619eecb3d9b81207238f0cc6e646dae553b5b50ec48be52802bcdbba49->enter($__internal_f12d89619eecb3d9b81207238f0cc6e646dae553b5b50ec48be52802bcdbba49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_f12d89619eecb3d9b81207238f0cc6e646dae553b5b50ec48be52802bcdbba49->leave($__internal_f12d89619eecb3d9b81207238f0cc6e646dae553b5b50ec48be52802bcdbba49_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
    }
}
