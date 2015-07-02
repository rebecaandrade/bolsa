<?php

class Favorecido_model extends CI_Model {
       public function __construct() {
                $this->load->database();
        }

        public function get_favorecidos(){
            $query = $this->db->get('Favorecido');
            return $query->result_array();
        }
}