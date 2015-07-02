<?php

class Parcela_model extends CI_Model {
       public function __construct() {
                $this->load->database();
        }

        public function get_parcelas(){
            $query = $this->db->get('Parcela');
            return $query->result_array();
        }
}