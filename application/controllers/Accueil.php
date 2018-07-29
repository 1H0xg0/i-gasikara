<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Accueil extends CI_Controller {


    private $liste;

    public function __construct()
    {
        parent::__construct();
        $this->load->library('template');
        $this->load->helper('url');
        $this->load->model('user_m');
        $this->load->model('file_m');
        $this->load->model('video_m');


        // load template
        $this->template->set_template('public/template');

        // css stylesheet
        $this->template->stylesheet->add(base_url().'assets/public/style.css');
        $this->template->stylesheet->add(base_url().'assets/public/css/responsive/responsive.css');
        $this->template->stylesheet->add(base_url().'assets/plugins/Magnific-Popup-master/dist/magnific-popup.css');

        // js script

        $this->template->javascript->add(base_url().'assets/public/js/jquery/jquery-2.2.4.min.js');
        $this->template->javascript->add(base_url().'assets/public/js/bootstrap/popper.min.js');
        $this->template->javascript->add(base_url().'assets/public/js/bootstrap/bootstrap.min.js');
        $this->template->javascript->add(base_url().'assets/public/js/bootstrap/bootstrap-notify.js');
        $this->template->javascript->add(base_url().'assets/public/js/jquery.easing.min.js');
        $this->template->javascript->add(base_url().'assets/plugins/Magnific-Popup-master/dist/jquery.magnific-popup.min.js');
        $this->template->javascript->add(base_url().'assets/public/js/others/plugins.js');
        $this->template->javascript->add(base_url().'assets/public/js/active.js');
        $this->template->javascript->add(base_url().'assets/plugins/url.js');
        $this->template->javascript->add(base_url().'assets/public/js/load.js');
        $this->template->javascript->add(base_url().'assets/public/js/ajax.js');
        $this->template->javascript->add(base_url().'assets/public/js/chart.js');
        $this->template->javascript->add('https://openlayers.org/api/OpenLayers.js');


        $this->liste = array(
            array(
                'province' => 'ANTANANARIVO',
                'region' => 'ANALAMANGA',
                'district' => 'ANTANANARIVO III',
                'commune' => 'ARRONDISSEMENT III',
                'fokotany' => 'Ampandra andrefana',
                'centre de vote' => 'EPP VOHIBOLA',
                'bureau de vote' => 'EPP VOHIBOLA SALLE 04',
                'nom' => 'ANDRIAMAROHAJA',
                'prénoms' => 'Lovasoa',
                'genre' => 'Masculin',
                'date et lieu de naissance' => '03/04/1993 à Ampandrana Ouest',
                'numero_CIN' => '101231150931',
                'profession' => 'Developpeur'
            ),
            array(
                'province' => 'ANTANANARIVO',
                'region' => 'ANALAMANGA',
                'district' => 'ANTANANARIVO IV',
                'commune' => 'ARRONDISSEMENT IV',
                'fokotany' => 'Fiadanana III N',
                'centre de vote' => 'EPP FIADANANA',
                'bureau de vote' => 'EPP FIADANANA Salle 1',
                'nom' => 'RANDRIAMISAINA',
                'prénoms' => 'Nicolas',
                'genre' => 'Masculin',
                'date et lieu de naissance' => '30/09/1992 à SOAVINANDRIANA',
                'numero_CIN' => '101241151796',
                'profession' => 'Developpeur'
            ),
            array(
                'province' => 'ANTANANARIVO',
                'region' => 'ANALAMANGA',
                'district' => 'ANTANANARIVO II',
                'commune' => 'ARRONDISSEMENT II',
                'fokotany' => 'Andohanimandroseza Ambohibato',
                'centre de vote' => 'CEG Ambohipo',
                'bureau de vote' => 'CEG Ambohipo',
                'nom' => 'Andriaritiana',
                'prénoms' => 'Danielson',
                'genre' => 'Masculin',
                'date et lieu de naissance' => '02/10/1990 à Ambatofinandrahana',
                'numero_CIN' => '203011021388',
                'profession' => 'Developpeur'
            ),
            array(
                'province' => 'ANTANANARIVO',
                'region' => 'ANALAMANGA',
                'district' => 'ANTANANARIVO II',
                'commune' => 'ARRONDISSEMENT II',
                'fokotany' => 'Tsiadana',
                'centre de vote' => 'BUR FKT TSIADANA',
                'bureau de vote' => 'BUR FKT TSIADANA',
                'nom' => 'JOELINJATOVO MAMY EUGENE',
                'prénoms' => 'Hajatiana',
                'genre' => 'Masculin',
                'date et lieu de naissance' => '03/09/1993 à Mahasolo',
                'numero_CIN' => '111271013119',
                'profession' => 'Developpeur'
            ),
            array(
                'province' => 'ANTANANARIVO',
                'region' => 'ANALAMANGA',
                'district' => 'ANTANANARIVO II',
                'commune' => 'ARRONDISSEMENT II',
                'fokotany' => 'ANDAFIAVARATRA-AMBAVAHADIMITAFO',
                'centre de vote' => 'EPP AMBAVAHADIMITAFO',
                'bureau de vote' => 'EPP AMBAVAHADIMITAFO',
                'nom' => 'RAVELOMANANTSOA',
                'prénoms' => 'Ihaga Marriel Garry',
                'genre' => 'Masculin',
                'date et lieu de naissance' => '12/05/1993 à Ampasanimalo',
                'numero_CIN' => '101221105572',
                'profession' => 'Developpeur'
            )


        );
    }
    public function index() {

        $data = array();

        //candidats
        $data['candidats'] = array();

        //files
        $data['files'] = $this->file_m->get();

        //videos
        $data['videos'] = $this->video_m->get();


        //cartographie
        //partenaire
        //Flow chart
        //liste electorale
        //slider code electorale
        //doleance
        //statistique electorale
        //actualité electorale


        $this->template->content->view('public/content', $data);
        $this->template->publish();
    }

    public function page_video(){
        if($_POST){
            extract($_POST);
            if(isset($id)){
                $data = array();
                $data['video'] = $this->video_m->get(array('idVideo'=>$id));
                $this->template->render("public/video", $data);
            }
        }
    }

    public function page_electoral(){
        if($_POST){
            extract($_POST);
            if(isset($cin)){

                $data = array();
                $data['person'] = null;

                foreach($this->liste as $item){
                    if($cin == $item['numero_CIN']){
                        $data['person'] = $item;
                    }
                }

                $this->template->render("public/electoral", $data);
            }
        }
    }



}
