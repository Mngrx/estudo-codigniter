<?php

class Formulario extends CI_Controller {
    
    public function __construct() {
        
        parent::__construct();
        
        //$this->load->model('');
        $this->load->helper('url_helper');

    }

    public function index() {

        $this->load->helper('form');
        $this->load->library('form_validation');

        


        $this->load->view('template/header');
        $this->load->view('formulario/index');
        $this->load->view('template/footer');

    }
}

?>