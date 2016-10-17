<?php

/* GeneralBundle:UserZone:teddymyquizz.html.twig */
class __TwigTemplate_d7075e1920f53d647494242c7869e8fc45266e32575ae7f14293d197eff550e7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_30c28d708d5ea0a8740a8019fc64df5898fc8616959ac6809f7b29c618b1dccf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30c28d708d5ea0a8740a8019fc64df5898fc8616959ac6809f7b29c618b1dccf->enter($__internal_30c28d708d5ea0a8740a8019fc64df5898fc8616959ac6809f7b29c618b1dccf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GeneralBundle:UserZone:teddymyquizz.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        
        ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "        
        
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
        
    
    <body>

        <ul id=\"navbar\">
                                            <li><a href=\"#\">Quizz It !</a></li>

                    
                    ";
        // line 25
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 26
            echo "                            <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("myquizzteddy");
            echo "\">Mes Quizz</a></li>
                            ";
            // line 29
            echo "                    
                    
                            <li class=\"right\"><a  href=\"";
            // line 31
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
            echo "\">Déconnexion</a></li>
                                                        <li class=\"right navbar-brand\"><a href=\"#\">";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "</a></li>

                    ";
        } else {
            // line 34
            echo "     
                        <li><a href=\"";
            // line 35
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
            echo "\">Connexion</a></li>
                        <li><a href=\"";
            // line 36
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("register");
            echo "\">Inscription</a></li>
                    ";
        }
        // line 38
        echo "        </ul>

    <div class=\"container-fluid\">

        
        
        <div class=\"tab-content col-xs-8\">

            <div class=\"col-xs-11 col-xs-offset-1 tab-pane active\" id=\"quizzlist\" >
                
                ";
        // line 60
        echo "                        <div id='quizz'>
        <p>Mes Quizz</p>
        </div>
  
                
                <div id=\"centralcontainer\" class=\"\">
                        
                        <span class=\"tr\">
                            <span class=\"td\">Nom du Quizz</span>
                            <span class=\"td text-center\">Note moyenne</span>
                            <span class=\"td text-center\">Fait</span>
                        </span><br />
                        ";
        // line 72
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["quizzarray"]) ? $context["quizzarray"] : $this->getContext($context, "quizzarray")));
        foreach ($context['_seq'] as $context["_key"] => $context["quizz"]) {
            // line 73
            echo "                         
                            <span class=\"tr\">
                                <span class=\"td\"><a href=\"";
            // line 75
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("teddypreview", array("quizzid" => $this->getAttribute($context["quizz"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["quizz"], "name", array()), "html", null, true);
            echo "</a></span>
                                <span class=\"td text-center\">";
            // line 76
            echo twig_escape_filter($this->env, $this->getAttribute($context["quizz"], "rate", array()), "html", null, true);
            echo "</span>
                                <span class=\"td text-center\">";
            // line 77
            echo twig_escape_filter($this->env, $this->getAttribute($context["quizz"], "done", array()), "html", null, true);
            echo " fois</span>
                            </span>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['quizz'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "                </div>
            </div>       
                
           </div>
       
        </div>
    
    
";
        
        $__internal_30c28d708d5ea0a8740a8019fc64df5898fc8616959ac6809f7b29c618b1dccf->leave($__internal_30c28d708d5ea0a8740a8019fc64df5898fc8616959ac6809f7b29c618b1dccf_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_11f74300a30beaa4d042ad5a0a41f55a9dcd427c31f6a7d01d1dd4137f483dc0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11f74300a30beaa4d042ad5a0a41f55a9dcd427c31f6a7d01d1dd4137f483dc0->enter($__internal_11f74300a30beaa4d042ad5a0a41f55a9dcd427c31f6a7d01d1dd4137f483dc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "QuizzIt";
        
        $__internal_11f74300a30beaa4d042ad5a0a41f55a9dcd427c31f6a7d01d1dd4137f483dc0->leave($__internal_11f74300a30beaa4d042ad5a0a41f55a9dcd427c31f6a7d01d1dd4137f483dc0_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_898848b5513f01cdaf1d73b051b6e2e2a90d72e068359f6c46ead10dd9ee8bc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_898848b5513f01cdaf1d73b051b6e2e2a90d72e068359f6c46ead10dd9ee8bc6->enter($__internal_898848b5513f01cdaf1d73b051b6e2e2a90d72e068359f6c46ead10dd9ee8bc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        echo "            ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "f8cf4ce_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_f8cf4ce_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/f8cf4ce_part_1_custom_1.css");
            // line 10
            echo "                <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
            ";
        } else {
            // asset "f8cf4ce"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_f8cf4ce") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/f8cf4ce.css");
            echo "                <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
            ";
        }
        unset($context["asset_url"]);
        // line 12
        echo "        ";
        
        $__internal_898848b5513f01cdaf1d73b051b6e2e2a90d72e068359f6c46ead10dd9ee8bc6->leave($__internal_898848b5513f01cdaf1d73b051b6e2e2a90d72e068359f6c46ead10dd9ee8bc6_prof);

    }

    public function getTemplateName()
    {
        return "GeneralBundle:UserZone:teddymyquizz.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 12,  179 => 10,  174 => 9,  168 => 8,  156 => 6,  141 => 80,  132 => 77,  128 => 76,  122 => 75,  118 => 73,  114 => 72,  100 => 60,  88 => 38,  83 => 36,  79 => 35,  76 => 34,  70 => 32,  66 => 31,  62 => 29,  57 => 26,  55 => 25,  42 => 15,  38 => 13,  36 => 8,  31 => 6,  24 => 1,);
    }

    public function getSource()
    {
        return "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        
        <title>{% block title %}QuizzIt{% endblock %}</title>
        
        {% block stylesheets %}
            {% stylesheets 'bundles/General/teddy/*' %}
                <link rel=\"stylesheet\" href=\"{{ asset_url }}\" type=\"text/css\" />
            {% endstylesheets %}
        {% endblock %}
        
        
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
        
    
    <body>

        <ul id=\"navbar\">
                                            <li><a href=\"#\">Quizz It !</a></li>

                    
                    {% if is_granted('IS_AUTHENTICATED_REMEMBERED') %}
                            <li><a href=\"{{path('myquizzteddy') }}\">Mes Quizz</a></li>
                            {#<li><a href=\"#\">Mes Résultats</a></li>
                            <li><a href=\"#\">Mon Compte</a></li>#}
                    
                    
                            <li class=\"right\"><a  href=\"{{path('logout') }}\">Déconnexion</a></li>
                                                        <li class=\"right navbar-brand\"><a href=\"#\">{{ app.user.username }}</a></li>

                    {% else %}     
                        <li><a href=\"{{path('login') }}\">Connexion</a></li>
                        <li><a href=\"{{path('register') }}\">Inscription</a></li>
                    {% endif %}
        </ul>

    <div class=\"container-fluid\">

        
        
        <div class=\"tab-content col-xs-8\">

            <div class=\"col-xs-11 col-xs-offset-1 tab-pane active\" id=\"quizzlist\" >
                
                {#<div class=\"tab-pane tabbable tabs-left col-xs-2\" id=\"createquizzlateral\">
                   <ul class=\"nav nav-tabs text-center\">
                       <li class=\"\"><a>{{ quizzarray|lengspan }} Quizz</a></li>
                       {% set done, average_rate = 0, 0 %}
                       {% for quizz in quizzarray %}
                           {% set done, average_rate = done + quizz.done, average_rate + quizz.rate %} 
                           {% set average_rate = average_rate / quizzarray|lengspan %} 
                       {% endfor %} 
                       <li class=\"\"><a>Fait {{ done }} fois</a></li>
                       <li class=\"\"><a>Moyenne : <b>{{ average_rate }}</b></a></li>
                   </ul>
                </div>#}
                        <div id='quizz'>
        <p>Mes Quizz</p>
        </div>
  
                
                <div id=\"centralcontainer\" class=\"\">
                        
                        <span class=\"tr\">
                            <span class=\"td\">Nom du Quizz</span>
                            <span class=\"td text-center\">Note moyenne</span>
                            <span class=\"td text-center\">Fait</span>
                        </span><br />
                        {% for quizz in quizzarray %}
                         
                            <span class=\"tr\">
                                <span class=\"td\"><a href=\"{{path(\"teddypreview\", { 'quizzid': quizz.id })}}\">{{ quizz.name }}</a></span>
                                <span class=\"td text-center\">{{ quizz.rate }}</span>
                                <span class=\"td text-center\">{{ quizz.done }} fois</span>
                            </span>
                        {% endfor %}
                </div>
            </div>       
                
           </div>
       
        </div>
    
    
";
    }
}
