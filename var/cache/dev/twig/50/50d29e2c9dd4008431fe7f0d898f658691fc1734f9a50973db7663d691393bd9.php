<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_b25cbdea9890723fafedecec1b06cdb8447a244521ea82d229ec36b5bf556079 extends Twig_Template
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
        $__internal_fb38cfc63168b6511ee157ca561e85f8ebd347e2225eedd886d1ac4f886cc880 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb38cfc63168b6511ee157ca561e85f8ebd347e2225eedd886d1ac4f886cc880->enter($__internal_fb38cfc63168b6511ee157ca561e85f8ebd347e2225eedd886d1ac4f886cc880_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_fb38cfc63168b6511ee157ca561e85f8ebd347e2225eedd886d1ac4f886cc880->leave($__internal_fb38cfc63168b6511ee157ca561e85f8ebd347e2225eedd886d1ac4f886cc880_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
    }
}
