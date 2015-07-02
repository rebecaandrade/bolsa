<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Municipio extends CI_Controller {
    public function __construct(){
            parent::__construct();
            $this->load->model('municipio_model');
    }

    public function index(){
        $data['municipios'] = $this->municipio_model->get_municipios();
        $this->load->view('municipio/index',$data);
    }

}
