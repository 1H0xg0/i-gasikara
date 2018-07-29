<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Video extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        $this->load->helper('url');
        $this->load->model('video_m');
    }

    public function add(){
        if($_POST){
            extract($_POST);
            if(isset($title) && isset($category) && isset($content)){
                $ar = explode('&', $content);
                $data = array(
                    'titreVideo' => $title,
                    'categorieVideo' => $category,
                    'contenuVideo' => str_ireplace('\\"', "'", $ar[0])
                );

                $response = $this->video_m->add($data);
                echo $response ? 1 : 0;
            }
        }
    }

    public function delete(){
        if($_POST){
            extract($_POST);
            if(isset($id)){
                $response = $this->video_m->delete(array('idVideo'=>$id));
                echo $response ? 1 : 0;
            }
        }
    }

}