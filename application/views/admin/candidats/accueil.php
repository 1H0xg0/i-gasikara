<div class="row">
    <div class="col-md-6 ">
        <h3>Liste des candidats (<?php echo !is_null($candidats) ? count($candidats) : "0" ; ?>)</h3>
    </div>
    <div class="col-md-6 d-flex justify-content-end">
        <button id="btn-ajouter-candidat" type="button" class="btn waves-effect waves-light btn-rounded btn-success">
            <span class="mdi mdi-plus-circle"></span>
            <span class="">Ajouter</span>
        </button>
    </div>
</div>
<br>
<div class="card" style="min-height: 500px;">
    <div class="table-responsive">
        <?php if(!is_null($candidats) || !empty($candidats)) { ?>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Civ.</th>
                            <th>Nom</th>
                            <th>Prénom(s)</th>
                            <th>Parti politique</th>
                            <th>Actions</th>

                        </tr>
                    </thead>
                    <tbody>
                            <?php foreach($candidats as  $ca) { ?>
                                <tr id="ligne-candidat-<?php echo $ca -> CIN;?>">
                                    <td><?php echo $ca -> civElecteur; ?></td>
                                    <td><?php echo $ca -> nomElecteur ; ?></td>
                                    <td><?php echo $ca -> prenomElecteur ; ?></td>
                                    <td><?php echo $ca -> abrevpartieCandidat." - ".$ca -> partieCandidat; ?></td>
                                    <td>
                                        <button value="modif-can-<?php echo $ca -> idCandidat; ?>" type="button" class="btn btn-info btn-circle btn-modifier-candidat"><span class="mdi mdi-pencil"></span> </button>
                                        <button value="suppr-can-<?php echo $ca -> CIN; ?>" type="button" class="btn btn-danger btn-circle btn-suppr-candidat" ><span class="mdi mdi-delete"></span> </button>
                                    </td>

                                </tr>
                            <?php } ?>
                    </tbody>
                </table>
        <?php } else { ?>
            <h3>Aucun candidat affiché.</h3>
        <?php } ?>
    </div>
</div>


<div class="modal fade mdl-suppr-candidat" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" style="display: none;" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="mdl-title-suppr">Confirmation suppression du candidat</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">Etes-vous sûr de supprimer ce candidat ? Si vous validez, il sera également supprimé de la liste électorale.</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-info waves-effect" data-dismiss="modal">Annuler</button>
                <button value="" id="btn-valider-suppr-candidat" type="button" class="btn btn-danger waves-effect" data-dismiss="modal">Supprimer</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>



