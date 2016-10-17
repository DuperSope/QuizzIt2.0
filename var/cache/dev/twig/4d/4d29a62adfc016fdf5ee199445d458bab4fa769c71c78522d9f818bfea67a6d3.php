<?php

/* UserBundle:Security:changepassword.html.twig */
class __TwigTemplate_6daf789c67e22bf8f6bbf2621c550d8e9451f8579be1f83dd275148ca8150b65 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "UserBundle:Security:changepassword.html.twig", 1);
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
        $__internal_629b12844db64a9a4c922d1a4056f811787dd9f046e3a9844f0f128a96d3c2f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_629b12844db64a9a4c922d1a4056f811787dd9f046e3a9844f0f128a96d3c2f0->enter($__internal_629b12844db64a9a4c922d1a4056f811787dd9f046e3a9844f0f128a96d3c2f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Security:changepassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_629b12844db64a9a4c922d1a4056f811787dd9f046e3a9844f0f128a96d3c2f0->leave($__internal_629b12844db64a9a4c922d1a4056f811787dd9f046e3a9844f0f128a96d3c2f0_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4c00a8f6610121bb587e16104811e0a7be5d904dd2ec1794251d649430550ce2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c00a8f6610121bb587e16104811e0a7be5d904dd2ec1794251d649430550ce2->enter($__internal_4c00a8f6610121bb587e16104811e0a7be5d904dd2ec1794251d649430550ce2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Changer de mot de passe - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " ";
        
        $__internal_4c00a8f6610121bb587e16104811e0a7be5d904dd2ec1794251d649430550ce2->leave($__internal_4c00a8f6610121bb587e16104811e0a7be5d904dd2ec1794251d649430550ce2_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_c9ae5dae973347d9da6d89255a5505ff518f3e9e341968fbd8d787fa4eb2b126 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9ae5dae973347d9da6d89255a5505ff518f3e9e341968fbd8d787fa4eb2b126->enter($__internal_c9ae5dae973347d9da6d89255a5505ff518f3e9e341968fbd8d787fa4eb2b126_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    
    <div class=\"container-fluid\">
        
        <div class=\"col-xs-offset-2 col-xs-8\">
            
            <h1>Changer de mot de passe</h1>
            <br/>
            
            ";
        // line 15
        if (array_key_exists("success", $context)) {
            // line 16
            echo "                <div class=\"row\">
                        <div class=\"col-xs-6 col-xs-offset-3 text-center\">
                            <div class=\"alert alert-success\">
                                Mot de passe changé avec succès !
                            </div>
                            
                            <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("privateprofile", array("userid" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
            echo "\">Retourner sur mon profil.</a>
                        </div>
                    </div>
            ";
        } else {
            // line 26
            echo "                <form method=\"POST\" action=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("changepassword");
            echo "\">
                    ";
            // line 27
            if (array_key_exists("error", $context)) {
                // line 28
                echo "                        <div class=\"row\">
                            <div class=\"col-xs-6 col-xs-offset-3 text-center\">
                                <div class=\"alert alert-warning\">
                                    <b>Erreur : </b><br />
                                    ";
                // line 32
                echo twig_escape_filter($this->env, (isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "html", null, true);
                echo "
                                </div>
                            </div>
                        </div>
                    ";
            }
            // line 37
            echo "
                    <div class=\"row\">
                        <div class=\"col-xs-6 col-xs-offset-3 text-center\">
                            <label for=\"oldpass\">Ancien mot de passe :</label><br/>
                            <input type=\"password\" name=\"oldpass\" class=\"form-control auto-form\">
                        </div>
                    </div>
                    <br/><br/>
                    <div class=\"row text-center\">
                        <div class=\"col-xs-3 col-xs-offset-3\">
                            <label for=\"newpass\">Nouveau mot de passe :</label><br/>
                            <input type=\"password\" name=\"newpass\" class=\"form-control auto-form\">
                        </div>
                        <div class=\"col-xs-3\">
                            <label for=\"newpassverif\">Vérification :</label><br/>
                            <input type=\"password\" name=\"newpassverif\" class=\"form-control auto-form\">
                        </div>
                    </div>
                    <br/>
                    <div class=\"row\">
                        <div class=\"col-xs-4 col-xs-offset-4 text-center\">
                            <input type=\"submit\" value=\"Valider\" class=\"btn\">
                        <div>
                    </div>
                </form>
            ";
        }
        // line 63
        echo "                
                
        </div>
                
        
       
    </div>
";
        
        $__internal_c9ae5dae973347d9da6d89255a5505ff518f3e9e341968fbd8d787fa4eb2b126->leave($__internal_c9ae5dae973347d9da6d89255a5505ff518f3e9e341968fbd8d787fa4eb2b126_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Security:changepassword.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 63,  103 => 37,  95 => 32,  89 => 28,  87 => 27,  82 => 26,  75 => 22,  67 => 16,  65 => 15,  55 => 7,  49 => 6,  35 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"::base.html.twig\" %}

{% block title %}Changer de mot de passe - {{ parent() }} {% endblock %}


{% block body %}
    
    <div class=\"container-fluid\">
        
        <div class=\"col-xs-offset-2 col-xs-8\">
            
            <h1>Changer de mot de passe</h1>
            <br/>
            
            {% if success is defined %}
                <div class=\"row\">
                        <div class=\"col-xs-6 col-xs-offset-3 text-center\">
                            <div class=\"alert alert-success\">
                                Mot de passe changé avec succès !
                            </div>
                            
                            <a href=\"{{path('privateprofile', { 'userid': app.user.id }) }}\">Retourner sur mon profil.</a>
                        </div>
                    </div>
            {% else %}
                <form method=\"POST\" action=\"{{path('changepassword')}}\">
                    {% if error is defined %}
                        <div class=\"row\">
                            <div class=\"col-xs-6 col-xs-offset-3 text-center\">
                                <div class=\"alert alert-warning\">
                                    <b>Erreur : </b><br />
                                    {{ error }}
                                </div>
                            </div>
                        </div>
                    {% endif %}

                    <div class=\"row\">
                        <div class=\"col-xs-6 col-xs-offset-3 text-center\">
                            <label for=\"oldpass\">Ancien mot de passe :</label><br/>
                            <input type=\"password\" name=\"oldpass\" class=\"form-control auto-form\">
                        </div>
                    </div>
                    <br/><br/>
                    <div class=\"row text-center\">
                        <div class=\"col-xs-3 col-xs-offset-3\">
                            <label for=\"newpass\">Nouveau mot de passe :</label><br/>
                            <input type=\"password\" name=\"newpass\" class=\"form-control auto-form\">
                        </div>
                        <div class=\"col-xs-3\">
                            <label for=\"newpassverif\">Vérification :</label><br/>
                            <input type=\"password\" name=\"newpassverif\" class=\"form-control auto-form\">
                        </div>
                    </div>
                    <br/>
                    <div class=\"row\">
                        <div class=\"col-xs-4 col-xs-offset-4 text-center\">
                            <input type=\"submit\" value=\"Valider\" class=\"btn\">
                        <div>
                    </div>
                </form>
            {% endif %}
                
                
        </div>
                
        
       
    </div>
{% endblock %}";
    }
}
