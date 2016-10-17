<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_ba66004de731c8742978f2e861b7eaeeaabc417f2b5295e1654a53fe007b2984 extends Twig_Template
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
        $__internal_1084cd5f098065c7bf8d61a2ab6f361f454d0d5279011df809f78ed04bdb52cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1084cd5f098065c7bf8d61a2ab6f361f454d0d5279011df809f78ed04bdb52cb->enter($__internal_1084cd5f098065c7bf8d61a2ab6f361f454d0d5279011df809f78ed04bdb52cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_1084cd5f098065c7bf8d61a2ab6f361f454d0d5279011df809f78ed04bdb52cb->leave($__internal_1084cd5f098065c7bf8d61a2ab6f361f454d0d5279011df809f78ed04bdb52cb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'text')) ?>
";
    }
}
