<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_302c87f2d0c01e1e1bc7236353dc19b93bac0e82a85714b953928ebdeeabd393 extends Twig_Template
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
        $__internal_4fca44277010d664157c7af965f81b07e19a0aff2613dbcf2952ca35a4701f9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fca44277010d664157c7af965f81b07e19a0aff2613dbcf2952ca35a4701f9e->enter($__internal_4fca44277010d664157c7af965f81b07e19a0aff2613dbcf2952ca35a4701f9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_4fca44277010d664157c7af965f81b07e19a0aff2613dbcf2952ca35a4701f9e->leave($__internal_4fca44277010d664157c7af965f81b07e19a0aff2613dbcf2952ca35a4701f9e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
    }
}
