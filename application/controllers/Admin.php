<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('template');
        $this->load->helper('url');
        $this->load->model('user_m');

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


        // js script
        $this->template->javascript->add(base_url().'assets/plugins/jquery/jquery.min.js');
        $this->template->javascript->add(base_url().'assets/plugins/bootstrap/js/popper.min.js');
        $this->template->javascript->add(base_url().'assets/plugins/bootstrap/js/bootstrap.min.js');

        $this->template->javascript->add(base_url().'assets/admin/js/perfect-scrollbar.jquery.min.js');
        $this->template->javascript->add(base_url().'assets/admin/js/waves.js');
        $this->template->javascript->add(base_url().'assets/admin/js/sidebarmenu.js');
        $this->template->javascript->add(base_url().'assets/admin/js/ajax.js');
        $this->template->javascript->add(base_url().'assets/admin/js/custom.min.js');
        
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

    }

    public function index(){
        $this->template->content->view('admin/admin', array());
        $this->template->publish();
    }
}