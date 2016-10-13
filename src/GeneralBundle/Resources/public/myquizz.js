// MYQUIZZ _____________________________________________________________________
    $myquizz_question_i = $("#Qi").attr("i");
    $myquizz_QCM_Q= [''];
    
    $( document ).ready(function() {
        if($('#modify').attr('value') === '1') {
            $i = 1;
            while($i < $myquizz_question_i+1) {
                $myquizz_QCM_Q[$i] = [parseInt($("#QCM"+$i+"infos").attr('v0')), parseInt($("#QCM"+$i+"infos").attr('v1')), parseInt($("#QCM"+$i+"infos").attr('v2'))];
                $i++;
            }
        } else {
            $("#quizz_theme").val(0); // Value du thème à 0 pour forcer son remplissage
        }
    });
    
    $(".createquizz_link").click(function() {
        $('#quizz_validation_container').empty();
    });
    
    
    function addQuestionField() { // Ajoute un panneau QUESTION
        
        $('#questionlinkcontainer li').eq(-2).before(addQuestionLink());
        $('#createquizz_content').append(addQuestionForm());
        
        $('.nav-tabs a[href="#createquizz_q'+ $myquizz_question_i + '"]').tab('show');
        
        $myquizz_question_i ++;
    }    
    function addQuestionForm() { // Gère le panneau QUESTION
        $(".suppquestion").remove();
        $type_widget = $('#proto_type_widget').data('prototype');     // On récupère le prototype

        $ishow = parseInt($myquizz_question_i)+1;

        // Ajout des boutons questiontype
        $proto = '<div class="tab-pane fade col-xs-9" id="createquizz_q__name__">'+$type_widget+'<h1>Question n°'+$ishow+'</h1><hr /><span id="suppquestionspace__name__"><button i="__name__" class="btn btn-warning suppquestion" id="suppquestion__name__" onClick="suppQuestionForm(this)">Supprimer la question</button></span>';
        $proto = $proto + '<div class="questiontype___name__"><h3>Type de la question<br /><br />';
        $proto = $proto + '<button type="button" i="__name__" onClick="selectQuestionType(this)" class="btn questiontype_btn TEXT" id="Qtype___name___TEXT">Texte</button> <button type="button" i="__name__" onClick="selectQuestionType(this)" class="btn questiontype_btn QCM" id="Qtype___name___QCM">QCM</button>';
        $proto = $proto + '</h3><div id="questioncontainer__name__"></div></div>'; // Ajout du questioncontainer
        
        $form = $proto.replace(/__name__/g, $myquizz_question_i);
        
        return $form;
    }
    function addQuestionLink() { // Gère le lien QUESTION
        $ishow = parseInt($myquizz_question_i)+1;
        $link = '<li id="qlink___name__" class="createquizz_link"><a href="#createquizz_q__name__" data-toggle="tab">Question '+$ishow+'</a></li>';
        
        $finallink = $link.replace(/__name__/g, $myquizz_question_i);
        
        return $finallink;
    }
    function suppQuestionForm(element) {
        $i = $(element).attr("i");
        
        $myquizz_question_i --;
        $("#createquizz_q"+$i).remove();
        $("#qlink_"+$i).remove();
        
        $i_lower = $i - 1;
        $("#suppquestionspace"+$i_lower).append('<button type="button" i="'+$i_lower+'" class="btn btn-warning suppquestion" id="suppquestion'+$i_lower+'" onClick="suppQuestionForm(this)">Supprimer la question</button>');
        $('.nav-tabs a[href="#createquizz_q'+ $i_lower + '"]').tab('show');

    }
    
    
    function selectQuestionType(element) {
        $question_label = $('#proto_question_label').data('prototype');     // On récupère les prototypes
        $question_widget = $('#proto_question_widget').data('prototype');
        
        $questiontype = $(element).attr('class').substr(20).trim();                // On récupère le type de question et l'id de la question
        $i = $(element).attr('i');

        $('[i="'+$i+'"]').removeClass(' btn-primary');                       // Style bouton
        $('[i="'+$i+'"]').prop('disabled', false);                      
        $(element).addClass('btn-primary');
        $(element).prop( "disabled", true );
        
        $toadd = '<br />';                                                  // Affichage de la question et du champ
        $toadd = $toadd + $question_label + ' :<br />' + $question_widget;
        $toadd = $toadd.replace(/__name__/g, $i);
        
        $answerfield = setAnswer($questiontype, $i);
        $toadd = $toadd + $answerfield;
        
        
        $('#questioncontainer'+$i).empty();
        $('#questioncontainer'+$i).append($toadd);
    }
    function setAnswer($questiontype, $i) 
    {
        if($questiontype === "TEXT") {                                      // Si la question est de type TEXT
            $answer_label = $('#proto_answer_label').data('prototype');
            $answer_widget = $('#proto_answer_widget').data('prototype');
            $answerfield = "<br /><br />" + $answer_label + " :<br />" + $answer_widget;
            $answerfield = $answerfield.replace(/__name__/g, $i);
            $("#quizz_questions_"+$i+"_questionType").attr('value', '1'); 
            return $answerfield;
        }
        
        else if($questiontype === "QCM") {
            $myquizz_QCM_Q[$i] = [0, 0, 1];
            $answerfield = "<br /><h5>Réponses : (cocher la juste)</h5>";
                        
            while($myquizz_QCM_Q[$i][0] < 2) {
                $myquizz_QCM_Q[$i][0] ++;
                $answerfield = $answerfield + '<div id="QCM_Q__name__SPACE___i__" class="row"><br />';
                $answerfield = $answerfield + '<div class="col-xs-1 col-xs-offset-1"><input i="__name__" class="QCM_Q__name__checkbox" type="checkbox" id="QCM_Q__name__istrue__i__" name="QCM_Q__name__istrue__i__" onClick="checkboxQCM(this)"></div> <div class="col-xs-8"><input type="text" class="form-control" id="QCM_Q__name__answer__i__" name="QCM_Q__name__answer__i__"></div>';
                $answerfield = $answerfield + '</div>';
                
                $answerfield = $answerfield.replace(/__i__/g, $myquizz_QCM_Q[$i][0]);
            }
            
            $answerfield = $answerfield + '<br id="beforeme_btn___name__" /><div id="QCM_btns___name__"><button type="button" class="btn btn-default" i="__name__" id="QCM_add___name__" onClick="addChoiceQCM(this)">Ajouter une réponse</button></div>';
            
            $answerfield = $answerfield.replace(/__name__/g, $i);
            $("#quizz_questions_"+$i+"_questionType").attr('value', '2'); 
            return $answerfield;
            
        }
        
            
    }
    
    
    function addChoiceQCM(element) {
        $i = $(element).attr('i');
        
        if($myquizz_QCM_Q[$i][0] === 5) {
            alert("Vous ne pouvez pas ajouter une sixième réponse.");
            return false;
        }
        if($myquizz_QCM_Q[$i][0] > 1 && $myquizz_QCM_Q[$i][1] === 0) {
            $toappend = ' <button type="button" class="btn btn-danger" i="__name__" id="QCM_supp___name__" onClick="suppChoiceQCM(this)">Retirer une réponse</button>';
            $toappend = $toappend.replace(/__name__/g, $i);
            $('#QCM_btns_'+$i).append($toappend);
            $myquizz_QCM_Q[$i][1] = 1;
            
        }
        
        $myquizz_QCM_Q[$i][0] ++;
        $answerfield = '<div id="QCM_Q__name__SPACE___i__" class="row"><br />';
        $answerfield = $answerfield + '<div class="col-xs-1 col-xs-offset-1"><input i="__name__" class="QCM_Q__name__checkbox" type="checkbox" id="QCM_Q__name__istrue__i__" name="QCM_Q__name__istrue__i__" onClick="checkboxQCM(this)"></div> <div class="col-xs-8"><input type="text" class="form-control" id="QCM_Q__name__answer__i__" name="QCM_Q__name__answer__i__"></div>';
        $answerfield = $answerfield + '</div>';

        $answerfield = $answerfield.replace(/__i__/g, $myquizz_QCM_Q[$i][0]);
        $answerfield = $answerfield.replace(/__name__/g, $i);
        
        $('#beforeme_btn_'+$i).before($answerfield);  
    }
    function suppChoiceQCM(element) {
        $i = $(element).attr('i');
        $i_QCM = $myquizz_QCM_Q[$i][0];

        
        $("#QCM_Q"+$i+"SPACE_"+$i_QCM).remove();
        
        $myquizz_QCM_Q[$i][0] --;
        if($myquizz_QCM_Q[$i][0] < 3) {
            $myquizz_QCM_Q[$i][1] = 0;
            $("#QCM_supp_"+$i).remove()
        }
    }
    function checkboxQCM(element) {
        $i = $(element).attr('i');
        
        $('.QCM_Q'+$i+'checkbox').prop('checked', false);
        $(element).prop('checked', true);
    }
    
    
    function quizzValidation(element) {
        $toappend = "";
        $baserror = '';
        $baserror = getBaseError();
        $Qerror = getQError();
        
        if($baserror.length > 0) $toappend += "<h2 class='left'>Général</h2>";
        $baserror.forEach(function(error) {
            $toappend += "<div class='"+error[0]+"'>";
            if(error[0] === "danger") $toappend += "<b>";
            
            if(error[1] === "name") {
                $toappend += "Vous n'avez pas donné de nom à votre Quizz.";
            } else if(error[1] === "description") {
                $toappend += "Vous n'avez pas écrit de description pour votre Quizz.";
            } else if(error[1] === "userDescription") {
                $toappend += "Vous n'avez pas écrit de description personnelle pour votre Quizz.";
            } else if(error[1] === "theme") {
                $toappend += "Vous n'avez pas sélectionné de thème pour votre Quizz.";
            }
            
            if(error[0] === "danger") $toappend += "</b>";
            $toappend += "</div>";
        });
        $toappend += "<hr />";
        
        if(parseInt($myquizz_question_i) === 0) {
            $toappend += "<div class='danger'><h3>Vous n'avez pas créé de question.</h3></div><hr /";
        }
        
        $Qerror.forEach(function(question, i) {
            if(question.length === 1) { } else {
                $i = i +1;
                $toappend += "<h2 class='left'>Question "+$i+"</h2>";
                
                question.forEach(function(error) {
                    $toappend += "<div class='"+error[0]+"'>";
                    if(error[0] === "danger") $toappend += "<b>";

                    if(error[1] === "notype") {
                       $toappend += "Vous n'avez pas choisi le type de la question." ;
                    } else if(error[1] === "question") {
                        $toappend += "Vous n'avez pas écrit la question." ;
                    } else if(error[1] === "answer") {
                        $toappend += "Vous n'avez pas écrit la réponse." ;
                    } else if(error[1] === "QCManswer") {
                        $toappend += "Un ou plusieurs choix du QCM n'ont pas été remplis.";
                    } else if(error[1] === "QCMcheck") {
                        $toappend += "Vous n'avez pas coché de bonne réponse pour le QCM.";
                    }

                    if(error[0] === "danger") $toappend += "</b>";
                    $toappend += "</div>";
                });
                $toappend += "<hr />";
            }  
        });
        
        if ($toappend.indexOf("danger") >= 0) {
            $toappend += "<i>Veuillez régler les erreurs détectées en rouge avant d'enregistrer votre Quizz.";
        } else {
            $toappend += '<i>Aucune erreur détectée, vous pouvez enregistrer votre Quizz !</i><h1><input type="submit" value="Valider le Quizz" class="form-control auto-form"></input></h1>'
        }
        
        
        $('#quizz_validation_container').empty();
        $('#quizz_validation_container').append($toappend);
    }
    
    function getBaseError() {
        $baserror = new Array();
        if($("#quizz_name").prop('value') === "") {
            $baserror.push(['danger', 'name']);
        }if($("#quizz_description").prop('value') === "") {
            $baserror.push(['warning', 'description']);
        }if($("#quizz_userDescription").prop('value') === "") {
            $baserror.push(['warning', 'userDescription']);
        }if($("#quizz_theme").val() === null) {
            $baserror.push(['danger', 'theme']);
        }
        
        return $baserror;
    }
    
    function getQError() {
        $Qerror = new Array();

        $i = 0;
        while($myquizz_question_i > $i) {
            $ii = 0;
            $Qerror[$i] = [''];
            if($("#quizz_questions_"+$i+"_question").prop('value') === "") {
                $Qerror[$i].push(['danger', 'question']);
            }
            
            if($("#quizz_questions_"+$i+"_questionType").prop('value') === "1") {
                if($("#quizz_questions_"+$i+"_answer").prop('value') === "") {
                    $Qerror[$i].push(['danger', 'answer']);
                }
            } else if($("#quizz_questions_"+$i+"_questionType").prop('value') === "2") {
                $iQCM = 1;
                console.log($i+1+" : "+$myquizz_QCM_Q[$i][0]);
                
                $empty = 0;
                $check = 0;
                while($myquizz_QCM_Q[$i][0]+1 !== $iQCM) {
                    if($("#QCM_Q"+$i+"answer"+$iQCM).prop('value') === "") {
                        $empty = 1;
                    }
                     
                    if($("#QCM_Q"+$i+"istrue"+$iQCM).prop('checked') === true) {
                        $check = 1;
                    }
                    $iQCM ++;
                }
                if($empty === 1) {
                        $Qerror[$i].push(['danger', 'QCManswer']);
                    }
                if($check === 0) {
                        $Qerror[$i].push(['danger', 'QCMcheck']);
                    }
            } else {
                $Qerror[$i].push(['danger', 'notype']);
            }
            $i ++;
        }
        return $Qerror;
    }
    
    $(".theme").click(function() {
        $i = $(this).attr('i');
        $name = $(this).attr('name');
        
        $("#theme_show").attr("value", $name);
        $("#quizz_theme").val($i);
    });
    

// TODO : 
    // Faire un récap des erreurs dans le formulaire et bloquer la validation


//
//$answerfield = '<div id="QCM_Q__name__SPACE">';
//$answerfield = $answerfield + '<input type="checkbox" name="QCM_Q__name__istrue__i__"><input type="text" class="form-control" name="QCM_Q__name__answer__i__">';
//$answerfield = $answerfield + '</div>';