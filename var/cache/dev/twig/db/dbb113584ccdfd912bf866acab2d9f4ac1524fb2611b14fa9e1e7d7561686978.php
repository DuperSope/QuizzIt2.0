<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_bc8e2fe96182ccd2b124fa17806975f00b81ad4228b188e7d12aed5cfcadbdbf extends Twig_Template
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
        $__internal_c8c29c85b6b42bef0a1df34ae45327c2f1b74fe55affc86b84c9aa794b2e614e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8c29c85b6b42bef0a1df34ae45327c2f1b74fe55affc86b84c9aa794b2e614e->enter($__internal_c8c29c85b6b42bef0a1df34ae45327c2f1b74fe55affc86b84c9aa794b2e614e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_c8c29c85b6b42bef0a1df34ae45327c2f1b74fe55affc86b84c9aa794b2e614e->leave($__internal_c8c29c85b6b42bef0a1df34ae45327c2f1b74fe55affc86b84c9aa794b2e614e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
    }
}
