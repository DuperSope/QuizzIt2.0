<?php

/* QuizzBundle:Quizz:dodone.html.twig */
class __TwigTemplate_97adaa6ed9a53cae993b28f8c7fddcf7c071aa6898e3d7e1fb5442b61cb7e139 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "QuizzBundle:Quizz:dodone.html.twig", 1);
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
        $__internal_417973c914e1e15a659ca2af29884b2aab851d79646954b8cef437a360ecd29d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_417973c914e1e15a659ca2af29884b2aab851d79646954b8cef437a360ecd29d->enter($__internal_417973c914e1e15a659ca2af29884b2aab851d79646954b8cef437a360ecd29d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "QuizzBundle:Quizz:dodone.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_417973c914e1e15a659ca2af29884b2aab851d79646954b8cef437a360ecd29d->leave($__internal_417973c914e1e15a659ca2af29884b2aab851d79646954b8cef437a360ecd29d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c8f66a13980c150ad1ab09a2638d6a28e20ca7f7ec46f87045ad51e68cbcd393 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8f66a13980c150ad1ab09a2638d6a28e20ca7f7ec46f87045ad51e68cbcd393->enter($__internal_c8f66a13980c150ad1ab09a2638d6a28e20ca7f7ec46f87045ad51e68cbcd393_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Résultat : ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["quizz"]) ? $context["quizz"] : $this->getContext($context, "quizz")), "name", array()), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " ";
        
        $__internal_c8f66a13980c150ad1ab09a2638d6a28e20ca7f7ec46f87045ad51e68cbcd393->leave($__internal_c8f66a13980c150ad1ab09a2638d6a28e20ca7f7ec46f87045ad51e68cbcd393_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_120c09db425b8dced5d919d6d8481bc1de629af902339c1a95f9ac9d39bc955c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_120c09db425b8dced5d919d6d8481bc1de629af902339c1a95f9ac9d39bc955c->enter($__internal_120c09db425b8dced5d919d6d8481bc1de629af902339c1a95f9ac9d39bc955c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    
    
    
    <div class=\"container-fluid\">
        
        <div class=\"row\">
            <div class=\"col-xs-8 col-xs-offset-2 text-center\">

                <h1>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["quizz"]) ? $context["quizz"] : $this->getContext($context, "quizz")), "name", array()), "html", null, true);
        echo " ";
        if (($this->getAttribute((isset($context["quizzdone"]) ? $context["quizzdone"] : $this->getContext($context, "quizzdone")), "nbDo", array()) > 1)) {
            echo "<i><small>(";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["quizzdone"]) ? $context["quizzdone"] : $this->getContext($context, "quizzdone")), "nbDo", array()), "html", null, true);
            echo ")</small></i>";
        }
        echo "</h1><br />
                
            </div>
        </div>
        
        <div class=\"row\">  
            
            <div class=\"col-xs-2 col-xs-offset-2\">
               <div class=\"tabbable tabs-left \">
                    <ul class=\"nav nav-tabs\">
                        <li class=\"active\"><a href=\"#general\" data-toggle=\"tab\">Général</a></li>
                        ";
        // line 26
        $context["i"] = 1;
        // line 27
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["quizzdone"]) ? $context["quizzdone"] : $this->getContext($context, "quizzdone")), "questiondone", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["questiondone"]) {
            // line 28
            echo "                        <li><a href=\"#Q";
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
            echo "\" class=\"";
            if (($this->getAttribute($context["questiondone"], "answerValid", array()) == 1)) {
                echo "success";
            } else {
                echo "danger";
            }
            echo "\" data-toggle=\"tab\">Question n°";
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
            echo "</a></li>
                        ";
            // line 29
            $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
            // line 30
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['questiondone'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "                    </ul>
                </div>
           </div>
            
            <div class=\"tab-content\">
                
                <div id=\"general\" class=\"col-xs-4 text-center pricing tab-pane active\">
                        <div class=\"panel panel-default\">
                            <div class=\"panel-body\">
                                ";
        // line 40
        if (($this->getAttribute((isset($context["quizz"]) ? $context["quizz"] : $this->getContext($context, "quizz")), "description", array()) == "")) {
            echo "<i>Pas de description.</i>";
        }
        // line 41
        echo "                                ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["quizz"]) ? $context["quizz"] : $this->getContext($context, "quizz")), "description", array()), "html", null, true);
        echo "
                            </div>
                        </div>

                            <br /><br />

                    <div class=\" unit";
        // line 47
        if (($this->getAttribute((isset($context["quizzdone"]) ? $context["quizzdone"] : $this->getContext($context, "quizzdone")), "percentage", array()) >= 75)) {
            echo " price-success";
        } elseif (($this->getAttribute((isset($context["quizzdone"]) ? $context["quizzdone"] : $this->getContext($context, "quizzdone")), "percentage", array()) >= 40)) {
            echo " price-warning";
        } else {
            echo " price-danger";
        }
        echo "\">
                        <div class=\"price-title";
        // line 48
        if (($this->getAttribute((isset($context["quizzdone"]) ? $context["quizzdone"] : $this->getContext($context, "quizzdone")), "percentage", array()) >= 75)) {
            echo " ";
        } elseif (($this->getAttribute((isset($context["quizzdone"]) ? $context["quizzdone"] : $this->getContext($context, "quizzdone")), "percentage", array()) >= 50)) {
            echo " ";
        } else {
            echo " ";
        }
        echo "\">
                            <p>Score :</p>
                            <h2><b>";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["quizzdone"]) ? $context["quizzdone"] : $this->getContext($context, "quizzdone")), "percentage", array()), "html", null, true);
        echo "%</b></h2>
                        </div>
                        <div class=\"price-body\">
                            <p class=\"\">";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["quizzdone"]) ? $context["quizzdone"] : $this->getContext($context, "quizzdone")), "nbvalidanswer", array()), "html", null, true);
        echo " bonne(s) réponse(s) sur ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["quizzdone"]) ? $context["quizzdone"] : $this->getContext($context, "quizzdone")), "nbAnswer", array()), "html", null, true);
        echo "</p>
                        </div>
                        
                    </div>
                        
                    <br /><br />
                    ";
        // line 59
        if (($this->getAttribute((isset($context["quizz"]) ? $context["quizz"] : $this->getContext($context, "quizz")), "deleted", array()) == 0)) {
            echo "<br/><br/><a class=\"btn\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("quizz_preview", array("quizzid" => $this->getAttribute((isset($context["quizz"]) ? $context["quizz"] : $this->getContext($context, "quizz")), "id", array()))), "html", null, true);
            echo "\">Aller sur le Quizz</a>";
        }
        // line 60
        echo "                    
                    ";
        // line 61
        if (($this->getAttribute((isset($context["quizz"]) ? $context["quizz"] : $this->getContext($context, "quizz")), "deleted", array()) == 1)) {
            // line 62
            echo "                        <br/><br/>
                        <small><i>Le Quizz a été supprimé.</i></small>
                    ";
        } elseif (($this->getAttribute(        // line 64
(isset($context["quizz"]) ? $context["quizz"] : $this->getContext($context, "quizz")), "date", array()) > $this->getAttribute((isset($context["quizzdone"]) ? $context["quizzdone"] : $this->getContext($context, "quizzdone")), "date", array()))) {
            // line 65
            echo "                        <br/><br/>
                        <small><i>Le Quizz a été modifié depuis votre participation, votre score reste inchangé mais des erreurs sont possibles dans le détail des réponses.</i></small>
                    ";
        }
        // line 68
        echo "                </div>
                        
                ";
        // line 70
        $context["i"] = 1;
        // line 71
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["quizzdone"]) ? $context["quizzdone"] : $this->getContext($context, "quizzdone")), "questiondone", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["questiondone"]) {
            // line 72
            echo "                        
                        ";
            // line 73
            if (($this->getAttribute((isset($context["quizz"]) ? $context["quizz"] : $this->getContext($context, "quizz")), "nbQuestion", array()) >= (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")))) {
                // line 74
                echo "                            
                        ";
                // line 75
                $context["question"] = $this->getAttribute($this->getAttribute((isset($context["quizz"]) ? $context["quizz"] : $this->getContext($context, "quizz")), "questions", array()), ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) - 1));
                // line 76
                echo "                        <div id=\"Q";
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
                echo "\" class=\"col-xs-4 text-center tab-pane\">
                            <div class=\"panel panel-default\">
                                <div class=\"panel-body\">
                                    <b>Question n°";
                // line 79
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
                echo "</b><br /><br/>
                                    ";
                // line 80
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "question", array()), "html", null, true);
                echo "
                                </div>
                            </div>
                                
                            ";
                // line 84
                $this->loadTemplate("QuizzBundle:Template:questiondone.html.twig", "QuizzBundle:Quizz:dodone.html.twig", 84)->display($context);
                // line 85
                echo "                                
                        </div>
                    ";
            } else {
                // line 88
                echo "                        <div id=\"Q";
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
                echo "\" class=\"col-xs-4 text-center tab-pane\">
                            <div class=\"panel panel-default\">
                                <div class=\"panel-body\">
                                    <b>Question n°";
                // line 91
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
                echo "</b><br /><br/>
                                    La question a été supprimée.
                                </div>
                            </div>
                    ";
            }
            // line 96
            echo "                    ";
            $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
            // line 97
            echo "                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['questiondone'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 98
        echo "            </div>
                    
           
        </div>
    </div>
    
";
        
        $__internal_120c09db425b8dced5d919d6d8481bc1de629af902339c1a95f9ac9d39bc955c->leave($__internal_120c09db425b8dced5d919d6d8481bc1de629af902339c1a95f9ac9d39bc955c_prof);

    }

    public function getTemplateName()
    {
        return "QuizzBundle:Quizz:dodone.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  291 => 98,  277 => 97,  274 => 96,  266 => 91,  259 => 88,  254 => 85,  252 => 84,  245 => 80,  241 => 79,  234 => 76,  232 => 75,  229 => 74,  227 => 73,  224 => 72,  206 => 71,  204 => 70,  200 => 68,  195 => 65,  193 => 64,  189 => 62,  187 => 61,  184 => 60,  178 => 59,  167 => 53,  161 => 50,  150 => 48,  140 => 47,  130 => 41,  126 => 40,  115 => 31,  109 => 30,  107 => 29,  94 => 28,  89 => 27,  87 => 26,  67 => 15,  57 => 7,  51 => 6,  35 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"::base.html.twig\" %}

{% block title %} Résultat : {{ quizz.name }} - {{ parent() }} {% endblock %}


{% block body %}
    
    
    
    <div class=\"container-fluid\">
        
        <div class=\"row\">
            <div class=\"col-xs-8 col-xs-offset-2 text-center\">

                <h1>{{ quizz.name }} {% if quizzdone.nbDo > 1 %}<i><small>({{ quizzdone.nbDo }})</small></i>{% endif %}</h1><br />
                
            </div>
        </div>
        
        <div class=\"row\">  
            
            <div class=\"col-xs-2 col-xs-offset-2\">
               <div class=\"tabbable tabs-left \">
                    <ul class=\"nav nav-tabs\">
                        <li class=\"active\"><a href=\"#general\" data-toggle=\"tab\">Général</a></li>
                        {% set i = 1 %}
                        {% for questiondone in quizzdone.questiondone %}
                        <li><a href=\"#Q{{ i }}\" class=\"{% if(questiondone.answerValid == 1) %}success{% else %}danger{% endif %}\" data-toggle=\"tab\">Question n°{{ i }}</a></li>
                        {% set i = i + 1 %}
                        {% endfor %}
                    </ul>
                </div>
           </div>
            
            <div class=\"tab-content\">
                
                <div id=\"general\" class=\"col-xs-4 text-center pricing tab-pane active\">
                        <div class=\"panel panel-default\">
                            <div class=\"panel-body\">
                                {% if quizz.description == \"\" %}<i>Pas de description.</i>{% endif %}
                                {{ quizz.description }}
                            </div>
                        </div>

                            <br /><br />

                    <div class=\" unit{% if(quizzdone.percentage >= 75) %} price-success{% elseif(quizzdone.percentage >= 40) %} price-warning{% else %} price-danger{% endif %}\">
                        <div class=\"price-title{% if(quizzdone.percentage >= 75) %} {% elseif(quizzdone.percentage >= 50) %} {% else %} {% endif %}\">
                            <p>Score :</p>
                            <h2><b>{{ quizzdone.percentage }}%</b></h2>
                        </div>
                        <div class=\"price-body\">
                            <p class=\"\">{{ quizzdone.nbvalidanswer }} bonne(s) réponse(s) sur {{quizzdone.nbAnswer }}</p>
                        </div>
                        
                    </div>
                        
                    <br /><br />
                    {% if quizz.deleted == 0 %}<br/><br/><a class=\"btn\" href=\"{{ path('quizz_preview', { 'quizzid' : quizz.id }) }}\">Aller sur le Quizz</a>{% endif %}
                    
                    {% if quizz.deleted == 1 %}
                        <br/><br/>
                        <small><i>Le Quizz a été supprimé.</i></small>
                    {% elseif quizz.date > quizzdone.date %}
                        <br/><br/>
                        <small><i>Le Quizz a été modifié depuis votre participation, votre score reste inchangé mais des erreurs sont possibles dans le détail des réponses.</i></small>
                    {% endif %}
                </div>
                        
                {% set i = 1 %}
                    {% for questiondone in quizzdone.questiondone %}
                        
                        {% if quizz.nbQuestion >= i %}
                            
                        {% set question = attribute(quizz.questions, i-1) %}
                        <div id=\"Q{{i}}\" class=\"col-xs-4 text-center tab-pane\">
                            <div class=\"panel panel-default\">
                                <div class=\"panel-body\">
                                    <b>Question n°{{i }}</b><br /><br/>
                                    {{question.question }}
                                </div>
                            </div>
                                
                            {% include \"QuizzBundle:Template:questiondone.html.twig\" %}
                                
                        </div>
                    {% else %}
                        <div id=\"Q{{i}}\" class=\"col-xs-4 text-center tab-pane\">
                            <div class=\"panel panel-default\">
                                <div class=\"panel-body\">
                                    <b>Question n°{{i }}</b><br /><br/>
                                    La question a été supprimée.
                                </div>
                            </div>
                    {% endif %}
                    {% set i = i + 1 %}
                {% endfor %}
            </div>
                    
           
        </div>
    </div>
    
{% endblock %}";
    }
}
