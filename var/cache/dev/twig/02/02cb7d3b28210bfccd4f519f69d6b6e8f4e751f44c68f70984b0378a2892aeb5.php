<?php

/* GeneralBundle:Error:access-404.html.twig */
class __TwigTemplate_dc9c8d77cea78ee64cca49b615c816877e90a58ec60a3679f37ff34c76ef8b3d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "GeneralBundle:Error:access-404.html.twig", 1);
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
        $__internal_c9669394a99ce281050ea23646930fb6cc661305d5e80f1d2b114289bf62a340 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9669394a99ce281050ea23646930fb6cc661305d5e80f1d2b114289bf62a340->enter($__internal_c9669394a99ce281050ea23646930fb6cc661305d5e80f1d2b114289bf62a340_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GeneralBundle:Error:access-404.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c9669394a99ce281050ea23646930fb6cc661305d5e80f1d2b114289bf62a340->leave($__internal_c9669394a99ce281050ea23646930fb6cc661305d5e80f1d2b114289bf62a340_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b674a9d8491ad7e56b9fc702e133470d20d536a06ef87373f3e895cb75750b60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b674a9d8491ad7e56b9fc702e133470d20d536a06ef87373f3e895cb75750b60->enter($__internal_b674a9d8491ad7e56b9fc702e133470d20d536a06ef87373f3e895cb75750b60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Erreur - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " ";
        
        $__internal_b674a9d8491ad7e56b9fc702e133470d20d536a06ef87373f3e895cb75750b60->leave($__internal_b674a9d8491ad7e56b9fc702e133470d20d536a06ef87373f3e895cb75750b60_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_720929aa15526c2d8b9500bbf971ae9ca0176a68acbd58def5753bf5cdb77431 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_720929aa15526c2d8b9500bbf971ae9ca0176a68acbd58def5753bf5cdb77431->enter($__internal_720929aa15526c2d8b9500bbf971ae9ca0176a68acbd58def5753bf5cdb77431_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    <div class=\"container-fluid text-center\">
        
        <h1>Erreur 404</h1>
        
        ";
        // line 11
        if (((isset($context["code"]) ? $context["code"] : $this->getContext($context, "code")) == 1)) {
            // line 12
            echo "            <h4>Ce Quizz n'existe pas.</h4>
        ";
        } elseif ((        // line 13
(isset($context["code"]) ? $context["code"] : $this->getContext($context, "code")) == 2)) {
            // line 14
            echo "            <h4>Cet utilisateur n'existe pas.</h4>
        ";
        } elseif ((        // line 15
(isset($context["code"]) ? $context["code"] : $this->getContext($context, "code")) == 3)) {
            // line 16
            echo "            <h4>La page n'existe pas.</h4>
        ";
        } elseif ((        // line 17
(isset($context["code"]) ? $context["code"] : $this->getContext($context, "code")) == 4)) {
            // line 18
            echo "            <h4>Ce thème n'existe pas.</h4>
        ";
        }
        // line 20
        echo "        
        <br />
        <a href='";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "'>Retourner à l'accueil.</a>
                               
    </div>
";
        
        $__internal_720929aa15526c2d8b9500bbf971ae9ca0176a68acbd58def5753bf5cdb77431->leave($__internal_720929aa15526c2d8b9500bbf971ae9ca0176a68acbd58def5753bf5cdb77431_prof);

    }

    public function getTemplateName()
    {
        return "GeneralBundle:Error:access-404.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 22,  82 => 20,  78 => 18,  76 => 17,  73 => 16,  71 => 15,  68 => 14,  66 => 13,  63 => 12,  61 => 11,  55 => 7,  49 => 6,  35 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"::base.html.twig\" %}

{% block title %} Erreur - {{ parent() }} {% endblock %}


{% block body %}
    <div class=\"container-fluid text-center\">
        
        <h1>Erreur 404</h1>
        
        {% if code == 1 %}
            <h4>Ce Quizz n'existe pas.</h4>
        {% elseif code == 2 %}
            <h4>Cet utilisateur n'existe pas.</h4>
        {% elseif code == 3 %}
            <h4>La page n'existe pas.</h4>
        {% elseif code == 4 %}
            <h4>Ce thème n'existe pas.</h4>
        {% endif %}
        
        <br />
        <a href='{{path('homepage')}}'>Retourner à l'accueil.</a>
                               
    </div>
{% endblock %}";
    }
}
