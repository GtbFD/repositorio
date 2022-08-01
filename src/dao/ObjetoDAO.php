<?php

require_once('src/util/Conexao.php');
require_once('src/model/Objeto.php');
require_once('src/util/Upload.php');

class ObjetoDAO
{
    private $conexao;

    public function __construct()
    {
        $con = new Conexao();
        $this->conexao = $con->obterConexao();
    }

    public function inserir(Objeto $objeto)
    {
        $query = "INSERT INTO objetos (titulo, descricao, id_usuario, data_postagem, 
            assunto, formato, linguagem, url) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $this->conexao->prepare($query);

        $upload = new Upload();
        $dados = $upload->enviarArquivo();

        $objeto->setFormato($dados['formato']);
        $objeto->setUrl($dados['url']);

        $resposta = $stmt->execute(array($objeto->getTitulo(), $objeto->getDescricao(), 
                $objeto->getIdUsuario(), $objeto->getDataPostagem(), $objeto->getAssunto(), 
                $objeto->getFormato(), $objeto->getLinguagem(), $objeto->getUrl()));
        return $resposta;
    }

    public function listarTodos()
    {
        $query = "SELECT * FROM objetos";
        $stmt = $this->conexao->prepare($query);
        $stmt->execute();
        $resposta = $stmt->fetchAll();

        return $resposta; 
    }

    public function quantidadeObjetosAtivos()
    {
        $query = "SELECT COUNT(id) FROM objetos WHERE ativo = 1";
        $stmt = $this->conexao->prepare($query);
        $stmt->execute();
        $resposta = $stmt->fetch();

        return $resposta;
    }

    public function quantidadeObjetosInativos()
    {
        $query = "SELECT COUNT(id) FROM objetos WHERE ativo = 0";
        $stmt = $this->conexao->prepare($query);
        $stmt->execute();
        $resposta = $stmt->fetch();

        return $resposta;
    }

    public function listarPorId($id)
    {
        $query = "SELECT * FROM objetos WHERE id = ?";
        $stmt = $this->conexao->prepare($query);
        $stmt->execute(array($id));
        $resposta = $stmt->fetchAll();

        return $resposta; 
    }

    public function listarPorData()
    {
        $query = "SELECT o.id, o.titulo, o.descricao, o.id_usuario, 
                  o.data_postagem, o.assunto, o.formato, o.linguagem, 
                  o.url, o.ativo, e.id, e.descricao, e.tipo, u.nome, u.sobrenome 
                  FROM objetos AS o 
                  INNER JOIN objeto_ensino AS oe 
                    ON o.id = oe.id_objeto 
                  INNER JOIN ensinos AS e 
                    ON oe.id_ensino = e.id
                  INNER JOIN usuarios AS u
                    ON o.id_usuario = u.id 
                  ORDER BY data_postagem DESC
                  LIMIT 5";
        $stmt = $this->conexao->prepare($query);
        $stmt->execute();
        $resposta = $stmt->fetchAll();

        return $resposta;
    }

    public function editar(Objeto $objeto)
    {
        $query = "UPDATE objetos SET titulo = ?, descricao = ?, assunto = ?, formato = ?,
                linguagem = ?, url = ? WHERE id = ?";
        $stmt = $this->conexao->prepare($query);
        $resposta = $stmt->execute(array($objeto->getTitulo(), $objeto->getDescricao(),
                $objeto->getAssunto(), $objeto->getFormato(), $objeto->getLinguagem(),
                $objeto->getUrl(), $objeto->getId()));
        return $resposta;
    }

    public function excluir($id)
    {
        $query = "UPDATE objetos SET ativo = 0 WHERE id = ?";
        $stmt = $this->conexao->prepare($query);
        $stmt->execute(array($id));
        $resposta = $stmt->fetch();

        return $resposta;
    }

    public function recuperarExclusao($id)
    {
        $query = "UPDATE objetos SET ativo = 1 WHERE id = ?";
        $stmt = $this->conexao->prepare($query);
        $stmt->execute(array($id));
        $resposta = $stmt->fetch();

        return $resposta;
    }
}