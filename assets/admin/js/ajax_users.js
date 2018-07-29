var type = "ajout"; 

$(document).ready(function(){

    $(document).on("click", "#admin-users-view", function(){ // Charge page liste des Electeurs
        $("#display-content").html($(".preloader").html());
        $.ajax({
            type: "POST",
            async: false,
            url: base_url(true) + "User/",
            data: {},
            success: function(data) {
                 $("#display-content").html(data);
           }
        });   
    });

    $(document).on("click", "#btn-ajouter-user", function(){ // Affichage formulaire d'ajout d'un Electeur
        type = "ajout"; 
        $("#display-content").html($(".preloader").html());
        $.ajax({
            type: "POST",
            async: false,
            url: base_url(true) + "User/getFormUser/",
            data: {type},
            success: function(data) {
                 $("#display-content").html(data);
           }
        });   
    });

    
    $(document).on("click", "#btn-retour-liste-users", function(){ // Affichage formulaire d'ajout d'un Electeur
        $("#admin-users-view").trigger("click");  
    });


    $(document).on("click", "#btn-valider-ajout-user", function(){ // Validation formulaire d'ajout d'un Electeur
        type = "ajout"; 
        var user = {
            "civElecteur" : $("#civElecteur").val(), 
            "nomElecteur" : $("#nomElecteur").val(), 
            "prenomElecteur" : $("#prenomElecteur").val(), 
            "ageElecteur" : $("#ageElecteur").val(), 
            "CINElecteur" : $("#CINElecteur").val(), 
            "adresseElecteur" : $("#adresseElecteur").val(), 
            "nomFokontany" : $("#nomFokontany").val(),
            "estPresident" : 0 // figer l'élécteur à 0 pour qu'il ne soit pas Electeur 
        }; 

        $.ajax({
            type: "POST",
            async: false,
            url: base_url(true) + "User/gererUser/",
            data: {user, type},
            success: function(data) {
                if(data.status == 0){
                    $("#display-content").html(data);
                } else {
                    $("#admin-users-view").trigger("click");
                }
           }
        });   
    });


    $(document).on("click", "#btn-valider-modif-user", function(){ // Validation formulaire de modification d'un Electeur
        type = "modif"; 
        var user = {
            "civElecteur" : $("#civElecteur").val(), 
            "nomElecteur" : $("#nomElecteur").val(), 
            "prenomElecteur" : $("#prenomElecteur").val(), 
            "ageElecteur" : $("#ageElecteur").val(), 
            "CINElecteur" : $("#CINElecteur").val(), 
            "adresseElecteur" : $("#adresseElecteur").val(), 
            "nomFokontany" : $("#nomFokontany").val(),
            "estPresident" : 0 // figer l'élécteur à 0 pour qu'il ne soit pas Electeur 
        };  
        $.ajax({
            type: "POST",
            async: false,
            url: base_url(true) + "User/gererUser/",
            data: {user, type},
            success: function(data) {
                if(data.status == 0){
                    $("#display-content").html(data);
                } else {
                    $("#admin-users-view").trigger("click");
                }
           }
        });   
    });


    $(document).on("click", ".btn-modifier-user", function(){ // Affichage formulaire d'ajout d'un user
        type = "modif";
        var CIN = $(this).val().split('-')[2];
        $("#display-content").html($(".preloader").html());
        $.ajax({
            type: "POST",
            async: false,
            url: base_url(true) + "User/getFormUser/",
            data: {type, CIN},
            success: function(data) {
                 $("#display-content").html(data);
           }
        });   
    });

    $(document).on("click", ".btn-suppr-user", function(){ 
        $("#btn-valider-suppr-user").val($(this).val().split("-")[2]);  
        $(".mdl-suppr-user").modal("show"); 
    });

    $(document).on("click", "#btn-valider-suppr-user", function(){ // Validation bouton suppression d'un user
        type = "suppr";
        var CINElecteur = $(this).val();
        var user = {
            "CINElecteur" : CINElecteur
        };
        $("#display-content").html($(".preloader").html());
        $.ajax({
            type: "POST",
            async: false,
            url: base_url(true) + "User/gererUser/",
            data: {type, user},
            success: function(data) {
                $("body.fix-header").removeClass("modal-open");
                $("div.modal-backdrop").remove();
                $("#admin-users-view").trigger("click");
           }
        });   
    });

});