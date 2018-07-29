<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_m extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function getUsers_m(){
        $sql = $this -> db -> select('electeur.*')
                            ->from('electeur')
                            -> get()-> result();
		return $sql;
    }

    public function gererUser_m($donnees){
        if(!empty($donnees)){
            extract($donnees);
            $data = $donnees['user']; 
            $existeElecteur = $this -> existeElecteur_m($data['CINElecteur']); 
            if($donnees["type"] == "ajout"){
                if(!$existeElecteur){
                    $electeur = array(
                        'CIN' => $data["CINElecteur"],
                        'nomElecteur' => $data["nomElecteur"],
                        'prenomElecteur' => $data["prenomElecteur"],
                        'ageElecteur' => $data["ageElecteur"],
                        'civElecteur' => $data["civElecteur"],
                        'adresseElecteur' => $data["adresseElecteur"],
                        'nomFokontany' => $data["nomFokontany"], // figer à 1
                        'idBureauDeVote' => 1, // figer à 1
                        'idFokontany' => 1, // figer à 1
                        'estPresident' => $data["estPresident"]
                    );
                    $sql = $this  -> db ->insert('electeur', $electeur);
                    return array('type' => "ajout", 'data' => $sql, 'message' => "Ajout Electeur terminé");
                    
                } else {
                    return array('type' => "ajout", 'data' => false, 'message' => "L'Electeur existe déjà dans la base avec ce même CIN.");
                }
                

            } else if($donnees["type"] == "modif") {
                    $electeur = array(
                        // 'CIN' => $data['CINElecteur'],
                        'nomElecteur' => $data["nomElecteur"],
                        'prenomElecteur' => $data["prenomElecteur"],
                        'ageElecteur' => $data["ageElecteur"],
                        'civElecteur' => $data["civElecteur"],
                        'adresseElecteur' => $data["adresseElecteur"],
                        'nomFokontany' => $data["nomFokontany"], // figer à 1
                        'idBureauDeVote' => 1, // figer à 1
                        'idFokontany' => 1, // figer à 1
                        'estPresident' => $data["estPresident"]
                    );
                    $sql = $this-> db -> where('electeur.CIN', $data['CINElecteur']) -> update('electeur', $electeur);
                    return array('type' => "modif", 'data' => $sql, 'message' => "Modification Electeur terminé");

            } else if($donnees["type"] == "suppr"){
            	$estCandidat = $this -> existeCandidat_m($data['CINElecteur']); 
            	if(!$estCandidat) {
            		$sql = $this -> db -> delete("electeur", array("CIN" => $data['CINElecteur'])); 
                	return array('type' => "suppr", 'data' => $sql, 'message' => "Suppression Electeur terminée");
            	} else {
            		$sql1 = $this -> db -> delete("candidat", array("CIN" => $data['CINElecteur']));
            		$sql2 = $this -> db -> delete("electeur", array("CIN" => $data['CINElecteur']));
            		return array('type' => "modif", 'data' => $sql2, 'message' => "Suppression de l'électeur terminée");
            	}
                
            }
            
        }
    }

    public function getInfoUser_m($cin){
        $sql = "select electeur.*
                from electeur 
                where electeur.CIN =".$cin; 
        $query = $this -> db -> query($sql) -> result(); 
        return $query; 
    }

    public function existeElecteur_m($cin){
        $existe = "select count(*) as nb from electeur where CIN =".$cin; 
        $sql = $this -> db -> query($existe) -> row(); 
        $result = isset($sql -> nb) || !is_null($sql) ? $sql -> nb : 0; 
        return $result > 0 ? true : false; 
    }

    public function existeCandidat_m($cin){
        $existe = "select count(*) as nb from candidat where CIN =".$cin; 
        $sql = $this -> db -> query($existe) -> row(); 
        $result = isset($sql -> nb) || !is_null($sql) ? $sql -> nb : 0; 
        return $result > 0 ? true : false; 
    }

}