<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_9ae7f15dff8f61da103bea1d04a48b242d0fb99b7bab5b540f3869de68b760b8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_82e0ccfd5217509f748010213103f977a7c8c8ad3fbcf33f388a427338f45733 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82e0ccfd5217509f748010213103f977a7c8c8ad3fbcf33f388a427338f45733->enter($__internal_82e0ccfd5217509f748010213103f977a7c8c8ad3fbcf33f388a427338f45733_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_82e0ccfd5217509f748010213103f977a7c8c8ad3fbcf33f388a427338f45733->leave($__internal_82e0ccfd5217509f748010213103f977a7c8c8ad3fbcf33f388a427338f45733_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_231079fece3f097bbad6eced8237b22c033cc36e12148dcd8ac996cb4e394f81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_231079fece3f097bbad6eced8237b22c033cc36e12148dcd8ac996cb4e394f81->enter($__internal_231079fece3f097bbad6eced8237b22c033cc36e12148dcd8ac996cb4e394f81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_231079fece3f097bbad6eced8237b22c033cc36e12148dcd8ac996cb4e394f81->leave($__internal_231079fece3f097bbad6eced8237b22c033cc36e12148dcd8ac996cb4e394f81_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSource()
    {
        return "{% block panel '' %}
";
    }
}
