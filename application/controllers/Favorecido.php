<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Favorecido extends CI_Controller {
    public function __construct(){
            parent::__construct();
            $this->load->model('favorecido_model');
    }

    public function index(){
        $data['favorecidos'] = $this->favorecido_model->get_favorecidos();
        $this->load->view('favorecido/index',$data);
    }
}
