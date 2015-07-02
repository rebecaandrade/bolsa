<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Municipio extends CI_Controller {
    public function __construct(){
            parent::__construct();
            $this->load->model('municipio_model');
    }

    function index(){
        $this->load->library('pagination');

        $maximo = 100;
        $inicio = (!$this->uri->segment("3")) ? 0 : $this->uri->segment("3");

        $config['base_url'] = '/bolsa/index.php/municipio/index';
        $config['total_rows'] = $this->municipio_model->contaRegistros();
        $config['per_page'] = $maximo;
        $config['first_link'] = 'Primeiro';
        $config['last_link'] = 'Último';
        $config['next_link'] = 'Próximo';
        $config['prev_link'] = 'Anterior';

        $this->pagination->initialize($config);

        $param["paginacao"] = $this->pagination->create_links();
        $param["municipios"] = $this->municipio_model->retornaLista2($maximo, $inicio);

        $this->load->view('municipio/index', $param);
    }
}
