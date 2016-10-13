function addTheme(element) { // Ajouter un thème
        $level = $(element).attr("level");
        $parent = $(element).attr("parent");
        $path = $("#path").attr("path");

        $toAppend = "<form id='form' class='text-center' action='"+$path+"' method='post'>";
        $toAppend = $toAppend + "<input type='hidden' name='parent' value='"+$parent+"'>";
        $toAppend = $toAppend + "<input type='hidden' name='level' value='"+$level+"'>";
        $toAppend = $toAppend + "<input class='form-control auto-form' type='text' name='name'><br /><br />";
        $toAppend = $toAppend + "<input class='btn btn-primary' type='submit' value='Ajouter'>";
        $toAppend = $toAppend + "</form>";
        
        
    $(element).remove();
    $("#ul"+$parent).append($toAppend);
        
    }
    
function deleteTheme(element) {
    if(confirm("Voulez-vous supprimer ce thème ?")) {
        
    } else {
        return false;
    }
}