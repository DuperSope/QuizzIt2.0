<?php

/* QuizzBundle:Quizz:do.html.twig */
class __TwigTemplate_b0b236178e9d698d4523834079df16fe5a3aa8f98b3cd2789e3fafb658e3a9a2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "QuizzBundle:Quizz:do.html.twig", 1);
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
        $__internal_286df8a943234447fac1b1fd913d493981fcd984def1c7553fa05849d65e11b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_286df8a943234447fac1b1fd913d493981fcd984def1c7553fa05849d65e11b7->enter($__internal_286df8a943234447fac1b1fd913d493981fcd984def1c7553fa05849d65e11b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "QuizzBundle:Quizz:do.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_286df8a943234447fac1b1fd913d493981fcd984def1c7553fa05849d65e11b7->leave($__internal_286df8a943234447fac1b1fd913d493981fcd984def1c7553fa05849d65e11b7_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e22714c4ad5b68ea171aa17a8e79d1f439de27d067428667284c4b7dafea4884 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e22714c4ad5b68ea171aa17a8e79d1f439de27d067428667284c4b7dafea4884->enter($__internal_e22714c4ad5b68ea171aa17a8e79d1f439de27d067428667284c4b7dafea4884_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["quizz"]) ? $context["quizz"] : $this->getContext($context, "quizz")), "name", array()), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " ";
        
        $__internal_e22714c4ad5b68ea171aa17a8e79d1f439de27d067428667284c4b7dafea4884->leave($__internal_e22714c4ad5b68ea171aa17a8e79d1f439de27d067428667284c4b7dafea4884_prof);

    }

    // line 5
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8600e36f9c56d6874f1d3f42da724284722510ce73b44eb3d5ed4d2ddd6148cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8600e36f9c56d6874f1d3f42da724284722510ce73b44eb3d5ed4d2ddd6148cf->enter($__internal_8600e36f9c56d6874f1d3f42da724284722510ce73b44eb3d5ed4d2ddd6148cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 6
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
            ";
        // line 7
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "7ae9405_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_7ae9405_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/7ae9405_do_1.js");
            // line 10
            echo "                        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
                    ";
        } else {
            // asset "7ae9405"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_7ae9405") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/7ae9405.js");
            echo "                        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
                    ";
        }
        unset($context["asset_url"]);
        // line 12
        echo "        ";
        
        $__internal_8600e36f9c56d6874f1d3f42da724284722510ce73b44eb3d5ed4d2ddd6148cf->leave($__internal_8600e36f9c56d6874f1d3f42da724284722510ce73b44eb3d5ed4d2ddd6148cf_prof);

    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        $__internal_eb4734219ae21016ab7b4624768aca6ff97d475f829c3e21356a25139954f0aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb4734219ae21016ab7b4624768aca6ff97d475f829c3e21356a25139954f0aa->enter($__internal_eb4734219ae21016ab7b4624768aca6ff97d475f829c3e21356a25139954f0aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 15
        echo "    
    
    
    <div class=\"container-fluid\">
        
        <div class=\"row col-xs-8 col-xs-offset-2\">
            ";
        // line 21
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formquizzdone"]) ? $context["formquizzdone"] : $this->getContext($context, "formquizzdone")), 'form_start');
        echo "    
            <div class=\"tabbable tabs-below\">
                <div id=\"\" class=\"tab-content\">
                    
                    <div class=\"tab-pane active text-center\" id=\"\">
                        <h2>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["quizz"]) ? $context["quizz"] : $this->getContext($context, "quizz")), "name", array()), "html", null, true);
        echo "</h2>
                        <br /><br />";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["quizz"]) ? $context["quizz"] : $this->getContext($context, "quizz")), "description", array()), "html", null, true);
        echo "<br /><br /><br />
                        <h4>";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["quizz"]) ? $context["quizz"] : $this->getContext($context, "quizz")), "nbQuestion", array()), "html", null, true);
        echo " questions</h4>
                        <button class=\"btn btn-primary\" href=\"#Q1\" data-toggle=\"tab\">Commencer le Quizz</button>
                    </div>
                    
                    ";
        // line 32
        $context["i"] = 1;
        // line 33
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["formquizzdone"]) ? $context["formquizzdone"] : $this->getContext($context, "formquizzdone")), "questiondone", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["questiondone"]) {
            // line 34
            echo "                        ";
            $context["question"] = $this->getAttribute($this->getAttribute((isset($context["quizz"]) ? $context["quizz"] : $this->getContext($context, "quizz")), "questions", array()), ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) - 1));
            // line 35
            echo "                        <div class=\"tab-pane col-xs-10 col-xs-offset-1\" id=\"Q";
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
            echo "\">
                            <br /><br />
                            <div class=\"panel panel-default\">
                                <div class=\"panel-heading\">
                                    <h4>Question ";
            // line 39
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
            echo " : </h4>
                                </div>
                                <div class=\"panel-body text-center\">
                                    <div class=\"row\">
                                        ";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "question", array()), "html", null, true);
            echo "
                                    </div>
                                    <br /><br />
                                    <div class=\"row col-xs-8 col-xs-offset-2\">
                                        
                                        ";
            // line 48
            if (($this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "questiontype", array()) == 1)) {
                // line 49
                echo "                                            ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["questiondone"], "answer", array()), 'widget', array("attr" => array("class" => "form-control auto-form", "onkeypress" => "keypress(this)")));
                echo "
                                        
                                        ";
            } elseif (($this->getAttribute(            // line 51
(isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "questiontype", array()) == 2)) {
                // line 52
                echo "                                            ";
                $context["answers"] = twig_split_filter($this->env, twig_replace_filter($this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "answer", array()), array("{T}" => "")), "[||]");
                // line 53
                echo "                                            ";
                $context["k"] = 0;
                echo " ";
                // line 54
                echo "                                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["answers"]) ? $context["answers"] : $this->getContext($context, "answers")));
                foreach ($context['_seq'] as $context["_key"] => $context["answer"]) {
                    // line 55
                    echo "                                                ";
                    if (($context["answer"] == "")) {
                        // line 56
                        echo "                                                ";
                    } else {
                        // line 57
                        echo "                                                    <div i=\"";
                        echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
                        echo "\" onClick=\"selectQCMAnswer(this)\" class=\"QCManswer QCManswer";
                        echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
                        echo " center-block btn btn-default\">";
                        echo twig_escape_filter($this->env, $context["answer"], "html", null, true);
                        echo "</div><br />
                                                ";
                    }
                    // line 59
                    echo "                                                ";
                    $context["k"] = ((isset($context["k"]) ? $context["k"] : $this->getContext($context, "k")) + 1);
                    // line 60
                    echo "                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['answer'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 61
                echo "                                                    <div class=\"hidden\">";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["questiondone"], "answer", array()), 'widget');
                echo "</div>
                                        
                                        ";
            }
            // line 64
            echo "                                    </div>
                                </div>
                            </div>
                            
                            
                            
                            <div class=\"row text-center\">
                                ";
            // line 71
            if (((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) == $this->getAttribute((isset($context["quizz"]) ? $context["quizz"] : $this->getContext($context, "quizz")), "nbQuestion", array()))) {
                echo " ";
                $context["end"] = 1;
                echo " ";
            } else {
                echo " ";
                $context["end"] = 0;
                echo " ";
            }
            // line 72
            echo "                                ";
            if ((($this->getAttribute((isset($context["quizz"]) ? $context["quizz"] : $this->getContext($context, "quizz")), "back", array()) == 1) && ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) > 1))) {
                // line 73
                echo "                                    <button class=\"btn btn-primary\" href=\"#Q";
                echo twig_escape_filter($this->env, ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) - 1), "html", null, true);
                echo "\" data-toggle=\"tab\">Question précédente</button>
                                ";
            }
            // line 75
            echo "                                ";
            if (((isset($context["end"]) ? $context["end"] : $this->getContext($context, "end")) == 0)) {
                // line 76
                echo "                                    <button class=\"btn btn-primary\" href=\"#Q";
                echo twig_escape_filter($this->env, ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1), "html", null, true);
                echo "\" data-toggle=\"tab\">Question suivante</button>
                                ";
            } else {
                // line 78
                echo "                                    <input type=\"submit\" class=\"btn btn-primary\" value=\"Finir le Quizz\">
                                ";
            }
            // line 80
            echo "                            </div>
                        </div>
                        
                        ";
            // line 83
            $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
            // line 84
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['questiondone'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
        echo "                    
                    
                </div>
            </div>
            <div class='hidden'>";
        // line 89
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formquizzdone"]) ? $context["formquizzdone"] : $this->getContext($context, "formquizzdone")), 'form_end');
        echo "</div>
        </div>
    </div>
    
";
        
        $__internal_eb4734219ae21016ab7b4624768aca6ff97d475f829c3e21356a25139954f0aa->leave($__internal_eb4734219ae21016ab7b4624768aca6ff97d475f829c3e21356a25139954f0aa_prof);

    }

    public function getTemplateName()
    {
        return "QuizzBundle:Quizz:do.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  272 => 89,  266 => 85,  260 => 84,  258 => 83,  253 => 80,  249 => 78,  243 => 76,  240 => 75,  234 => 73,  231 => 72,  221 => 71,  212 => 64,  205 => 61,  199 => 60,  196 => 59,  186 => 57,  183 => 56,  180 => 55,  175 => 54,  171 => 53,  168 => 52,  166 => 51,  160 => 49,  158 => 48,  150 => 43,  143 => 39,  135 => 35,  132 => 34,  127 => 33,  125 => 32,  118 => 28,  114 => 27,  110 => 26,  102 => 21,  94 => 15,  88 => 14,  81 => 12,  67 => 10,  63 => 7,  58 => 6,  52 => 5,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"::base.html.twig\" %}

{% block title %} {{ quizz.name }} - {{ parent() }} {% endblock %}

{% block javascripts %}
    {{ parent() }}
            {% javascripts
                        '@QuizzBundle/Resources/public/do.js'
                        %}
                        <script src=\"{{ asset_url }}\"></script>
                    {% endjavascripts %}
        {% endblock %}

{% block body %}
    
    
    
    <div class=\"container-fluid\">
        
        <div class=\"row col-xs-8 col-xs-offset-2\">
            {{form_start(formquizzdone)}}    
            <div class=\"tabbable tabs-below\">
                <div id=\"\" class=\"tab-content\">
                    
                    <div class=\"tab-pane active text-center\" id=\"\">
                        <h2>{{ quizz.name }}</h2>
                        <br /><br />{{ quizz.description }}<br /><br /><br />
                        <h4>{{quizz.nbQuestion }} questions</h4>
                        <button class=\"btn btn-primary\" href=\"#Q1\" data-toggle=\"tab\">Commencer le Quizz</button>
                    </div>
                    
                    {% set i = 1 %}
                    {% for questiondone in formquizzdone.questiondone %}
                        {% set question = attribute(quizz.questions, i-1) %}
                        <div class=\"tab-pane col-xs-10 col-xs-offset-1\" id=\"Q{{ i }}\">
                            <br /><br />
                            <div class=\"panel panel-default\">
                                <div class=\"panel-heading\">
                                    <h4>Question {{ i }} : </h4>
                                </div>
                                <div class=\"panel-body text-center\">
                                    <div class=\"row\">
                                        {{question.question }}
                                    </div>
                                    <br /><br />
                                    <div class=\"row col-xs-8 col-xs-offset-2\">
                                        
                                        {% if(question.questiontype == 1) %}
                                            {{ form_widget(questiondone.answer, { 'attr': { 'class': 'form-control auto-form', 'onkeypress' : \"keypress(this)\" } }) }}
                                        
                                        {% elseif(question.questiontype == 2) %}
                                            {% set answers = question.answer|replace({'{T}' : ''})|split('[||]') %}
                                            {% set k = 0 %} {# Variable pour sauter le premier champ blanc #}
                                            {% for answer in answers %}
                                                {% if answer == \"\" %}
                                                {% else %}
                                                    <div i=\"{{ i }}\" onClick=\"selectQCMAnswer(this)\" class=\"QCManswer QCManswer{{i}} center-block btn btn-default\">{{ answer }}</div><br />
                                                {% endif %}
                                                {% set k = k + 1 %}
                                            {% endfor %}
                                                    <div class=\"hidden\">{{ form_widget(questiondone.answer) }}</div>
                                        
                                        {% endif %}
                                    </div>
                                </div>
                            </div>
                            
                            
                            
                            <div class=\"row text-center\">
                                {% if(i == quizz.nbQuestion) %} {% set end = 1 %} {% else %} {% set end = 0 %} {% endif %}
                                {% if(quizz.back == 1 and i > 1) %}
                                    <button class=\"btn btn-primary\" href=\"#Q{{ i -1}}\" data-toggle=\"tab\">Question précédente</button>
                                {% endif %}
                                {% if(end == 0) %}
                                    <button class=\"btn btn-primary\" href=\"#Q{{ i +1 }}\" data-toggle=\"tab\">Question suivante</button>
                                {% else %}
                                    <input type=\"submit\" class=\"btn btn-primary\" value=\"Finir le Quizz\">
                                {% endif %}
                            </div>
                        </div>
                        
                        {% set i = i + 1 %}
                    {% endfor %}
                    
                    
                </div>
            </div>
            <div class='hidden'>{{ form_end(formquizzdone) }}</div>
        </div>
    </div>
    
{% endblock %}";
    }
}
