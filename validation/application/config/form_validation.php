<?php

$config = array(
    'validarFormulario' => array(
        'field' => 'user',
        'label' => 'Usuário',
        'rules' => 'required|min_length[5]|alpha_dash'
    ),
    array(
        'field' => 'nome',
        'label' => 'Nome',
        'rules' => 'required'
    ), 
    array(
        'field' => 'sobrenome',
        'label' => 'Sobrenome',
        'rules' => 'required'
    ),
    array(
        'field' => 'email',
        'label' => 'Email',
        'rules' => 'required|valid_email'
    ),
    array(
        'field' => 'passw',
        'label' => 'Senha',
        'rules' => 'required|min_length[6]|alpha_numeric'
    ),
    array(
        'field' => 'cpassw',
        'label' => 'Confirme a senha',
        'rules' => 'required|matches[passw]'
    ),
    array(
        'field' => 'sexo',
        'label' => 'Sexo',
        'rules' => 'required'
    )
    
);

?>