<?php

class Premio{
    private $id;
    private $recompensa;

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
     * Get the value of recompensa
     */ 
    public function getRecompensa()
    {
        return $this->recompensa;
    }

    /**
     * Set the value of recompensa
     *
     * @return  self
     */ 
    public function setRecompensa($recompensa)
    {
        $this->recompensa = $recompensa;

        return $this;
    }
}