<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_aabf8210bebbc7838ec070604bf3d2704547ebc29da50f602cd06a718dd35bd3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_12142d0295ab57b58e573f2470f7a58bb412186f536d5c450f84842ff88102cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12142d0295ab57b58e573f2470f7a58bb412186f536d5c450f84842ff88102cb->enter($__internal_12142d0295ab57b58e573f2470f7a58bb412186f536d5c450f84842ff88102cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_12142d0295ab57b58e573f2470f7a58bb412186f536d5c450f84842ff88102cb->leave($__internal_12142d0295ab57b58e573f2470f7a58bb412186f536d5c450f84842ff88102cb_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6a4bb40a21639c592c6ec8747137a8112e212d622599b6e2aa304747892014a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a4bb40a21639c592c6ec8747137a8112e212d622599b6e2aa304747892014a2->enter($__internal_6a4bb40a21639c592c6ec8747137a8112e212d622599b6e2aa304747892014a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_6a4bb40a21639c592c6ec8747137a8112e212d622599b6e2aa304747892014a2->leave($__internal_6a4bb40a21639c592c6ec8747137a8112e212d622599b6e2aa304747892014a2_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_2c7dfd3e34498f2bf36b2a949af172c6ea9f15000d0f786811cc636afeb64cba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c7dfd3e34498f2bf36b2a949af172c6ea9f15000d0f786811cc636afeb64cba->enter($__internal_2c7dfd3e34498f2bf36b2a949af172c6ea9f15000d0f786811cc636afeb64cba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_2c7dfd3e34498f2bf36b2a949af172c6ea9f15000d0f786811cc636afeb64cba->leave($__internal_2c7dfd3e34498f2bf36b2a949af172c6ea9f15000d0f786811cc636afeb64cba_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_5e527fce2c0120e6e77a9469ebbd1e25dd6cc6593e4fa5e04ba65c6d834f62bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e527fce2c0120e6e77a9469ebbd1e25dd6cc6593e4fa5e04ba65c6d834f62bd->enter($__internal_5e527fce2c0120e6e77a9469ebbd1e25dd6cc6593e4fa5e04ba65c6d834f62bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_5e527fce2c0120e6e77a9469ebbd1e25dd6cc6593e4fa5e04ba65c6d834f62bd->leave($__internal_5e527fce2c0120e6e77a9469ebbd1e25dd6cc6593e4fa5e04ba65c6d834f62bd_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
";
    }
}
