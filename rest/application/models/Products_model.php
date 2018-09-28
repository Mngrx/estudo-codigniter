<?php 

class Products_model extends CI_model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }


    /*
        Retorna todos as linhas da tabela 'products' como um array.
        Podendo filtrar apenas as colunas dos parametros passados.
    */
    public function getAll($params = null) {
        $this->db->select($fields)
        ->from('products')
        ->order_by('nome','ASC');

        return $this->db->get()->result_array();
    }

    /*
        Retorna os valores da tabela 'products' correspondentes ao 'id' passado.
    */
    public function getById($id = 1) {
        return $this->db->get_where('products', array('id' => $id))->row_array();
    }

    /*
        Adiciona um produto que foi passado como parâmetro na tabela 'products'.
        Os dados vêm validados do controller.
    */

    public function addProduct($product) {
        $status = $this->db->insert('products',$product);

        if ($status) {
            $response['status'] = TRUE;
            $response['message'] = "Produto inserido com sucesso.";
        } else {
            $response['status'] = FALSE;
            $response['message'] = $this->db->error_message();
        }

        return $response;
    }

    public function updateProduct($product, $params = 'id', $values) {

        $this->db->where($params, $values);
        $status = $this->db->update('products',$product);

        if ($status) {
            $response['status'] = TRUE;
            $response['message'] = "Produto atualizado com sucesso.";
        } else {
            $response['status'] = FALSE;
            $response['message'] = $this->db->error_message();
        }

        return $response;
    }

}


?>