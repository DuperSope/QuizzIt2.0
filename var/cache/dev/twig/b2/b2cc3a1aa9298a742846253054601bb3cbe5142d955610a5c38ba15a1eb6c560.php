<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_615296e52bfad5435ee84c936c31234fba7e2a7930e5999378c580384b10e45b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5c284382e8fa80ef4202100fff1b399ffe87c35e3653ad8e2e3af1405d11556b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c284382e8fa80ef4202100fff1b399ffe87c35e3653ad8e2e3af1405d11556b->enter($__internal_5c284382e8fa80ef4202100fff1b399ffe87c35e3653ad8e2e3af1405d11556b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5c284382e8fa80ef4202100fff1b399ffe87c35e3653ad8e2e3af1405d11556b->leave($__internal_5c284382e8fa80ef4202100fff1b399ffe87c35e3653ad8e2e3af1405d11556b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6a0bff93a3b6e6566b4049084efcc69f22e13ee09b7de2ddf2018332fd54df60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a0bff93a3b6e6566b4049084efcc69f22e13ee09b7de2ddf2018332fd54df60->enter($__internal_6a0bff93a3b6e6566b4049084efcc69f22e13ee09b7de2ddf2018332fd54df60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_6a0bff93a3b6e6566b4049084efcc69f22e13ee09b7de2ddf2018332fd54df60->leave($__internal_6a0bff93a3b6e6566b4049084efcc69f22e13ee09b7de2ddf2018332fd54df60_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_8286a2cda78398c5332545349c2eaf9e7e1e0e680ea6893f8e464e3c83472cb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8286a2cda78398c5332545349c2eaf9e7e1e0e680ea6893f8e464e3c83472cb3->enter($__internal_8286a2cda78398c5332545349c2eaf9e7e1e0e680ea6893f8e464e3c83472cb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_8286a2cda78398c5332545349c2eaf9e7e1e0e680ea6893f8e464e3c83472cb3->leave($__internal_8286a2cda78398c5332545349c2eaf9e7e1e0e680ea6893f8e464e3c83472cb3_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
";
    }
}
