<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Parcela extends CI_Controller {
    public function __construct(){
            parent::__construct();
            $this->load->model('parcela_model');
    }

    public function index(){
        $data['parcelas'] = $this->parcela_model->get_parcelas();
        $this->load->view('parcela/index',$data);
    }

}
