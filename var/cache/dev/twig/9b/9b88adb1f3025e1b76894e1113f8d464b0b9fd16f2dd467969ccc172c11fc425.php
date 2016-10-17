<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_0171345ccbbb20dcd2093fc677aa2439d12a43ec1a21d116eef5866dadda9af7 extends Twig_Template
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
        $__internal_c51469b80035f6d6bcaec068fbb10f77a7b8556cbf9604f6e3402bf66c043161 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c51469b80035f6d6bcaec068fbb10f77a7b8556cbf9604f6e3402bf66c043161->enter($__internal_c51469b80035f6d6bcaec068fbb10f77a7b8556cbf9604f6e3402bf66c043161_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_c51469b80035f6d6bcaec068fbb10f77a7b8556cbf9604f6e3402bf66c043161->leave($__internal_c51469b80035f6d6bcaec068fbb10f77a7b8556cbf9604f6e3402bf66c043161_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'search')) ?>
";
    }
}
