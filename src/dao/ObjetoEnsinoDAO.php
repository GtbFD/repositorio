<?php

require_once('src/util/Conexao.php');
require_once('src/model/ObjetoEnsino.php');


class ObjetoEnsinoDAO
{
    private $conexao;

    public function __construct()
    {
        $con = new Conexao();
        $this->conexao = $con->obterConexao();
    }

    public function inserir(ObjetoEnsino $objetoEnsino)
    {
        $query = "INSERT INTO objeto_ensino (id_objeto, id_ensino) VALUES (?, ?)";
        $stmt = $this->conexao->prepare($query);
        $resposta = $stmt->execute(array($objetoEnsino->getIdObjeto(), 
                $objetoEnsino->getIdEnsino()));
        return $resposta;
    }

    public function listarTodos()
    {
        $query = "SELECT * FROM objeto_ensino";
        $stmt = $this->conexao->prepare($query);
        $stmt->execute();
        $resposta = $stmt->fetchAll();

        return $resposta; 
    }

    public function listarPorId($id)
    {
        $query = "SELECT * FROM objeto_ensino WHERE id = ?";
        $stmt = $this->conexao->prepare($query);
        $stmt->execute(array($id));
        $resposta = $stmt->fetchAll();

        return $resposta; 
    }

    public function editar(ObjetoEnsino $objetoEnsino)
    {
        $query = "UPDATE objeto_ensino SET id_objeto = ?, id_ensino = ? WHERE id = ?";
        $stmt = $this->conexao->prepare($query);
        $resposta = $stmt->execute(array($objetoEnsino->getIdObjeto(), 
                $objetoEnsino->getIdEnsino(), $objetoEnsino->getId()));
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