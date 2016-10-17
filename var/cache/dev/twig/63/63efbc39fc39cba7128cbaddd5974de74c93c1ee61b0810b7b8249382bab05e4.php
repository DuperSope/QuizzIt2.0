<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_7af7f9512c942079728192b362304b9461158f96157fe3db9b55bbbff005b81a extends Twig_Template
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
        $__internal_523d3d37d86d10adbff16656b75c9d52d59b9cfbf85c14a0499296c448085107 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_523d3d37d86d10adbff16656b75c9d52d59b9cfbf85c14a0499296c448085107->enter($__internal_523d3d37d86d10adbff16656b75c9d52d59b9cfbf85c14a0499296c448085107_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_523d3d37d86d10adbff16656b75c9d52d59b9cfbf85c14a0499296c448085107->leave($__internal_523d3d37d86d10adbff16656b75c9d52d59b9cfbf85c14a0499296c448085107_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'url')) ?>
";
    }
}
