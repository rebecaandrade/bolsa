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
            $this->db->select_avg("ValorParcela");
            $query = $this->db->get('Parcela');
            return $query->result();
        }
        function somaParcela(){
            $this->db->select_sum('ValorParcela');
            $query = $this->db->get('Parcela');
            return $query->result();
        }
        function TotalPessoaParcela($nis){
            $this->db->select_sum('ValorParcela');
            $query = $this->db->get_where('Parcela', array('NISFavorecido' => $nis));
            return $query->result();
        }
        function menorParcela(){
            $this->db->select_min('ValorParcela');
            $query = $this->db->get('Parcela');
            return $query->result();
        }
        function maiorParcela(){
            $this->db->select_max('ValorParcela');
            $query = $this->db->get('Parcela');
            return $query->result();
        }
}