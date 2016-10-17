<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_367d9b7bc2f71e461e2f53e39ccce2e04e30be08128856bc9f9c4dc02ee19fbe extends Twig_Template
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
        $__internal_1298fd729f550ee05d3a6e3ae8745f70e7ee322f1fb9b383bd343c4b3be2bed6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1298fd729f550ee05d3a6e3ae8745f70e7ee322f1fb9b383bd343c4b3be2bed6->enter($__internal_1298fd729f550ee05d3a6e3ae8745f70e7ee322f1fb9b383bd343c4b3be2bed6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_1298fd729f550ee05d3a6e3ae8745f70e7ee322f1fb9b383bd343c4b3be2bed6->leave($__internal_1298fd729f550ee05d3a6e3ae8745f70e7ee322f1fb9b383bd343c4b3be2bed6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
    }
}
