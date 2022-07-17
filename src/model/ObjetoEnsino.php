<?php

class ObjetoEnsino
{
    private $id;
    private $idObjeto;
    private $idEnsino;

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
     * Get the value of idObjeto
     */ 
    public function getIdObjeto()
    {
        return $this->idObjeto;
    }

    /**
     * Set the value of idObjeto
     *
     * @return  self
     */ 
    public function setIdObjeto($idObjeto)
    {
        $this->idObjeto = $idObjeto;

        return $this;
    }

    /**
     * Get the value of idEnsino
     */ 
    public function getIdEnsino()
    {
        return $this->idEnsino;
    }

    /**
     * Set the value of idEnsino
     *
     * @return  self
     */ 
    public function setIdEnsino($idEnsino)
    {
        $this->idEnsino = $idEnsino;

        return $this;
    }
}