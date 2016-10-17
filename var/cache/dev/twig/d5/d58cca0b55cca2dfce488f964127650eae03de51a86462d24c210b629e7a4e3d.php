<?php

/* GeneralBundle:UserZone:myquizz.html.twig */
class __TwigTemplate_e6b2f6ad57be2f2df37da0f7d57d7d52752789828b31e3235edf718c2a5ed598 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "GeneralBundle:UserZone:myquizz.html.twig", 1);
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
        $__internal_6dc6a56c6e5b5f2df638078a1235949230c88d30728b6a3c6ea2e3854efca451 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6dc6a56c6e5b5f2df638078a1235949230c88d30728b6a3c6ea2e3854efca451->enter($__internal_6dc6a56c6e5b5f2df638078a1235949230c88d30728b6a3c6ea2e3854efca451_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GeneralBundle:UserZone:myquizz.html.twig"));

        // line 14
        $context["theme_admin"] = 0;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6dc6a56c6e5b5f2df638078a1235949230c88d30728b6a3c6ea2e3854efca451->leave($__internal_6dc6a56c6e5b5f2df638078a1235949230c88d30728b6a3c6ea2e3854efca451_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0d6965bf33595179c8b20e147349664d518329b90a649b095f7e7b092a0fa282 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d6965bf33595179c8b20e147349664d518329b90a649b095f7e7b092a0fa282->enter($__internal_0d6965bf33595179c8b20e147349664d518329b90a649b095f7e7b092a0fa282_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Mes Quizz - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " ";
        
        $__internal_0d6965bf33595179c8b20e147349664d518329b90a649b095f7e7b092a0fa282->leave($__internal_0d6965bf33595179c8b20e147349664d518329b90a649b095f7e7b092a0fa282_prof);

    }

    // line 5
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e0b741015d541dc12d9edb7036cecf5dd3d514d5481b0e494f0071118bd20617 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0b741015d541dc12d9edb7036cecf5dd3d514d5481b0e494f0071118bd20617->enter($__internal_e0b741015d541dc12d9edb7036cecf5dd3d514d5481b0e494f0071118bd20617_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 6
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    ";
        // line 7
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "fb55971_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_fb55971_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/fb55971_myquizz_1.js");
            // line 10
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        } else {
            // asset "fb55971"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_fb55971") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/fb55971.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        }
        unset($context["asset_url"]);
        
        $__internal_e0b741015d541dc12d9edb7036cecf5dd3d514d5481b0e494f0071118bd20617->leave($__internal_e0b741015d541dc12d9edb7036cecf5dd3d514d5481b0e494f0071118bd20617_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_8d7f5ef7046327a1d4e178627308386a4ee090eef309ef9bd142ee728c650a7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d7f5ef7046327a1d4e178627308386a4ee090eef309ef9bd142ee728c650a7f->enter($__internal_8d7f5ef7046327a1d4e178627308386a4ee090eef309ef9bd142ee728c650a7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 17
        echo "
    <div class=\"container-fluid\">
        <span hidden id='Qi' i=\"0\"></span>

";
        // line 22
        echo "        <div class=\"tabbable tabs-left \">
            <br />
            <ul class=\"nav nav-tabs\">
                <li class=\"active\"><a href=\"#quizzlist\" data-toggle=\"tab\">Mes Quizz</a></li>
                ";
        // line 26
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 27
            echo "                    <li><a  class=\"\" href=\"#errors\" data-toggle=\"tab\">Signalement(s)</a></li>
                ";
        }
        // line 29
        echo "                <li><a href=\"#createquizz\" data-toggle=\"tab\">Créer un Quizz</a></li>
            </ul>
        </div>
        
";
        // line 34
        echo "        <div class=\"tab-content col-xs-10\">

    ";
        // line 37
        echo "            <div class=\"col-xs-9 col-xs-offset-1 tab-pane active\" id=\"quizzlist\" >
                
                <h1 class=\"text-center\">Mes Quizz</h1>
                
                <table class=\"table table-striped\">
                    <tr>
                        <th class=\"text-center\">Nom du Quizz</th>
                        <th class=\"text-center\">Note</th>
                        <th class=\"text-center\"><abbr title=\"(nombre d'utilisateurs ayant effectué le Quizz)\">Fait</abbr></th>
                    </tr>

                    ";
        // line 48
        if ((twig_length_filter($this->env, (isset($context["quizzarray"]) ? $context["quizzarray"] : $this->getContext($context, "quizzarray"))) == 0)) {
            // line 49
            echo "                        <tr><td colspan='3'></td></tr><tr></tr>
                        <tr>
                            <td class='text-center' colspan='3'><i>Vous n'avez pas encore créé de Quizz.</i></td>
                        </tr>
                        <tr></tr><tr><td colspan='3'></td></tr>
                    ";
        }
        // line 55
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["quizzarray"]) ? $context["quizzarray"] : $this->getContext($context, "quizzarray")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["quizz"]) {
            // line 56
            echo "                        <tr>
                            <td class=\"text-center\"><a href=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("quizz_preview", array("quizzid" => $this->getAttribute($context["quizz"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["quizz"], "name", array()), "html", null, true);
            echo " ";
            if (($this->getAttribute($context["quizz"], "private", array()) == 1)) {
                echo "<i class=\"fa fa-lock icon\" aria-hidden=\"true\"></i>";
            }
            echo "</a></td>
                            <td class=\"text-center\">";
            // line 58
            $this->loadTemplate("QuizzBundle:Template:rate.html.twig", "GeneralBundle:UserZone:myquizz.html.twig", 58)->display($context);
            echo "</td>
                            <td class=\"text-center\">";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($context["quizz"], "done", array()), "html", null, true);
            echo " fois</td>
                        </tr>
                    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['quizz'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "                </table>
                
            </div>
                
    ";
        // line 67
        echo "           <div  class=\"tab-pane text-center\" id=\"createquizz\">
               
                <div class=\"tabbable tabs-left\" id=\"createquizzlateral\">
                   <ul id=\"questionlinkcontainer\" class=\"nav nav-tabs text-center\">
                       <li class=\"active createquizz_link\"><a href=\"#createquizz_general\" data-toggle=\"tab\">Général</a></li>
                       <li class=\"createquizz_link\"><a href=\"#createquizz_theme\" data-toggle=\"tab\">Thème</a></li>
                       <li class=\"createquizz_link\"><a href=\"#\" id=\"addquestion\" onClick=\"addQuestionField()\">Ajouter une question</a></li>
                       <li class=\"\"><a href=\"#createquizz_validation\" data-toggle=\"tab\" onClick='quizzValidation(this)'><b>Valider le Quizz</b></a></li>
                   </ul>
                </div>
                
               ";
        // line 78
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "                       
                <div class=\"tab-content\" id=\"createquizz_content\">  
                    
                        <div class=\"tab-pane col-xs-8 active\" id=\"createquizz_general\">
                            <h1>Créer un Quizz</h1><hr />

                            <br />
                            <div class=\"row\"><div class=\"col-xs-6 col-xs-offset-3\">";
        // line 85
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'label');
        echo " ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</div></div>

                            <br /><br />
                            <div class=\"row\">
                                <div class=\"col-xs-4 left\">";
        // line 89
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "back", array()), 'label');
        echo " : ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "back", array()), 'widget', array("attr" => array("class" => "")));
        echo "</div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-xs-3 left\">";
        // line 92
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "private", array()), 'label');
        echo " : ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "private", array()), 'widget', array("attr" => array("class" => "")));
        echo "</div>
                            </div>


                            <br />
                            <div class=\"row text-center\"><hr />
                                <div class=\"col-xs-5\">";
        // line 98
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'label');
        echo " : ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'widget', array("attr" => array("class" => "form-control ")));
        echo "</div>
                                <div class=\"col-xs-5 col-xs-offset-2\">";
        // line 99
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "userDescription", array()), 'label');
        echo " : ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "userDescription", array()), 'widget', array("attr" => array("class" => "form-control ")));
        echo "</div>
                            </div>
                        </div>  
                            
                        <div class=\"tab-pane col-xs-8\" id=\"createquizz_theme\"> ";
        // line 104
        echo "                            <h1>Sélectionner le thème</h1><hr />

                            <div id=\"themecontainer\">
                                ";
        // line 107
        $this->loadTemplate("GeneralBundle:Template:theme.html.twig", "GeneralBundle:UserZone:myquizz.html.twig", 107)->display($context);
        // line 108
        echo "                            </div>

                            <div class=\"col-xs-3 col-xs-offset-5\">
                                <h3>Thème sélectionné</h3>
                                <input type=\"text\" class=\"text-center form-control\" disabled id=\"theme_show\">
                                <span class=\"hidden\">";
        // line 113
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "theme", array()), 'widget');
        echo "</span>
                            </div>
                        </div>

                        <div class=\"tab-pane col-xs-9\" id=\"createquizz_validation\">
                            <div id='quizz_validation_container' class=\"col-xs-10 col-xs-offset-1\">
                                
                            </div>
                            
                            
                            <div id=\"proto_question_label\" data-prototype=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "questions", array()), "vars", array()), "prototype", array()), "question", array()), 'label'));
        echo "\"></div>
                            <div id=\"proto_question_widget\" data-prototype=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "questions", array()), "vars", array()), "prototype", array()), "question", array()), 'widget'));
        echo "\"></div>
                            <div id=\"proto_answer_label\" data-prototype=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "questions", array()), "vars", array()), "prototype", array()), "answer", array()), 'label'));
        echo "\"></div>
                            <div id=\"proto_answer_widget\" data-prototype=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "questions", array()), "vars", array()), "prototype", array()), "answer", array()), 'widget'));
        echo "\"></div>
                            <div id=\"proto_type_widget\" data-prototype=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "questions", array()), "vars", array()), "prototype", array()), "questionType", array()), 'widget'));
        echo "\"></div>
                            
                            <div class='hidden'>";
        // line 129
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'widget');
        echo "</div>
                        </div>
                        
                </div>
                        
                        
            </div>

    ";
        // line 138
        echo "            <div  class=\"tab-pane text-center\" id=\"errors\">
               
                <div class=\"tabbable tabs-left\" id=\"errorslateral\">
                   <ul class=\"nav nav-tabs text-center\">
                       ";
        // line 142
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 143
            echo "                            <li class=\"";
            if ($this->getAttribute($context["loop"], "first", array())) {
                echo "active ";
            }
            echo "\"><a href=\"#i";
            echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "id", array()), "html", null, true);
            echo "\" data-toggle=\"tab\">Question n°";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["error"], "question", array()), "id", array()), "html", null, true);
            echo "</a></li>
                        ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 145
        echo "                   </ul>
                </div>
                   
               <div class='tab-content col-xs-10'>
                   
                    ";
        // line 150
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 151
            echo "                        
                        <div  id=\"i";
            // line 152
            echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "id", array()), "html", null, true);
            echo "\" class='tab-pane ";
            if ($this->getAttribute($context["loop"], "first", array())) {
                echo "active";
            }
            echo "'>
                            <div class=\"col-xs-7\">
                                <h2>Question n°";
            // line 154
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["error"], "question", array()), "id", array()), "html", null, true);
            echo "</h2> <br />

                                ";
            // line 156
            $context["question"] = $this->getAttribute($context["error"], "question", array());
            // line 157
            echo "                                ";
            $this->loadTemplate("QuizzBundle:Template:question.html.twig", "GeneralBundle:UserZone:myquizz.html.twig", 157)->display($context);
            // line 158
            echo "                                
                            </div>

                            <div class='col-xs-5'>
                                
                                <h2>Signalement</h2><br/>
                                <div class=\"alert alert-info\">
                                    ";
            // line 165
            echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "content", array()), "html", null, true);
            echo "
                                </div>

                                <table class=\"table table-striped\">
                                    <tr></tr><tr>
                                    ";
            // line 170
            if (($this->getAttribute($this->getAttribute($context["error"], "question", array()), "deleted", array()) == 0)) {
                echo "<td class=\"text-center\"><a class='no-deco' href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("quizz_modify", array("quizzid" => $this->getAttribute($this->getAttribute($this->getAttribute($context["error"], "question", array()), "quizz", array()), "id", array()))), "html", null, true);
                echo "\">Modifier le Quizz</a></td></tr>";
            }
            // line 171
            echo "                                    <tr><td class=\"text-center\">Marquer comme : </a></td></tr>
                                    <tr><td class=\"text-center\"><a class='success' href=\"";
            // line 172
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("myquizz", array("errorstat" => 2, "errorid" => $this->getAttribute($context["error"], "id", array()))), "html", null, true);
            echo "\">Lu et corrigé</a></td></tr><tr></tr>
                                    <tr><td class=\"text-center\"><a class='danger' href=\"";
            // line 173
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("myquizz", array("errorstat" => 3, "errorid" => $this->getAttribute($context["error"], "id", array()))), "html", null, true);
            echo "\">Non valable</a></td></tr>
                                </table>

                            </div>  
                        </div>
                                
                    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 180
        echo "                    
               </div>
                
            </div>
                    
        </div>
       
    </div>
    
";
        
        $__internal_8d7f5ef7046327a1d4e178627308386a4ee090eef309ef9bd142ee728c650a7f->leave($__internal_8d7f5ef7046327a1d4e178627308386a4ee090eef309ef9bd142ee728c650a7f_prof);

    }

    public function getTemplateName()
    {
        return "GeneralBundle:UserZone:myquizz.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  470 => 180,  449 => 173,  445 => 172,  442 => 171,  436 => 170,  428 => 165,  419 => 158,  416 => 157,  414 => 156,  409 => 154,  400 => 152,  397 => 151,  380 => 150,  373 => 145,  350 => 143,  333 => 142,  327 => 138,  316 => 129,  311 => 127,  307 => 126,  303 => 125,  299 => 124,  295 => 123,  282 => 113,  275 => 108,  273 => 107,  268 => 104,  259 => 99,  253 => 98,  242 => 92,  234 => 89,  225 => 85,  215 => 78,  202 => 67,  196 => 62,  179 => 59,  175 => 58,  165 => 57,  162 => 56,  144 => 55,  136 => 49,  134 => 48,  121 => 37,  117 => 34,  111 => 29,  107 => 27,  105 => 26,  99 => 22,  93 => 17,  87 => 16,  68 => 10,  64 => 7,  59 => 6,  53 => 5,  39 => 3,  32 => 1,  30 => 14,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"::base.html.twig\" %}

{% block title %} Mes Quizz - {{ parent() }} {% endblock %}

{% block javascripts %}
    {{ parent() }}
    {% javascripts
        '@GeneralBundle/Resources/public/myquizz.js'
        %}
        <script src=\"{{ asset_url }}\"></script>
    {% endjavascripts %}
{% endblock %}

{% set theme_admin = 0 %}

{% block body %}

    <div class=\"container-fluid\">
        <span hidden id='Qi' i=\"0\"></span>

{#        ONGLET PRINCIPAL GAUCHE   #}
        <div class=\"tabbable tabs-left \">
            <br />
            <ul class=\"nav nav-tabs\">
                <li class=\"active\"><a href=\"#quizzlist\" data-toggle=\"tab\">Mes Quizz</a></li>
                {% if errors|length() > 0 %}
                    <li><a  class=\"\" href=\"#errors\" data-toggle=\"tab\">Signalement(s)</a></li>
                {% endif %}
                <li><a href=\"#createquizz\" data-toggle=\"tab\">Créer un Quizz</a></li>
            </ul>
        </div>
        
{#        TAB-CONTENT PRINCIPAL     #}
        <div class=\"tab-content col-xs-10\">

    {#            Liste des Quizz       #}
            <div class=\"col-xs-9 col-xs-offset-1 tab-pane active\" id=\"quizzlist\" >
                
                <h1 class=\"text-center\">Mes Quizz</h1>
                
                <table class=\"table table-striped\">
                    <tr>
                        <th class=\"text-center\">Nom du Quizz</th>
                        <th class=\"text-center\">Note</th>
                        <th class=\"text-center\"><abbr title=\"(nombre d'utilisateurs ayant effectué le Quizz)\">Fait</abbr></th>
                    </tr>

                    {% if quizzarray|length() == 0 %}
                        <tr><td colspan='3'></td></tr><tr></tr>
                        <tr>
                            <td class='text-center' colspan='3'><i>Vous n'avez pas encore créé de Quizz.</i></td>
                        </tr>
                        <tr></tr><tr><td colspan='3'></td></tr>
                    {% endif %}
                    {% for quizz in quizzarray %}
                        <tr>
                            <td class=\"text-center\"><a href=\"{{path(\"quizz_preview\", { 'quizzid': quizz.id })}}\">{{ quizz.name }} {% if quizz.private == 1 %}<i class=\"fa fa-lock icon\" aria-hidden=\"true\"></i>{% endif %}</a></td>
                            <td class=\"text-center\">{% include \"QuizzBundle:Template:rate.html.twig\" %}</td>
                            <td class=\"text-center\">{{ quizz.done }} fois</td>
                        </tr>
                    {% endfor %}
                </table>
                
            </div>
                
    {#           Création de Quizz      #}
           <div  class=\"tab-pane text-center\" id=\"createquizz\">
               
                <div class=\"tabbable tabs-left\" id=\"createquizzlateral\">
                   <ul id=\"questionlinkcontainer\" class=\"nav nav-tabs text-center\">
                       <li class=\"active createquizz_link\"><a href=\"#createquizz_general\" data-toggle=\"tab\">Général</a></li>
                       <li class=\"createquizz_link\"><a href=\"#createquizz_theme\" data-toggle=\"tab\">Thème</a></li>
                       <li class=\"createquizz_link\"><a href=\"#\" id=\"addquestion\" onClick=\"addQuestionField()\">Ajouter une question</a></li>
                       <li class=\"\"><a href=\"#createquizz_validation\" data-toggle=\"tab\" onClick='quizzValidation(this)'><b>Valider le Quizz</b></a></li>
                   </ul>
                </div>
                
               {{form_start(form)}}                       
                <div class=\"tab-content\" id=\"createquizz_content\">  
                    
                        <div class=\"tab-pane col-xs-8 active\" id=\"createquizz_general\">
                            <h1>Créer un Quizz</h1><hr />

                            <br />
                            <div class=\"row\"><div class=\"col-xs-6 col-xs-offset-3\">{{ form_label(form.name) }} {{ form_widget(form.name, { 'attr': { 'class': 'form-control'} }) }}</div></div>

                            <br /><br />
                            <div class=\"row\">
                                <div class=\"col-xs-4 left\">{{ form_label(form.back) }} : {{ form_widget(form.back, { 'attr': { 'class': '' } }) }}</div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-xs-3 left\">{{ form_label(form.private) }} : {{ form_widget(form.private, { 'attr': { 'class': '' } }) }}</div>
                            </div>


                            <br />
                            <div class=\"row text-center\"><hr />
                                <div class=\"col-xs-5\">{{ form_label(form.description) }} : {{ form_widget(form.description, { 'attr': { 'class': 'form-control ' } }) }}</div>
                                <div class=\"col-xs-5 col-xs-offset-2\">{{ form_label(form.userDescription) }} : {{ form_widget(form.userDescription, { 'attr': { 'class': 'form-control ' } }) }}</div>
                            </div>
                        </div>  
                            
                        <div class=\"tab-pane col-xs-8\" id=\"createquizz_theme\"> {# Sélection de thème #}
                            <h1>Sélectionner le thème</h1><hr />

                            <div id=\"themecontainer\">
                                {% include \"GeneralBundle:Template:theme.html.twig\" %}
                            </div>

                            <div class=\"col-xs-3 col-xs-offset-5\">
                                <h3>Thème sélectionné</h3>
                                <input type=\"text\" class=\"text-center form-control\" disabled id=\"theme_show\">
                                <span class=\"hidden\">{{ form_widget(form.theme) }}</span>
                            </div>
                        </div>

                        <div class=\"tab-pane col-xs-9\" id=\"createquizz_validation\">
                            <div id='quizz_validation_container' class=\"col-xs-10 col-xs-offset-1\">
                                
                            </div>
                            
                            
                            <div id=\"proto_question_label\" data-prototype=\"{{ form_label(form.questions.vars.prototype.question)|e }}\"></div>
                            <div id=\"proto_question_widget\" data-prototype=\"{{ form_widget(form.questions.vars.prototype.question)|e }}\"></div>
                            <div id=\"proto_answer_label\" data-prototype=\"{{ form_label(form.questions.vars.prototype.answer)|e }}\"></div>
                            <div id=\"proto_answer_widget\" data-prototype=\"{{ form_widget(form.questions.vars.prototype.answer)|e }}\"></div>
                            <div id=\"proto_type_widget\" data-prototype=\"{{ form_widget(form.questions.vars.prototype.questionType)|e }}\"></div>
                            
                            <div class='hidden'>{{ form_widget(form._token) }}</div>
                        </div>
                        
                </div>
                        
                        
            </div>

    {#            Liste des erreurs     #}
            <div  class=\"tab-pane text-center\" id=\"errors\">
               
                <div class=\"tabbable tabs-left\" id=\"errorslateral\">
                   <ul class=\"nav nav-tabs text-center\">
                       {% for error in errors %}
                            <li class=\"{% if loop.first %}active {% endif %}\"><a href=\"#i{{error.id}}\" data-toggle=\"tab\">Question n°{{error.question.id}}</a></li>
                        {% endfor %}
                   </ul>
                </div>
                   
               <div class='tab-content col-xs-10'>
                   
                    {% for error in errors %}
                        
                        <div  id=\"i{{error.id}}\" class='tab-pane {% if loop.first %}active{% endif %}'>
                            <div class=\"col-xs-7\">
                                <h2>Question n°{{error.question.id}}</h2> <br />

                                {% set question = error.question %}
                                {% include \"QuizzBundle:Template:question.html.twig\" %}
                                
                            </div>

                            <div class='col-xs-5'>
                                
                                <h2>Signalement</h2><br/>
                                <div class=\"alert alert-info\">
                                    {{ error.content }}
                                </div>

                                <table class=\"table table-striped\">
                                    <tr></tr><tr>
                                    {% if error.question.deleted == 0 %}<td class=\"text-center\"><a class='no-deco' href=\"{{path('quizz_modify', { 'quizzid' : error.question.quizz.id }) }}\">Modifier le Quizz</a></td></tr>{% endif %}
                                    <tr><td class=\"text-center\">Marquer comme : </a></td></tr>
                                    <tr><td class=\"text-center\"><a class='success' href=\"{{path('myquizz', { 'errorstat' : 2, 'errorid': error.id }) }}\">Lu et corrigé</a></td></tr><tr></tr>
                                    <tr><td class=\"text-center\"><a class='danger' href=\"{{path('myquizz', { 'errorstat' : 3, 'errorid': error.id }) }}\">Non valable</a></td></tr>
                                </table>

                            </div>  
                        </div>
                                
                    {% endfor %}
                    
               </div>
                
            </div>
                    
        </div>
       
    </div>
    
{% endblock %}
";
    }
}
