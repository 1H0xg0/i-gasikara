<div class="row">
    <div class="col-12">
    <div class="row">
        <div class="col-md-8 ">
            <h3 class="card-title">Modication d'un candidat</h3>
        </div>
        <div class="col-md-2 d-flex justify-content-end">
            <button id="btn-retour-liste-candidats" type="button" class="btn waves-effect waves-light btn-rounded btn-secondary">
                <span class="mdi mdi-arrow-left"></span>
                <span class="">Retour</span>
            </button>
        </div>
        <div class="col-md-2 d-flex justify-content-end">
            <button id="btn-valider-modif-candidat" type="button" class="btn waves-effect waves-light btn-rounded btn-success">
                <span class="mdi mdi-check"></span>
                <span class="">Valider</span>
            </button>
        </div>
    </div>
    <br>

    <div class="card">
        <div class="card-body">
            <form class="form-material row" id="form-ajouter-candidat">
                <div class="form-group col-md-4 m-t-20">
                    <label for="civCandidat">Civilité: </label>
                    <select id="civCandidat" class="form-control">
                        <option value="Mr" <?php echo $candidat -> civCandidat == "Mr" ? "selected" : ""; ?> >Mr</option>
                        <option value="Mme" <?php echo $candidat -> civCandidat == "Mme" ? "selected" : ""; ?> >Mme</option>
                    </select>
                </div>
                <div class="form-group col-md-4 m-t-20">
                    <label for="nomCandidat">Nom </labe>
                    <input id="nomCandidat" type="text" class="form-control form-control-line" value="<?php echo $candidat -> nomElecteur; ?>"> </div>
                <div class="form-group col-md-4 m-t-20">
                    <label for="prenomCandidat">Prenom(s) </labe>
                    <input id="prenomCandidat" type="text" class="form-control form-control-line" value="<?php echo $candidat -> prenomElecteur; ?>"> </div>


                <div class="form-group col-md-4 m-t-20">
                    <label for="ageElecteur">Age </labe>
                    <input id="ageElecteur" type="text" class="form-control form-control-line" value="<?php echo $candidat -> ageElecteur; ?>"> </div>
                <div class="form-group col-md-4 m-t-20">
                    <label for="CINCandidat">CIN *</labe>
                    <input disabled id="CINCandidat" type="text" class="form-control form-control-line" value="<?php echo $candidat -> CIN; ?>"> </div>
                <div class="form-group col-md-4 m-t-20">
                    <label for="adresseElecteur">Adresse électeur </labe>
                    <input id="adresseElecteur" type="text" class="form-control form-control-line" value="<?php echo $candidat -> adresseElecteur; ?>"> </div>

                <div class="form-group col-md-4 m-t-20">
                    <label for="abrevpartieCandidat">Abréviation du parti politique</labe>
                    <input id="abrevpartieCandidat" type="text" class="form-control form-control-line" value="<?php echo $candidat -> abrevpartieCandidat; ?>"> </div>
                <div class="form-group col-md-4 m-t-20">
                    <label for="partieCandidat">Nom du parti politique</labe>
                    <input id="partieCandidat" type="text" class="form-control form-control-line" value="<?php echo $candidat -> partieCandidat; ?>"> </div>
                <!--<div class="form-group col-md-4 m-t-20">
                    <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                        <label for="logopartieCandidat">Logo du parti politique</labe>
                        <div class="form-control" data-trigger="fileinput"> 
                            <i class="glyphicon glyphicon-file fileinput-exists"></i> 
                            <span class="fileinput-filename"></span>
                        </div> 
                        <span class="input-group-addon btn btn-default btn-file"> 
                        <span class="fileinput-new">Select file</span> 
                        <span class="fileinput-exists">Change</span>
                        <input id="logopartieCandidat" type="file" name="logopartieCandidat"> </span> <a class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a> </div>
                </div>-->

                <div class="form-group col-md-12 m-t-20">
                    <label for="programmeCandidat">Programmes du candidat</label>
                    <textarea id="programmeCandidat" class="form-control" rows="5"><?php echo $candidat -> programmeCandidat; ?></textarea>
                </div>

            </form>
        </div>
    </div>
        
    </div>
</div>