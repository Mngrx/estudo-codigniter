<?php

$config = array(
    'products' => array(
        array(
            'field' => 'nome',
            'label' => 'nome',
            'rules' => 'required'
        ),
        array(
            'field' => 'descricao',
            'label' => 'descrição',
            'rules' => 'required|min_length[10]'
        ),
        array(
            'field' => 'preco',
            'label' => 'preço',
            'rules' => 'required|decimal'
        )
    )
);

?>