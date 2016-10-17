<?php

/* GeneralBundle::bytheme.html.twig */
class __TwigTemplate_efda4d12876a8696f3aab432247717ce625100f943db52667250bf815cb30007 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "GeneralBundle::bytheme.html.twig", 1);
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
        $__internal_4cb57989403e7221aecab66bdc696577df512e1e15181cf11f8307487f8a5a73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4cb57989403e7221aecab66bdc696577df512e1e15181cf11f8307487f8a5a73->enter($__internal_4cb57989403e7221aecab66bdc696577df512e1e15181cf11f8307487f8a5a73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GeneralBundle::bytheme.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4cb57989403e7221aecab66bdc696577df512e1e15181cf11f8307487f8a5a73->leave($__internal_4cb57989403e7221aecab66bdc696577df512e1e15181cf11f8307487f8a5a73_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6dd77f0e22748185269198e6679a248f5e67b3939331fda119a94309aeb85415 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6dd77f0e22748185269198e6679a248f5e67b3939331fda119a94309aeb85415->enter($__internal_6dd77f0e22748185269198e6679a248f5e67b3939331fda119a94309aeb85415_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Recherche par thème - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " ";
        
        $__internal_6dd77f0e22748185269198e6679a248f5e67b3939331fda119a94309aeb85415->leave($__internal_6dd77f0e22748185269198e6679a248f5e67b3939331fda119a94309aeb85415_prof);

    }

    // line 6
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a876143f0b0c33c32d3ce89a29e3b56984f22e23d66fcc48a7c0ce6247d95de0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a876143f0b0c33c32d3ce89a29e3b56984f22e23d66fcc48a7c0ce6247d95de0->enter($__internal_a876143f0b0c33c32d3ce89a29e3b56984f22e23d66fcc48a7c0ce6247d95de0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 7
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
            ";
        // line 8
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "0ab09d7_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_0ab09d7_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/0ab09d7_bytheme_1.js");
            // line 11
            echo "                        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
                    ";
        } else {
            // asset "0ab09d7"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_0ab09d7") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/0ab09d7.js");
            echo "                        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
                    ";
        }
        unset($context["asset_url"]);
        // line 13
        echo "        ";
        
        $__internal_a876143f0b0c33c32d3ce89a29e3b56984f22e23d66fcc48a7c0ce6247d95de0->leave($__internal_a876143f0b0c33c32d3ce89a29e3b56984f22e23d66fcc48a7c0ce6247d95de0_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_cc616be7b93c4a2f224222fdb8ac5f23fd167ca7dde62bbe418a2d8978b510dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc616be7b93c4a2f224222fdb8ac5f23fd167ca7dde62bbe418a2d8978b510dd->enter($__internal_cc616be7b93c4a2f224222fdb8ac5f23fd167ca7dde62bbe418a2d8978b510dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 17
        echo "    
    <div class=\"col-xs-10 col-xs-offset-1 text-center\">
        <h1>Recherche par thème</h1><hr/>
        
        <div class=\"col-xs-3\">
            <div class=\"tabbable tabs-left\">
                <ul id='themecontainer' class=\"nav nav-tabs\">
                    ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["themes"]) ? $context["themes"] : $this->getContext($context, "themes")));
        foreach ($context['_seq'] as $context["_key"] => $context["theme"]) {
            // line 25
            echo "                        <li class='";
            echo twig_escape_filter($this->env, $this->getAttribute($context["theme"], "id", array()), "html", null, true);
            echo "'><a class=\"theme\" id='";
            echo twig_escape_filter($this->env, $this->getAttribute($context["theme"], "id", array()), "html", null, true);
            echo "' i=0 lvl=0 href='#'>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["theme"], "name", array()), "html", null, true);
            echo "</a></li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['theme'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "                </ul>
            </div>
        </div>
                
        <div id=\"quizzcontainer\" class=\"col-xs-7\">
            
        </div>
           
    </div>
                
    <span class=\"hidden\" value=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("AJAXgetquizzbytheme");
        echo "\" id=\"getquizzpath\"></span>
    <span class=\"hidden\" value=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("AJAXgettheme");
        echo "\" id=\"getthemepath\"></span>
    <span class=\"hidden\" value=\"";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("AJAXreturntheme");
        echo "\" id=\"returnthemepath\"></span>
    <span class=\"hidden\" value=\"";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("quizz_preview", array("quizzid" => 1));
        echo "\" id=\"quizzpath\"></span>
";
        
        $__internal_cc616be7b93c4a2f224222fdb8ac5f23fd167ca7dde62bbe418a2d8978b510dd->leave($__internal_cc616be7b93c4a2f224222fdb8ac5f23fd167ca7dde62bbe418a2d8978b510dd_prof);

    }

    public function getTemplateName()
    {
        return "GeneralBundle::bytheme.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 40,  138 => 39,  134 => 38,  130 => 37,  118 => 27,  105 => 25,  101 => 24,  92 => 17,  86 => 16,  79 => 13,  65 => 11,  61 => 8,  56 => 7,  50 => 6,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"::base.html.twig\" %}

{% block title %} Recherche par thème - {{ parent() }} {% endblock %}


{% block javascripts %}
    {{ parent() }}
            {% javascripts
                        '@GeneralBundle/Resources/public/bytheme.js'
                        %}
                        <script src=\"{{ asset_url }}\"></script>
                    {% endjavascripts %}
        {% endblock %}


{% block body %}
    
    <div class=\"col-xs-10 col-xs-offset-1 text-center\">
        <h1>Recherche par thème</h1><hr/>
        
        <div class=\"col-xs-3\">
            <div class=\"tabbable tabs-left\">
                <ul id='themecontainer' class=\"nav nav-tabs\">
                    {% for theme in themes %}
                        <li class='{{theme.id}}'><a class=\"theme\" id='{{theme.id}}' i=0 lvl=0 href='#'>{{theme.name}}</a></li>
                    {% endfor %}
                </ul>
            </div>
        </div>
                
        <div id=\"quizzcontainer\" class=\"col-xs-7\">
            
        </div>
           
    </div>
                
    <span class=\"hidden\" value=\"{{ path('AJAXgetquizzbytheme') }}\" id=\"getquizzpath\"></span>
    <span class=\"hidden\" value=\"{{ path('AJAXgettheme') }}\" id=\"getthemepath\"></span>
    <span class=\"hidden\" value=\"{{ path('AJAXreturntheme') }}\" id=\"returnthemepath\"></span>
    <span class=\"hidden\" value=\"{{ path('quizz_preview', { 'quizzid': 1 }) }}\" id=\"quizzpath\"></span>
{% endblock %}";
    }
}
