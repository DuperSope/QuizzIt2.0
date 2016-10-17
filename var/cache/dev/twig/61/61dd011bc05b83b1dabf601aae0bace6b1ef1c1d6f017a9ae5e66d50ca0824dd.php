<?php

/* AdminBundle::updatetheme.html.twig */
class __TwigTemplate_5efb764e69cb4447a566b5c97737736d3c5de9c5201978ef7f0aa3584490bee2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AdminBundle::updatetheme.html.twig", 1);
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
        $__internal_38ddecdbe167a6d71c1f71c5a46749714db9b9bb403ef38c3a95e994048effef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38ddecdbe167a6d71c1f71c5a46749714db9b9bb403ef38c3a95e994048effef->enter($__internal_38ddecdbe167a6d71c1f71c5a46749714db9b9bb403ef38c3a95e994048effef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle::updatetheme.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_38ddecdbe167a6d71c1f71c5a46749714db9b9bb403ef38c3a95e994048effef->leave($__internal_38ddecdbe167a6d71c1f71c5a46749714db9b9bb403ef38c3a95e994048effef_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d7102b54890e6c58ab06b9ff6f3be8a3bf825fae304b189fadefce539d44ede7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7102b54890e6c58ab06b9ff6f3be8a3bf825fae304b189fadefce539d44ede7->enter($__internal_d7102b54890e6c58ab06b9ff6f3be8a3bf825fae304b189fadefce539d44ede7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Gestion des thèmes - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " ";
        
        $__internal_d7102b54890e6c58ab06b9ff6f3be8a3bf825fae304b189fadefce539d44ede7->leave($__internal_d7102b54890e6c58ab06b9ff6f3be8a3bf825fae304b189fadefce539d44ede7_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_a9c09e8967d38beeb15f30ce086bba3ca91b2d4850cbce6f8991a59c278511a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9c09e8967d38beeb15f30ce086bba3ca91b2d4850cbce6f8991a59c278511a2->enter($__internal_a9c09e8967d38beeb15f30ce086bba3ca91b2d4850cbce6f8991a59c278511a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"container\">
        <h1>Modifier un thème</h1>
        <br />
        Nom initial : <b>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["theme"]) ? $context["theme"] : $this->getContext($context, "theme")), "name", array()), "html", null, true);
        echo "</b><br />
        ";
        // line 10
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        Nouveau nom : ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'widget', array("attr" => array("class" => "form-control auto-form")));
        echo "
        ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
        <input class='btn btn-primary' type='submit' value='Mettre à jour'>
        
    </div>
";
        
        $__internal_a9c09e8967d38beeb15f30ce086bba3ca91b2d4850cbce6f8991a59c278511a2->leave($__internal_a9c09e8967d38beeb15f30ce086bba3ca91b2d4850cbce6f8991a59c278511a2_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle::updatetheme.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 12,  68 => 11,  64 => 10,  60 => 9,  55 => 6,  49 => 5,  35 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"::base.html.twig\" %}

{% block title %}Gestion des thèmes - {{ parent() }} {% endblock %}

{% block body %}
    <div class=\"container\">
        <h1>Modifier un thème</h1>
        <br />
        Nom initial : <b>{{ theme.name }}</b><br />
        {{ form_start(form) }}
        Nouveau nom : {{ form_widget(form.name, { \"attr\": { \"class\": \"form-control auto-form\" } }) }}
        {{ form_rest(form) }}
        <input class='btn btn-primary' type='submit' value='Mettre à jour'>
        
    </div>
{% endblock %}";
    }
}
