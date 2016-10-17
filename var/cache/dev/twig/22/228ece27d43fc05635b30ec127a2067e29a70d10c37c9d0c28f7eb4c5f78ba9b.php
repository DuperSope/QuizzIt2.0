<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_8141ac492e16a192e9d1cabb8536e93ea2c48379426adee2a6f97a4890ba4ed8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_bcca45a754442d2b295625331bc45e284a1a319f390b0eb68bce6cabf93f7912 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcca45a754442d2b295625331bc45e284a1a319f390b0eb68bce6cabf93f7912->enter($__internal_bcca45a754442d2b295625331bc45e284a1a319f390b0eb68bce6cabf93f7912_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bcca45a754442d2b295625331bc45e284a1a319f390b0eb68bce6cabf93f7912->leave($__internal_bcca45a754442d2b295625331bc45e284a1a319f390b0eb68bce6cabf93f7912_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5495edd68c34af95e225be6b66eee5c8bb2d95635eb9d1a052e342629a4b62a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5495edd68c34af95e225be6b66eee5c8bb2d95635eb9d1a052e342629a4b62a7->enter($__internal_5495edd68c34af95e225be6b66eee5c8bb2d95635eb9d1a052e342629a4b62a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_5495edd68c34af95e225be6b66eee5c8bb2d95635eb9d1a052e342629a4b62a7->leave($__internal_5495edd68c34af95e225be6b66eee5c8bb2d95635eb9d1a052e342629a4b62a7_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_669529e22913b3764551bb840030619042abdae8e2b19d1db886287d3587bf56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_669529e22913b3764551bb840030619042abdae8e2b19d1db886287d3587bf56->enter($__internal_669529e22913b3764551bb840030619042abdae8e2b19d1db886287d3587bf56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_669529e22913b3764551bb840030619042abdae8e2b19d1db886287d3587bf56->leave($__internal_669529e22913b3764551bb840030619042abdae8e2b19d1db886287d3587bf56_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e47ac66c95fc2b3fb8690c56d2b5e5816469de9d4523d53e092f5940380a016f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e47ac66c95fc2b3fb8690c56d2b5e5816469de9d4523d53e092f5940380a016f->enter($__internal_e47ac66c95fc2b3fb8690c56d2b5e5816469de9d4523d53e092f5940380a016f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_e47ac66c95fc2b3fb8690c56d2b5e5816469de9d4523d53e092f5940380a016f->leave($__internal_e47ac66c95fc2b3fb8690c56d2b5e5816469de9d4523d53e092f5940380a016f_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
";
    }
}
