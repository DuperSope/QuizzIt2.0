<?php

/* QuizzBundle:Quizz:teddypreview.html.twig */
class __TwigTemplate_160dc12d44831974abdf38c9bac575ba124ef111bd07a415d8568910fdbfb1ff extends Twig_Template
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
        $__internal_0fd23676796229c8b1945d51e2a7f4f52f7ac2c6e3b8eeabfa7e6220c7409cda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fd23676796229c8b1945d51e2a7f4f52f7ac2c6e3b8eeabfa7e6220c7409cda->enter($__internal_0fd23676796229c8b1945d51e2a7f4f52f7ac2c6e3b8eeabfa7e6220c7409cda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "QuizzBundle:Quizz:teddypreview.html.twig"));

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
        // line 24
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 25
            echo "                            <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("myquizzteddy");
            echo "\">Mes Quizz</a></li>
                            ";
            // line 28
            echo "                    
                    
                            <li class=\"right\"><a  href=\"";
            // line 30
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
            echo "\">Déconnexion</a></li>
                                                        <li class=\"right navbar-brand\"><a href=\"#\">";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "</a></li>

                    ";
        } else {
            // line 33
            echo "     
                        <li><a href=\"";
            // line 34
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
            echo "\">Connexion</a></li>
                        <li><a href=\"";
            // line 35
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("register");
            echo "\">Inscription</a></li>
                    ";
        }
        // line 37
        echo "        </ul>
    
    <div class=\"container-fluid\">
        
        
        
        <div class=\"tab-content col-xs-8 ";
        // line 43
        if (((isset($context["owner"]) ? $context["owner"] : $this->getContext($context, "owner")) == 0)) {
            echo "col-xs-offset-2";
        }
        echo "\">
            
            <div class='center' id=\"centralcontainer2\">
                <h1 class=\"text-center\"> ";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["quizz"]) ? $context["quizz"] : $this->getContext($context, "quizz")), "name", array()), "html", null, true);
        echo " </h1>
                <br />
                    
                            <div class=\"secondpanel panel-default\">
                            <div class=\"description\">
                                Description :
                            </div>
                            <div class=\"panel-body\">
                                ";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["quizz"]) ? $context["quizz"] : $this->getContext($context, "quizz")), "description", array()), "html", null, true);
        echo "
                            </div>
                            </div>

                         
                            
                    ";
        // line 60
        if (((isset($context["owner"]) ? $context["owner"] : $this->getContext($context, "owner")) == 1)) {
            // line 61
            echo "
                            <div class=\"secondpanel panel-default\">
                                <div class=\"description\">
                                    Description personnelle :
                                </div>
                                <div class=\"panel-body\">
                                    ";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["quizz"]) ? $context["quizz"] : $this->getContext($context, "quizz")), "userdescription", array()), "html", null, true);
            echo "
                                </div>
                            </div>
           
                    ";
        }
        // line 72
        echo "                
                <div class=\"row text-center\"><br /><blockquote>
                    Matière : <br /><b>";
        // line 74
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["quizz"]) ? $context["quizz"] : $this->getContext($context, "quizz")), "strTopic", array()), "html", null, true);
        echo "</b><br /><br >
                    Niveau : <br /><b>";
        // line 75
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["quizz"]) ? $context["quizz"] : $this->getContext($context, "quizz")), "strLevel", array()), "html", null, true);
        echo "</b><br /><br />
                    ";
        // line 76
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["quizz"]) ? $context["quizz"] : $this->getContext($context, "quizz")), "nbQuestion", array()), "html", null, true);
        echo " questions</blockquote>
                </div>
                <br /><br />
                <div class=\"row\">
                    <div class=\"col-xs-2 col-xs-offset-5 panel panel-default\">
                        <div class=\"text-center panel-body\">
                            <a class=\"bouton\" href=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("quizz_do", array("quizzid" => $this->getAttribute((isset($context["quizz"]) ? $context["quizz"] : $this->getContext($context, "quizz")), "id", array()))), "html", null, true);
        echo "\">Faire le Quizz</a>
                        </div>
                    </div>
                </div>
                
            </div>
            
        </div>
        
    </div>
    
";
        
        $__internal_0fd23676796229c8b1945d51e2a7f4f52f7ac2c6e3b8eeabfa7e6220c7409cda->leave($__internal_0fd23676796229c8b1945d51e2a7f4f52f7ac2c6e3b8eeabfa7e6220c7409cda_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_8ee6ecd9b7e309ec0509b59f9d358039b44baa3f2146d592d5b0d8e34f016c49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ee6ecd9b7e309ec0509b59f9d358039b44baa3f2146d592d5b0d8e34f016c49->enter($__internal_8ee6ecd9b7e309ec0509b59f9d358039b44baa3f2146d592d5b0d8e34f016c49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "QuizzIt";
        
        $__internal_8ee6ecd9b7e309ec0509b59f9d358039b44baa3f2146d592d5b0d8e34f016c49->leave($__internal_8ee6ecd9b7e309ec0509b59f9d358039b44baa3f2146d592d5b0d8e34f016c49_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e5ab5bd8f9c07e6270e29ca12c0d1aa1ca555d08f30d8fe893cceee4c703acd4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5ab5bd8f9c07e6270e29ca12c0d1aa1ca555d08f30d8fe893cceee4c703acd4->enter($__internal_e5ab5bd8f9c07e6270e29ca12c0d1aa1ca555d08f30d8fe893cceee4c703acd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_e5ab5bd8f9c07e6270e29ca12c0d1aa1ca555d08f30d8fe893cceee4c703acd4->leave($__internal_e5ab5bd8f9c07e6270e29ca12c0d1aa1ca555d08f30d8fe893cceee4c703acd4_prof);

    }

    public function getTemplateName()
    {
        return "QuizzBundle:Quizz:teddypreview.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  218 => 12,  204 => 10,  199 => 9,  193 => 8,  181 => 6,  162 => 82,  153 => 76,  149 => 75,  145 => 74,  141 => 72,  133 => 67,  125 => 61,  123 => 60,  114 => 54,  103 => 46,  95 => 43,  87 => 37,  82 => 35,  78 => 34,  75 => 33,  69 => 31,  65 => 30,  61 => 28,  56 => 25,  54 => 24,  42 => 15,  38 => 13,  36 => 8,  31 => 6,  24 => 1,);
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
        
        
        
        <div class=\"tab-content col-xs-8 {% if owner == 0 %}col-xs-offset-2{% endif %}\">
            
            <div class='center' id=\"centralcontainer2\">
                <h1 class=\"text-center\"> {{ quizz.name }} </h1>
                <br />
                    
                            <div class=\"secondpanel panel-default\">
                            <div class=\"description\">
                                Description :
                            </div>
                            <div class=\"panel-body\">
                                {{ quizz.description }}
                            </div>
                            </div>

                         
                            
                    {% if owner == 1 %}

                            <div class=\"secondpanel panel-default\">
                                <div class=\"description\">
                                    Description personnelle :
                                </div>
                                <div class=\"panel-body\">
                                    {{ quizz.userdescription }}
                                </div>
                            </div>
           
                    {% endif %}
                
                <div class=\"row text-center\"><br /><blockquote>
                    Matière : <br /><b>{{quizz.strTopic }}</b><br /><br >
                    Niveau : <br /><b>{{ quizz.strLevel }}</b><br /><br />
                    {{quizz.nbQuestion }} questions</blockquote>
                </div>
                <br /><br />
                <div class=\"row\">
                    <div class=\"col-xs-2 col-xs-offset-5 panel panel-default\">
                        <div class=\"text-center panel-body\">
                            <a class=\"bouton\" href=\"{{path(\"quizz_do\", { 'quizzid': quizz.id })}}\">Faire le Quizz</a>
                        </div>
                    </div>
                </div>
                
            </div>
            
        </div>
        
    </div>
    
";
    }
}
