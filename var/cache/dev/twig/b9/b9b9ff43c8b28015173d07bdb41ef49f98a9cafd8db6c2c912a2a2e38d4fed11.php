<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_a1c299f9fd725209498f2af6c6813083c095b552730a7c94e9c42450b51363bd extends Twig_Template
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
        $__internal_458fc0022410c54b95cf0bb9bf08e6d8a2bac8f99a7ad2f00273d34911aad5e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_458fc0022410c54b95cf0bb9bf08e6d8a2bac8f99a7ad2f00273d34911aad5e2->enter($__internal_458fc0022410c54b95cf0bb9bf08e6d8a2bac8f99a7ad2f00273d34911aad5e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_458fc0022410c54b95cf0bb9bf08e6d8a2bac8f99a7ad2f00273d34911aad5e2->leave($__internal_458fc0022410c54b95cf0bb9bf08e6d8a2bac8f99a7ad2f00273d34911aad5e2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
    }
}
