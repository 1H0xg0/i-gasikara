<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Image extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        $this->load->helper('url');
        $this->load->model('path_m');
        $this->load->model('image_m');
        $this->load->model('file_m');
    }


    public function upload(){

        if(!empty($_FILES)){

            $temp = $_FILES['file']['tmp_name'];
            $_path = '';
            if($_POST){
                extract($_POST);
                if(isset($path)) $_path = $path;

            }


            $dir_folder = APPPATH.'../'.$_path;
            if (!file_exists($dir_folder)) {
                mkdir($dir_folder, 0777, true);
            }
            $src = base_url().$_path.$_FILES['file']['name'];
            if(strpos($_FILES['file']['type'], 'image') === false ){

                $data = array(
                    'titreFile' => $_FILES['file']['name'],
                    'sourceFile' => $src,
                    'idPath' => $this->path_m->get_id(array('valeurPath'=>$path))
                );

                $id = $this->file_m->add($data);
                $response = array();
                if(!is_null($id)){
                    $response = array('id'=>$id, 'src'=>$src);
                }
                $target_path = $dir_folder.''.$_FILES['file']['name'];
                move_uploaded_file($temp, $target_path);

                echo json_encode($response);

            }else{

                $data = array(
                    'titreImage' => $_FILES['file']['name'],
                    'sourceImage' => $src,
                    'idPath' => $this->path_m->get_id(array('valeurPath'=>$path))
                );

                $id = $this->image_m->add($data);
                $response = array();
                if(!is_null($id)){
                    $response = array('id'=>$id, 'src'=>$src);
                }
                $target_path = $dir_folder.''.$_FILES['file']['name'];
                move_uploaded_file($temp, $target_path);

                echo json_encode($response);

            }



        }
    }
    public function delete(){
        if($_POST){
            extract($_POST);
            if(isset($id)){
                $response = $this->image_m->delete(array('idImage'=>$id));
                echo $response ? 1 : 0;
            }
        }
    }

    public function delete_file(){
        if($_POST){
            extract($_POST);
            if(isset($id)){
                $response = $this->image_m->delete_file(array('idFile'=>$id));
                echo $response ? 1 : 0;
            }
        }
    }
}