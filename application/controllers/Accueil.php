<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Accueil extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('template');
        $this->load->helper('url');
        $this->load->model('user_m');


        // load template
        $this->template->set_template('login/template');

        // css stylesheet

        $this->template->stylesheet->add(base_url().'assets/plugins/bootstrap/css/bootstrap.min.css');
        $this->template->stylesheet->add(base_url().'assets/admin/css/animate.css');
        $this->template->stylesheet->add(base_url().'assets/admin/css/pages/login-register-lock.css');
        $this->template->stylesheet->add(base_url().'assets/admin/css/spinners.css');
        $this->template->stylesheet->add(base_url().'assets/admin/css/style.css');
        $this->template->stylesheet->add(base_url().'assets/admin/css/colors/default.css');

        // js script
        $this->template->javascript->add(base_url().'assets/plugins/jquery/jquery.min.js');
        $this->template->javascript->add(base_url().'assets/plugins/bootstrap/js/popper.min.js');
        $this->template->javascript->add(base_url().'assets/plugins/bootstrap/js/bootstrap.min.js');
        $this->template->javascript->add(base_url().'assets/login/js/load.js');
        $this->template->javascript->add(base_url().'assets/login/js/ajax.js');
    }
    public function index() {

        redirect('login/login');
    }


    public function register() {

        $this->template->content->view('login/register', array());
        $this->template->publish();

    }



}
