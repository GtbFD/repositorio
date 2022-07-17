<?php

require_once('src/model/Usuario.php');
require_once('src/model/Objeto.php');
require_once('src/model/Ensino.php');

require_once('src/dao/UsuarioDAO.php');
require_once('src/dao/ObjetoDAO.php');
require_once('src/dao/EnsinoDAO.php');

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

//$usuarioDAO = new UsuarioDAO();

//$resposta = $usuarioDAO->inserir($usuario);

//$resposta = $usuarioDAO->listarTodos();

//$resposta = $usuarioDAO->listarPorId(1);

//$resposta = $usuarioDAO->editar($usuario);

//print_r($resposta);

/**
 * Teste CRUD Objeto
 */

$objeto = new Objeto();
$objeto->setId(1);
$objeto->setTitulo("Teste [Editado]");
$objeto->setDescricao("Objeto de teste");
$objeto->setIdUsuario(1);
$objeto->setDataPostagem(date('Y-m-d'));
$objeto->setAssunto("Assunto teste");
$objeto->setFormato("Word");
$objeto->setLinguagem("Brasileira");
$objeto->setUrl("http://teste.com/objetos/objeto_teste.word");

$objetoDAO = new ObjetoDAO();

//$resposta = $objetoDAO->inserir($objeto);

//$resposta = $objetoDAO->listarTodos();

//$resposta = $objetoDAO->listarPorId(1);

//$resposta = $objetoDAO->editar($objeto);

//print_r($resposta);

$ensino = new Ensino();
$ensino->setId(1);
$ensino->setDescricao("Ensino Fundamental I");
$ensino->setTipo(2);

$ensinoDAO = new EnsinoDAO();

//$resposta = $ensinoDAO->inserir($ensino);

//$resposta = $ensinoDAO->listarTodos($ensino);

//$resposta = $ensinoDAO->listarPorId(1);

//$resposta = $ensinoDAO->editar($ensino);

//print_r($resposta);