<div class="row">
    <div class="col-12">
    <div class="row">
        <div class="col-md-8 ">
            <h3 class="card-title">Ajout d'un élécteur</h3>
        </div>
        <div class="col-md-2 d-flex justify-content-end">
            <button id="btn-retour-liste-users" type="button" class="btn waves-effect waves-light btn-rounded btn-secondary">
                <span class="mdi mdi-arrow-left"></span>
                <span class="">Retour</span>
            </button>
        </div>
        <div class="col-md-2 d-flex justify-content-end">
            <button id="btn-valider-modif-user" type="button" class="btn waves-effect waves-light btn-rounded btn-success">
                <span class="mdi mdi-check"></span>
                <span class="">Valider</span>
            </button>
        </div>
    </div>
    <br>

    <div class="card">
        <div class="card-body">
            <form class="form-material row" id="form-ajouter-user">
                <div class="form-group col-md-4 m-t-20">
                    <label for="civElecteur">Civilité: </label>
                    <select id="civElecteur" class="form-control">
                        <option value="Mr" <?php echo $user -> civElecteur == "Mr" ? "selected" : ""; ?> >Mr</option>
                        <option value="Mme" <?php echo $user -> civElecteur == "Mme" ? "selected" : ""; ?> >Mme</option>
                    </select>
                </div>
                <div class="form-group col-md-4 m-t-20">
                    <label for="nomElecteur">Nom </label>
                    <input id="nomElecteur" type="text" class="form-control form-control-line" value="<?php echo $user -> nomElecteur; ?>"> </div>
                <div class="form-group col-md-4 m-t-20">
                    <label for="prenomElecteur">Prenom(s) </label>
                    <input id="prenomElecteur" type="text" class="form-control form-control-line" value="<?php echo $user -> prenomElecteur; ?>"> </div>


                <div class="form-group col-md-4 m-t-20">
                    <label for="ageElecteur">Age </label>
                    <input id="ageElecteur" type="text" class="form-control form-control-line" value="<?php echo $user -> ageElecteur; ?>"> </div>
                <div class="form-group col-md-4 m-t-20">
                    <label for="CINElecteur">CIN *</label>
                    <input disabled id="CINElecteur" type="text" class="form-control form-control-line" value="<?php echo $user -> CIN; ?>"> </div>
                <div class="form-group col-md-4 m-t-20">
                    <label for="adresseElecteur">Adresse électeur </label>
                    <input id="adresseElecteur" type="text" class="form-control form-control-line" value="<?php echo $user -> adresseElecteur; ?>"> </div>

                <div class="form-group col-md-4 m-t-20">
                    <label for="nomFokontany">Fokontany</label>
                    <input id="nomFokontany" type="text" class="form-control form-control-line" value="<?php echo $user -> nomFokontany; ?>"> </div>
                <div class="form-group col-md-4 m-t-20">
                    <label for="estPresident">Est président ? </label>
                    <select id="estPresident" class="form-control">
                        <option value="0" <?php echo $user -> estPresident == 0 ? "selected" : ""; ?>>Non</option>
                        <option value="1" <?php echo $user -> estPresident == 1 ? "selected" : ""; ?>>Oui</option>
                    </select> 
                </div>
                <!--<div class="form-group col-md-4 m-t-20">
                    <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                        <label for="logopartieCandidat">Logo du parti politique</label>
                        <div class="form-control" data-trigger="fileinput"> 
                            <i class="glyphicon glyphicon-file fileinput-exists"></i> 
                            <span class="fileinput-filename"></span>
                        </div> 
                        <span class="input-group-addon btn btn-default btn-file"> 
                        <span class="fileinput-new">Select file</span> 
                        <span class="fileinput-exists">Change</span>
                        <input id="logopartieCandidat" type="file" name="logopartieCandidat"> </span> <a class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a> </div>
                </div>-->

            </form>
        </div>
    </div>
        
    </div>
</div>