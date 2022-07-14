<?php

class Objeto
{
    private $id;
    private $titulo;
    private $descricao;
    private $idUsuario;
    private $dataPostagem;
    private $assunto;
    private $formato;
    private $linguagem;
    private $url;

    

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of titulo
     */ 
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Set the value of titulo
     *
     * @return  self
     */ 
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;

        return $this;
    }

    /**
     * Get the value of descricao
     */ 
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * Set the value of descricao
     *
     * @return  self
     */ 
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;

        return $this;
    }

    /**
     * Get the value of idUsuario
     */ 
    public function getIdUsuario()
    {
        return $this->idUsuario;
    }

    /**
     * Set the value of idUsuario
     *
     * @return  self
     */ 
    public function setIdUsuario($idUsuario)
    {
        $this->idUsuario = $idUsuario;

        return $this;
    }

    /**
     * Get the value of dataPostagem
     */ 
    public function getDataPostagem()
    {
        return $this->dataPostagem;
    }

    /**
     * Set the value of dataPostagem
     *
     * @return  self
     */ 
    public function setDataPostagem($dataPostagem)
    {
        $this->dataPostagem = $dataPostagem;

        return $this;
    }

    /**
     * Get the value of assunto
     */ 
    public function getAssunto()
    {
        return $this->assunto;
    }

    /**
     * Set the value of assunto
     *
     * @return  self
     */ 
    public function setAssunto($assunto)
    {
        $this->assunto = $assunto;

        return $this;
    }

    /**
     * Get the value of formato
     */ 
    public function getFormato()
    {
        return $this->formato;
    }

    /**
     * Set the value of formato
     *
     * @return  self
     */ 
    public function setFormato($formato)
    {
        $this->formato = $formato;

        return $this;
    }

    /**
     * Get the value of linguagem
     */ 
    public function getLinguagem()
    {
        return $this->linguagem;
    }

    /**
     * Set the value of linguagem
     *
     * @return  self
     */ 
    public function setLinguagem($linguagem)
    {
        $this->linguagem = $linguagem;

        return $this;
    }

    /**
     * Get the value of url
     */ 
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set the value of url
     *
     * @return  self
     */ 
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }
}