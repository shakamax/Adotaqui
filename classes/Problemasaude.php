<?php

/**
 * Problemasaude
 */
class Problemasaude
{
    /**
     * @var int
     */
    private $idproblema;

    /**
     * @var string
     */
    private $nome;

    /**
     * Get the value of idproblema
     *
     * @return  int
     */ 
    public function getIdproblema()
    {
        return $this->idproblema;
    }

    /**
     * Set the value of idproblema
     *
     * @param  int  $idproblema
     *
     * @return  self
     */ 
    public function setIdproblema(int $idproblema)
    {
        $this->idproblema = $idproblema;

        return $this;
    }

    /**
     * Get the value of nome
     *
     * @return  string
     */ 
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     *
     * @param  string  $nome
     *
     * @return  self
     */ 
    public function setNome(string $nome)
    {
        $this->nome = $nome;

        return $this;
    }
}
