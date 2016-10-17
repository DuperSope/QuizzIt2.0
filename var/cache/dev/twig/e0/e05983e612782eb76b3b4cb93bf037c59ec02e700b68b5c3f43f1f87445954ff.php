<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_7b7127371892ceb9f84d4b864aceca6f47b59f47417b27138152493c7a972f08 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a224f1c0e31dd4862fa9422b92c0703eeeeae412f59e3891d2fca89cffe26a15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a224f1c0e31dd4862fa9422b92c0703eeeeae412f59e3891d2fca89cffe26a15->enter($__internal_a224f1c0e31dd4862fa9422b92c0703eeeeae412f59e3891d2fca89cffe26a15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a224f1c0e31dd4862fa9422b92c0703eeeeae412f59e3891d2fca89cffe26a15->leave($__internal_a224f1c0e31dd4862fa9422b92c0703eeeeae412f59e3891d2fca89cffe26a15_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_de3ecd88bb0d4d8e00334288e17d5db5fbdad9a7b4af896de5df471c381e5a9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de3ecd88bb0d4d8e00334288e17d5db5fbdad9a7b4af896de5df471c381e5a9e->enter($__internal_de3ecd88bb0d4d8e00334288e17d5db5fbdad9a7b4af896de5df471c381e5a9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_de3ecd88bb0d4d8e00334288e17d5db5fbdad9a7b4af896de5df471c381e5a9e->leave($__internal_de3ecd88bb0d4d8e00334288e17d5db5fbdad9a7b4af896de5df471c381e5a9e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_bde97668cfe62d6ffbfdcf2f6e082243ccd7913f0cd65c703407f74d6e974b56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bde97668cfe62d6ffbfdcf2f6e082243ccd7913f0cd65c703407f74d6e974b56->enter($__internal_bde97668cfe62d6ffbfdcf2f6e082243ccd7913f0cd65c703407f74d6e974b56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_bde97668cfe62d6ffbfdcf2f6e082243ccd7913f0cd65c703407f74d6e974b56->leave($__internal_bde97668cfe62d6ffbfdcf2f6e082243ccd7913f0cd65c703407f74d6e974b56_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a508c3eedcfd12770fa6460a3c685965a84f5f370acee1c1132ed38ffb035eb1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a508c3eedcfd12770fa6460a3c685965a84f5f370acee1c1132ed38ffb035eb1->enter($__internal_a508c3eedcfd12770fa6460a3c685965a84f5f370acee1c1132ed38ffb035eb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_a508c3eedcfd12770fa6460a3c685965a84f5f370acee1c1132ed38ffb035eb1->leave($__internal_a508c3eedcfd12770fa6460a3c685965a84f5f370acee1c1132ed38ffb035eb1_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
";
    }
}
