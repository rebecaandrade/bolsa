<?php

class Parcela_model extends CI_Model {
       public function __construct() {
                $this->load->database();
        }

        public function get_parcelas(){
            $query = $this->db->get('Parcela');
            return $query->result_array();
        }
        function contaRegistros() {
          return $this->db->count_all_results('Parcela');
        }
        function retornaLista2($maximo, $inicio){
            $query = $this->db->get('Parcela', $maximo, $inicio);
            return $query->result();
        }
        function mediaParcela(){
            $this->db->select_avg('Valor Parcela');
            $query = $this->db->get('Parcela');
            return $query->result();
        }
        function somaParcela(){
            $this->db->select_sum('Valor Parcela');
            $query = $this->db->get('Parcela');
            return $query->result();
        }
}