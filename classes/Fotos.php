<?php

/**
 * Fotos
 */
class Fotos
{
    /**
     * @var int
     */
    private $idfotos;

    /**
     * @var string
     */
    private $foto;

    /**
     * @var int
     */
    private $idAnimal;






    /**
     * Get the value of idfotos
     *
     * @return  int
     */ 
    public function getIdfotos()
    {
        return $this->idfotos;
    }

    /**
     * Set the value of idfotos
     *
     * @param  int  $idfotos
     *
     * @return  self
     */ 
    public function setIdfotos(int $idfotos)
    {
        $this->idfotos = $idfotos;

        return $this;
    }

    /**
     * Get the value of foto
     *
     * @return  string
     */ 
    public function getFoto()
    {
        return $this->foto;
    }

    /**
     * Set the value of foto
     *
     * @param  string  $foto
     *
     * @return  self
     */ 
    public function setFoto(string $foto)
    {
        $this->foto = $foto;

        return $this;
    }





    /**
     * Get the value of idAnimal
     *
     * @return  int
     */ 
    public function getIdAnimal()
    {
        return $this->idfotos;
    }

    /**
     * Set the value of idAnimal
     *
     * @param  int  $idAnimal
     *
     * @return  self
     */ 
    public function setIdAnimal(int $idAnimal)
    {
        $this->idAnimal = $idAnimal;

        return $this;
    }



}
