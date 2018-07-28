
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid" id="display-content">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-themecolor">Mailbox</h3>
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item">Apps</li>
                        <li class="breadcrumb-item active">mailbox</li>
                    </ol>
                </div>
                <div class="">
                    <button class="right-side-toggle waves-effect waves-light btn-inverse btn btn-circle btn-sm pull-right m-l-10"><i class="ti-settings text-white"></i></button>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="row">
                                <div class="col-xlg-2 col-lg-3 col-md-4">
                                    <div class="card-body inbox-panel"><a href="app-compose.html" class="btn btn-danger m-b-20 p-10 btn-block waves-effect waves-light">Compose</a>
                                        <ul class="list-group list-group-full">
                                            <li class="list-group-item active"> <a href="javascript:void(0)"><i class="mdi mdi-gmail"></i> Inbox </a><span class="badge badge-success ml-auto">6</span></li>
                                            <li class="list-group-item">
                                                <a href="javascript:void(0)"> <i class="mdi mdi-star"></i> Starred </a>
                                            </li>
                                            <li class="list-group-item">
                                                <a href="javascript:void(0)"> <i class="mdi mdi-send"></i> Draft </a><span class="badge badge-danger ml-auto">3</span></li>
                                            <li class="list-group-item ">
                                                <a href="javascript:void(0)"> <i class="mdi mdi-file-document-box"></i> Sent Mail </a>
                                            </li>
                                            <li class="list-group-item">
                                                <a href="javascript:void(0)"> <i class="mdi mdi-delete"></i> Trash </a>
                                            </li>
                                        </ul>
                                        <h3 class="card-title m-t-40">Labels</h3>
                                        <div class="list-group b-0 mail-list"> <a href="#" class="list-group-item"><span class="fa fa-circle text-info m-r-10"></span>Work</a> <a href="#" class="list-group-item"><span class="fa fa-circle text-warning m-r-10"></span>Family</a> <a href="#" class="list-group-item"><span class="fa fa-circle text-purple m-r-10"></span>Private</a> <a href="#" class="list-group-item"><span class="fa fa-circle text-danger m-r-10"></span>Friends</a> <a href="#" class="list-group-item"><span class="fa fa-circle text-success m-r-10"></span>Corporate</a> </div>
                                    </div>
                                </div>
                                <div class="col-xlg-10 col-lg-9 col-md-8 bg-light-part b-l">
                                    <div class="card-body">
                                        <div class="btn-group m-b-10 m-r-10" role="group" aria-label="Button group with nested dropdown">
                                            <button type="button" class="btn btn-secondary font-18"><i class="mdi mdi-inbox-arrow-down"></i></button>
                                            <button type="button" class="btn btn-secondary font-18"><i class="mdi mdi-alert-octagon"></i></button>
                                            <button type="button" class="btn btn-secondary font-18"><i class="mdi mdi-delete"></i></button>
                                        </div>
                                        <div class="btn-group m-b-10 m-r-10" role="group" aria-label="Button group with nested dropdown">
                                            <div class="btn-group" role="group">
                                                <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="mdi mdi-folder font-18 "></i> </button>
                                                <div class="dropdown-menu" aria-labelledby="btnGroupDrop1"> <a class="dropdown-item" href="#">Dropdown link</a> <a class="dropdown-item" href="#">Dropdown link</a> </div>
                                            </div>
                                            <div class="btn-group" role="group">
                                                <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="mdi mdi-label font-18"></i> </button>
                                                <div class="dropdown-menu" aria-labelledby="btnGroupDrop1"> <a class="dropdown-item" href="#">Dropdown link</a> <a class="dropdown-item" href="#">Dropdown link</a> </div>
                                            </div>
                                        </div>
                                        <button type="button " class="btn btn-secondary m-r-10 m-b-10"><i class="mdi mdi-reload font-18"></i></button>
                                        <div class="btn-group m-b-10" role="group">
                                            <button id="btnGroupDrop1" type="button" class="btn m-b-10 btn-secondary font-18 dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> More </button>
                                            <div class="dropdown-menu" aria-labelledby="btnGroupDrop1"> <a class="dropdown-item" href="#">Mark as all read</a> <a class="dropdown-item" href="#">Dropdown link</a> </div>
                                        </div>
                                    </div>
                                    <div class="card-body p-t-0">
                                        <div class="card b-all shadow-none">
                                            <div class="inbox-center table-responsive">
                                                <table class="table table-hover no-wrap">
                                                    <tbody>
                                                        <tr class="unread">
                                                            <td style="width:40px">
                                                                <div class="checkbox">
                                                                    <input type="checkbox" id="checkbox0" value="check">
                                                                    <label for="checkbox0"></label>
                                                                </div>
                                                            </td>
                                                            <td style="width:40px" class="hidden-xs-down"><i class="fa fa-star-o"></i></td>
                                                            <td class="hidden-xs-down">Hritik Roshan</td>
                                                            <td class="max-texts"> <a href="app-email-detail.html" /><span class="label label-info m-r-10">Work</span> Lorem ipsum perspiciatis unde omnis iste natus error sit voluptatem</td>
                                                            <td class="hidden-xs-down"><i class="fa fa-paperclip"></i></td>
                                                            <td class="text-right"> 12:30 PM </td>
                                                        </tr>
                                                        <tr class="unread">
                                                            <td>
                                                                <div class="checkbox">
                                                                    <input type="checkbox" id="checkbox1" value="check">
                                                                    <label for="checkbox1"></label>
                                                                </div>
                                                            </td>
                                                            <td class="hidden-xs-down"><i class="fa fa-star text-warning"></i></td>
                                                            <td class="hidden-xs-down">Genelia Roshan</td>
                                                            <td class="max-texts"><a href="app-email-detail.html">Lorem ipsum perspiciatis unde omnis iste natus error sit voluptatem</a></td>
                                                            <td class="hidden-xs-down"><i class="fa fa-paperclip"></i></td>
                                                            <td class="text-right"> May 13 </td>
                                                        </tr>
                                                        <tr class="unread">
                                                            <td>
                                                                <div class="checkbox">
                                                                    <input type="checkbox" id="checkbox2" value="check">
                                                                    <label for="checkbox2"></label>
                                                                </div>
                                                            </td>
                                                            <td class="hidden-xs-down"><i class="fa fa-star-o"></i></td>
                                                            <td class="hidden-xs-down">Ritesh Deshmukh</td>
                                                            <td class="max-texts"><a href="app-email-detail.html"><span class="label label-success">Elite</span> Lorem ipsum perspiciatis unde omnis iste natus error sit voluptatem</a></td>
                                                            <td class="hidden-xs-down"><i class="fa fa-paperclip"></i></td>
                                                            <td class="text-right"> May 12 </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="checkbox">
                                                                    <input type="checkbox" id="checkbox3" value="check">
                                                                    <label for="checkbox3"></label>
                                                                </div>
                                                            </td>
                                                            <td class="hidden-xs-down"><i class="fa fa-star-o"></i></td>
                                                            <td class="hidden-xs-down">Akshay Kumar</td>
                                                            <td class="max-texts"><a href="app-email-detail.html"><span class="label label-warning">Work</span> Lorem ipsum perspiciatis unde omnis iste natus error sit voluptatem</a></td>
                                                            <td class="hidden-xs-down"><i class="fa fa-paperclip"></i></td>
                                                            <td class="text-right"> May 12 </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="checkbox">
                                                                    <input type="checkbox" id="checkbox4" value="check">
                                                                    <label for="checkbox4"></label>
                                                                </div>
                                                            </td>
                                                            <td class="hidden-xs-down"><i class="fa fa-star-o"></i></td>
                                                            <td class="hidden-xs-down">Hritik Roshan</td>
                                                            <td class="max-texts"><a href="app-email-detail.html"><span class="label label-info m-r-10">Work</span> Lorem ipsum perspiciatis unde omnis iste natus error sit voluptatem</a></td>
                                                            <td class="hidden-xs-down"><i class="fa fa-paperclip"></i></td>
                                                            <td class="text-right"> May 12 </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="checkbox">
                                                                    <input type="checkbox" id="checkbox5" value="check">
                                                                    <label for="checkbox5"></label>
                                                                </div>
                                                            </td>
                                                            <td class="hidden-xs-down"><i class="fa fa-star text-warning"></i></td>
                                                            <td class="hidden-xs-down">Genelia Roshan</td>
                                                            <td class="max-texts"><a href="app-email-detail.html">Lorem ipsum perspiciatis unde omnis iste natus error sit voluptatem</a></td>
                                                            <td class="hidden-xs-down"><i class="fa fa-paperclip"></i></td>
                                                            <td class="text-right"> May 11 </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="checkbox">
                                                                    <input type="checkbox" id="checkbox6" value="check">
                                                                    <label for="checkbox6"></label>
                                                                </div>
                                                            </td>
                                                            <td class="hidden-xs-down"><i class="fa fa-star-o"></i></td>
                                                            <td class="hidden-xs-down">Ritesh Deshmukh</td>
                                                            <td class="max-texts"><a href="app-email-detail.html"><span class="label label-success">Elite</span> Lorem ipsum perspiciatis unde omnis iste natus error sit voluptatem</a></td>
                                                            <td class="hidden-xs-down"><i class="fa fa-paperclip"></i></td>
                                                            <td class="text-right"> May 11 </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="checkbox">
                                                                    <input type="checkbox" id="checkbox7" value="check">
                                                                    <label for="checkbox7"></label>
                                                                </div>
                                                            </td>
                                                            <td class="hidden-xs-down"><i class="fa fa-star-o"></i></td>
                                                            <td class="hidden-xs-down">Akshay Kumar</td>
                                                            <td class="max-texts"><a href="app-email-detail.html"><span class="label label-warning">Work</span> Lorem ipsum perspiciatis unde omnis iste natus error sit voluptatem</a></td>
                                                            <td class="hidden-xs-down"><i class="fa fa-paperclip"></i></td>
                                                            <td class="text-right"> May 11 </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="checkbox">
                                                                    <input type="checkbox" id="checkbox8" value="check">
                                                                    <label for="checkbox8"></label>
                                                                </div>
                                                            </td>
                                                            <td class="hidden-xs-down"><i class="fa fa-star-o"></i></td>
                                                            <td class="hidden-xs-down">Hritik Roshan</td>
                                                            <td class="max-texts"><a href="app-email-detail.html"><span class="label label-info m-r-10">Work</span> Lorem ipsum perspiciatis unde omnis iste natus error sit voluptatem</a></td>
                                                            <td class="hidden-xs-down"><i class="fa fa-paperclip"></i></td>
                                                            <td class="text-right"> May 10 </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="checkbox">
                                                                    <input type="checkbox" id="checkbox9" value="check">
                                                                    <label for="checkbox9"></label>
                                                                </div>
                                                            </td>
                                                            <td class="hidden-xs-down"><i class="fa fa-star text-warning"></i></td>
                                                            <td class="hidden-xs-down">Genelia Roshan</td>
                                                            <td class="max-texts"><a href="app-email-detail.html">Lorem ipsum perspiciatis unde omnis iste natus error sit voluptatem</a></td>
                                                            <td class="hidden-xs-down"><i class="fa fa-paperclip"></i></td>
                                                            <td class="text-right"> May 10 </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="checkbox">
                                                                    <input type="checkbox" id="checkbox10" value="check">
                                                                    <label for="checkbox10"></label>
                                                                </div>
                                                            </td>
                                                            <td class="hidden-xs-down"><i class="fa fa-star-o"></i></td>
                                                            <td class="hidden-xs-down">Ritesh Deshmukh</td>
                                                            <td class="max-texts"><a href="app-email-detail.html"><span class="label label-success">Elite</span> Lorem ipsum perspiciatis unde omnis iste natus error sit voluptatem</a></td>
                                                            <td class="hidden-xs-down"><i class="fa fa-paperclip"></i></td>
                                                            <td class="text-right"> May 10 </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="checkbox">
                                                                    <input type="checkbox" id="checkbox11" value="check">
                                                                    <label for="checkbox11"></label>
                                                                </div>
                                                            </td>
                                                            <td class="hidden-xs-down"><i class="fa fa-star-o"></i></td>
                                                            <td class="hidden-xs-down">Akshay Kumar</td>
                                                            <td class="max-texts"><a href="app-email-detail.html"><span class="label label-warning">Work</span> Lorem ipsum perspiciatis unde omnis iste natus error sit voluptatem</a></td>
                                                            <td class="hidden-xs-down"><i class="fa fa-paperclip"></i></td>
                                                            <td class="text-right"> May 09 </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="checkbox m-t-0 m-b-0">
                                                                    <input type="checkbox" id="checkbox12" value="check">
                                                                    <label for="checkbox12"></label>
                                                                </div>
                                                            </td>
                                                            <td class="hidden-xs-down"><i class="fa fa-star-o"></i></td>
                                                            <td class="hidden-xs-down">Hritik Roshan</td>
                                                            <td class="max-texts"><a href="app-email-detail.html"><span class="label label-info m-r-10">Work</span> Lorem ipsum perspiciatis unde omnis iste natus error sit voluptatem</a></td>
                                                            <td class="hidden-xs-down"><i class="fa fa-paperclip"></i></td>
                                                            <td class="text-right"> May 09 </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="checkbox">
                                                                    <input type="checkbox" id="checkbox13" value="check">
                                                                    <label for="checkbox13"></label>
                                                                </div>
                                                            </td>
                                                            <td class="hidden-xs-down"><i class="fa fa-star text-warning"></i></td>
                                                            <td class="hidden-xs-down">Genelia Roshan</td>
                                                            <td class="max-texts"><a href="app-email-detail.html">Lorem ipsum perspiciatis unde omnis iste natus error sit voluptatem</a></td>
                                                            <td class="hidden-xs-down"><i class="fa fa-paperclip"></i></td>
                                                            <td class="text-right"> May 09 </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="checkbox">
                                                                    <input type="checkbox" id="checkbox14" value="check">
                                                                    <label for="checkbox14"></label>
                                                                </div>
                                                            </td>
                                                            <td class="hidden-xs-down"><i class="fa fa-star-o"></i></td>
                                                            <td class="hidden-xs-down">Ritesh Deshmukh</td>
                                                            <td class="max-texts"><a href="app-email-detail.html"><span class="label label-success">Elite</span> Lorem ipsum perspiciatis unde omnis iste natus error sit voluptatem</a></td>
                                                            <td class="hidden-xs-down"><i class="fa fa-paperclip"></i></td>
                                                            <td class="text-right"> May 09 </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <div class="right-sidebar">
                    <div class="slimscrollright">
                        <div class="rpanel-title"> Service Panel <span><i class="ti-close right-side-toggle"></i></span> </div>
                        <div class="r-panel-body">
                            <ul id="themecolors" class="m-t-20">
                                <li><b>With Light sidebar</b></li>
                                <li><a href="javascript:void(0)" data-theme="default" class="default-theme working">1</a></li>
                                <li><a href="javascript:void(0)" data-theme="green" class="green-theme">2</a></li>
                                <li><a href="javascript:void(0)" data-theme="red" class="red-theme">3</a></li>
                                <li><a href="javascript:void(0)" data-theme="blue" class="blue-theme">4</a></li>
                                <li><a href="javascript:void(0)" data-theme="purple" class="purple-theme">5</a></li>
                                <li><a href="javascript:void(0)" data-theme="megna" class="megna-theme">6</a></li>
                                <li class="d-block m-t-30"><b>With Dark sidebar</b></li>
                                <li><a href="javascript:void(0)" data-theme="default-dark" class="default-dark-theme">7</a></li>
                                <li><a href="javascript:void(0)" data-theme="green-dark" class="green-dark-theme">8</a></li>
                                <li><a href="javascript:void(0)" data-theme="red-dark" class="red-dark-theme">9</a></li>
                                <li><a href="javascript:void(0)" data-theme="blue-dark" class="blue-dark-theme">10</a></li>
                                <li><a href="javascript:void(0)" data-theme="purple-dark" class="purple-dark-theme">11</a></li>
                                <li><a href="javascript:void(0)" data-theme="megna-dark" class="megna-dark-theme ">12</a></li>
                            </ul>
                            <ul class="m-t-20 chatonline">
                                <li><b>Chat option</b></li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../assets/images/users/1.jpg" alt="user-img" class="img-circle"> <span>Varun Dhavan <small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../assets/images/users/2.jpg" alt="user-img" class="img-circle"> <span>Genelia Deshmukh <small class="text-warning">Away</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../assets/images/users/3.jpg" alt="user-img" class="img-circle"> <span>Ritesh Deshmukh <small class="text-danger">Busy</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../assets/images/users/4.jpg" alt="user-img" class="img-circle"> <span>Arijit Sinh <small class="text-muted">Offline</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../assets/images/users/5.jpg" alt="user-img" class="img-circle"> <span>Govinda Star <small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../assets/images/users/6.jpg" alt="user-img" class="img-circle"> <span>John Abraham<small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../assets/images/users/7.jpg" alt="user-img" class="img-circle"> <span>Hritik Roshan<small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="../assets/images/users/8.jpg" alt="user-img" class="img-circle"> <span>Pwandeep rajan <small class="text-success">online</small></span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer"> © 2018 5R - i-gasikara </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->