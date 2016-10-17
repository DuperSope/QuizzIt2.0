<?php

/* QuizzBundle:Quizz:modify.html.twig */
class __TwigTemplate_2bedcfa91d141081374b69bec313ba588f10730191c397f2483e6613f01ae086 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "QuizzBundle:Quizz:modify.html.twig", 1);
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
        $__internal_cb1c7fb7092cc82be2f66ffe6411cd8971cc635e430c084165a573ea357a776f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb1c7fb7092cc82be2f66ffe6411cd8971cc635e430c084165a573ea357a776f->enter($__internal_cb1c7fb7092cc82be2f66ffe6411cd8971cc635e430c084165a573ea357a776f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "QuizzBundle:Quizz:modify.html.twig"));

        // line 14
        $context["theme_admin"] = 0;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cb1c7fb7092cc82be2f66ffe6411cd8971cc635e430c084165a573ea357a776f->leave($__internal_cb1c7fb7092cc82be2f66ffe6411cd8971cc635e430c084165a573ea357a776f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5cdcfc946832492a3bee8e075b4d98ca97b54586004685cd468d3895a0769c95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cdcfc946832492a3bee8e075b4d98ca97b54586004685cd468d3895a0769c95->enter($__internal_5cdcfc946832492a3bee8e075b4d98ca97b54586004685cd468d3895a0769c95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Modifier : ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["quizz"]) ? $context["quizz"] : $this->getContext($context, "quizz")), "name", array()), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " ";
        
        $__internal_5cdcfc946832492a3bee8e075b4d98ca97b54586004685cd468d3895a0769c95->leave($__internal_5cdcfc946832492a3bee8e075b4d98ca97b54586004685cd468d3895a0769c95_prof);

    }

    // line 5
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_09287606d87c5722d47d3dea04b821eff415c4db71917eaf66a357be1bb425be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09287606d87c5722d47d3dea04b821eff415c4db71917eaf66a357be1bb425be->enter($__internal_09287606d87c5722d47d3dea04b821eff415c4db71917eaf66a357be1bb425be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
            echo "                        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
                    ";
        } else {
            // asset "fb55971"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_fb55971") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/fb55971.js");
            echo "                        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
                    ";
        }
        unset($context["asset_url"]);
        // line 12
        echo "        ";
        
        $__internal_09287606d87c5722d47d3dea04b821eff415c4db71917eaf66a357be1bb425be->leave($__internal_09287606d87c5722d47d3dea04b821eff415c4db71917eaf66a357be1bb425be_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_ac51f71b4f14ac1d034978599072acfeba438605c0e5a5b73d9b24baf3b5b9e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac51f71b4f14ac1d034978599072acfeba438605c0e5a5b73d9b24baf3b5b9e4->enter($__internal_ac51f71b4f14ac1d034978599072acfeba438605c0e5a5b73d9b24baf3b5b9e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 17
        echo "    <span id='modify' value='1'></span>
    <span hidden id='Qi' i=\"";
        // line 18
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "questions", array())), "html", null, true);
        echo "\"></span>

    <div class=\"col-xs-12 col-xs-offset-1 text-center\">
         <div class=\"tabbable tabs-left col-xs-2\" id=\"createquizzlateral\">
           <ul id=\"questionlinkcontainer\" class=\"nav nav-tabs text-center\">
               <li class=\"active createquizz_link\"><a href=\"#createquizz_general\" data-toggle=\"tab\">Général</a></li>
               <li class=\"createquizz_link\"><a href=\"#createquizz_theme\" data-toggle=\"tab\">Thème</a></li>
               ";
        // line 25
        $context["i"] = 0;
        // line 26
        echo "               ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "questions", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["question"]) {
            // line 27
            echo "                    <li id=\"qlink_";
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
            echo "\" class=\"createquizz_link\"><a href=\"#createquizz_q";
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
            echo "\" data-toggle=\"tab\">Question ";
            echo twig_escape_filter($this->env, ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1), "html", null, true);
            echo "</a></li>
                    ";
            // line 28
            $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
            // line 29
            echo "               ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['question'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "               <li class=\"createquizz_link\"><a href=\"#\" id=\"addquestion\" onClick=\"addQuestionField()\">Ajouter une question</a></li>
               <li class=\"\"><a href=\"#createquizz_validation\" data-toggle=\"tab\" onClick='quizzValidation(this)'><b>Valider le Quizz</b></a></li>
           </ul>
        </div>

       ";
        // line 35
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        <div class=\"tab-content col-xs-10\" id=\"createquizz_content\">
                <div class=\"tab-pane col-xs-8 active\" id=\"createquizz_general\">
                    <h1>Créer un Quizz</h1><hr />

                    <br />
                    <div class=\"row\"><div class=\"col-xs-6 col-xs-offset-3\">";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'label');
        echo " ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</div></div>

                    <br /><br />
                    <div class=\"row\">
                        <div class=\"col-xs-3 left\">";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "back", array()), 'label');
        echo " : ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "back", array()), 'widget', array("attr" => array("class" => "")));
        echo "</div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-xs-3 left\">";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "private", array()), 'label');
        echo " : ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "private", array()), 'widget', array("attr" => array("class" => "")));
        echo "</div>
                    </div>


                    <br />
                    <div class=\"row text-center\"><hr />
                        <div class=\"col-xs-5\">";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'label');
        echo " : ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'widget', array("attr" => array("class" => "form-control ")));
        echo "</div>
                        <div class=\"col-xs-5 col-xs-offset-2\">";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "userDescription", array()), 'label');
        echo " : ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "userDescription", array()), 'widget', array("attr" => array("class" => "form-control ")));
        echo "</div>
                    </div>
                </div>
                    
                <div class=\"tab-pane col-xs-8\" id=\"createquizz_theme\"> ";
        // line 60
        echo "                    <h1>Sélectionner le thème</h1><hr />

                    <div id=\"themecontainer\">
                        ";
        // line 63
        $this->loadTemplate("GeneralBundle:Template:theme.html.twig", "QuizzBundle:Quizz:modify.html.twig", 63)->display($context);
        // line 64
        echo "                    </div>

                    <div class=\"col-xs-5 col-xs-offset-5\">
                        <h3>Thème sélectionné</h3>
                        <input type=\"text\" class=\"text-center form-control\" disabled id=\"theme_show\" i=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["quizz"]) ? $context["quizz"] : $this->getContext($context, "quizz")), "theme", array()), "id", array()), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["quizz"]) ? $context["quizz"] : $this->getContext($context, "quizz")), "theme", array()), "name", array()), "html", null, true);
        echo "\">
                        <span class=\"hidden\">";
        // line 69
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "theme", array()), 'widget');
        echo "</span>
                    </div>
                </div>

                ";
        // line 73
        $context["i"] = 0;
        // line 74
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "questions", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["questionform"]) {
            echo "                                ";
            // line 75
            echo "                    ";
            $context["question"] = $this->getAttribute($this->getAttribute((isset($context["quizz"]) ? $context["quizz"] : $this->getContext($context, "quizz")), "questions", array()), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")));
            // line 76
            echo "
                    <div class=\"tab-pane fade col-xs-6\" id=\"createquizz_q";
            // line 77
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
            echo "\">
                        <input type=\"hidden\" name=\"TYPE_";
            // line 78
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
            echo "\" id=\"TYPE_";
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
            echo "\">
                        ";
            // line 79
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["questionform"], "questionType", array()), 'widget');
            echo "
                        <h1>Question n°";
            // line 80
            echo twig_escape_filter($this->env, ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1), "html", null, true);
            echo "</h1><hr />

                        <span id=\"suppquestionspace";
            // line 82
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
            echo "\">
                            ";
            // line 83
            if (($this->getAttribute($context["loop"], "last", array()) &&  !$this->getAttribute($context["loop"], "first", array()))) {
                echo "                                          ";
                // line 84
                echo "                                <button i=\"";
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
                echo "\" class=\"btn btn-warning suppquestion\" id=\"suppquestion";
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
                echo "\" onClick=\"suppQuestionForm(this)\">Supprimer la question</button>
                            ";
            }
            // line 86
            echo "                            </span>                            

                        <div class=\"questiontype_";
            // line 88
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
            echo "\"><h3>Type de la question<br /><br />
                        <button ";
            // line 89
            if (($this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "questiontype", array()) == 1)) {
                echo " disabled=\"true\" ";
            }
            echo " type=\"button\" i=\"";
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
            echo "\" onClick=\"selectQuestionType(this)\" class=\"btn ";
            if (($this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "questiontype", array()) == 1)) {
                echo "btn-primary ";
            }
            echo "questiontype_btn TEXT\" id=\"Qtype_";
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
            echo "_TEXT\">Texte</button>
                        <button ";
            // line 90
            if (($this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "questiontype", array()) == 2)) {
                echo " disabled=\"true\" ";
            }
            echo " type=\"button\" i=\"";
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
            echo "\" onClick=\"selectQuestionType(this)\" class=\"btn ";
            if (($this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "questiontype", array()) == 2)) {
                echo "btn-primary ";
            }
            echo "questiontype_btn QCM\" id=\"Qtype_";
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
            echo "_QCM\">QCM</button>
                        </h3><div id=\"questioncontainer";
            // line 91
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
            echo "\">

                            <br />
                            ";
            // line 94
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["questionform"], "question", array()), 'label');
            echo "<br/>
                            ";
            // line 95
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["questionform"], "question", array()), 'widget');
            echo "

                            ";
            // line 97
            if (($this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "questiontype", array()) == 1)) {
                echo "  ";
                // line 98
                echo "                                <br /><br />
                                ";
                // line 99
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["questionform"], "answer", array()), 'label');
                echo " :<br />
                                ";
                // line 100
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["questionform"], "answer", array()), 'widget');
                echo "
                            ";
            } elseif (($this->getAttribute(            // line 101
(isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "questiontype", array()) == 2)) {
                echo " ";
                // line 102
                echo "                                <br /><h5>Réponses : (cocher la juste)</h5>

                                ";
                // line 104
                $context["qcmanswers"] = twig_split_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "answer", array()), "[||]");
                // line 105
                echo "                                <span hidden id='QCM";
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
                echo "infos' v0='";
                echo twig_escape_filter($this->env, (twig_length_filter($this->env, (isset($context["qcmanswers"]) ? $context["qcmanswers"] : $this->getContext($context, "qcmanswers"))) - 1), "html", null, true);
                echo "' v1='";
                if (((twig_length_filter($this->env, (isset($context["qcmanswers"]) ? $context["qcmanswers"] : $this->getContext($context, "qcmanswers"))) - 1) > 1)) {
                    echo "1";
                } else {
                    echo "0";
                }
                echo "' v2='1'></span>

                                ";
                // line 107
                $context["qcmI"] = 1;
                // line 108
                echo "                                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["qcmanswers"]) ? $context["qcmanswers"] : $this->getContext($context, "qcmanswers")));
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
                foreach ($context['_seq'] as $context["_key"] => $context["answer"]) {
                    echo "                              ";
                    // line 109
                    echo "                                    ";
                    if ($this->getAttribute($context["loop"], "last", array())) {
                    } else {
                        // line 110
                        echo "                                        ";
                        if ((twig_slice($this->env, $context["answer"], 0, 3) == "{T}")) {
                            echo "                       ";
                            // line 111
                            echo "                                            ";
                            $context["answer"] = twig_replace_filter($context["answer"], array("{T}" => ""));
                            // line 112
                            echo "                                            ";
                            $context["checked"] = "checked";
                            // line 113
                            echo "                                        ";
                        } else {
                            // line 114
                            echo "                                            ";
                            $context["checked"] = "";
                            // line 115
                            echo "                                        ";
                        }
                        // line 116
                        echo "
                                        <div id=\"QCM_Q";
                        // line 117
                        echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
                        echo "SPACE_";
                        echo twig_escape_filter($this->env, (isset($context["qcmI"]) ? $context["qcmI"] : $this->getContext($context, "qcmI")), "html", null, true);
                        echo "\" class=\"row\"><br />
                                            <div class=\"col-xs-1 col-xs-offset-1\">
                                                <input i=\"";
                        // line 119
                        echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
                        echo "\" class=\"QCM_Q";
                        echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
                        echo "checkbox\" type=\"checkbox\" id=\"QCM_Q";
                        echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
                        echo "istrue";
                        echo twig_escape_filter($this->env, (isset($context["qcmI"]) ? $context["qcmI"] : $this->getContext($context, "qcmI")), "html", null, true);
                        echo "\" name=\"QCM_Q";
                        echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
                        echo "istrue";
                        echo twig_escape_filter($this->env, (isset($context["qcmI"]) ? $context["qcmI"] : $this->getContext($context, "qcmI")), "html", null, true);
                        echo "\" ";
                        echo twig_escape_filter($this->env, (isset($context["checked"]) ? $context["checked"] : $this->getContext($context, "checked")), "html", null, true);
                        echo "  onClick=\"checkboxQCM(this)\"></div>
                                            <div class=\"col-xs-8\">
                                                <input type=\"text\" class=\"form-control\" id=\"QCM_Q";
                        // line 121
                        echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
                        echo "answer";
                        echo twig_escape_filter($this->env, (isset($context["qcmI"]) ? $context["qcmI"] : $this->getContext($context, "qcmI")), "html", null, true);
                        echo "\" name=\"QCM_Q";
                        echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
                        echo "answer";
                        echo twig_escape_filter($this->env, (isset($context["qcmI"]) ? $context["qcmI"] : $this->getContext($context, "qcmI")), "html", null, true);
                        echo "\" value=\"";
                        echo twig_escape_filter($this->env, $context["answer"], "html", null, true);
                        echo "\">
                                            </div>
                                        </div>
                                        ";
                        // line 124
                        $context["qcmI"] = ((isset($context["qcmI"]) ? $context["qcmI"] : $this->getContext($context, "qcmI")) + 1);
                        // line 125
                        echo "                                    ";
                    }
                    // line 126
                    echo "                                ";
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['answer'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 127
                echo "                                <br id=\"beforeme_btn_";
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
                echo "\" />
                                <div id=\"QCM_btns_";
                // line 128
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
                echo "\">
                                    <button type=\"button\" class=\"btn btn-default\" i=\"";
                // line 129
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
                echo "\" id=\"QCM_add_";
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
                echo "\" onClick=\"addChoiceQCM(this)\">Ajouter une réponse</button>
                                    ";
                // line 130
                if (((twig_length_filter($this->env, (isset($context["qcmanswers"]) ? $context["qcmanswers"] : $this->getContext($context, "qcmanswers"))) - 1) > 2)) {
                    // line 131
                    echo "                                        <button type=\"button\" class=\"btn btn-danger\" i=\"";
                    echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
                    echo "\" id=\"QCM_supp_";
                    echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
                    echo "\" onClick=\"suppChoiceQCM(this)\">Retirer une réponse</button>
                                    ";
                }
                // line 133
                echo "                                </div>
                            ";
            }
            // line 135
            echo "

                        </div></div>




                    </div>
                    ";
            // line 143
            $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
            // line 144
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['questionform'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 145
        echo "


                <div class=\"tab-pane col-xs-9\" id=\"createquizz_validation\">
                    <div id='quizz_validation_container' class=\"col-xs-10 col-xs-offset-1\">

                    </div>


                    <div id=\"proto_question_label\" data-prototype=\"";
        // line 154
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "questions", array()), "vars", array()), "prototype", array()), "question", array()), 'label'));
        echo "\"></div>
                    <div id=\"proto_question_widget\" data-prototype=\"";
        // line 155
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "questions", array()), "vars", array()), "prototype", array()), "question", array()), 'widget'));
        echo "\"></div>
                    <div id=\"proto_answer_label\" data-prototype=\"";
        // line 156
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "questions", array()), "vars", array()), "prototype", array()), "answer", array()), 'label'));
        echo "\"></div>
                    <div id=\"proto_answer_widget\" data-prototype=\"";
        // line 157
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "questions", array()), "vars", array()), "prototype", array()), "answer", array()), 'widget'));
        echo "\"></div>
                    <div id=\"proto_type_widget\" data-prototype=\"";
        // line 158
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "questions", array()), "vars", array()), "prototype", array()), "questionType", array()), 'widget'));
        echo "\"></div>

                    <div class='hidden'>";
        // line 160
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'widget');
        echo "</div>
                </div>



        </div>
    </div>
";
        
        $__internal_ac51f71b4f14ac1d034978599072acfeba438605c0e5a5b73d9b24baf3b5b9e4->leave($__internal_ac51f71b4f14ac1d034978599072acfeba438605c0e5a5b73d9b24baf3b5b9e4_prof);

    }

    public function getTemplateName()
    {
        return "QuizzBundle:Quizz:modify.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  559 => 160,  554 => 158,  550 => 157,  546 => 156,  542 => 155,  538 => 154,  527 => 145,  513 => 144,  511 => 143,  501 => 135,  497 => 133,  489 => 131,  487 => 130,  481 => 129,  477 => 128,  472 => 127,  458 => 126,  455 => 125,  453 => 124,  439 => 121,  422 => 119,  415 => 117,  412 => 116,  409 => 115,  406 => 114,  403 => 113,  400 => 112,  397 => 111,  393 => 110,  389 => 109,  370 => 108,  368 => 107,  354 => 105,  352 => 104,  348 => 102,  345 => 101,  341 => 100,  337 => 99,  334 => 98,  331 => 97,  326 => 95,  322 => 94,  316 => 91,  302 => 90,  288 => 89,  284 => 88,  280 => 86,  272 => 84,  269 => 83,  265 => 82,  260 => 80,  256 => 79,  250 => 78,  246 => 77,  243 => 76,  240 => 75,  221 => 74,  219 => 73,  212 => 69,  206 => 68,  200 => 64,  198 => 63,  193 => 60,  184 => 55,  178 => 54,  167 => 48,  159 => 45,  150 => 41,  141 => 35,  134 => 30,  128 => 29,  126 => 28,  117 => 27,  112 => 26,  110 => 25,  100 => 18,  97 => 17,  91 => 16,  84 => 12,  70 => 10,  66 => 7,  61 => 6,  55 => 5,  39 => 3,  32 => 1,  30 => 14,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"::base.html.twig\" %}

{% block title %} Modifier : {{ quizz.name }} - {{ parent() }} {% endblock %}

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
    <span id='modify' value='1'></span>
    <span hidden id='Qi' i=\"{{ form.questions|length()}}\"></span>

    <div class=\"col-xs-12 col-xs-offset-1 text-center\">
         <div class=\"tabbable tabs-left col-xs-2\" id=\"createquizzlateral\">
           <ul id=\"questionlinkcontainer\" class=\"nav nav-tabs text-center\">
               <li class=\"active createquizz_link\"><a href=\"#createquizz_general\" data-toggle=\"tab\">Général</a></li>
               <li class=\"createquizz_link\"><a href=\"#createquizz_theme\" data-toggle=\"tab\">Thème</a></li>
               {% set i = 0 %}
               {% for question in form.questions %}
                    <li id=\"qlink_{{i}}\" class=\"createquizz_link\"><a href=\"#createquizz_q{{i}}\" data-toggle=\"tab\">Question {{i+1}}</a></li>
                    {% set i = i + 1 %}
               {% endfor %}
               <li class=\"createquizz_link\"><a href=\"#\" id=\"addquestion\" onClick=\"addQuestionField()\">Ajouter une question</a></li>
               <li class=\"\"><a href=\"#createquizz_validation\" data-toggle=\"tab\" onClick='quizzValidation(this)'><b>Valider le Quizz</b></a></li>
           </ul>
        </div>

       {{form_start(form)}}
        <div class=\"tab-content col-xs-10\" id=\"createquizz_content\">
                <div class=\"tab-pane col-xs-8 active\" id=\"createquizz_general\">
                    <h1>Créer un Quizz</h1><hr />

                    <br />
                    <div class=\"row\"><div class=\"col-xs-6 col-xs-offset-3\">{{ form_label(form.name) }} {{ form_widget(form.name, { 'attr': { 'class': 'form-control'} }) }}</div></div>

                    <br /><br />
                    <div class=\"row\">
                        <div class=\"col-xs-3 left\">{{ form_label(form.back) }} : {{ form_widget(form.back, { 'attr': { 'class': '' } }) }}</div>
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

                    <div class=\"col-xs-5 col-xs-offset-5\">
                        <h3>Thème sélectionné</h3>
                        <input type=\"text\" class=\"text-center form-control\" disabled id=\"theme_show\" i=\"{{quizz.theme.id}}\" value=\"{{quizz.theme.name}}\">
                        <span class=\"hidden\">{{ form_widget(form.theme) }}</span>
                    </div>
                </div>

                {% set i = 0 %}
                {% for questionform in form.questions %}                                {#POUR TOUTES LES QUESTIONS#}
                    {% set question = attribute(quizz.questions, i) %}

                    <div class=\"tab-pane fade col-xs-6\" id=\"createquizz_q{{i}}\">
                        <input type=\"hidden\" name=\"TYPE_{{i}}\" id=\"TYPE_{{i}}\">
                        {{ form_widget(questionform.questionType) }}
                        <h1>Question n°{{i+1}}</h1><hr />

                        <span id=\"suppquestionspace{{i}}\">
                            {% if loop.last and not loop.first %}                                          {#Si c'est la dernière, bouton supprimer#}
                                <button i=\"{{i}}\" class=\"btn btn-warning suppquestion\" id=\"suppquestion{{i}}\" onClick=\"suppQuestionForm(this)\">Supprimer la question</button>
                            {% endif %}
                            </span>                            

                        <div class=\"questiontype_{{i}}\"><h3>Type de la question<br /><br />
                        <button {% if question.questiontype == 1 %} disabled=\"true\" {% endif %} type=\"button\" i=\"{{i}}\" onClick=\"selectQuestionType(this)\" class=\"btn {% if question.questiontype == 1 %}btn-primary {% endif %}questiontype_btn TEXT\" id=\"Qtype_{{i}}_TEXT\">Texte</button>
                        <button {% if question.questiontype == 2 %} disabled=\"true\" {% endif %} type=\"button\" i=\"{{i}}\" onClick=\"selectQuestionType(this)\" class=\"btn {% if question.questiontype == 2 %}btn-primary {% endif %}questiontype_btn QCM\" id=\"Qtype_{{i}}_QCM\">QCM</button>
                        </h3><div id=\"questioncontainer{{i}}\">

                            <br />
                            {{ form_label(questionform.question) }}<br/>
                            {{ form_widget(questionform.question) }}

                            {% if question.questiontype == 1 %}  {#SI Question texte#}
                                <br /><br />
                                {{ form_label(questionform.answer) }} :<br />
                                {{ form_widget(questionform.answer) }}
                            {% elseif question.questiontype == 2 %} {#SI Question QCM#}
                                <br /><h5>Réponses : (cocher la juste)</h5>

                                {% set qcmanswers = question.answer|split('[||]') %}
                                <span hidden id='QCM{{i}}infos' v0='{{ qcmanswers|length - 1 }}' v1='{% if qcmanswers|length - 1 > 1 %}1{% else %}0{% endif %}' v2='1'></span>

                                {% set qcmI = 1 %}
                                {% for answer in qcmanswers %}                              {#Pour chaque réponse#}
                                    {% if loop.last %}{% else %}
                                        {% if answer[0:3] == \"{T}\" %}                       {#Si c'est la juste on la coche#}
                                            {% set answer = answer|replace({'{T}' : ''}) %}
                                            {% set checked = \"checked\" %}
                                        {% else %}
                                            {% set checked = \"\" %}
                                        {% endif %}

                                        <div id=\"QCM_Q{{i}}SPACE_{{qcmI}}\" class=\"row\"><br />
                                            <div class=\"col-xs-1 col-xs-offset-1\">
                                                <input i=\"{{i}}\" class=\"QCM_Q{{i}}checkbox\" type=\"checkbox\" id=\"QCM_Q{{i}}istrue{{qcmI}}\" name=\"QCM_Q{{i}}istrue{{qcmI}}\" {{ checked }}  onClick=\"checkboxQCM(this)\"></div>
                                            <div class=\"col-xs-8\">
                                                <input type=\"text\" class=\"form-control\" id=\"QCM_Q{{i}}answer{{qcmI}}\" name=\"QCM_Q{{i}}answer{{qcmI}}\" value=\"{{answer}}\">
                                            </div>
                                        </div>
                                        {% set qcmI = qcmI + 1 %}
                                    {% endif %}
                                {% endfor %}
                                <br id=\"beforeme_btn_{{i}}\" />
                                <div id=\"QCM_btns_{{i}}\">
                                    <button type=\"button\" class=\"btn btn-default\" i=\"{{i}}\" id=\"QCM_add_{{i}}\" onClick=\"addChoiceQCM(this)\">Ajouter une réponse</button>
                                    {% if qcmanswers|length - 1 > 2 %}
                                        <button type=\"button\" class=\"btn btn-danger\" i=\"{{i}}\" id=\"QCM_supp_{{i}}\" onClick=\"suppChoiceQCM(this)\">Retirer une réponse</button>
                                    {% endif %}
                                </div>
                            {% endif %}


                        </div></div>




                    </div>
                    {% set i = i + 1 %}
                {% endfor %}



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
{% endblock %}";
    }
}
