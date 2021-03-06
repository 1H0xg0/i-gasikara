<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Image_m extends CI_Model {

    public function __construct(){

        parent::__construct();
        $this->load->database();

    }

    public function get($condition = array()){

        return $this->db->select('*')
            ->where($condition)
            ->get('image')
            ->result();

    }

    public function add($data){
        $this->db->insert('image', $data);
        return $this->db->insert_id();
    }

    public function delete($data){
        return $this->db->delete('image', $data);
    }

    public function delete_file($data){
        return $this->db->delete('files', $data);
    }


}