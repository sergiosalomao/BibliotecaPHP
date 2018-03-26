<?php

Class Livro {

    private $id;
    private $titulo;
    private $descricao;
    private $statusLeitura;
    private $numPaginas;
    private $idCategoria;
    private $capa;

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
     * Get the value of statusLeitura
     */ 
    public function getStatusLeitura()
    {
        return $this->statusLeitura;
    }

    /**
     * Set the value of statusLeitura
     *
     * @return  self
     */ 
    public function setStatusLeitura($statusLeitura)
    {
        $this->statusLeitura = $statusLeitura;

        return $this;
    }

    /**
     * Get the value of numPaginas
     */ 
    public function getNumPaginas()
    {
        return $this->numPaginas;
    }

    /**
     * Set the value of numPaginas
     *
     * @return  self
     */ 
    public function setNumPaginas($numPaginas)
    {
        $this->numPaginas = $numPaginas;

        return $this;
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
     * Get the value of capa
     */ 
    public function getCapa()
    {
        return $this->capa;
    }

    /**
     * Set the value of capa
     *
     * @return  self
     */ 
    public function setCapa($capa)
    {
        $this->capa = $capa;

        return $this;
    }
}