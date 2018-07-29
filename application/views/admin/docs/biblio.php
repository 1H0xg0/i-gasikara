
<div class="card mt-5">
    <!-- Nav tabs -->
    <ul class="nav nav-tabs profile-tab" role="tablist">
        <li class="nav-item"> <a class="nav-link active show" data-toggle="tab" href="#display-images" role="tab" aria-selected="false">Images et autres</a> </li>
        <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#display-videos" role="tab" aria-selected="false">Vidéos</a> </li>
        <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#display-others" role="tab" aria-selected="false">Autres</a> </li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
        <div class="tab-pane active show" id="display-images" role="tabpanel">
            <div class="card-body">

                    <div class="row el-element-overlay">
                        <?php foreach($images as $img){ ?>
                            <div class="col-md-2 d-flex justify-content-center">
                                <div class="card" style="width:100px; height:100px;">
                                    <div class="el-card-item">
                                        <div class="el-card-avatar el-overlay-1" style="height:100px;"> <img src="<?php echo $img->sourceImage; ?>" alt="user" />
                                            <div class="el-overlay">
                                                <ul class="el-info">
                                                    <li><a style="left:5px;" class="btn default btn-outline image-popup-vertical-fit" href="<?php echo $img->sourceImage; ?>"><i class="icon-magnifier"></i></a></li>
                                                    <li><a style="right:5px;" class="btn default btn-outline delete-img" data-id="<?php echo $img->idImage; ?>" style="cursor:pointer;"><i class="mdi mdi-delete"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>

                    </div>

            </div>
        </div>

        <div class="tab-pane" id="display-videos" role="tabpanel">
            <div class="card-body">

                <div class="row el-element-overlay">
                    <?php foreach($videos as $video){ ?>
                        <div class="col-md-2 d-flex justify-content-center">
                            <div class="card" style="width:100px; height:100px;">
                                <div class="el-card-item">
                                    <div class="el-card-avatar el-overlay-1" style="height:100px;">
                                        <img src="<?php echo base_url(). 'assets/img/video.png'; ?>" alt="video" />
                                        <div class="el-overlay">
                                            <ul class="el-info">
                                                <li><a style="left:5px;" class="btn default btn-outline video-popup-vertical-fit" href='<?php echo $video->contenuVideo; ?>'><i class="icon-magnifier"></i></a></li>
                                                <li><a style="right:5px;" class="btn default btn-outline delete-video" data-id="<?php echo $video->idVideo; ?>" style="cursor:pointer;"><i class="mdi mdi-delete"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>

                </div>

            </div>
        </div>

        <div class="tab-pane" id="display-others" role="tabpanel">
            <div class="card-body">

                <div class="row el-element-overlay">
                    <?php foreach($files as $file){ ?>
                        <div class="col-md-2 d-flex justify-content-center">
                            <div class="card" style="width:100px; height:100px;">
                                <div class="el-card-item">
                                    <div class="el-card-avatar el-overlay-1" style="height:100px;">
                                        <img src="<?php echo base_url(). 'assets/img/file.png'; ?>" alt="video" />
                                        <div class="el-overlay">
                                            <ul class="el-info">
                                                <li><a style="left:5px;" class="btn default btn-outline file-popup-vertical-fit" href='<?php echo $file->sourceFile; ?>'><i class="icon-magnifier"></i></a></li>
                                                <li><a style="right:5px;" class="btn default btn-outline delete-file" data-id="<?php echo $file->idFile; ?>" style="cursor:pointer;"><i class="mdi mdi-delete"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>

                </div>

            </div>
        </div>


    </div>
</div>


<script>
    $(document).ready(function(){
        $('.image-popup-vertical-fit').magnificPopup({
            type: 'image',
            closeOnContentClick: true,
            mainClass: 'mfp-img-mobile',
            image: {
                verticalFit: true
            }

        });


        $('.video-popup-vertical-fit').magnificPopup({
            disableOn: 700,
            type: 'iframe',
            mainClass: 'mfp-fade',
            removalDelay: 160,
            preloader: false,

            fixedContentPos: false
        });

        $('.file-popup-vertical-fit').magnificPopup({
            disableOn: 700,
            type: 'iframe',
            mainClass: 'mfp-fade',
            removalDelay: 160,
            preloader: false,

            fixedContentPos: false
        });

    });
</script>