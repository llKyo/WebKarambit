<?php

class Ranking{
    private $id;
    private $nombre;
    private $temporada;


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
     * Get the value of nombre
     */ 
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set the value of nombre
     *
     * @return  self
     */ 
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get the value of temporada
     */ 
    public function getTemporada()
    {
        return $this->temporada;
    }

    /**
     * Set the value of temporada
     *
     * @return  self
     */ 
    public function setTemporada($temporada)
    {
        $this->temporada = $temporada;

        return $this;
    }
}