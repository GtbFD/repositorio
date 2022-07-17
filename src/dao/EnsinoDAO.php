<?php

require_once('src/util/Conexao.php');
require_once('src/model/Ensino.php');

class EnsinoDAO
{
    private $conexao;

    public function __construct()
    {
        $con = new Conexao();
        $this->conexao = $con->obterConexao();
    }

    public function inserir(Ensino $ensino)
    {
        $query = "INSERT INTO ensinos (descricao, tipo) VALUES (?, ?)";
        $stmt = $this->conexao->prepare($query);
        $resposta = $stmt->execute(array($ensino->getDescricao(), $ensino->getTipo()));
        return $resposta;
    }

    public function listarTodos()
    {
        $query = "SELECT * FROM ensinos";
        $stmt = $this->conexao->prepare($query);
        $stmt->execute();
        $resposta = $stmt->fetchAll();

        return $resposta; 
    }

    public function listarPorId($id)
    {
        $query = "SELECT * FROM ensinos WHERE id = ?";
        $stmt = $this->conexao->prepare($query);
        $stmt->execute(array($id));
        $resposta = $stmt->fetchAll();

        return $resposta; 
    }

    public function editar(Ensino $ensino)
    {
        $query = "UPDATE ensinos SET descricao = ?, tipo = ? WHERE id = ?";
        $stmt = $this->conexao->prepare($query);
        $resposta = $stmt->execute(array($ensino->getDescricao(), $ensino->getTipo(),
            $ensino->getId()));
        return $resposta;
    }

    public function excluir($id)
    {
        /*$query = "UPDATE usuarios SET usuarios WHERE id = ?";
        $stmt = $this->conexao->prepare($query);
        $stmt->execute(array($id));
        $resposta = $stmt->fetchAll();

        return $resposta;*/
    }
}