var opts = {
  lines: 17 // The number of lines to draw
, length: 7 // The length of each line
, width: 14 // The line thickness
, radius: 50 // The radius of the inner circle
, scale: 1 // Scales overall size of the spinner
, corners: 1 // Corner roundness (0..1)
, color: '#000' // #rgb or #rrggbb or array of colors
, opacity: 0.25 // Opacity of the lines
, rotate: 0 // The rotation offset
, direction: 1 // 1: clockwise, -1: counterclockwise
, speed: 1 // Rounds per second
, trail: 60 // Afterglow percentage
, fps: 20 // Frames per second when using setTimeout() as a fallback for CSS
, zIndex: 2e9 // The z-index (defaults to 2000000000)
, className: 'spinner' // The CSS class to assign to the spinner
, top: '50%' // Top position relative to parent
, left: '50%' // Left position relative to parent
, shadow: false // Whether to render a shadow
, hwaccel: false // Whether to use hardware acceleration
, position: 'absolute' // Element positioning
};
var spinner = new Spinner(opts).spin();

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
        $("#quizzcontainer").append('<i class="fa fa-spinner" aria-hidden="true"></i>');
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
                $toadd += "<tr><td><a href='"+$quizzpath+"'>"+item['name']+"</a></td><td>"+item['rate']+"</td><td>"+item['done']+" fois</td></tr>";
                
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