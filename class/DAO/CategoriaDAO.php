<?php

class Categoria
{
    private $idCategoria;
    private $nome;
    private $status;

    public function __construct()
    {

    }

    public function buscaCategoria($conectaBanco)
    {
        $query = "SELECT c.idcategoria AS idCategoria,
                         c.nome        AS nome,
                         c.status      AS status
                    FROM filme.categoria c";
        $result = mysqli_query($conectaBanco, $query);
        return $result;
    }

    

    /**
     * Get the value of idCategoria
     */ 
    public function getIdCategoria()
    {
        return $this->idCategoria;
    }

    /**
     * Set the value of idCategoria
     *
     * @return  self
     */ 
    public function setIdCategoria($idCategoria)
    {
        $this->idCategoria = $idCategoria;

        return $this;
    }

    /**
     * Get the value of nome
     */ 
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     *
     * @return  self
     */ 
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of status
     */ 
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set the value of status
     *
     * @return  self
     */ 
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }
}