<?php

/* QuizzBundle:Quizz:delete.html.twig */
class __TwigTemplate_e9fbe8734b47f3769ad2f3fca8cc029d98b60c7210acfefd8f7de00e8845c2a9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "QuizzBundle:Quizz:delete.html.twig", 1);
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
        $__internal_71d72baffe26f4b7f49cd1cb71fb0dfd09a13957a5601ae990c6f96ea6bf11b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71d72baffe26f4b7f49cd1cb71fb0dfd09a13957a5601ae990c6f96ea6bf11b6->enter($__internal_71d72baffe26f4b7f49cd1cb71fb0dfd09a13957a5601ae990c6f96ea6bf11b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "QuizzBundle:Quizz:delete.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_71d72baffe26f4b7f49cd1cb71fb0dfd09a13957a5601ae990c6f96ea6bf11b6->leave($__internal_71d72baffe26f4b7f49cd1cb71fb0dfd09a13957a5601ae990c6f96ea6bf11b6_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_85f702fd40b9e8280d4f33e85a69f44b934df7c0c76b787762fc82070449d387 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85f702fd40b9e8280d4f33e85a69f44b934df7c0c76b787762fc82070449d387->enter($__internal_85f702fd40b9e8280d4f33e85a69f44b934df7c0c76b787762fc82070449d387_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["quizz"]) ? $context["quizz"] : $this->getContext($context, "quizz")), "name", array()), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " ";
        
        $__internal_85f702fd40b9e8280d4f33e85a69f44b934df7c0c76b787762fc82070449d387->leave($__internal_85f702fd40b9e8280d4f33e85a69f44b934df7c0c76b787762fc82070449d387_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_869e90a355c57a181895f202978c15c3b92b6bdf20dad1877e7f1dc2790bda35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_869e90a355c57a181895f202978c15c3b92b6bdf20dad1877e7f1dc2790bda35->enter($__internal_869e90a355c57a181895f202978c15c3b92b6bdf20dad1877e7f1dc2790bda35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    
    <div class=\"container-fluid\">
        <div class='text-center col-xs-6 col-xs-offset-3'>
               
            <div class=\"panel panel-default\">
                <div class=\"panel-body\">
                    <p>Supprimer un Quizz est une action irrémédiable qui empêchera quiconque de l'effectuer.<br/><br/><b> Êtes-vous sûr de vouloir supprimer ce Quizz ?</b></p>
                        <br/>
                        <a href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("quizz_delete", array("quizzid" => $this->getAttribute((isset($context["quizz"]) ? $context["quizz"] : $this->getContext($context, "quizz")), "id", array()), "confirm" => 1)), "html", null, true);
        echo "\">Confirmer la suppression</a>
                        <br/><br/>
                        <a href='";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("quizz_preview", array("quizzid" => $this->getAttribute((isset($context["quizz"]) ? $context["quizz"] : $this->getContext($context, "quizz")), "id", array()))), "html", null, true);
        echo "'>Annuler la suppression</a>
                </div>
            </div>
            
        </div>          
    </div>
    
";
        
        $__internal_869e90a355c57a181895f202978c15c3b92b6bdf20dad1877e7f1dc2790bda35->leave($__internal_869e90a355c57a181895f202978c15c3b92b6bdf20dad1877e7f1dc2790bda35_prof);

    }

    public function getTemplateName()
    {
        return "QuizzBundle:Quizz:delete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 17,  67 => 15,  57 => 7,  51 => 6,  35 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"::base.html.twig\" %}

{% block title %} {{ quizz.name }} - {{ parent() }} {% endblock %}


{% block body %}
    
    <div class=\"container-fluid\">
        <div class='text-center col-xs-6 col-xs-offset-3'>
               
            <div class=\"panel panel-default\">
                <div class=\"panel-body\">
                    <p>Supprimer un Quizz est une action irrémédiable qui empêchera quiconque de l'effectuer.<br/><br/><b> Êtes-vous sûr de vouloir supprimer ce Quizz ?</b></p>
                        <br/>
                        <a href=\"{{path('quizz_delete', { 'quizzid' : quizz.id, 'confirm': 1 }) }}\">Confirmer la suppression</a>
                        <br/><br/>
                        <a href='{{path('quizz_preview', { 'quizzid' : quizz.id }) }}'>Annuler la suppression</a>
                </div>
            </div>
            
        </div>          
    </div>
    
{% endblock %}";
    }
}
