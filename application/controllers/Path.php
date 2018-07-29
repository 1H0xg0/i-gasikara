<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

class Path extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('path_m');

    }

    public function add(){

        if($_POST){
            $response = false;
            extract($_POST);
            if(isset($path)){

                $data = array(
                    'valeurPath' => 'uploads/'.$path.'/'
                );

                $response = $this->path_m->add($data);

                if($response == true){
                    $dir_folder = APPPATH.'../uploads/'.$path.'/';
                    if (!file_exists($dir_folder)) {
                        mkdir($dir_folder, 0777, true);
                    }
                }

            }
            echo $response ? 1 : 0;
        }
    }



}