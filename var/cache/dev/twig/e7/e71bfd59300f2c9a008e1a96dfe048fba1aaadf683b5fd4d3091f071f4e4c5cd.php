<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_a71fa05712d322e4e8d06799e67664a22b9b14fcef8d9b1c14d3af44d219eb3a extends Twig_Template
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
        $__internal_24867f923fdadcf209bbdc6047d9704af2773014f020e1ec86e11f47e6e954e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24867f923fdadcf209bbdc6047d9704af2773014f020e1ec86e11f47e6e954e5->enter($__internal_24867f923fdadcf209bbdc6047d9704af2773014f020e1ec86e11f47e6e954e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_24867f923fdadcf209bbdc6047d9704af2773014f020e1ec86e11f47e6e954e5->leave($__internal_24867f923fdadcf209bbdc6047d9704af2773014f020e1ec86e11f47e6e954e5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
    }
}
