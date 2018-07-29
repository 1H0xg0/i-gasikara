<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Candidats_m extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function getCandidats_m(){
        $sql = $this -> db -> select('candidat.*, electeur.*')
                            ->from('candidat')
                            ->join('electeur','electeur.CIN = candidat.CIN')
                            -> get()-> result();
		return $sql;
    }



    public function gererCandidat_m($donnees){
        if(!empty($donnees)){
            extract($donnees);
            $data = $donnees['candidat']; 
            $existeElecteur = $this -> existeElecteur_m($data['CINCandidat']); 
            if($donnees["type"] == "ajout"){
                if(!$existeElecteur){
                    $insererElecteur = $this -> insererElecteur($donnees['candidat']); 
                    if($insererElecteur["etat"] == true){
                        $candidat = array(
                            'CIN' => $data["CINCandidat"],
                            'partieCandidat ' => $data['partieCandidat'],
                            'abrevpartieCandidat' => $data['abrevpartieCandidat'],
                            'programmeCandidat' => $data['programmeCandidat'],
                            'logopartieCandidat' => isset($data['logopartieCandidat']) || !is_null($data['logopartieCandidat']) ? $data['logopartieCandidat'] : null,
                            'bloqueCandidat' => isset($data['bloqueCandidat']) || !is_null($data['bloqueCandidat']) ? $data['bloqueCandidat'] : 0, // 0 : non bloqué et 1 : bloqué
                            'eluCandidat' => isset($data['eluCandidat']) || !is_null($data['eluCandidat']) ? $data['eluCandidat'] : 0, // 0 : non élu et 1 : élu
                        );

                        $sql = $this  -> db ->insert('candidat', $candidat);
                        return array('type' => "ajout", 'data' => $sql, 'message' => "Ajout candidat terminé");
                    }
                    else {
                        return array('type' => "ajout", 'data' => false, 'message' => "Le candidat existe déjà dans la base avec ce même CIN.");
                    }
                } else {
                    return array('type' => "ajout", 'data' => false, 'message' => "Le candidat existe déjà dans la base avec ce même CIN.");
                }
                

            } else if($donnees["type"] == "modif") {
                    $updateElecteur = $this -> updateElecteur($donnees['candidat']); 
                    if($updateElecteur == true){
                        $candidat = array(
                            // 'idCandidat' => => $data['idCandidat'],
                            // 'CIN' => $data['CINCandidat'],
                            'partieCandidat ' => $data['partieCandidat'],
                            'abrevpartieCandidat' => $data['abrevpartieCandidat'],
                            'programmeCandidat' => $data['programmeCandidat'],
                            'logopartieCandidat' => isset($data['logopartieCandidat']) || !is_null($data['logopartieCandidat']) ? $data['logopartieCandidat'] : null,
                            'bloqueCandidat' => isset($data['bloqueCandidat']) || !is_null($data['bloqueCandidat']) ? $data['bloqueCandidat'] : 0, // 0 : non bloqué et 1 : bloqué
                            'eluCandidat' => isset($data['eluCandidat']) || !is_null($data['eluCandidat']) ? $data['eluCandidat'] : 0, // 0 : non élu et 1 : élu
                        );
                        $sql = $this-> db -> where('candidat.idCandidat', $data['idCandidat']) -> update('candidat', $candidat);
                        return array('type' => "modif", 'data' => $sql, 'message' => "Modification candidat terminé");
                    } else {
                        return array('type' => "ajout", 'data' => false, 'message' => "Erreur dans la modification des infos du candidat.");
                    }
                    

            } else if($donnees["type"] == "suppr"){

                $sql = $this-> db ->delete('candidat', array('CIN' => $data['CINCandidat']));
                if($sql){
                    $supprElecteur = $this -> supprElecteur($data['CINCandidat']); 
                }
                return array('type' => "suppr", 'data' => $sql, 'message' => "Suppression candidat terminée");
            }
            
        }
    }

    public function existeElecteur_m($cin){
        $existe = "select count(*) as nb from electeur where CIN =".$cin; 
        $sql = $this -> db -> query($existe) -> row(); 
        $result = isset($sql -> nb) || !is_null($sql) ? $sql -> nb : 0; 
        return $result > 0 ? true : false; 
    }

    public function insererElecteur($data){
        // $data['idFokontany'] = 1; 
        // $data['idBureauDeVote'] = 1; 
        // $data['estPresident'] = 0; 
        $electeur = array(
            'CIN' => $data['CINCandidat'],
            'civElecteur' => $data['civCandidat'],
            // 'idFokontany' => isset($data['idFokontany']) || !is_null($data['idFokontany']) ? $data['idFokontany'] : 1,
            'idFokontany' => 1,
            // 'idBureauDeVote' => isset($data['idBureauDeVote']) || !isset($data['idBureauDeVote']) ? $data['idBureauDeVote'] : 1,
            'idBureauDeVote' => 1,
            'nomElecteur' => $data['nomCandidat'],
            'prenomElecteur' => $data['prenomCandidat'],
            'programmeCandidat' => $data['programmeCandidat'],
            'ageElecteur' => isset($data['ageCandidat']) || !is_null($data['ageElecteur']) ? $data['ageElecteur'] : 30,
            'adresseElecteur' => $data['adresseElecteur'],
            // 'estPresident' => isset($data['estPresident']) || !is_null($data['estPresident']) ? $data['estPresident'] : 0
            'estPresident' => 0
        );
        $sql = $this-> db -> insert('electeur', $electeur);
        $cin = $this-> db->insert_id();
        return array("etat" => $sql, "cin" => $cin); 
    }

    public function updateElecteur($data){
       $electeur = array(
            'CIN' => $data['CINCandidat'],
            'civElecteur' => $data['civCandidat'],
            // 'idFokontany' => isset($data['idFokontany']) || !is_null($data['idFokontany']) ? $data['idFokontany'] : 1,
            'idFokontany' => 1,
            // 'idBureauDeVote' => isset($data['idBureauDeVote']) || !isset($data['idBureauDeVote']) ? $data['idBureauDeVote'] : 1,
            'idBureauDeVote' => 1,
            'nomElecteur' => $data['nomCandidat'],
            'prenomElecteur' => $data['prenomCandidat'],
            'ageElecteur' => isset($data['ageCandidat']) || !is_null($data['ageElecteur']) ? $data['ageElecteur'] : 30,
            'adresseElecteur' => $data['adresseElecteur'],
            // 'estPresident' => isset($data['estPresident']) || !is_null($data['estPresident']) ? $data['estPresident'] : 0
            'estPresident' => 0
        );
        $sql = $this-> db -> where('electeur.CIN', $data['CINCandidat']) -> update('electeur', $electeur);
        return $sql; 
    }

    public function supprElecteur($cin){
        $sql = $this-> db ->delete('electeur', array('CIN' => $cin));
        return $sql;
    }


    public function getInfoCandidat_m($id){
        $sql = "select candidat.*, electeur.* 
                from candidat 
                join electeur on electeur.CIN = candidat.CIN
                where candidat.idCandidat =".$id; 
        $query = $this -> db -> query($sql) -> result(); 
        return $query; 
    }

}