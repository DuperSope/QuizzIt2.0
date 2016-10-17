<?php

/* UserBundle::privateprofile.html.twig */
class __TwigTemplate_44d880a9fafaedf8618b4ed33c860b07db3ad967479dab0e9fe7022e8f4ddbb7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "UserBundle::privateprofile.html.twig", 1);
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
        $__internal_a840229cb3aa7fb0bdf6d753f7e4cdf677f87cfd5b86b9fec2a36cdcfd79fbc7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a840229cb3aa7fb0bdf6d753f7e4cdf677f87cfd5b86b9fec2a36cdcfd79fbc7->enter($__internal_a840229cb3aa7fb0bdf6d753f7e4cdf677f87cfd5b86b9fec2a36cdcfd79fbc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle::privateprofile.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a840229cb3aa7fb0bdf6d753f7e4cdf677f87cfd5b86b9fec2a36cdcfd79fbc7->leave($__internal_a840229cb3aa7fb0bdf6d753f7e4cdf677f87cfd5b86b9fec2a36cdcfd79fbc7_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5e3068f6cb0c7aee2a285356975a71cb702370a29d463cd99ab60e0590808a8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e3068f6cb0c7aee2a285356975a71cb702370a29d463cd99ab60e0590808a8e->enter($__internal_5e3068f6cb0c7aee2a285356975a71cb702370a29d463cd99ab60e0590808a8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Espace Privé - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " ";
        
        $__internal_5e3068f6cb0c7aee2a285356975a71cb702370a29d463cd99ab60e0590808a8e->leave($__internal_5e3068f6cb0c7aee2a285356975a71cb702370a29d463cd99ab60e0590808a8e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_c13cb67b02310200099af0ed3c5ac38190a36757388aa981ad2de11be7f4763a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c13cb67b02310200099af0ed3c5ac38190a36757388aa981ad2de11be7f4763a->enter($__internal_c13cb67b02310200099af0ed3c5ac38190a36757388aa981ad2de11be7f4763a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    
    <div class=\"container-fluid\">
        
        <div class=\"col-xs-offset-2 col-xs-8\">
            <h1>Sope</h1><br/>
            
            <div class='col-xs-4'>
                <small><i>Ces données sont confidentielles et ne seront partagées qu'avec votre accord.</i></small><hr/>
                
                <b>Nom :</b> ";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "lname", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "fname", array()), "html", null, true);
        echo "<br/><br/>
                <b>Adresse mail : </b><br/><i>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</i>
                
                <br/><br/>
                <div class='btn btn-default'><a href=\"";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("changepassword");
        echo "\" class=\"no-deco\">Changer mon mot de passe</a></div>
                
            </div> 
                
            <div class='col-xs-4 col-xs-offset-1'>
                ";
        // line 25
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'label');
        echo " : <br />
                ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'widget', array("attr" => array("class" => "form-control ")));
        echo "
                
                <br/>
                <input type='submit' class='btn' value='Enregistrer'>
                <div class='hidden'>";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'widget');
        echo "</div>                
                
                <hr/>
                <a href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("profile", array("userid" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()))), "html", null, true);
        echo "\">Voir mon profil public</a>
            </div> 
                
                
        </div>
                
        
       
    </div>
";
        
        $__internal_c13cb67b02310200099af0ed3c5ac38190a36757388aa981ad2de11be7f4763a->leave($__internal_c13cb67b02310200099af0ed3c5ac38190a36757388aa981ad2de11be7f4763a_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle::privateprofile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 34,  101 => 31,  94 => 27,  90 => 26,  86 => 25,  78 => 20,  72 => 17,  66 => 16,  55 => 7,  49 => 6,  35 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"::base.html.twig\" %}

{% block title %}Espace Privé - {{ parent() }} {% endblock %}


{% block body %}
    
    <div class=\"container-fluid\">
        
        <div class=\"col-xs-offset-2 col-xs-8\">
            <h1>Sope</h1><br/>
            
            <div class='col-xs-4'>
                <small><i>Ces données sont confidentielles et ne seront partagées qu'avec votre accord.</i></small><hr/>
                
                <b>Nom :</b> {{ user.lname }} {{ user.fname}}<br/><br/>
                <b>Adresse mail : </b><br/><i>{{user.email }}</i>
                
                <br/><br/>
                <div class='btn btn-default'><a href=\"{{path('changepassword')}}\" class=\"no-deco\">Changer mon mot de passe</a></div>
                
            </div> 
                
            <div class='col-xs-4 col-xs-offset-1'>
                {{ form_start(form) }}
                {{ form_label(form.description) }} : <br />
                {{form_widget(form.description, { 'attr': { 'class': 'form-control ' } }) }}
                
                <br/>
                <input type='submit' class='btn' value='Enregistrer'>
                <div class='hidden'>{{ form_widget(form._token) }}</div>                
                
                <hr/>
                <a href=\"{{path('profile', { 'userid': user.id })}}\">Voir mon profil public</a>
            </div> 
                
                
        </div>
                
        
       
    </div>
{% endblock %}";
    }
}
