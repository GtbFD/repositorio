<?php

require_once('src/model/Usuario.php');
require_once('src/dao/UsuarioDAO.php');

if (isset($_POST['cadastrar'])) {
    $nome = filter_input(INPUT_POST, 'nome');
    $sobrenome = filter_input(INPUT_POST, 'sobrenome');
    $email = filter_input(INPUT_POST, 'email');
    $senha = filter_input(INPUT_POST, 'senha');
    $bloqueado = 0;
    $dataCriacao = date('Y-m-d');

    $usuario = new Usuario();
    $usuario->setNome($nome);
    $usuario->setSobrenome($sobrenome);
    $usuario->setEmail($email);
    $usuario->setSenha($senha);
    $usuario->setBloqueado($bloqueado);
    $usuario->setDataCriacao($dataCriacao);

    $usuarioDAO = new UsuarioDAO();

    if (!$usuarioDAO->existeEmail($usuario)) {
        if ($usuarioDAO->inserir($usuario)) {
            header('Location: index.php');
        } else {
            header('Location: cadastro.php');
        }
    }
    else{
        header('Location: index.php');
    }
}
