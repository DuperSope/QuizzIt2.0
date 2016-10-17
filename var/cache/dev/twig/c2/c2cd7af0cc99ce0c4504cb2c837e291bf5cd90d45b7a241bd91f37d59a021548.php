<?php

/* GeneralBundle::search.html.twig */
class __TwigTemplate_09816ba164da5b0aa54e685c434e6b141d4d9b046d0c0acae2c61480ef3f66cd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "GeneralBundle::search.html.twig", 1);
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
        $__internal_185859ad59b9481b2f51384dcf560f3f03ddb8cb7a60969a97189c26858e63ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_185859ad59b9481b2f51384dcf560f3f03ddb8cb7a60969a97189c26858e63ac->enter($__internal_185859ad59b9481b2f51384dcf560f3f03ddb8cb7a60969a97189c26858e63ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GeneralBundle::search.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_185859ad59b9481b2f51384dcf560f3f03ddb8cb7a60969a97189c26858e63ac->leave($__internal_185859ad59b9481b2f51384dcf560f3f03ddb8cb7a60969a97189c26858e63ac_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b961e0f11495c2151f06041fe8bd51554729379badf391d2abeb24ac5f7679f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b961e0f11495c2151f06041fe8bd51554729379badf391d2abeb24ac5f7679f9->enter($__internal_b961e0f11495c2151f06041fe8bd51554729379badf391d2abeb24ac5f7679f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Recherche - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " ";
        
        $__internal_b961e0f11495c2151f06041fe8bd51554729379badf391d2abeb24ac5f7679f9->leave($__internal_b961e0f11495c2151f06041fe8bd51554729379badf391d2abeb24ac5f7679f9_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_bc9687a2b6c41a8b20e7125cb6e28c211864638ac7a3869388d95973b61a46d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc9687a2b6c41a8b20e7125cb6e28c211864638ac7a3869388d95973b61a46d9->enter($__internal_bc9687a2b6c41a8b20e7125cb6e28c211864638ac7a3869388d95973b61a46d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    
    <div class=\"col-xs-10 col-xs-offset-1 text-center\">
        <h1>Rechercher un Quizz</h1><hr/>
        <h3>Fonctionnalité en cours de développement.</h3>
    </div>
    


";
        
        $__internal_bc9687a2b6c41a8b20e7125cb6e28c211864638ac7a3869388d95973b61a46d9->leave($__internal_bc9687a2b6c41a8b20e7125cb6e28c211864638ac7a3869388d95973b61a46d9_prof);

    }

    public function getTemplateName()
    {
        return "GeneralBundle::search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 6,  49 => 5,  35 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"::base.html.twig\" %}

{% block title %} Recherche - {{ parent() }} {% endblock %}

{% block body %}
    
    <div class=\"col-xs-10 col-xs-offset-1 text-center\">
        <h1>Rechercher un Quizz</h1><hr/>
        <h3>Fonctionnalité en cours de développement.</h3>
    </div>
    


{% endblock %}";
    }
}
