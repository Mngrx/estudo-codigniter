<?php 

class Products_model extends CI_model {

    public function __construct() {
        parent::__construct();
    }


    /*
        Retorna todos as linhas da tabela 'products' como um array.
        Podendo filtrar apenas as colunas dos parametros passados.
    */
    public function getAll($params = null) {
        $this->db->select($params)->from('products');

        return $this->db->get()->result_array();
    }

}


?>