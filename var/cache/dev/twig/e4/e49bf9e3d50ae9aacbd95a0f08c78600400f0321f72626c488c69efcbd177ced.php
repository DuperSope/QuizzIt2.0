<?php

/* AdminBundle::theme.html.twig */
class __TwigTemplate_b227c4cc4503e0adb6cbfb522643f468ff1308ba64d2c41bc48f90c383c2e6b0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AdminBundle::theme.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_698f5e39cfa45bb79c375ff1eb0a475c7961c7700aa771bd84ffeb94f3816389 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_698f5e39cfa45bb79c375ff1eb0a475c7961c7700aa771bd84ffeb94f3816389->enter($__internal_698f5e39cfa45bb79c375ff1eb0a475c7961c7700aa771bd84ffeb94f3816389_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle::theme.html.twig"));

        // line 14
        $context["theme_admin"] = 1;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_698f5e39cfa45bb79c375ff1eb0a475c7961c7700aa771bd84ffeb94f3816389->leave($__internal_698f5e39cfa45bb79c375ff1eb0a475c7961c7700aa771bd84ffeb94f3816389_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_00b3dff6aab80f87f885e09f17297bf48d9cc3dfdfed05a372c8551a49c1402d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00b3dff6aab80f87f885e09f17297bf48d9cc3dfdfed05a372c8551a49c1402d->enter($__internal_00b3dff6aab80f87f885e09f17297bf48d9cc3dfdfed05a372c8551a49c1402d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Gestion des thèmes - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " ";
        
        $__internal_00b3dff6aab80f87f885e09f17297bf48d9cc3dfdfed05a372c8551a49c1402d->leave($__internal_00b3dff6aab80f87f885e09f17297bf48d9cc3dfdfed05a372c8551a49c1402d_prof);

    }

    // line 5
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0dcbf34aa8fea5eff886faae49ddeae2bd3db102d765b398baeff7490c8657b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0dcbf34aa8fea5eff886faae49ddeae2bd3db102d765b398baeff7490c8657b6->enter($__internal_0dcbf34aa8fea5eff886faae49ddeae2bd3db102d765b398baeff7490c8657b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 6
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
            ";
        // line 7
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "4d28477_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_4d28477_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/4d28477_theme_1.js");
            // line 10
            echo "                        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
                    ";
        } else {
            // asset "4d28477"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_4d28477") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/4d28477.js");
            echo "                        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
                    ";
        }
        unset($context["asset_url"]);
        // line 12
        echo "        ";
        
        $__internal_0dcbf34aa8fea5eff886faae49ddeae2bd3db102d765b398baeff7490c8657b6->leave($__internal_0dcbf34aa8fea5eff886faae49ddeae2bd3db102d765b398baeff7490c8657b6_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_527c0adff3666cfc983cb8bf3fb1b480e209233817248c80130c01d645084202 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_527c0adff3666cfc983cb8bf3fb1b480e209233817248c80130c01d645084202->enter($__internal_527c0adff3666cfc983cb8bf3fb1b480e209233817248c80130c01d645084202_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 17
        echo "    <div class=\"container-fluid\">
        ";
        // line 18
        $this->loadTemplate("GeneralBundle:Template:theme.html.twig", "AdminBundle::theme.html.twig", 18)->display($context);
        // line 19
        echo "        
        ";
        // line 20
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        
        ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'widget');
        echo "
        ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array()), 'widget');
        echo "
        ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "level", array()), 'widget');
        echo "
        
        ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'widget');
        echo "
        <span id=\"path\" path='";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_theme");
        echo "'></span>
    </div>
";
        
        $__internal_527c0adff3666cfc983cb8bf3fb1b480e209233817248c80130c01d645084202->leave($__internal_527c0adff3666cfc983cb8bf3fb1b480e209233817248c80130c01d645084202_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle::theme.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 27,  121 => 26,  116 => 24,  112 => 23,  108 => 22,  103 => 20,  100 => 19,  98 => 18,  95 => 17,  89 => 16,  82 => 12,  68 => 10,  64 => 7,  59 => 6,  53 => 5,  39 => 3,  32 => 1,  30 => 14,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"::base.html.twig\" %}

{% block title %}Gestion des thèmes - {{ parent() }} {% endblock %}

{% block javascripts %}
    {{ parent() }}
            {% javascripts
                        '@GeneralBundle/Resources/public/theme.js'
                        %}
                        <script src=\"{{ asset_url }}\"></script>
                    {% endjavascripts %}
        {% endblock %}
        
{% set theme_admin = 1 %}

{% block body %}
    <div class=\"container-fluid\">
        {% include \"GeneralBundle:Template:theme.html.twig\" %}
        
        {{ form_start(form) }}
        
        {{ form_widget(form.name) }}
        {{ form_widget(form.parent) }}
        {{ form_widget(form.level) }}
        
        {{ form_widget(form._token) }}
        <span id=\"path\" path='{{ path('admin_theme') }}'></span>
    </div>
{% endblock %}";
    }
}
