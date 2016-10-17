<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_a42838dd8e3d859b016d7b438e2536277004d6504a32bb44f56da5252f993eb4 extends Twig_Template
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
        $__internal_84956e911e98471b7c9ed3ac7166dfc666e3545c826efc2f34d0deed918beef1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84956e911e98471b7c9ed3ac7166dfc666e3545c826efc2f34d0deed918beef1->enter($__internal_84956e911e98471b7c9ed3ac7166dfc666e3545c826efc2f34d0deed918beef1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_84956e911e98471b7c9ed3ac7166dfc666e3545c826efc2f34d0deed918beef1->leave($__internal_84956e911e98471b7c9ed3ac7166dfc666e3545c826efc2f34d0deed918beef1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
    }
}
