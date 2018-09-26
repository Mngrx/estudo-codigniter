<?php 

class Pages extends CI_controller {

    public function view($page = 'home') {

        if (! file_exists( APPPATH.'views/pages/'.$page.'.php')) { //Caso o arquivo não seja encontrado
            show_404();
        }

        $data['title'] = ucfirst($page);

        $this->load->view('templates/header', $data);
        $this->load->view('pages/'.$page, $data);
        $this->load->view('templates/footer', $data);


    }

}



?>