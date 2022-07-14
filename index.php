<?php

require_once('src/model/Usuario.php');
require_once('src/dao/UsuarioDAO.php');

/**
 * Teste CRUD Usuário
 */

$usuario = new Usuario();
$usuario->setId(1);
$usuario->setNome("Gutemberg123");
$usuario->setSobrenome("F. Dantas");
$usuario->setEmail("gutemberg.cz@gmail.com");
$usuario->setSenha("123456");
$usuario->setBloqueado(0);
$usuario->setDataCriacao(date('Y-m-d'));

$usuarioDAO = new UsuarioDAO();

//$resposta = $usuarioDAO->inserir($usuario);

//$resposta = $usuarioDAO->listarTodos();

//$resposta = $usuarioDAO->listarPorId(1);

//$resposta = $usuarioDAO->editar($usuario);

//print_r($resposta);