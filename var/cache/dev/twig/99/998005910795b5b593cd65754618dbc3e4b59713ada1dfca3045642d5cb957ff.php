<?php

/* UserBundle:Security:register.html.twig */
class __TwigTemplate_dded46241e4f03ac0ff101be3328cddbf83e4cde1e2aea0dbe20a7c855cff840 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "UserBundle:Security:register.html.twig", 1);
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
        $__internal_008823e9493931ebf848405f99cc4a738e65b6a6663e7593e9ed6c77f31c5eb8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_008823e9493931ebf848405f99cc4a738e65b6a6663e7593e9ed6c77f31c5eb8->enter($__internal_008823e9493931ebf848405f99cc4a738e65b6a6663e7593e9ed6c77f31c5eb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Security:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_008823e9493931ebf848405f99cc4a738e65b6a6663e7593e9ed6c77f31c5eb8->leave($__internal_008823e9493931ebf848405f99cc4a738e65b6a6663e7593e9ed6c77f31c5eb8_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_45cc8568eaf95dbae6631c745569dca532fc482278a5261aeb94b9c5297fc50b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45cc8568eaf95dbae6631c745569dca532fc482278a5261aeb94b9c5297fc50b->enter($__internal_45cc8568eaf95dbae6631c745569dca532fc482278a5261aeb94b9c5297fc50b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Inscription - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " ";
        
        $__internal_45cc8568eaf95dbae6631c745569dca532fc482278a5261aeb94b9c5297fc50b->leave($__internal_45cc8568eaf95dbae6631c745569dca532fc482278a5261aeb94b9c5297fc50b_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_f1578ea27f7e1138fcac809c892eedf500c2e9078eaae1aa83ca9dd2199e069f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1578ea27f7e1138fcac809c892eedf500c2e9078eaae1aa83ca9dd2199e069f->enter($__internal_f1578ea27f7e1138fcac809c892eedf500c2e9078eaae1aa83ca9dd2199e069f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "
    <div class='container-fluid col-xs-4 col-xs-offset-4'>
        <h1 class='text-center'>Inscription</h1><br />
        ";
        // line 10
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 11
            echo "            <div class=\"text-center alert alert-warning\">";
            echo twig_escape_filter($this->env, (isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "html", null, true);
            echo "</div>
        ";
        }
        // line 13
        echo "        <br /><br />
        ";
        // line 14
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        
            <div class='row'>
                <div class='col-xs-4'>
                    ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lName", array()), 'label');
        echo " : ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lName", array()), 'widget', array("attr" => array("class" => "auto-form form-control")));
        echo "<br/><br/>
                    ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fName", array()), 'label');
        echo " : ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fName", array()), 'widget', array("attr" => array("class" => "auto-form form-control")));
        echo "<br/><br/><br/>
                </div>
                
                <div class='col-xs-offset-2 col-xs-6 text-center'>
                    ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'label');
        echo " : ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'widget', array("attr" => array("class" => "auto-form form-control")));
        echo "<br/><br/>
                    ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'label');
        echo " : ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "<br/><br/><br/>   
                </div>
            </div>
            <div class='row'>
                <div class='col-xs-4 col-xs-offset-1'>
                    ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), 'label');
        echo " : ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), 'widget', array("attr" => array("class" => "auto-form form-control")));
        echo "
                </div>
                <div class='col-xs-offset-1 col-xs-4'>
                    ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "passwordVerify", array()), 'label');
        echo " : ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "passwordVerify", array()), 'widget', array("attr" => array("class" => "auto-form form-control")));
        echo "
                </div>
            </div>
                
                
            <br />
                
            <br />
                
                
            <br />
            
            <div class='row text-center'>
                <button class='btn' type=\"submit\">S'inscrire !</button><br/><br/>
                <i><small>Les noms, prénoms et emails ne sont pas affichés publiquement.</small></i>
            </div>
        ";
        // line 48
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    </div>


";
        
        $__internal_f1578ea27f7e1138fcac809c892eedf500c2e9078eaae1aa83ca9dd2199e069f->leave($__internal_f1578ea27f7e1138fcac809c892eedf500c2e9078eaae1aa83ca9dd2199e069f_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Security:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 48,  117 => 32,  109 => 29,  99 => 24,  93 => 23,  84 => 19,  78 => 18,  71 => 14,  68 => 13,  62 => 11,  60 => 10,  55 => 7,  49 => 6,  35 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '::base.html.twig' %}

{% block title %} Inscription - {{ parent() }} {% endblock %}


{% block body %}

    <div class='container-fluid col-xs-4 col-xs-offset-4'>
        <h1 class='text-center'>Inscription</h1><br />
        {% if error %}
            <div class=\"text-center alert alert-warning\">{{ error }}</div>
        {% endif %}
        <br /><br />
        {{ form_start(form) }}
        
            <div class='row'>
                <div class='col-xs-4'>
                    {{ form_label(form.lName) }} : {{ form_widget(form.lName, { 'attr': { 'class': 'auto-form form-control' } }) }}<br/><br/>
                    {{ form_label(form.fName) }} : {{ form_widget(form.fName, { 'attr': { 'class': 'auto-form form-control' } }) }}<br/><br/><br/>
                </div>
                
                <div class='col-xs-offset-2 col-xs-6 text-center'>
                    {{ form_label(form.username) }} : {{ form_widget(form.username, { 'attr': { 'class': 'auto-form form-control' } }) }}<br/><br/>
                    {{ form_label(form.email) }} : {{ form_widget(form.email, { 'attr': { 'class': 'form-control' } }) }}<br/><br/><br/>   
                </div>
            </div>
            <div class='row'>
                <div class='col-xs-4 col-xs-offset-1'>
                    {{ form_label(form.password) }} : {{ form_widget(form.password, { 'attr': { 'class': 'auto-form form-control' } }) }}
                </div>
                <div class='col-xs-offset-1 col-xs-4'>
                    {{ form_label(form.passwordVerify) }} : {{ form_widget(form.passwordVerify, { 'attr': { 'class': 'auto-form form-control' } }) }}
                </div>
            </div>
                
                
            <br />
                
            <br />
                
                
            <br />
            
            <div class='row text-center'>
                <button class='btn' type=\"submit\">S'inscrire !</button><br/><br/>
                <i><small>Les noms, prénoms et emails ne sont pas affichés publiquement.</small></i>
            </div>
        {{ form_end(form) }}
    </div>


{% endblock %}";
    }
}
