<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Path_m extends CI_Model
{
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function get($condition){

        return $this->db->select('*')
            ->where($condition)
            ->order_by('valeurPath', 'asc')
            ->get('path')
            ->result();

    }

    public function get_id($condition){

        $result = $this->db->select('idPath')
            ->where($condition)
            ->get('path')
            ->result();

        return $result[0]->idPath;

    }

    public function add($data){
        $result = $this->get($data);
        if(empty($result)){
            return $this->db->insert('path', $data);
        }
        return true;

    }


}