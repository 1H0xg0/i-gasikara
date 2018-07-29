<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Candidats extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('template');
        $this->load->helper('url');
        $this->load->model('Candidats_m');

        // load template
        $this->template->set_template('admin/template');
    }

    public function index(){
        $candidats = $this -> Candidats_m -> getCandidats_m();
        $this->template->render("admin/candidats/accueil", array("candidats" => $candidats));
    }

    public function getFormCandidat(){ // Recuperation formulaire d'ajout d'un candidat
        if($_POST){
            if($_POST["type"] == "ajout"){
                $this->template->render("admin/candidats/ajouterCandidat", array());
            } else {
                $candidat = $this -> Candidats_m -> getInfoCandidat_m($_POST["idCandidat"]);
                $this->template->render("admin/candidats/modifierCandidat", array("candidat" => $candidat[0]));
            }
        }
    }

    public function gererCandidat(){ // Ajout modification suppression d'un candidat 
        if($_POST){
            extract($_POST);
            $gererCandidat = $this -> Candidats_m -> gererCandidat_m($_POST); 
            if($gererCandidat["type"] == "ajout"){
                $retour = array(
                                "status" => 0, 
                                "message" => $gererCandidat["message"]
                        ); 
            } elseif($gererCandidat["type"] == "modif"){
                $retour = array(
                                "status" => 0, 
                                "message" => $gererCandidat["message"], 
                                "data" => $gererCandidat["data"]
                        ); 
            } elseif($gererCandidat["type"] == "suppr") {
               $retour = array(
                                "status" => 0, 
                                "message" => $gererCandidat["message"]
                        ); 
            }
            echo json_encode($retour); 
        }
    }









}