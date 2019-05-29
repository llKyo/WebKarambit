<?php

class Equipo{
    private $id;
    private $nombre;
    private $logo;
    private $maxIntegrantes;
    

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
     * Get the value of logo
     */ 
    public function getLogo()
    {
        return $this->logo;
    }

    /**
     * Set the value of logo
     *
     * @return  self
     */ 
    public function setLogo($logo)
    {
        $this->logo = $logo;

        return $this;
    }

    /**
     * Get the value of max_integrantes
     */ 
    public function getMax_integrantes()
    {
        return $this->max_integrantes;
    }

    /**
     * Set the value of max_integrantes
     *
     * @return  self
     */ 
    public function setMax_integrantes($max_integrantes)
    {
        $this->max_integrantes = $max_integrantes;

        return $this;
    }
}