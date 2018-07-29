<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('template');
        $this->load->helper('url');
        $this->load->model('User_m');

        // load template
        $this->template->set_template('admin/template');
    }

    public function index(){
        $users = $this -> User_m -> getUsers_m();
        $this->template->render("admin/users/accueil", array("users" => $users));
    }

    public function getFormUser(){ // Recuperation formulaire d'ajout d'un User
        if($_POST){
            if($_POST["type"] == "ajout"){
                $this->template->render("admin/users/ajouterUser", array());
            } else {
                $user = $this -> User_m -> getInfoUser_m($_POST["CIN"]);
                $this->template->render("admin/users/modifierUser", array("user" => $user[0]));
            }
        }
    }


    public function gererUser(){ // Ajout modification suppression d'un User 
        if($_POST){
            extract($_POST);
            $gererUser = $this -> User_m -> gererUser_m($_POST); 
            if($gererUser["type"] == "ajout"){
                $retour = array(
                                "status" => 0, 
                                "message" => $gererUser["message"]
                        ); 
            } elseif($gererUser["type"] == "modif"){
                $retour = array(
                                "status" => 0, 
                                "message" => $gererUser["message"], 
                                "data" => $gererUser["data"]
                        ); 
            } elseif($gererUser["type"] == "suppr") {
               $retour = array(
                                "status" => 0, 
                                "message" => $gererUser["message"]
                        ); 
            }
            echo json_encode($retour); 
        }
    }
}