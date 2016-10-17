<?php

/* UserBundle:Security:login.html.twig */
class __TwigTemplate_ba271920c96c110f2056e4a50ebcc24caecde762a8b489e0e05b945b366e0e7b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "UserBundle:Security:login.html.twig", 1);
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
        $__internal_429773983bdb4934e2dd6f2f9e61d62b2fb8a4410204717cd6a5a3f219ec4551 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_429773983bdb4934e2dd6f2f9e61d62b2fb8a4410204717cd6a5a3f219ec4551->enter($__internal_429773983bdb4934e2dd6f2f9e61d62b2fb8a4410204717cd6a5a3f219ec4551_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_429773983bdb4934e2dd6f2f9e61d62b2fb8a4410204717cd6a5a3f219ec4551->leave($__internal_429773983bdb4934e2dd6f2f9e61d62b2fb8a4410204717cd6a5a3f219ec4551_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_819614e8743156d323e85c6e5d3baa187c2a9aeda353fe10154387eb6b2f571d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_819614e8743156d323e85c6e5d3baa187c2a9aeda353fe10154387eb6b2f571d->enter($__internal_819614e8743156d323e85c6e5d3baa187c2a9aeda353fe10154387eb6b2f571d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Connexion - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " ";
        
        $__internal_819614e8743156d323e85c6e5d3baa187c2a9aeda353fe10154387eb6b2f571d->leave($__internal_819614e8743156d323e85c6e5d3baa187c2a9aeda353fe10154387eb6b2f571d_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_62892fada1fe3d6634317c2fdb358aa2c62aa42dd671a051c96492ff27a2f2ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62892fada1fe3d6634317c2fdb358aa2c62aa42dd671a051c96492ff27a2f2ad->enter($__internal_62892fada1fe3d6634317c2fdb358aa2c62aa42dd671a051c96492ff27a2f2ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    
    <div class=\"container-fluid col-xs-offset-1 col-xs-10\">
        
        <h1 class='text-center'>Connexion</h1><br />
        
        <div class=\"row col-xs-8 col-xs-offset-2\">
            <div class=\"col-xs-6 col-xs-offset-3\">
                ";
        // line 13
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 14
            echo "                    <div class=\"alert alert-warning text-center\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "login"), "html", null, true);
            echo "</div>
                ";
        }
        // line 16
        echo "            </div>
            
            <div class=\"col-xs-6 col-xs-offset-3\">
                ";
        // line 19
        if ((isset($context["alert"]) ? $context["alert"] : $this->getContext($context, "alert"))) {
            // line 20
            echo "                    <div class=\"alert alert-info text-center\">";
            echo twig_escape_filter($this->env, (isset($context["alert"]) ? $context["alert"] : $this->getContext($context, "alert")), "html", null, true);
            echo "</div>
                ";
        }
        // line 22
        echo "            </div>
        </div>

         <br /><br /> 
            
        <form action=\"";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
        echo "\" method=\"post\" class=\"col-xs-offset-4 col-xs-4 text-center\">
            
            <div class='row'><label for=\"username\">Pseudo</label></div>
            <div class='row col-xs-8 col-xs-offset-2'><input class=\"text-center form-control \" type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" /></div>
            <br /><br ><br />
            
            <div class='row'><label for=\"password\">Mot de passe</label></div>
            <div class='row col-xs-8 col-xs-offset-2'><input class=\"text-center form-control\" type=\"password\" id=\"password\" name=\"_password\" /></div>

            ";
        // line 41
        echo "            <br /><br /><br />
            
            <div class='row col-xs-8 col-xs-offset-2'><button class=\"form-control\" type=\"submit\">Connexion</button></div>
            
            
            <br /><br/><br/><br/>
            <div class='row col-xs-8 col-xs-offset-2'>Vous n'avez pas encore de compte ? Venez vous inscrire en 2 clics <a href='";
        // line 47
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("register");
        echo "'>ici</a> !</div>
        </form>
        
    </div>

";
        
        $__internal_62892fada1fe3d6634317c2fdb358aa2c62aa42dd671a051c96492ff27a2f2ad->leave($__internal_62892fada1fe3d6634317c2fdb358aa2c62aa42dd671a051c96492ff27a2f2ad_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 47,  107 => 41,  98 => 30,  92 => 27,  85 => 22,  79 => 20,  77 => 19,  72 => 16,  66 => 14,  64 => 13,  55 => 6,  49 => 5,  35 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"::base.html.twig\" %}

{% block title %} Connexion - {{ parent() }} {% endblock %}

{% block body %}
    
    <div class=\"container-fluid col-xs-offset-1 col-xs-10\">
        
        <h1 class='text-center'>Connexion</h1><br />
        
        <div class=\"row col-xs-8 col-xs-offset-2\">
            <div class=\"col-xs-6 col-xs-offset-3\">
                {% if error %}
                    <div class=\"alert alert-warning text-center\">{{ error.messageKey|trans(error.messageData, 'login') }}</div>
                {% endif %}
            </div>
            
            <div class=\"col-xs-6 col-xs-offset-3\">
                {% if alert %}
                    <div class=\"alert alert-info text-center\">{{ alert }}</div>
                {% endif %}
            </div>
        </div>

         <br /><br /> 
            
        <form action=\"{{ path('login') }}\" method=\"post\" class=\"col-xs-offset-4 col-xs-4 text-center\">
            
            <div class='row'><label for=\"username\">Pseudo</label></div>
            <div class='row col-xs-8 col-xs-offset-2'><input class=\"text-center form-control \" type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" /></div>
            <br /><br ><br />
            
            <div class='row'><label for=\"password\">Mot de passe</label></div>
            <div class='row col-xs-8 col-xs-offset-2'><input class=\"text-center form-control\" type=\"password\" id=\"password\" name=\"_password\" /></div>

            {#
                If you want to control the URL the user
                is redirected to on success (more details below)
                <input type=\"hidden\" name=\"_target_path\" value=\"/account\" />
            #}
            <br /><br /><br />
            
            <div class='row col-xs-8 col-xs-offset-2'><button class=\"form-control\" type=\"submit\">Connexion</button></div>
            
            
            <br /><br/><br/><br/>
            <div class='row col-xs-8 col-xs-offset-2'>Vous n'avez pas encore de compte ? Venez vous inscrire en 2 clics <a href='{{path('register')}}'>ici</a> !</div>
        </form>
        
    </div>

{% endblock %}";
    }
}
