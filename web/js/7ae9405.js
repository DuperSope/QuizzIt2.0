function selectQCMAnswer(element) { // Ajoute un panneau QUESTION
        $i = $(element).attr("i");
        $ii = $i - 1;

        $("#quizz_done_questiondone_"+$ii+"_answer").val($(element).text());
        
        $(".QCManswer"+$i).removeClass("btn-primary");
        $(element).addClass("btn-primary");
    }
    
function keypress(element) {                    // VALIDER TXT AVEC TOUCHE ENTER TODO !!!!
    var key = element.keyCode || element.which;
    if(key == 13)  // the enter key code
     {
       alert("eww");  
     }
}