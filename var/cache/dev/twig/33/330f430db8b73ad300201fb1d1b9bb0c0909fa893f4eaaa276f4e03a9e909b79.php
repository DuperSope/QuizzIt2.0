<?php

/* GeneralBundle:Error:access-right.html.twig */
class __TwigTemplate_c259617af51d634916f84adcbc8ee933f43c97b36ca92ccf06a110267f05b23d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "GeneralBundle:Error:access-right.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ebf69a5a0b8ce2d297970343cad1c00959bdadc575a6cf09ba15a71d1c00b34b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebf69a5a0b8ce2d297970343cad1c00959bdadc575a6cf09ba15a71d1c00b34b->enter($__internal_ebf69a5a0b8ce2d297970343cad1c00959bdadc575a6cf09ba15a71d1c00b34b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GeneralBundle:Error:access-right.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ebf69a5a0b8ce2d297970343cad1c00959bdadc575a6cf09ba15a71d1c00b34b->leave($__internal_ebf69a5a0b8ce2d297970343cad1c00959bdadc575a6cf09ba15a71d1c00b34b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5015b9fe22684b619a2a90673f7d2d7d55baf1c43430dff7730912252b6aad7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5015b9fe22684b619a2a90673f7d2d7d55baf1c43430dff7730912252b6aad7a->enter($__internal_5015b9fe22684b619a2a90673f7d2d7d55baf1c43430dff7730912252b6aad7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Erreur - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " ";
        
        $__internal_5015b9fe22684b619a2a90673f7d2d7d55baf1c43430dff7730912252b6aad7a->leave($__internal_5015b9fe22684b619a2a90673f7d2d7d55baf1c43430dff7730912252b6aad7a_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_fe3711a2f89e54bfd35dfa2fb55cdc134307aff199d83e98be48ac55e90141f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe3711a2f89e54bfd35dfa2fb55cdc134307aff199d83e98be48ac55e90141f8->enter($__internal_fe3711a2f89e54bfd35dfa2fb55cdc134307aff199d83e98be48ac55e90141f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    <div class=\"container-fluid text-center\">
        
        <h1>Vous n'avez pas les droits requis pour accéder à cette page.</h1>
        
        <a href='";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "'>Retourner à l'accueil.</a>     
                          
    </div>
";
        
        $__internal_fe3711a2f89e54bfd35dfa2fb55cdc134307aff199d83e98be48ac55e90141f8->leave($__internal_fe3711a2f89e54bfd35dfa2fb55cdc134307aff199d83e98be48ac55e90141f8_prof);

    }

    public function getTemplateName()
    {
        return "GeneralBundle:Error:access-right.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 11,  55 => 7,  49 => 6,  35 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"::base.html.twig\" %}

{% block title %} Erreur - {{ parent() }} {% endblock %}


{% block body %}
    <div class=\"container-fluid text-center\">
        
        <h1>Vous n'avez pas les droits requis pour accéder à cette page.</h1>
        
        <a href='{{path('homepage')}}'>Retourner à l'accueil.</a>     
                          
    </div>
{% endblock %}";
    }
}
