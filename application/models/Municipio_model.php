<?php

class Municipio_model extends CI_Model {
       public function __construct() {
                $this->load->database();
        }

        public function get_municipios(){
            $query = $this->db->get('Municipio');
            return $query->result_array();
        }
        function contaRegistros() {
          return $this->db->count_all_results('Municipio');
        }
        function retornaLista2($maximo, $inicio){
            $query = $this->db->get('Municipio', $maximo, $inicio);
            return $query->result();
        }
}