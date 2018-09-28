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
        ->order_by('id','ASC');

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

    /*
        Faz atualização dos campos de produto.       
        Os dados vêm validados do controller.

    */

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

    /*
        Vê se um 'id' existe no bd, caso exista, remove, caso não retorna erro
        Ajudado por: https://stackoverflow.com/questions/16125524/how-to-check-if-id-already-exists-codeigniter
    */

    public function removeProduct($id) {
        
        $status = $this->db->get_where('products', array('id' => $id))->num_rows();

        if ($status) {
            $this->db->delete('products', array('id'=>$id));
            $response['status'] = TRUE;
            $response['message'] = "Produto removido com sucesso.";
        } else {
            $response['status'] = FALSE;
            $response['message'] = "Produto não existe no sistema.";
        }

        return $response;
    }

}


?>