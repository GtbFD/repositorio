<?php

require_once('src/util/Conexao.php');
require_once('src/model/Usuario.php');

class UsuarioDAO
{

    private $conexao;

    public function __construct()
    {
        $con = new Conexao();
        $this->conexao = $con->obterConexao();
    }

    public function inserir(Usuario $usuario)
    {
        $query = "INSERT INTO usuarios (nome, sobrenome, email, senha, bloqueado, data_criacao) 
            VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $this->conexao->prepare($query);
        $resposta = $stmt->execute(array($usuario->getNome(), $usuario->getSobrenome(),
            $usuario->getEmail(), $usuario->getSenha(), $usuario->getBloqueado(),
            $usuario->getDataCriacao()));
        return $resposta;
    }

    public function listarTodos()
    {
        $query = "SELECT * FROM usuarios";
        $stmt = $this->conexao->prepare($query);
        $stmt->execute();
        $resposta = $stmt->fetchAll();

        return $resposta; 
    }

    public function listarPorId($id)
    {
        $query = "SELECT * FROM usuarios WHERE id = ?";
        $stmt = $this->conexao->prepare($query);
        $stmt->execute(array($id));
        $resposta = $stmt->fetchAll();

        return $resposta; 
    }

    public function editar(Usuario $usuario)
    {
        $query = "UPDATE usuarios SET nome = ?, sobrenome = ?, email = ?, senha = ?, bloqueado = ?, data_criacao = ? WHERE id = ?";
        $stmt = $this->conexao->prepare($query);
        $resposta = $stmt->execute(array($usuario->getNome(), $usuario->getSobrenome(),
            $usuario->getEmail(), $usuario->getSenha(), $usuario->getBloqueado(),
            $usuario->getDataCriacao(), $usuario->getId()));
        return $resposta;
    }

    public function bloquear($id)
    {
        $query = "UPDATE usuarios SET bloqueado = 1 WHERE id = ?";
        $stmt = $this->conexao->prepare($query);
        $stmt->execute(array($id));
        $resposta = $stmt->fetch();

        return $resposta;
    }

    public function desbloquear($id)
    {
        $query = "UPDATE usuarios SET bloqueado = 0 WHERE id = ?";
        $stmt = $this->conexao->prepare($query);
        $stmt->execute(array($id));
        $resposta = $stmt->fetch();

        return $resposta;
    }
}