<?php

class Filmes
{
    private $idtitulo;
    private $titulo;
    private $descricao;
    private $ator;
    private $diretor;
    private $imagem;
    private $categoriaIdcategoria;
    
    public function __construct()
    {

    }

    public function buscaFilme()
    {
        $query = "SELECT f.nome_filme AS nomeFilme 
                    FROM filmes.filme f  ";
        $result = mysql_query($query)or die($this->errorHandler($query, mysql_error(), __LINE__, __FILE__));
        return $result;
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
     * Get the value of ator
     */ 
    public function getAtor()
    {
        return $this->ator;
    }

    /**
     * Set the value of ator
     *
     * @return  self
     */ 
    public function setAtor($ator)
    {
        $this->ator = $ator;

        return $this;
    }

    /**
     * Get the value of diretor
     */ 
    public function getDiretor()
    {
        return $this->diretor;
    }

    /**
     * Set the value of diretor
     *
     * @return  self
     */ 
    public function setDiretor($diretor)
    {
        $this->diretor = $diretor;

        return $this;
    }

    /**
     * Get the value of imagem
     */ 
    public function getImagem()
    {
        return $this->imagem;
    }

    /**
     * Set the value of imagem
     *
     * @return  self
     */ 
    public function setImagem($imagem)
    {
        $this->imagem = $imagem;

        return $this;
    }

    /**
     * Get the value of categoriaIdcategoria
     */ 
    public function getCategoriaIdcategoria()
    {
        return $this->categoriaIdcategoria;
    }

    /**
     * Set the value of categoriaIdcategoria
     *
     * @return  self
     */ 
    public function setCategoriaIdcategoria($categoriaIdcategoria)
    {
        $this->categoriaIdcategoria = $categoriaIdcategoria;

        return $this;
    }
}