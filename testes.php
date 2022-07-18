<?php

require_once('src/model/Usuario.php');
require_once('src/model/Objeto.php');
require_once('src/model/Ensino.php');
require_once('src/model/ObjetoEnsino.php');

require_once('src/dao/UsuarioDAO.php');
require_once('src/dao/ObjetoDAO.php');
require_once('src/dao/EnsinoDAO.php');
require_once('src/dao/ObjetoEnsinoDAO.php');

/**
 * Teste CRUD Usuário
 */

/*$usuario = new Usuario();
$usuario->setId(1);
$usuario->setNome("Gutemberg123");
$usuario->setSobrenome("F. Dantas");
$usuario->setEmail("gutemberg.cz@gmail.com");
$usuario->setSenha("123456");
$usuario->setBloqueado(0);
$usuario->setDataCriacao(date('Y-m-d'));

$usuarioDAO = new UsuarioDAO();

$resposta = $usuarioDAO->inserir($usuario);

$resposta = $usuarioDAO->listarTodos();

$resposta = $usuarioDAO->listarPorId(1);

$resposta = $usuarioDAO->editar($usuario);

print_r($resposta);*/

/**
 * Teste CRUD Objeto
 */

?>
<!-- O tipo de encoding de dados, enctype, DEVE ser especificado abaixo -->
<!--<form action="testes.php" method="POST" enctype="multipart/form-data">
    Enviar esse arquivo: <input name="userfile" type="file"/>
    <input name="enviar_arquivo" type="submit" value="Enviar arquivo" />
</form>-->
<?php
/*if(isset($_POST['enviar_arquivo']))
{
    $objeto = new Objeto();
    $objeto->setId(1);
    $objeto->setTitulo("Teste [Editado]");
    $objeto->setDescricao("Objeto de teste");
    $objeto->setIdUsuario(1);
    $objeto->setDataPostagem(date('Y-m-d'));
    $objeto->setAssunto("Assunto teste");
    $objeto->setLinguagem("Brasileira");

    $objetoDAO = new ObjetoDAO();

    $resposta = $objetoDAO->inserir($objeto);

    $resposta = $objetoDAO->listarTodos();

    $resposta = $objetoDAO->listarPorId(1);

    $resposta = $objetoDAO->editar($objeto);*/

    //print_r($resposta);
//}

/**
 * Teste CRUD Ensino
 */

/*$ensino = new Ensino();
$ensino->setId(1);
$ensino->setDescricao("Ensino Fundamental I");
$ensino->setTipo(2);

$ensinoDAO = new EnsinoDAO();

$resposta = $ensinoDAO->inserir($ensino);

$resposta = $ensinoDAO->listarTodos($ensino);

$resposta = $ensinoDAO->listarPorId(1);

$resposta = $ensinoDAO->editar($ensino);

print_r($resposta);*/

/**
 * Teste CRUD ObjetoEnsino
 */

/*$objetoEnsino = new ObjetoEnsino();
$objetoEnsino->setId(1);
$objetoEnsino->setIdObjeto(1);
$objetoEnsino->setIdEnsino(2);

$objetoEnsinoDAO = new ObjetoEnsinoDAO();

$resposta = $objetoEnsinoDAO->inserir($objetoEnsino);

$resposta = $objetoEnsinoDAO->listarTodos();

$resposta = $objetoEnsinoDAO->listarPorId(1);

$resposta = $objetoEnsinoDAO->editar($objetoEnsino);

print_r($resposta);*/