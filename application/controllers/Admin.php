<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('template');
        $this->load->helper('url');
        $this->load->model('user_m');
        $this->load->model('path_m');
        $this->load->model('image_m');
        $this->load->model('video_m');
        $this->load->model('file_m');

        // load template
        $this->template->set_template('admin/template');

        // css stylesheet

        $this->template->stylesheet->add(base_url().'assets/plugins/bootstrap/css/bootstrap.min.css');
        $this->template->stylesheet->add(base_url().'assets/admin/css/animate.css');
        $this->template->stylesheet->add(base_url().'assets/admin/css/pages/login-register-lock.css');
        $this->template->stylesheet->add(base_url().'assets/admin/css/spinners.css');
        $this->template->stylesheet->add(base_url().'assets/admin/css/style.css');
        $this->template->stylesheet->add(base_url().'assets/admin/css/colors/default.css');
        $this->template->stylesheet->add(base_url().'assets/admin/css/pages/inbox.css');
        $this->template->stylesheet->add(base_url().'assets/admin/css/pages/file-upload.css');
        $this->template->stylesheet->add(base_url().'assets/admin/css/user-card.css');
        $this->template->stylesheet->add(base_url().'assets/admin/pages/contact-app-page.css');

        $this->template->stylesheet->add(base_url().'assets/plugins/dropzone-master/dist/dropzone.css');
        $this->template->stylesheet->add(base_url().'assets/plugins/Magnific-Popup-master/dist/magnific-popup.css');


        // js script
        $this->template->javascript->add(base_url().'assets/plugins/jquery/jquery.min.js');
        $this->template->javascript->add(base_url().'assets/plugins/bootstrap/js/popper.min.js');
        $this->template->javascript->add(base_url().'assets/plugins/bootstrap/js/bootstrap.min.js');

        $this->template->javascript->add(base_url().'assets/admin/js/perfect-scrollbar.jquery.min.js');
        $this->template->javascript->add(base_url().'assets/admin/js/waves.js');
        $this->template->javascript->add(base_url().'assets/admin/js/sidebarmenu.js');
        $this->template->javascript->add(base_url().'assets/admin/js/ajax.js');
        $this->template->javascript->add(base_url().'assets/admin/js/custom.min.js');
        $this->template->javascript->add(base_url().'assets/plugins/Magnific-Popup-master/dist/jquery.magnific-popup.min.js');
        
        // Email
        $this->template->javascript->add(base_url().'assets/plugins/sticky-kit-master/dist/sticky-kit.min.js');
        $this->template->javascript->add(base_url().'assets/plugins/sparkline/jquery.sparkline.min.js');
        $this->template->javascript->add(base_url().'assets/plugins/styleswitcher/jQuery.style.switcher.js');

        // JS pour chaque menu
        $this->template->javascript->add(base_url().'assets/plugins/url.js');
        $this->template->javascript->add(base_url().'assets/admin/js/load.js');
        
        $this->template->javascript->add(base_url().'assets/admin/js/ajax_candidats.js');
        $this->template->javascript->add(base_url().'assets/admin/js/ajax_users.js');
        $this->template->javascript->add(base_url().'assets/admin/js/ajax_stats.js');
        $this->template->javascript->add(base_url().'assets/admin/js/ajax_docs.js');

        //dropzone
        $this->template->javascript->add(base_url().'assets/plugins/dropzone-master/dist/dropzone.js');

    }

    public function index(){
        $this->template->content->view('admin/admin', array());
        $this->template->publish();
    }

    public function page_docs_upload(){
        $data = array();
        $data['path'] = $this->path_m->get(array());
        $this->template->render("admin/docs/upload", $data);
    }

    public function page_docs_biblio(){
        $data = array();
        $data['images'] = $this->image_m->get();
        $data['videos'] = $this->video_m->get();
        $data['files'] = $this->file_m->get();
        $this->template->render("admin/docs/biblio", $data);
    }

}