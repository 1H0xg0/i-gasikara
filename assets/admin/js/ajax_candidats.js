var type = "ajout"; 

$(document).ready(function(){

    $(document).on("click", "#admin-candidats-view", function(){ // Charge page liste des candidats
        $("#display-content").html($(".preloader").html());
        $.ajax({
            type: "POST",
            async: false,
            url: base_url(true) + "Candidats/",
            data: {},
            success: function(data) {
                 $("#display-content").html(data);
           }
        });   
    });

    $(document).on("click", "#btn-ajouter-candidat", function(){ // Affichage formulaire d'ajout d'un candidat
        type = "ajout"; 
        $("#display-content").html($(".preloader").html());
        $.ajax({
            type: "POST",
            async: false,
            url: base_url(true) + "Candidats/getFormCandidat/",
            data: {type},
            success: function(data) {
                 $("#display-content").html(data);
           }
        });   
    });

    $(document).on("click", "#btn-retour-liste-candidats", function(){ // Affichage formulaire d'ajout d'un candidat
        $("#admin-candidats-view").trigger("click");  
    });
    

    $(document).on("click", "#btn-valider-ajout-candidat", function(){ // Validation formulaire d'ajout d'un candidat
        type = "ajout"; 
        var candidat = {
            "civCandidat" : $("#civCandidat").val(), 
            "nomCandidat" : $("#nomCandidat").val(), 
            "prenomCandidat" : $("#prenomCandidat").val(), 
            "ageElecteur" : $("#ageElecteur").val(), 
            "CINCandidat" : $("#CINCandidat").val(), 

            "adresseElecteur" : $("#adresseElecteur").val(), 
            "abrevpartieCandidat" : $("#abrevpartieCandidat").val(), 
            "partieCandidat" : $("#partieCandidat").val(), 
            "programmeCandidat" : $("#programmeCandidat").val(), 
            "logopartieCandidat" : null,
            "bloqueCandidat" : null,
            "eluCandidat" : null
        }; 

        $.ajax({
            type: "POST",
            async: false,
            url: base_url(true) + "Candidats/gererCandidat/",
            data: {candidat, type},
            success: function(data) {
                if(data.status == 0){
                    console.log(data.message);
                    $("#display-content").html(data);
                } else {
                    console.log(data.message);
                    $("#admin-candidats-view").trigger("click");
                }
           }
        });   
    });

    $(document).on("click", "#btn-valider-modif-candidat", function(){ // Validation formulaire de modification d'un candidat
        type = "modif"; 
        var candidat = {
            "civCandidat" : $("#civCandidat").val(), 
            "nomCandidat" : $("#nomCandidat").val(), 
            "prenomCandidat" : $("#prenomCandidat").val(), 
            "ageElecteur" : $("#ageElecteur").val(), 
            "CINCandidat" : $("#CINCandidat").val(), 

            "adresseElecteur" : $("#adresseElecteur").val(), 
            "abrevpartieCandidat" : $("#abrevpartieCandidat").val(), 
            "partieCandidat" : $("#partieCandidat").val(), 
            "programmeCandidat" : $("#programmeCandidat").val(), 
            "logopartieCandidat" : null,
            "bloqueCandidat" : null,
            "eluCandidat" : null
        }; 

        $.ajax({
            type: "POST",
            async: false,
            url: base_url(true) + "Candidats/gererCandidat/",
            data: {candidat, type},
            success: function(data) {
                if(data.status == 0){
                    console.log(data.message);
                    $("#display-content").html(data);
                } else {
                    console.log(data.message);
                    $("#admin-candidats-view").trigger("click");
                }
           }
        });   
    });


    
    
    $(document).on("click", ".btn-modifier-candidat", function(){ // Affichage formulaire d'ajout d'un candidat
        type = "modif";
        var idCandidat = $(this).val().split('-')[2];
        $("#display-content").html($(".preloader").html());
        $.ajax({
            type: "POST",
            async: false,
            url: base_url(true) + "Candidats/getFormCandidat/",
            data: {type, idCandidat},
            success: function(data) {
                 $("#display-content").html(data);
           }
        });   
    });


    $(document).on("click", "#btn-valider-modifier-candidat", function(){ // Validation formulaire de modification d'un candidat
        type = "modif"; 
        var candidat = {
            "civCandidat" : $("#civCandidat").val(), 
            "nomCandidat" : $("#nomCandidat").val(), 
            "prenomCandidat" : $("#prenomCandidat").val(), 
            "ageElecteur" : $("#ageElecteur").val(), 
            "CINCandidat" : $("#CINCandidat").val(), 

            "adresseElecteur" : $("#adresseElecteur").val(), 
            "abrevpartieCandidat" : $("#abrevpartieCandidat").val(), 
            "partieCandidat" : $("#partieCandidat").val(), 
            "programmeCandidat" : $("#programmeCandidat").val(), 
            "logopartieCandidat" : null,
            "bloqueCandidat" : null,
            "eluCandidat" : null
        }; 

        $.ajax({
            type: "POST",
            async: false,
            url: base_url(true) + "Candidats/gererCandidat/",
            data: {candidat, type},
            success: function(data) {
                if(data.status == 0){
                    console.log(data.message);
                    $("#display-content").html(data);
                } else {
                    console.log(data.message);
                    $("#admin-candidats-view").trigger("click");
                }
           }
        });   
    });


    

    $(document).on("click", ".btn-suppr-candidat", function(){ 
        $("#btn-valider-suppr-candidat").val($(this).val().split("-")[2]);  
        $(".mdl-suppr-candidat").modal("show"); 
    });

    $(document).on("click", "#btn-valider-suppr-candidat", function(){ // Validation bouton suppression d'un candidat
        type = "suppr";
        var CINCandidat = $(this).val();
        var candidat = {
            "CINCandidat" : CINCandidat
        };
        $("#display-content").html($(".preloader").html());
        $.ajax({
            type: "POST",
            async: false,
            url: base_url(true) + "Candidats/gererCandidat/",
            data: {type, candidat},
            success: function(data) {
                console.log(data); 
                $("div.modal-backdrop").remove();
                $("#admin-candidats-view").trigger("click");
           }
        });   
    });

    
    
    


});