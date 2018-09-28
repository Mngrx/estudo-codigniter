<?php

require APPPATH . '/libraries/REST_Controller.php';

class Products extends REST_controller {

    public function __construct() {
        parent::__construct();

        $this->load->library("form_validation");
        $this->load->model("Products_model", "Pmodel"); //Carrega e renomeia Products_model para Pmodel

    }

    /*
        Retorna dados dos produtos por requisição GET.
        Se passar um 'id' vai retornar os dados apenas daquele 'id'.
    */
    public function index_get() {

        //Pega o id pela URL
        $id = $this->uri->segment(3);

        if ($id <= 0) {
            $products = $this->Pmodel->getAll();
        } else {
            $products = $this->Pmodel->getById($id);
        }

        if (!empty($products)) {
            $response['data'] = $products;
            $this->response($response, REST_Controller::HTTP_OK);
        } else {
            $this->response($response, REST_Controller::HTTP_NO_CONTENT);
        }
    }

    /*
        Adiciona novos produtos por requisição POST
    */
    public function index_post() {

        //Recupera da mensagem 'postada' naquela rota
        $product = $this->post();
        //Realiza a validação
        $this->form_validation->set_data($product);

        if ($this->form_validation->run('products') === FALSE) {
            $response['status'] = FALSE;
            $response['message'] = validation_errors();
        } else {
            $response = $this->Pmodel->addProduct($product);
        }

        if ($response['status']) {
            $this->response($response, REST_Controller::HTTP_OK);
        } else {
            $this->response($response, REST_Controller::HTTP_BAD_REQUEST);
        }

    }
    /*
        Atualiza os dados de um determinado produto.
    */
    public function index_put() {

        //Recupera os dados passados naquela rota
        $product = $this->put();
        //Pega o 'id' do produto que vai ser modificado
        $id = $this->uri->segment(3);
    
        $this->form_validation->set_data($product);

        if ($this->form_validation->run('products') === FALSE) {
            $response['status'] = FALSE;
            $response['message'] = validation_errors();
        } else {
            $response = $this->Pmodel->updateProduct($product, 'id', $id);
        }

        if ($response['status']) {
            $this->response($response, REST_Controller::HTTP_OK);
        } else {
            $this->response($response, REST_Controller::HTTP_BAD_REQUEST);
        }



    }



}


?>