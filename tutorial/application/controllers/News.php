<?php

class News extends CI_controller {

    
    public function __construct() {
        
        parent::__construct();
        
        $this->load->model('news_model');
        $this->load->helper('url_helper');

    }
    

    public function index() {
        $data['news'] = $this->news_model->get_news();
        $data['title'] = "Novo arquivo!";

        $this->load->view('templates/header', $data);
        $this->load->view('news/index', $data);
        $this->load->view('templates/footer', $data);
    }

    public function view($slug = NULL) {
        $data['news_item'] = $this->news_model->get_news($slug);
        $data['title'] = "Notícia nova";


        if (empty($data['news_item'])) { //Caso o arquivo não seja encontrado
            show_404();
        }

        
        $this->load->view('templates/header', $data);
        $this->load->view('news/view', $data);
        $this->load->view('templates/footer', $data);

    }

    public function create() {

        $this->load->helper('form');
        $this->load->library('form_validation');

        $data['title'] = "Deu certo o create!";

        $this->form_validation->set_rules('title', 'Título', 'required');
        $this->form_validation->set_rules('text', 'Texto', 'required');
        
        
        if ($this->form_validation->run() === FALSE) {
    
            $this->load->view('templates/header', $data);
            $this->load->view('news/create');
            $this->load->view('templates/footer');
        
        } else {
            $this->news_model->set_news();
            $this->load->view('news/sucess');
        }

    }




}


?>