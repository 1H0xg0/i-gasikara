<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class File_m extends CI_Model {

    public function __construct(){

        parent::__construct();
        $this->load->database();

    }

    public function get($condition = array()){

        return $this->db->select('*')
            ->where($condition)
            ->get('files')
            ->result();

    }

    public function add($data){
        $this->db->insert('files', $data);
        return $this->db->insert_id();
    }

    public function delete($data){
        return $this->db->delete('files', $data);
    }


}