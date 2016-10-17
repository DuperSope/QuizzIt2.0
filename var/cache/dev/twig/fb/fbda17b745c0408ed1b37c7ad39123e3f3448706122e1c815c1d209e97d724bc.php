<?php

/* @Framework/Form/range_widget.html.php */
class __TwigTemplate_34902209376f0b8aca7b71a96e5c9a2c8626ac0e19a5b3225681e942bdd8cd3b extends Twig_Template
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
        $__internal_45961469dcdfd9460d29e957b40a20508d43f45099941bbbd4caae102ca1020c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45961469dcdfd9460d29e957b40a20508d43f45099941bbbd4caae102ca1020c->enter($__internal_45961469dcdfd9460d29e957b40a20508d43f45099941bbbd4caae102ca1020c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
";
        
        $__internal_45961469dcdfd9460d29e957b40a20508d43f45099941bbbd4caae102ca1020c->leave($__internal_45961469dcdfd9460d29e957b40a20508d43f45099941bbbd4caae102ca1020c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/range_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
";
    }
}
