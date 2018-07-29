<div class="login-register" style="background-image:url(../assets/images/background/login-register.jpg);">
    <div class="login-box card">
        <div class="card-body">
            <form class="form-horizontal form-material">
                <!-- <h3 class="box-title m-b-20 display-4 text-center"><i class="m-auto mdi mdi-lock"></i></h3> -->
                <h2 class="box-title m-b-20 display-4 text-center">i-gasikara</i></h2>

                <div class="form-group mb-1">
                    <div class="col-xs-12">
                        <input class="form-control" type="email" required="" placeholder="Email"> </div>
                </div>
                <div class="form-group mb-2">
                    <div class="col-xs-12">
                        <input class="form-control" type="password" required="" placeholder="Mot de passe"> </div>
                </div>

                <div class="form-group mb-0 text-center">
                    <div class="col-xs-12 p-b-20">
                        <a type="button" class="btn btn-block btn-sm btn-info btn-rounded" type="button" href="<?php echo base_url()."index.php/Admin" ; ?>" >Se connecter</a>
                    </div>
                </div>

                <div class="form-group m-b-0">
                    <div class="col-sm-12 text-center">
                       <a href="pages-register.html" class="text-info m-l-5"><b>Mot de passe oublier ?</b></a>
                    </div>
                </div>
            </form>
            <form class="form-horizontal" id="recoverform">
                <div class="form-group ">
                    <div class="col-xs-12">
                        <h3>Recover Password</h3>
                        <p class="text-muted">Enter your Email and instructions will be sent to you! </p>
                    </div>
                </div>
                <div class="form-group ">
                    <div class="col-xs-12">
                        <input class="form-control" type="text" required="" placeholder="Email"> </div>
                </div>
                <div class="form-group text-center m-t-20">
                    <div class="col-xs-12">
                        <button class="btn btn-primary btn-lg btn-block text-uppercase waves-effect waves-light" >Reset</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>