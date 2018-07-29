

<div class="card mt-5">
    <!-- Nav tabs -->
    <ul class="nav nav-tabs profile-tab" role="tablist">
        <li class="nav-item"> <a class="nav-link active show" data-toggle="tab" href="#display-images" role="tab" aria-selected="false">Images et autres</a> </li>
        <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#display-videos" role="tab" aria-selected="false">Vidéos</a> </li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
        <div class="tab-pane active show" id="display-images" role="tabpanel">
            <div class="card-body">
                <div class="row">

                    <div class="col-md-8 offset-md-2">
                        <div class="row">
                            <div class="col-md-12">
                                <form class="form-horizontal p-t-20">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">uploads/ </span>
                                            </div>
                                            <input type="text" id="input-path" class="form-control" required>
                                            <div class="input-group-append">
                                                <button class="btn btn-info" type="button" id="add-path">Créer dossier</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="col-md-12">
                                <form class="form-material">
                                    <div class="form-group">
                                        <select class="form-control" id="select-path">
                                            <?php if(!empty($path)){ ?>
                                                <?php foreach($path as $item){ ?>
                                                    <option value="<?php echo $item->valeurPath; ?>"><?php echo $item->valeurPath; ?></option>
                                                <?php } ?>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 offset-md-2">
                        <div class="row">
                            <div class="col-md-12">
                                <form id="myupload" action="<?php echo base_url() ?>index.php/Image/upload" class="dropzone">
                                    <div class="fallback">
                                        <input name="file" type="file" multiple />
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="tab-pane" id="display-videos" role="tabpanel">
            <div class="card-body">
                <form class="form-horizontal form-material">
                    <div class="form-group">
                        <label class="col-md-12">Titre</label>
                        <div class="col-md-12">
                            <input type="text" placeholder="titre du video" id="input-video-title" class="form-control form-control-line">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-12">Catégorie vidéo</label>
                        <div class="col-sm-12">
                            <select class="form-control form-control-line" id="input-video-category">
                                <option value="1">Sensibilisation</option>
                                <option value="0">Aucune</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-12">Contenu</label>
                        <div class="col-md-12">
                            <textarea rows="5" id="input-video-content" class="form-control form-control-line" placeholder="URL Youtube (exemple : https://www.youtube.com/watch?v=2rd8VktT8xY) "></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-12">
                            <button class="btn btn-primary btn-sm" id="add-video">Ajouter Vidéo</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>


    </div>
</div>




<script>
    $(document).ready(function(){

        var myDropzone = new Dropzone("#myupload", {
            url : base_url(true)+"Image/upload",
            maxFilesize : 1,
            addRemoveLinks : true,
            dictDefaultMessage : 'Glisser et déposer une image ici<br/>propriétés recommandées<br>dimensions 271x182<br/>fond transparent<br>taille maximale : 1MB',
            init: function() {

                this.on("sending", function(file, xhr, formData) {
                    formData.append("path", $('#select-path').val());
//                        formData.append("path_id", $('#select-path option').filter(':selected').data('id'));
                });

                this.on("addedfile", function(file) {
                    if (this.files.length) {
                        var _i, _len;
                        for (_i = 0, _len = this.files.length; _i < _len - 1; _i++) {
                            if( this.files[_i].name === file.name ) {
                                bootbox.confirm(
                                    "Ce fichier existe déja. Voulez-vous ecraser le fichier existant?",
                                    function(result){
                                        if(result === true){
                                            this.removeFile(file);
                                        }
                                    });
                            }
                        }
                    }
                });


                this.on("success", function (data) {
                    $('#input-img').attr('data-image', data.xhr.response);
                });

            }
        });



    });
</script>