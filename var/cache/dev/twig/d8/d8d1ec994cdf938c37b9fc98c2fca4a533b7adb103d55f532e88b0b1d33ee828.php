<?php

/* ::base.html.twig */
class __TwigTemplate_474a29712af9256e2a4ededbed499284e196190dd28aa18d452108d93c97297b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1ca75e14418257aa9b4eed7f1da922f3ce5bc37709d25d054169349cb1a5dd1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ca75e14418257aa9b4eed7f1da922f3ce5bc37709d25d054169349cb1a5dd1e->enter($__internal_1ca75e14418257aa9b4eed7f1da922f3ce5bc37709d25d054169349cb1a5dd1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        // line 16
        echo "        
        ";
        // line 17
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "a240c67_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_a240c67_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/images/a240c67_logo_1.png");
            // line 18
            echo "                <link rel=\"icon\" type=\"image/x-icon\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
            ";
        } else {
            // asset "a240c67"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_a240c67") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/images/a240c67.png");
            echo "                <link rel=\"icon\" type=\"image/x-icon\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
            ";
        }
        unset($context["asset_url"]);
        // line 20
        echo "    </head>
    <body>
        
        <nav class=\"navbar navbar-default\" role=\"navigation\">
            <div class=\"container-fluid col-xs-offset-1 col-xs-10\">
                
                <div class=\"navbar-header\">
                    
                    <a class=\"navbar-brand\" href=\"";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">Quizz It</a>
                </div>
                
                <div class=\"collapse navbar-collapse\">
                    
                    ";
        // line 33
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 34
            echo "                        <ul class=\"nav navbar-nav\">
                            <li><a href=\"";
            // line 35
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("myquizz");
            echo "\">Mes Quizz</a></li>
                            <li><a href=\"";
            // line 36
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("myresults");
            echo "\">Mes Résultats</a></li>
                            ";
            // line 38
            echo "                        </ul>

                        <ul class=\"nav navbar-right navbar-nav\">
                            ";
            // line 41
            if (twig_in_filter("ROLE_ADMIN", $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "roles", array()))) {
                // line 42
                echo "                                <li><a href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_homepage");
                echo "\">Administration</a></li>
                            ";
            }
            // line 44
            echo "                            <li class=\"\"><a href='";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("privateprofile", array("userid" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
            echo "'><b>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "</b></a></li>
                            <li><a href=\"";
            // line 45
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
            echo "\">Déconnexion</a></li>
                        </ul>
                    ";
        } else {
            // line 47
            echo "     
                    <ul class=\"nav navbar-right navbar-nav\">
                        <li><a href=\"";
            // line 49
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
            echo "\">Connexion</a></li>
                        <li><a href=\"";
            // line 50
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("register");
            echo "\">Inscription</a></li>
                    </ul>
                    ";
        }
        // line 53
        echo "                    
                </div>
                
            </div>
        </nav>
        ";
        // line 58
        $this->displayBlock('body', $context, $blocks);
        // line 59
        echo "        
         <footer class=\"navbar-fixed-bottom\">
        <div class=\"footer-copyright text-center\">
            ";
        // line 62
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "a240c67_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_a240c67_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/images/a240c67_logo_1.png");
            // line 63
            echo "                <img src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" height=\"50px\"/>
            ";
        } else {
            // asset "a240c67"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_a240c67") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/images/a240c67.png");
            echo "                <img src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" height=\"50px\"/>
            ";
        }
        unset($context["asset_url"]);
        // line 65
        echo "            QuizzIt <i>développé par Yoann Bohssain</i>
        </div>
    </footer>
        
        ";
        // line 69
        $this->displayBlock('javascripts', $context, $blocks);
        // line 81
        echo "    </body>
    
   
</html>
";
        
        $__internal_1ca75e14418257aa9b4eed7f1da922f3ce5bc37709d25d054169349cb1a5dd1e->leave($__internal_1ca75e14418257aa9b4eed7f1da922f3ce5bc37709d25d054169349cb1a5dd1e_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_97c8bc5deeb45a764d5d588bd4211ce4c5880f3f71db7393559dd012918b9793 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97c8bc5deeb45a764d5d588bd4211ce4c5880f3f71db7393559dd012918b9793->enter($__internal_97c8bc5deeb45a764d5d588bd4211ce4c5880f3f71db7393559dd012918b9793_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "QuizzIt";
        
        $__internal_97c8bc5deeb45a764d5d588bd4211ce4c5880f3f71db7393559dd012918b9793->leave($__internal_97c8bc5deeb45a764d5d588bd4211ce4c5880f3f71db7393559dd012918b9793_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6f9b262645049aafcc6f4b9a172dfc0fd73d91e905b674b178fd2dde3583988b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f9b262645049aafcc6f4b9a172dfc0fd73d91e905b674b178fd2dde3583988b->enter($__internal_6f9b262645049aafcc6f4b9a172dfc0fd73d91e905b674b178fd2dde3583988b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        echo "            ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "08831e2_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_08831e2_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/08831e2_part_1_bootflat_1.css");
            // line 12
            echo "                <link rel=\"stylesheet\" type=\"text/css\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/bmatznerfontawesome/css/font-awesome.min.css"), "html", null, true);
            echo "\" />
                <link rel=\"stylesheet\" href=\"";
            // line 13
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
            ";
            // asset "08831e2_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_08831e2_1") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/08831e2_part_1_bootstrap.min_2.css");
            // line 12
            echo "                <link rel=\"stylesheet\" type=\"text/css\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/bmatznerfontawesome/css/font-awesome.min.css"), "html", null, true);
            echo "\" />
                <link rel=\"stylesheet\" href=\"";
            // line 13
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
            ";
            // asset "08831e2_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_08831e2_2") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/08831e2_part_1_custom_3.css");
            // line 12
            echo "                <link rel=\"stylesheet\" type=\"text/css\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/bmatznerfontawesome/css/font-awesome.min.css"), "html", null, true);
            echo "\" />
                <link rel=\"stylesheet\" href=\"";
            // line 13
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
            ";
        } else {
            // asset "08831e2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_08831e2") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/08831e2.css");
            // line 12
            echo "                <link rel=\"stylesheet\" type=\"text/css\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/bmatznerfontawesome/css/font-awesome.min.css"), "html", null, true);
            echo "\" />
                <link rel=\"stylesheet\" href=\"";
            // line 13
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
            ";
        }
        unset($context["asset_url"]);
        // line 15
        echo "        ";
        
        $__internal_6f9b262645049aafcc6f4b9a172dfc0fd73d91e905b674b178fd2dde3583988b->leave($__internal_6f9b262645049aafcc6f4b9a172dfc0fd73d91e905b674b178fd2dde3583988b_prof);

    }

    // line 58
    public function block_body($context, array $blocks = array())
    {
        $__internal_95a440a712043385025f150276af7e5bd93b645da64c0a3b64a3d81682fdba1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95a440a712043385025f150276af7e5bd93b645da64c0a3b64a3d81682fdba1c->enter($__internal_95a440a712043385025f150276af7e5bd93b645da64c0a3b64a3d81682fdba1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_95a440a712043385025f150276af7e5bd93b645da64c0a3b64a3d81682fdba1c->leave($__internal_95a440a712043385025f150276af7e5bd93b645da64c0a3b64a3d81682fdba1c_prof);

    }

    // line 69
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_90ed293a48481546a68e79ddd185cb66c40860e75fa87dd1cae74f86b6e4df0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90ed293a48481546a68e79ddd185cb66c40860e75fa87dd1cae74f86b6e4df0d->enter($__internal_90ed293a48481546a68e79ddd185cb66c40860e75fa87dd1cae74f86b6e4df0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 70
        echo "            ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "c0ff3d3_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_c0ff3d3_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/c0ff3d3_jquery-1.10.1.min_1.js");
            // line 78
            echo "                        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
                    ";
            // asset "c0ff3d3_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_c0ff3d3_1") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/c0ff3d3_bootstrap.min_2.js");
            echo "                        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
                    ";
            // asset "c0ff3d3_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_c0ff3d3_2") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/c0ff3d3_html5shiv_3.js");
            echo "                        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
                    ";
            // asset "c0ff3d3_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_c0ff3d3_3") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/c0ff3d3_respond.min_4.js");
            echo "                        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
                    ";
            // asset "c0ff3d3_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_c0ff3d3_4") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/c0ff3d3_custom_5.js");
            echo "                        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
                    ";
            // asset "c0ff3d3_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_c0ff3d3_5") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/c0ff3d3_spin.min_6.js");
            echo "                        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
                    ";
        } else {
            // asset "c0ff3d3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_c0ff3d3") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/c0ff3d3.js");
            echo "                        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
                    ";
        }
        unset($context["asset_url"]);
        // line 80
        echo "        ";
        
        $__internal_90ed293a48481546a68e79ddd185cb66c40860e75fa87dd1cae74f86b6e4df0d->leave($__internal_90ed293a48481546a68e79ddd185cb66c40860e75fa87dd1cae74f86b6e4df0d_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  324 => 80,  280 => 78,  275 => 70,  269 => 69,  258 => 58,  251 => 15,  245 => 13,  240 => 12,  233 => 13,  228 => 12,  222 => 13,  217 => 12,  211 => 13,  206 => 12,  201 => 9,  195 => 8,  183 => 6,  172 => 81,  170 => 69,  164 => 65,  150 => 63,  146 => 62,  141 => 59,  139 => 58,  132 => 53,  126 => 50,  122 => 49,  118 => 47,  112 => 45,  105 => 44,  99 => 42,  97 => 41,  92 => 38,  88 => 36,  84 => 35,  81 => 34,  79 => 33,  71 => 28,  61 => 20,  47 => 18,  43 => 17,  40 => 16,  38 => 8,  33 => 6,  26 => 1,);
    }

    public function getSource()
    {
        return "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        
        <title>{% block title %}QuizzIt{% endblock %}</title>
        
        {% block stylesheets %}
            {% stylesheets 
                'bundles/General/css/*'
            %}
                <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('bundles/bmatznerfontawesome/css/font-awesome.min.css') }}\" />
                <link rel=\"stylesheet\" href=\"{{ asset_url }}\" type=\"text/css\" />
            {% endstylesheets %}
        {% endblock %}
        
        {% image '@GeneralBundle/Resources/public/images/logo.png' %}
                <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset_url }}\" />
            {% endimage %}
    </head>
    <body>
        
        <nav class=\"navbar navbar-default\" role=\"navigation\">
            <div class=\"container-fluid col-xs-offset-1 col-xs-10\">
                
                <div class=\"navbar-header\">
                    
                    <a class=\"navbar-brand\" href=\"{{ path('homepage') }}\">Quizz It</a>
                </div>
                
                <div class=\"collapse navbar-collapse\">
                    
                    {% if is_granted('IS_AUTHENTICATED_FULLY') %}
                        <ul class=\"nav navbar-nav\">
                            <li><a href=\"{{path('myquizz') }}\">Mes Quizz</a></li>
                            <li><a href=\"{{path('myresults') }}\">Mes Résultats</a></li>
                            {#<li><a href=\"#\">Mon Compte</a></li>#}
                        </ul>

                        <ul class=\"nav navbar-right navbar-nav\">
                            {% if \"ROLE_ADMIN\" in app.user.roles %}
                                <li><a href=\"{{path('admin_homepage') }}\">Administration</a></li>
                            {% endif %}
                            <li class=\"\"><a href='{{path('privateprofile', { 'userid': app.user.id }) }}'><b>{{ app.user.username }}</b></a></li>
                            <li><a href=\"{{path('logout') }}\">Déconnexion</a></li>
                        </ul>
                    {% else %}     
                    <ul class=\"nav navbar-right navbar-nav\">
                        <li><a href=\"{{path('login') }}\">Connexion</a></li>
                        <li><a href=\"{{path('register') }}\">Inscription</a></li>
                    </ul>
                    {% endif %}
                    
                </div>
                
            </div>
        </nav>
        {% block body %}{% endblock %}
        
         <footer class=\"navbar-fixed-bottom\">
        <div class=\"footer-copyright text-center\">
            {% image '@GeneralBundle/Resources/public/images/logo.png' %}
                <img src=\"{{ asset_url }}\" height=\"50px\"/>
            {% endimage %}
            QuizzIt <i>développé par Yoann Bohssain</i>
        </div>
    </footer>
        
        {% block javascripts %}
            {% javascripts
                        '@GeneralBundle/Resources/public/js/jquery-1.10.1.min.js'
                        '@GeneralBundle/Resources/public/js/bootstrap.min.js'
                        '@GeneralBundle/Resources/public/js/html5shiv.js'
                        '@GeneralBundle/Resources/public/js/respond.min.js'
                        '@GeneralBundle/Resources/public/js/custom.js'
                        '@GeneralBundle/Resources/public/js/spin.min.js'
                        %}
                        <script src=\"{{ asset_url }}\"></script>
                    {% endjavascripts %}
        {% endblock %}
    </body>
    
   
</html>
";
    }
}
