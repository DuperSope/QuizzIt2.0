
$(document).ready(function() {
    // Récupération de tous les paths
        $getquizzpath = $("#getquizzpath").attr('value');
        $getthemepath = $("#getthemepath").attr('value');
        $returnthemepath = $("#returnthemepath").attr('value');
    
    $(document).on('click', '.theme', function(e) {
        if(typeof($themeid) !== 'undefined') {      // Si un thème a précdemment été sélectionné on le désactive
            $("."+$themeid).removeClass('active');
        }
        $themeid = $(e.target).attr('id');          // On set le nouveau theme.id
        $("."+$themeid).addClass('active');         // et on l'active
        
        $i = $(e.target).attr('i');                 // i pour la pagination
        $level = $(e.target).attr('lvl');
        
    // Ajout du tableau Quizz
        $("#quizzcontainer").empty();
        var spinner = new Spinner(opts).spin();
        $("#quizzcontainer").append(spinner.el);
        $.ajax({
            type: "POST",
            url: $getquizzpath,
            data: { themeid: $themeid, i: $i },
            cache: false,
            success: function(data) {
                renderQuizz(data);
            }
        });
        
    // Changement de la liste de thèmes
        $.ajax({
            type: "POST",
            url: $getthemepath,
            data: { level: $level, parent: $themeid },
            cache: false,
            success: function(data) {
                renderTheme(data);
            }
        });
    });
    
// Retour vers la liste précédente
    $(document).on('click', '#returntheme', function(e) {
        $level = $(e.target).attr('lvl');
        $parent = $(e.target).attr('parent');

        $.ajax({
            type: "POST",
            url: $returnthemepath,
            data: { level: $level, parent: $parent },
            cache: false,
            success: function(data) {
                renderTheme(data);
                $("#quizzcontainer").empty();
            }
        });
    });
    
// Mise en forme du tableau Quizz
    function renderQuizz(data) {
        if(data['quizz'] === "[]") { // Si pas de Quizz dans la catégorie
            $toadd = "<h4><i>Il n'y a pas de Quizz dans cette catégorie.</i></h4>";
        } else {
            $path = $("#quizzpath").attr('value');
            $toadd = "<table class='table table-striped'>\n\
                        <tr><th class='text-center'>Nom du Quizz</th><th class='text-center'>Note</th><th class='text-center'><abbr title='(nombre d'utilisateurs ayant effectué le Quizz)'>Fait</abbr></th></tr>";
            $.each(JSON.parse(data['quizz']), function(i, item) {
                $quizzpath = $path.replace(/1/g, item['id']);
                $toadd += "<tr><td><a href='"+$quizzpath+"'>"+item['name']+"</a></td>";
                $toadd += "<td>";
                for(i=1; i < 6; i++) {  // Ajout du RATE
                    if(item['rate'] >= i) {
                        $toadd += '<i class="fa fa-star rating-full"></i>';
                    } else if(item['rate'] >= i-0.5) {
                        $toadd += '<i class="fa fa-star-half-o rating-full"></i>';
                    } else {
                        $toadd += '<i class="fa fa-star-o rating-empty"></i>';
                    }
                }
                $toadd += "</td><td>"+item['done']+" fois</td></tr>";
                
                $Qi = data['i'];
                $Qid = item['theme']['id'];
            });
            
            $toadd += "</table>";
        // SYSTÈME DE PAGINATION À VÉRIFIER
            $toadd += "<div class='btn-group'>";
            if(data['i'] !== "0") {
                $toadd += "<button type='button' class='button theme' i="+($Qi-1)+" parent="+$Qid+"><i class='fa fa-arrow-left' aria-hidden='true'></i></button>";
            }
            if(data['count'] !== null) {
                $toadd += "<button type='button' class='button theme' i="+($Qi+1)+" parent="+$Qid+"><i class='fa fa-arrow-right' aria-hidden='true'></i></button>";
            }
            $toadd += "</div>";
            
            
        }
        
        $("#quizzcontainer").empty();
        $("#quizzcontainer").append($toadd);
    }
    
// Mise en forme de la liste de thèmes
    function renderTheme(data) {
        if(data['themes'] === "[]") { // Si pas de thèmes après on change rien
        } else {
            $.each(JSON.parse(data['themes']), function(i, item) {
                if(i === 0 && item['level'] > 0) {
                $toadd = "<li><a id='returntheme' href='#' lvl="+item['level']+" parent="+item['parent']['id']+">Retour</a></li>"; } else if(i === 0) {
                $toadd = "";}
                $toadd += "<li class="+item['id']+"><a class='theme' id='"+item['id']+"' i=0 lvl="+item['level']+" href='#'>"+item['name']+"</a></li>";
            });
            
            $("#themecontainer").empty();
            $("#themecontainer").append($toadd);
        }
    }
    
});