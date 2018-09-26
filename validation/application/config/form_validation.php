<?php

$config = array(
    array(
        'field' => 'user',
        'label' => 'Usuário',
        'rules' => 'required|min_length[6]|alpha_dash',
        'errors' => array(
            'required' => 'Este campo é obrigatório.',
            'min_length' => 'Deve ter no mínimo 5 caracteres.',
            'alpha_dash' => 'Deve conter azAZ09-_'
        )
    ),
    array(
        'field' => 'nome',
        'label' => 'Nome',
        'rules' => 'required',
        'errors' => array(
            'required' => 'Este campo é obrigatório.',
        )
    ), 
    array(
        'field' => 'sobrenome',
        'label' => 'Sobrenome',
        'rules' => 'required',
        'errors' => array(
            'required' => 'Este campo é obrigatório.',
        )
    ),
    array(
        'field' => 'email',
        'label' => 'Email',
        'rules' => 'required|valid_email',
        'errors' => array(
            'required' => 'Este campo é obrigatório.',
            'valid_email' => 'O email digitado é inválido.'
        )
    ),
    array(
        'field' => 'passw',
        'label' => 'Senha',
        'rules' => 'required|min_length[8]|alpha_numeric',
        'errors' => array(
            'required' => 'Este campo é obrigatório.',
            'min_length' => 'Deve ter no mínimo 8 caracteres.',
            'alpha_numeric' => 'A senha deve ter apenas letras e números.'
        )
    ),
    array(
        'field' => 'cpassw',
        'label' => 'Confirme a senha',
        'rules' => 'required|matches[passw]',
        'errors' => array(
            'required' => 'Este campo é obrigatório.',
            'matches' => 'Não confere com a senha digitada.'
        )
    ),
    array(
        'field' => 'sexo',
        'label' => 'Sexo',
        'rules' => 'required',
        'errors' => array(
            'required' => 'Selecione uma opção.'
        )

    )
    
);

?>