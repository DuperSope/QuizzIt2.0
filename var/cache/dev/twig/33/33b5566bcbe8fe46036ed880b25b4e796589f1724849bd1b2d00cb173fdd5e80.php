<?php

/* QuizzBundle:Quizz:preview.html.twig */
class __TwigTemplate_f74e39887e1a27e413cbab52ea8a7acb0e88b0a7f05efe2990d1895e3fd9de4b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "QuizzBundle:Quizz:preview.html.twig", 1);
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
        $__internal_bbb38fac90f47b9bc825828ee7a7ceb96920d5dce7cbd59c4b3655fbebc99a69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbb38fac90f47b9bc825828ee7a7ceb96920d5dce7cbd59c4b3655fbebc99a69->enter($__internal_bbb38fac90f47b9bc825828ee7a7ceb96920d5dce7cbd59c4b3655fbebc99a69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "QuizzBundle:Quizz:preview.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bbb38fac90f47b9bc825828ee7a7ceb96920d5dce7cbd59c4b3655fbebc99a69->leave($__internal_bbb38fac90f47b9bc825828ee7a7ceb96920d5dce7cbd59c4b3655fbebc99a69_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_70a8639a2a37bb618bb8ba3cdb0d2096d2bf8e4cfd8d879235e8be027b33572e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70a8639a2a37bb618bb8ba3cdb0d2096d2bf8e4cfd8d879235e8be027b33572e->enter($__internal_70a8639a2a37bb618bb8ba3cdb0d2096d2bf8e4cfd8d879235e8be027b33572e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["quizz"]) ? $context["quizz"] : $this->getContext($context, "quizz")), "name", array()), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " ";
        
        $__internal_70a8639a2a37bb618bb8ba3cdb0d2096d2bf8e4cfd8d879235e8be027b33572e->leave($__internal_70a8639a2a37bb618bb8ba3cdb0d2096d2bf8e4cfd8d879235e8be027b33572e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_1a3d4c47b043f2b8cbd571132b2f486f3f98c5cb7fbda54c0d395ec7eaa9123d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a3d4c47b043f2b8cbd571132b2f486f3f98c5cb7fbda54c0d395ec7eaa9123d->enter($__internal_1a3d4c47b043f2b8cbd571132b2f486f3f98c5cb7fbda54c0d395ec7eaa9123d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    
    <div class=\"container-fluid\">

        ";
        // line 10
        if (((isset($context["owner"]) ? $context["owner"] : $this->getContext($context, "owner")) == 1)) {
            // line 11
            echo "            <div class=\"col-xs-1 col-xs-offset-1\">
                <div class=\"tabbable tabs-left \">
                    <br /><br /><br />
                    <ul class=\"nav nav-tabs\">
                        <li class=\"active\"><a>Actions :</a></li>
                        <li><a href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("quizz_modify", array("quizzid" => $this->getAttribute((isset($context["quizz"]) ? $context["quizz"] : $this->getContext($context, "quizz")), "id", array()))), "html", null, true);
            echo "\">Modifier</a></li>             
                        <li><a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("quizz_delete", array("quizzid" => $this->getAttribute((isset($context["quizz"]) ? $context["quizz"] : $this->getContext($context, "quizz")), "id", array()), "confirm" => 0)), "html", null, true);
            echo "\">Supprimer</a></li>         
                    </ul>
                </div>
            </div>
        ";
        }
        // line 22
        echo "        
        ";
        // line 23
        if ( !$this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 24
            echo "            <div class=\"col-xs-2 text-center\">
                <div class='alert alert-warning'>Vous devez être connecté pour effectuer le Quizz.</div>
            </div>
        ";
        }
        // line 28
        echo "        
        <div class=\"tab-content col-xs-8 ";
        // line 29
        if ((((isset($context["owner"]) ? $context["owner"] : $this->getContext($context, "owner")) == 0) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY"))) {
            echo "col-xs-offset-2";
        }
        echo "\">
            
            <div class=\"tab-pane active\">
                <h1 class=\"text-center\"> ";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["quizz"]) ? $context["quizz"] : $this->getContext($context, "quizz")), "name", array()), "html", null, true);
        echo " ";
        if (($this->getAttribute((isset($context["quizz"]) ? $context["quizz"] : $this->getContext($context, "quizz")), "private", array()) == 1)) {
            echo "<i class=\"fa fa-lock icon\" aria-hidden=\"true\"></i>";
        }
        echo "</h1>
                
                <br />
                    
                <div class=\"row\">
                    <div class=\"";
        // line 37
        if (((isset($context["owner"]) ? $context["owner"] : $this->getContext($context, "owner")) == 0)) {
            echo " col-xs-offset-3 ";
        }
        echo " col-xs-6\">
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">
                                Description :
                            </div>
                            <div class=\"panel-body\">
                                ";
        // line 43
        if (($this->getAttribute((isset($context["quizz"]) ? $context["quizz"] : $this->getContext($context, "quizz")), "description", array()) == "")) {
            echo "<i>Pas de description.</i>";
        }
        // line 44
        echo "                                ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["quizz"]) ? $context["quizz"] : $this->getContext($context, "quizz")), "description", array()), "html", null, true);
        echo "
                            </div>
                        </div>
                    </div>
                    ";
        // line 48
        if (((isset($context["owner"]) ? $context["owner"] : $this->getContext($context, "owner")) == 1)) {
            // line 49
            echo "                        <div class=\"col-xs-6\">
                            <div class=\"panel panel-default\">
                                <div class=\"panel-heading\">
                                    Description personnelle :
                                </div>
                                <div class=\"panel-body\">
                                    ";
            // line 55
            if (($this->getAttribute((isset($context["quizz"]) ? $context["quizz"] : $this->getContext($context, "quizz")), "userdescription", array()) == "")) {
                echo "<i>Pas de description personnelle.</i>";
            }
            // line 56
            echo "                                    ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["quizz"]) ? $context["quizz"] : $this->getContext($context, "quizz")), "userdescription", array()), "html", null, true);
            echo "
                                </div>
                            </div>
                        </div>
                    ";
        }
        // line 61
        echo "                </div>
                
                <div class=\"row\">
                    <div class='col-xs-6 text-center'>
                        <br /><blockquote>
                            Auteur : <br/><b><a href='";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("profile", array("userid" => $this->getAttribute($this->getAttribute((isset($context["quizz"]) ? $context["quizz"] : $this->getContext($context, "quizz")), "user", array()), "id", array()))), "html", null, true);
        echo "'>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["quizz"]) ? $context["quizz"] : $this->getContext($context, "quizz")), "user", array()), "username", array()), "html", null, true);
        echo "</a></b><br/><br/>
                            ";
        // line 68
        echo "                                ";
        if (($this->getAttribute($this->getAttribute((isset($context["quizz"]) ? $context["quizz"] : $this->getContext($context, "quizz")), "theme", array()), "level", array()) >= 3)) {
            // line 69
            echo "                                    ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["quizz"]) ? $context["quizz"] : $this->getContext($context, "quizz")), "theme", array()), "parent", array()), "parent", array()), "parent", array()), "html", null, true);
            echo "<br />
                                    <i class=\"fa fa-arrow-down\" aria-hidden=\"true\"></i><br />
                                ";
        }
        // line 72
        echo "                                ";
        if (($this->getAttribute($this->getAttribute((isset($context["quizz"]) ? $context["quizz"] : $this->getContext($context, "quizz")), "theme", array()), "level", array()) >= 2)) {
            // line 73
            echo "                                    ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["quizz"]) ? $context["quizz"] : $this->getContext($context, "quizz")), "theme", array()), "parent", array()), "parent", array()), "html", null, true);
            echo "<br/>
                                    <i class=\"fa fa-arrow-down\" aria-hidden=\"true\"></i><br />
                                ";
        }
        // line 76
        echo "                                ";
        if (($this->getAttribute($this->getAttribute((isset($context["quizz"]) ? $context["quizz"] : $this->getContext($context, "quizz")), "theme", array()), "level", array()) >= 1)) {
            // line 77
            echo "                                    ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["quizz"]) ? $context["quizz"] : $this->getContext($context, "quizz")), "theme", array()), "parent", array()), "html", null, true);
            echo "<br/>
                                    <i class=\"fa fa-arrow-down\" aria-hidden=\"true\"></i><br />
                                ";
        }
        // line 80
        echo "                                ";
        if (($this->getAttribute($this->getAttribute((isset($context["quizz"]) ? $context["quizz"] : $this->getContext($context, "quizz")), "theme", array()), "level", array()) >= 0)) {
            // line 81
            echo "                                    <b>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["quizz"]) ? $context["quizz"] : $this->getContext($context, "quizz")), "theme", array()), "name", array()), "html", null, true);
            echo "</b><br/>
                                ";
        }
        // line 83
        echo "                                <br /><br />
                            ";
        // line 84
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["quizz"]) ? $context["quizz"] : $this->getContext($context, "quizz")), "nbQuestion", array()), "html", null, true);
        echo " questions
                        </blockquote>
                    </div>
                    <div class='col-xs-4 '>
                        <br/><blockquote>
                            Fait <b>";
        // line 89
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["quizz"]) ? $context["quizz"] : $this->getContext($context, "quizz")), "done", array()), "html", null, true);
        echo "</b> fois<br /><br />
                            
                            ";
        // line 91
        $this->loadTemplate("QuizzBundle:Template:rate.html.twig", "QuizzBundle:Quizz:preview.html.twig", 91)->display($context);
        // line 92
        echo "                            <small><i>Moyenne sur ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["quizz"]) ? $context["quizz"] : $this->getContext($context, "quizz")), "nbRate", array()), "html", null, true);
        echo " avis</i></small>
                        </blockquote>
                        <br/>
                        
                        ";
        // line 96
        if (((isset($context["adone"]) ? $context["adone"] : $this->getContext($context, "adone")) == 1)) {
            // line 97
            echo "                            <blockquote class='text-center'>
                                <i>
                                ";
            // line 99
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["rateform"]) ? $context["rateform"] : $this->getContext($context, "rateform")), 'form_start');
            echo "  
                                ";
            // line 100
            if (((isset($context["arated"]) ? $context["arated"] : $this->getContext($context, "arated")) == 1)) {
                echo "Ma note :
                                ";
            } else {
                // line 101
                echo "Noter le Quizz : ";
            }
            // line 102
            echo "                                ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["rateform"]) ? $context["rateform"] : $this->getContext($context, "rateform")), "rate", array()), 'widget');
            echo "
                                <input class='btn btn-default' type='submit' value='Valider'>
                                <div class='hidden'>";
            // line 104
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["rateform"]) ? $context["rateform"] : $this->getContext($context, "rateform")), 'form_end');
            echo "</div>
                                </i>
                            </blockquote>
                        ";
        }
        // line 108
        echo "                        
                    </div>
                </div>
                    
                    
                <br /><br />
                <div class=\"row\">
                    <div class=\"col-xs-2 col-xs-offset-5 panel panel-default\">
                        <div class=\"text-center panel-body\">
                            <a href=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("quizz_do", array("quizzid" => $this->getAttribute((isset($context["quizz"]) ? $context["quizz"] : $this->getContext($context, "quizz")), "id", array()))), "html", null, true);
        echo "\">Faire le Quizz</a>
                        </div>
                    </div>
                        
                        
                </div>
                
            </div>
            
        </div>
        
    </div>
    
    
";
        
        $__internal_1a3d4c47b043f2b8cbd571132b2f486f3f98c5cb7fbda54c0d395ec7eaa9123d->leave($__internal_1a3d4c47b043f2b8cbd571132b2f486f3f98c5cb7fbda54c0d395ec7eaa9123d_prof);

    }

    public function getTemplateName()
    {
        return "QuizzBundle:Quizz:preview.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  283 => 117,  272 => 108,  265 => 104,  259 => 102,  256 => 101,  251 => 100,  247 => 99,  243 => 97,  241 => 96,  233 => 92,  231 => 91,  226 => 89,  218 => 84,  215 => 83,  209 => 81,  206 => 80,  199 => 77,  196 => 76,  189 => 73,  186 => 72,  179 => 69,  176 => 68,  170 => 66,  163 => 61,  154 => 56,  150 => 55,  142 => 49,  140 => 48,  132 => 44,  128 => 43,  117 => 37,  105 => 32,  97 => 29,  94 => 28,  88 => 24,  86 => 23,  83 => 22,  75 => 17,  71 => 16,  64 => 11,  62 => 10,  57 => 7,  51 => 6,  35 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"::base.html.twig\" %}

{% block title %} {{ quizz.name }} - {{ parent() }} {% endblock %}


{% block body %}
    
    <div class=\"container-fluid\">

        {% if owner == 1 %}
            <div class=\"col-xs-1 col-xs-offset-1\">
                <div class=\"tabbable tabs-left \">
                    <br /><br /><br />
                    <ul class=\"nav nav-tabs\">
                        <li class=\"active\"><a>Actions :</a></li>
                        <li><a href=\"{{path('quizz_modify', { 'quizzid' : quizz.id }) }}\">Modifier</a></li>             
                        <li><a href=\"{{path('quizz_delete', { 'quizzid' : quizz.id, 'confirm': 0 }) }}\">Supprimer</a></li>         
                    </ul>
                </div>
            </div>
        {% endif %}
        
        {% if not is_granted('IS_AUTHENTICATED_FULLY') %}
            <div class=\"col-xs-2 text-center\">
                <div class='alert alert-warning'>Vous devez être connecté pour effectuer le Quizz.</div>
            </div>
        {% endif %}
        
        <div class=\"tab-content col-xs-8 {% if owner == 0 and is_granted('IS_AUTHENTICATED_FULLY')%}col-xs-offset-2{% endif %}\">
            
            <div class=\"tab-pane active\">
                <h1 class=\"text-center\"> {{ quizz.name }} {% if quizz.private == 1 %}<i class=\"fa fa-lock icon\" aria-hidden=\"true\"></i>{% endif %}</h1>
                
                <br />
                    
                <div class=\"row\">
                    <div class=\"{% if owner == 0 %} col-xs-offset-3 {% endif %} col-xs-6\">
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">
                                Description :
                            </div>
                            <div class=\"panel-body\">
                                {% if quizz.description == \"\" %}<i>Pas de description.</i>{% endif %}
                                {{ quizz.description }}
                            </div>
                        </div>
                    </div>
                    {% if owner == 1 %}
                        <div class=\"col-xs-6\">
                            <div class=\"panel panel-default\">
                                <div class=\"panel-heading\">
                                    Description personnelle :
                                </div>
                                <div class=\"panel-body\">
                                    {% if quizz.userdescription == \"\" %}<i>Pas de description personnelle.</i>{% endif %}
                                    {{ quizz.userdescription }}
                                </div>
                            </div>
                        </div>
                    {% endif %}
                </div>
                
                <div class=\"row\">
                    <div class='col-xs-6 text-center'>
                        <br /><blockquote>
                            Auteur : <br/><b><a href='{{path('profile', { 'userid': quizz.user.id }) }}'>{{quizz.user.username }}</a></b><br/><br/>
                            {#Thème : <br /><br />#}
                                {% if(quizz.theme.level >= 3) %}
                                    {{quizz.theme.parent.parent.parent }}<br />
                                    <i class=\"fa fa-arrow-down\" aria-hidden=\"true\"></i><br />
                                {% endif %}
                                {% if(quizz.theme.level >= 2) %}
                                    {{quizz.theme.parent.parent }}<br/>
                                    <i class=\"fa fa-arrow-down\" aria-hidden=\"true\"></i><br />
                                {% endif %}
                                {% if(quizz.theme.level >= 1) %}
                                    {{quizz.theme.parent }}<br/>
                                    <i class=\"fa fa-arrow-down\" aria-hidden=\"true\"></i><br />
                                {% endif %}
                                {% if(quizz.theme.level >= 0) %}
                                    <b>{{quizz.theme.name }}</b><br/>
                                {% endif %}
                                <br /><br />
                            {{quizz.nbQuestion }} questions
                        </blockquote>
                    </div>
                    <div class='col-xs-4 '>
                        <br/><blockquote>
                            Fait <b>{{ quizz.done }}</b> fois<br /><br />
                            
                            {% include \"QuizzBundle:Template:rate.html.twig\" %}
                            <small><i>Moyenne sur {{ quizz.nbRate }} avis</i></small>
                        </blockquote>
                        <br/>
                        
                        {% if adone == 1 %}
                            <blockquote class='text-center'>
                                <i>
                                {{form_start(rateform) }}  
                                {% if arated == 1 %}Ma note :
                                {% else %}Noter le Quizz : {% endif %}
                                {{form_widget(rateform.rate) }}
                                <input class='btn btn-default' type='submit' value='Valider'>
                                <div class='hidden'>{{ form_end(rateform) }}</div>
                                </i>
                            </blockquote>
                        {% endif %}
                        
                    </div>
                </div>
                    
                    
                <br /><br />
                <div class=\"row\">
                    <div class=\"col-xs-2 col-xs-offset-5 panel panel-default\">
                        <div class=\"text-center panel-body\">
                            <a href=\"{{path(\"quizz_do\", { 'quizzid': quizz.id })}}\">Faire le Quizz</a>
                        </div>
                    </div>
                        
                        
                </div>
                
            </div>
            
        </div>
        
    </div>
    
    
{% endblock %}";
    }
}
