<?php

/* GeneralBundle:Error:access-deleted.html.twig */
class __TwigTemplate_d2f091da524b15ad536b69ebb7451750bf40f23cbac77dac213b26f2f3b9fb67 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "GeneralBundle:Error:access-deleted.html.twig", 1);
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
        $__internal_6ccfa7bf79c2412cf2adb38a4728dcce81c164a9610631d33d893b504e20b58f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ccfa7bf79c2412cf2adb38a4728dcce81c164a9610631d33d893b504e20b58f->enter($__internal_6ccfa7bf79c2412cf2adb38a4728dcce81c164a9610631d33d893b504e20b58f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GeneralBundle:Error:access-deleted.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6ccfa7bf79c2412cf2adb38a4728dcce81c164a9610631d33d893b504e20b58f->leave($__internal_6ccfa7bf79c2412cf2adb38a4728dcce81c164a9610631d33d893b504e20b58f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1b08ec7bd0b6af83a1fa4f0650df0d3aeaf3f89a62af48a22c727c6240d21b8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b08ec7bd0b6af83a1fa4f0650df0d3aeaf3f89a62af48a22c727c6240d21b8a->enter($__internal_1b08ec7bd0b6af83a1fa4f0650df0d3aeaf3f89a62af48a22c727c6240d21b8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Erreur - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " ";
        
        $__internal_1b08ec7bd0b6af83a1fa4f0650df0d3aeaf3f89a62af48a22c727c6240d21b8a->leave($__internal_1b08ec7bd0b6af83a1fa4f0650df0d3aeaf3f89a62af48a22c727c6240d21b8a_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_4b82e193245f22c179c622250f35d144a8dfabc9a208f6ac9ffbd071b2144fe7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b82e193245f22c179c622250f35d144a8dfabc9a208f6ac9ffbd071b2144fe7->enter($__internal_4b82e193245f22c179c622250f35d144a8dfabc9a208f6ac9ffbd071b2144fe7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    <div class=\"container-fluid text-center\">
        
        <h1>Ce Quizz a été supprimé.</h1>
        
        <a href='";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "'>Retourner à l'accueil.</a>
                                  
    </div>
";
        
        $__internal_4b82e193245f22c179c622250f35d144a8dfabc9a208f6ac9ffbd071b2144fe7->leave($__internal_4b82e193245f22c179c622250f35d144a8dfabc9a208f6ac9ffbd071b2144fe7_prof);

    }

    public function getTemplateName()
    {
        return "GeneralBundle:Error:access-deleted.html.twig";
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
        
        <h1>Ce Quizz a été supprimé.</h1>
        
        <a href='{{path('homepage')}}'>Retourner à l'accueil.</a>
                                  
    </div>
{% endblock %}";
    }
}
