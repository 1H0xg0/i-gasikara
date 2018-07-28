<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Video_m extends CI_Model {

    public function __construct(){

        parent::__construct();
        $this->load->database();

    }

    public function get($condition = array()){
        return $this->db->select('*')
            ->where($condition)
            ->get('video')
            ->result();
    }

    public function add($data){
        return $this->db->insert('video', $data);
    }

    public function delete($data){
        return $this->db->delete('video', $data);
    }


}