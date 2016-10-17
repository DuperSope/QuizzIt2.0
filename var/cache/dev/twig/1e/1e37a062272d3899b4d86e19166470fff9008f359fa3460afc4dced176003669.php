<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_530de8ce269cefaf39ef6ad04e1d84c81a224bfe2d50bd6373a50f38af4a30fe extends Twig_Template
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
        $__internal_033dcfb9605cbfbcfca78f62f73f6cd27901716eff9f2212db6b1c0ca738eaab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_033dcfb9605cbfbcfca78f62f73f6cd27901716eff9f2212db6b1c0ca738eaab->enter($__internal_033dcfb9605cbfbcfca78f62f73f6cd27901716eff9f2212db6b1c0ca738eaab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_033dcfb9605cbfbcfca78f62f73f6cd27901716eff9f2212db6b1c0ca738eaab->leave($__internal_033dcfb9605cbfbcfca78f62f73f6cd27901716eff9f2212db6b1c0ca738eaab_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'password')) ?>
";
    }
}
