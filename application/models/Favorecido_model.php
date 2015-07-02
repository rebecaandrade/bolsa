<?php

class Favorecido_model extends CI_Model {
       public function __construct() {
                $this->load->database();
        }

        public function get_favorecidos(){
            $query = $this->db->get('Favorecido');
            return $query->result_array();
        }
        function contaRegistros() {
          return $this->db->count_all_results('Favorecido');
        }
        function retornaLista2($maximo, $inicio){
            $query = $this->db->get('Favorecido', $maximo, $inicio);
            return $query->result();
        }
        function buscar($nome){
            $this->db->like('NomeFavorecido', $nome);
            $query = $this->db->get('Favorecido');
            return $query->result();
        }
}