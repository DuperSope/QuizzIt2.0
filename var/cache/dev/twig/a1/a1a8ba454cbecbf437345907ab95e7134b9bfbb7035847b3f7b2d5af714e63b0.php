<?php

/* AdminBundle::index.html.twig */
class __TwigTemplate_7f8d92d47cfb56fafb2e8b8fb4de957cef4053a13ea25637ec41c168ddebd496 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AdminBundle::index.html.twig", 1);
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
        $__internal_e469f96b67fa0cdc49834dedc5fe7803270c0e0298a7d3b0e5b49f903058a7c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e469f96b67fa0cdc49834dedc5fe7803270c0e0298a7d3b0e5b49f903058a7c5->enter($__internal_e469f96b67fa0cdc49834dedc5fe7803270c0e0298a7d3b0e5b49f903058a7c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle::index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e469f96b67fa0cdc49834dedc5fe7803270c0e0298a7d3b0e5b49f903058a7c5->leave($__internal_e469f96b67fa0cdc49834dedc5fe7803270c0e0298a7d3b0e5b49f903058a7c5_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c773218ef894cf24fa3a58bf6efc27756c8c87d10b17dd210a01cb360ecb2e02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c773218ef894cf24fa3a58bf6efc27756c8c87d10b17dd210a01cb360ecb2e02->enter($__internal_c773218ef894cf24fa3a58bf6efc27756c8c87d10b17dd210a01cb360ecb2e02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Administration - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " ";
        
        $__internal_c773218ef894cf24fa3a58bf6efc27756c8c87d10b17dd210a01cb360ecb2e02->leave($__internal_c773218ef894cf24fa3a58bf6efc27756c8c87d10b17dd210a01cb360ecb2e02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_a8968195a0573fbb4c89df801551fbafe4c2f872abf2aa07322986b7bb5ebc37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8968195a0573fbb4c89df801551fbafe4c2f872abf2aa07322986b7bb5ebc37->enter($__internal_a8968195a0573fbb4c89df801551fbafe4c2f872abf2aa07322986b7bb5ebc37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    
    <div class=\"col-xs-8 col-xs-offset-2\">
        <a href=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_theme");
        echo "\">Gestion des thèmes</a>

        
    </div>
    


";
        
        $__internal_a8968195a0573fbb4c89df801551fbafe4c2f872abf2aa07322986b7bb5ebc37->leave($__internal_a8968195a0573fbb4c89df801551fbafe4c2f872abf2aa07322986b7bb5ebc37_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle::index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 8,  55 => 6,  49 => 5,  35 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"::base.html.twig\" %}

{% block title %} Administration - {{ parent() }} {% endblock %}

{% block body %}
    
    <div class=\"col-xs-8 col-xs-offset-2\">
        <a href=\"{{path('admin_theme')}}\">Gestion des thèmes</a>

        
    </div>
    


{% endblock %}";
    }
}
